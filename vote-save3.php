<?php 
include("conn.php");
$responseArr = array(
	"code"=>200,
	"data"=>null,
	"msg"=>"数据获取成功"
);
$sql = "select name,position,pic,votenum from vote";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
	$stdentlist = array();
	while ($row = mysqli_fetch_assoc($result)){
		$stdentlist[] = $row;
	}
		// var_dump($stdentlist);
	$responseArr["data"] = $stdentlist;
	}else{
		$responseArr["code"] = 207;
		$responseArr["msg"] = "暂无记录";
	}
die(json_encode($responseArr));
?>