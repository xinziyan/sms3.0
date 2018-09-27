<?php
include("conn.php");
	$names = empty($_REQUEST["names"])?"null":$_REQUEST["names"];
	$zhiwei = empty($_REQUEST["zhiwei"])?"null":$_REQUEST["zhiwei"];
	$gerenjianli = empty($_REQUEST["gerenjianli"])?"null":$_REQUEST["gerenjianli"];
	$anlijianjie = empty($_REQUEST["anlijianjie"])?"null":$_REQUEST["anlijianjie"];
	$anlilanjie = empty($_REQUEST["anlilanjie"])?"null":$_REQUEST["anlilanjie"];
	$piaoshu = empty($_REQUEST["piaoshu"])?"null":$_REQUEST["piaoshu"];
	$duoxuan = $_REQUEST["duoxuan"];
	$time = time();
	//如果是录入页面提交,那么$action等于add;
	if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 10241000)){
  if ($_FILES["file"]["error"] > 0){
    echo "错误: " . $_FILES["file"]["error"] . "<br />";
    }else{
	 $filename = "upload/".date('YmdHis')."ccc";
	//move_uploaded_file()移动临时文件到上传的文件存放的位置,参数1.临时文件的路径, 参数2.存放的路径
	move_uploaded_file($_FILES["file"]["tmp_name"],$filename);  
  }
}else {
  echo "无效文件，文件格式或大小超出范围";
}
	$sql1 = "insert into vote(name,summary,caseshow,position,pic,url,votenum,status) value('$names','$gerenjianli','$anlijianjie','$zhiwei','$filename','$anlilanjie','$piaoshu','$duoxuan')";
	echo $sql1;
	$result = mysqli_query($conn,$sql1);
	//输出数据
	// var_dump($result);
	if ($result) {
		echo "ok";
	}else{
		echo "失败";
	}
//关闭数据库
mysqli_close($conn);
?>