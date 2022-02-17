<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html>
<head lang="zh-cn">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo $conf['description'];?>">
  <meta name="keywords" content="<?php echo $conf['keywords'];?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?php echo $title;?><?php echo $conf['title2'];?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="<?php echo WWW;?>favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="<?php echo WWW;?>favicon.ico">
  <meta name="apple-mobile-web-app-title" content="HYUI"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  
  
    
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="email=no">

  
  <script src="<?php echo WWW;?>public/js/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo WWW;?>public/css/public.css?ver=<?php echo get_theme_version('hy_moblie');?>">
  <link rel="stylesheet" href="<?php echo WWW;?>hyui/ui.css?var=<?php echo HYBBS_V;?>"/>
  <link rel="stylesheet" href="<?php echo WWW;?>hyui/style.css?var=<?php echo HYBBS_V;?>"/>
  <link rel="stylesheet" href="<?php echo WWW;?>View/hy_moblie/app.css?var=2.4"/>
  
  <script>
  var www = "<?php echo WWW;?><?php echo RE;?>";
  var WWW = "<?php echo WWW;?>";
  var exp = "<?php echo EXP;?>";
  var action_name = "<?php echo ACTION_NAME;?>";
  var method_name = "<?php echo METHOD_NAME;?>";
  <?php if (IS_LOGIN): ?>
  window.hy_user = "<?php echo NOW_USER;?>";
  window.hy_avatar = "<?php echo $user['avatar']['a'];?>";
  <?php else: ?>
  window.hy_user = '';
  window.hy_avatar = '';
  <?php endif ?>
  
  </script>
  
  <script src="<?php echo WWW;?>hyui/hy.js?var=<?php echo HYBBS_V;?>"></script>
  <script src="<?php echo WWW;?>View/hy_moblie/app.js?var=2.4"></script>
  
  <script src="<?php echo WWW;?>public/js/app.js?var=<?php echo HYBBS_V;?>"></script>
  <link href="<?php echo WWW;?>public/css/alert.css?var=<?php echo HYBBS_V;?>" rel="stylesheet">
  
  
</head>
<body hide_size="0">

<header class="hy-header hy-fix-t">

<a onclick="url_back(true)" class="hy-header-nav hy-header-left icon icon-chevron-small-left" ></a>

<h1 class="hy-header-title"><?php echo $title;?></h1>



</header>


<section class="body" id="user_repass_body">
<div>
	<form id="user-repass-form" method="post" onsubmit="return user_repass()">
		<div class="hy-box" style="margin-top:20px">
			
		    <div class="hy-input-box">
		        <input type="text" id="email" name="email" placeholder="<?php echo $_LANG['你注册账号所填的邮箱'];?>">
		    </div>
		    
		    <div class="hy-input-box">
			<a class="hy-btn hy-btn-success" onclick="send_code(this)" href="javascript:void(0)" style="color: ;"><?php echo $_LANG['点击获取验证码'];?></a>
			</div>
		    <div class="hy-input-box">
		        <input type="text" id="code" name="code" placeholder="<?php echo $_LANG['你邮箱接收到的验证码'];?>">
		    </div>
		    
		    <div class="hy-input-box">
		        <input type="password" name="pass1" placeholder="<?php echo $_LANG['更改密码'];?>">
		    </div>
		    
		    <div class="hy-input-box">
		        <input type="password" name="pass2" placeholder="<?php echo $_LANG['确认密码'];?>">
		    </div>
		    
		</div>
		
		<div style="padding:10px;    text-align: center;">
			<button id="repass" type="submit" class="hy-btn hy-btn-danger hy-btn-block" style="padding: 8px 0;"><?php echo $_LANG['修改密码提交'];?></button>
			<a href="<?php HYBBS_URL('user','login') ?>" ajax="true" pos="right" rgb="#f1f4f9" type="button" class="hy-btn hy-btn-link" style="color: #a2a2a2;">
	                    <?php echo $_LANG['返回登录'];?>
	        </a>
	        
		</div>
		<div style="height:40px"></div>
	</form>
</div>
</section>
<script>
var send_b = false;
function send_code(obj){
	// if(send_b)
	// 	return ;
	 var _this = $(obj);
	// send_b=true;
	
	
	//_this.attr("disabled","disabled");
	//_this.css("color","#757575");
	$.ajax({
		url: '<?php HYBBS_URL('user','recode') ?>',
		type:"POST",
		cache: false,
		data:{
			email:$("#email").val(),
			
		},
		dataType: 'json'
	}).then(function(e) {
		
		if(e.error){
			swal("<?php echo $_LANG['发送成功'];?>","<?php echo $_LANG['请到你的'];?>"+$("#email").val()+"<?php echo $_LANG['找回密码提示语'];?>",'success');
		}else{
			swal('<?php echo $_LANG['发送失败'];?>',e.info,'error');
		}
		
	}, function() {
	 swal("<?php echo $_LANG['发送失败'];?>",'<?php echo $_LANG['服务器繁忙'];?>');
	});
    
}
function user_repass(){
	var postdata = $('#user-repass-form').serialize();
    
    $.post("<?php HYBBS_URL('user','recode2') ?>", postdata,  function(e){
    	
        if(e.error){
            swal("<?php echo $_LANG['修改成功'];?>","<?php echo $_LANG['密码修改成功提示'];?>",'success');
        }else{
        	swal("<?php echo $_LANG['修改失败'];?>", e.info, "error");
        }
        
    },'json');
    
	return false;
}
</script>
<?php if (!IS_AJAX): ?>
<style type="text/css">
    body{
        background: rgb(241, 244, 249);
    }
</style>
<?php endif ?>

</body>
</html>