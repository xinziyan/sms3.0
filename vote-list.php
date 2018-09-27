	<?php include("head.php")?>
	<div class="sui-container">
		<div class="sui-layout">
  		<div class="sidebar">
  		<!-- 左菜单 -->
			<?php include("menuleft.php")?>
  		</div>
  		<div class="content">
  			<p class="sui-text-xxlarge" >学生列表</p>
  			<table class="sui-table table-primary" id="studentlist">
            <tr><th>id</th><th>姓名</th><th>职位</th><th>得票数</th><th>管理</th></tr>
          </tahead>
        </table>
  		</div>
</div>
	</div>
<script type="text/javascript" src="http://g.alicdn.com/sj/lib/jquery.min.js"></script>
<script type="text/javascript" src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
<script>
window.onload = function(){
  $.ajax({
    url:"vote-save2.php",
    type    : "POST",
    dataType: "json",
    beforeSend : function(XMLHttpRequest){
     
    },
    success : function(data,textStatus){
      console.log(data);
      if(data.code == 200){
        var str = ""
        for (var i=0; i < data.data.length; i++) { 
          str += "<tr>";
          for(var key in data.data[i]) { 
            str += "<td>" + data.data[i][key] + "</td>";
          }
          var c = data.data[i].id;
          str += "<td><a class='sui-btn btn-small btn-warning' href='xuesheng-update?kid=" + c + "'>修改</a>&nbsp;&nbsp;&nbsp;<a class='sui-btn btn-small btn-warning' href='xuesheng-del.php?kid=" + c + "'>删除</a></td></tr>";
        }
          $("#studentlist").html( "<tr><th>id</th><th>姓名</th><th>职位</th><th>得票数</th><th>管理</th></tr>" + str );
      }
    },
    error   : function(XMLHttpRequest,textStatus,errorThrown){
      // 请求失败后调用此函数
      console.log("失败原因：" + errorThrown);
    }
  });
}
</script>