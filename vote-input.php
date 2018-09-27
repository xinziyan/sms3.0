	<?php include("head.php")?>
	<div class="sui-container">
		<div class="sui-layout">
  		<div class="sidebar">
  		<!-- 左菜单 -->
			<?php include("menuleft.php")?>
  		</div>
  		<div class="content">
  			<p class="sui-text-xxlarge">增加候选人</p>
  			<form id="form1" method="post" class="sui-form form-horizontal sui-validate" enctype="multipart/form-data">
  			<div class="control-group">
    			<label class="control-label" for="inputEmail">活动名称:</label>
   				 <div class="controls">
     				 <input id="huodongnama" name="huodongnama" class="input-large input-fat" type="text" value="拉姆*查兰管理实践值最受关注奖" readonly= "true">
   				 </div>
 			  </div>
 			  <div class="control-group">
          <label class="control-label" for="inputEmail">姓名:</label>
           <div class="controls">
             <input id="names" name="names" class="input-large input-fat" type="text" placeholder="输入姓名">
           </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">照片：</label>
           <div class="controls">
             <input type="file" name="file" />
           </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">职位:</label>
           <div class="controls">
             <input id="zhiwei" name="zhiwei" class="input-large input-fat" type="text" placeholder="输入职位">
           </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">个人简历：</label>
           <div class="controls">
             <textarea name="gerenjianli" id="" cols="30" rows="5"></textarea>
           </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">案例简介：</label>
           <div class="controls">
             <textarea name="anlijianjie" id="" cols="30" rows="5"></textarea>
           </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">案例连接:</label>
           <div class="controls">
             <input id="anlilanjie" name="anlilanjie" class="input-large input-fat" type="text" placeholder="输入案例连接">
           </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">票数:</label>
           <div class="controls">
             <input id="piaoshu" name="piaoshu" class="input-large input-fat" type="text" placeholder="输入票数">
           </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="inputEmail">有效状态:</label>
           <div class="controls">
             <select id="duoxuan" name="duoxuan">
              <option value='0'>禁用</option>
              <option value='1'>正常</option>
             </select>
           </div>
        </div>
 			  <div class="control-group">
   				<label class="control-label"></label>
   				<div class="controls">
            <input type="button" value="取消" name="" class="sui-btn btn-large btn-primary">
   					<input type="submit" value="提交" name="" class="sui-btn btn-large btn-primary" id="tijiao">
   				</div>
 			  </div>
  		</form>
  	</div>
</div>
</div>
<script type="text/javascript" src="http://g.alicdn.com/sj/lib/jquery.min.js"></script>
<script type="text/javascript" src="http://g.alicdn.com/sj/dpl/1.5.1/js/sui.min.js"></script>
<script>
  $(function(){
  	$("#piaoshu").on("click",function(){
  		console.log($("#form1").serialize());
  	});
    $('#tijiao').on("click",function(){
      $.ajax({
        url  : "vote-save.php",
        type : "POST",
        data : $("#form1").serialize(),
        dataType:"text",
        beforeSend:function(){
          //发送前调用此函数。一般在此编写检测代码或者loading
        },
        complete : function(XMLHttpRequest,textStatus){
          //请求完成后调用此函数(请求成功或失败都调用)
        },
        success: function(data,textStatus){
          //请求成功后调用此函数
          // $("#chongfu").html(data.data);
          // if (data.code == 200) {
          //       alert(data.data);
          //       window.location.href = "yonghu-denglu.php";
          //   }
          //   if (data.code == 207) {
          //       alert(data.data);
          //   }
          console.log(data);
        }, 
        error : function(XMLHttpRequest,textStatus,errorThrown){
          //请求失败后调用此函数
          console.log("失败原因" + errorThrown);
        }

      })
    })
  })
</script>