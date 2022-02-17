<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $_LANG['忘记密码'];?> <?php echo $conf['title2'];?></title>

<link href="<?php echo WWW;?>View/hy_user/css/login.css" rel="stylesheet">
<link href="<?php echo WWW;?>public/css/alert.css" rel="stylesheet">
<!--[if (gte IE 9)|!(IE)]><!-->
	<script src="<?php echo WWW;?>public/js/jquery.min.js"></script>
	<!--<![endif]-->
	<!--[if lte IE 8 ]>
	<script src="<?php echo WWW;?>public/js/jquery1.11.3.min.js"></script>
	<![endif]-->
<script src="<?php echo WWW;?>public/js/sweet-alert.min.js"></script>

</head>
<body>

	<div class="main">
		<div class="login-form">
			<h1 style="padding-top:30px"><?php echo $_LANG['忘记密码'];?></h1>

			<form id="form">
				
				<label for="email"><?php echo $_LANG['邮箱'];?></label>
				<input type="text" id="email" name="email" class="text" value="" placeholder="<?php echo $_LANG['注册所填邮箱'];?>"/>
				<label for="code"><?php echo $_LANG['邮箱验证码'];?> <small><button onclick="send_code(this)" href="javascript:void(0)" style="color: #46699E;border: none;background: transparent;font-weight: bold;"><?php echo $_LANG['点击获取验证码'];?></button></small></label>
				<input type="text" id="code" name="code" class="text" value="" placeholder="<?php echo $_LANG['邮箱验证码'];?>"/>
				<label for="pass"><?php echo $_LANG['新密码'];?></label>
				<input type="password" name="pass1" value=""/>
				<label for="pass"><?php echo $_LANG['确认密码'];?></label>
				<input type="password" name="pass2" value="" />
				
				<div class="submit">
					<input id="repass" type="submit" value="<?php echo $_LANG['提交修改'];?>" >
				</div>
				

				<p><a href="<?php HYBBS_URL('user','login') ?>"><?php echo $_LANG['返回登录'];?></a></p>
			</form>
		</div>
	</div>
<script>
var send_b = false;
function send_code(obj){
	// if(send_b)
	// 	return ;
	 var _this = $(obj);
	// send_b=true;
	
	
	_this.attr("disabled","disabled").css("color","#757575").text('正在发送中...');
	
	$.ajax({
		url: '<?php HYBBS_URL('user','recode') ?>',
		type:'POST',
		cache: false,
		data:{
			email:$('#email').val(),
			
		},
		dataType: 'json'
	}).then(function(e) {
		
		_this.removeAttr("disabled","disabled").css("color","#46699E").text('<?php echo $_LANG['点击获取验证码'];?>');
		
		if(e.error){
			swal("<?php echo $_LANG['发送成功'];?>","<?php echo $_LANG['请到你的'];?>"+$("#email").val()+"<?php echo $_LANG['查看验证码'];?>,<?php echo $_LANG['可能垃圾邮件'];?>",'success');
		}else{
			swal('<?php echo $_LANG['发送失败'];?>',e.info,'error');
		}
		
	}, function() {
		_this.removeAttr("disabled","disabled").css("color","#46699E").text('<?php echo $_LANG['点击获取验证码'];?>');
	 swal("<?php echo $_LANG['发送失败'];?>",'<?php echo $_LANG['服务器繁忙'];?>');
	});
    
}
$(function(){
    $('#form').submit(function() {return false;});
    $("#repass").click(function(){
        var postdata = $('#form').serialize();
        
        $.post("<?php HYBBS_URL('user','recode2') ?>", postdata,  function(e){
        	
            if(e.error){
                swal("<?php echo $_LANG['修改成功'];?>","<?php echo $_LANG['密码修改成功'];?>",'success');
            }else{
            	swal("<?php echo $_LANG['修改失败'];?>", e.info, "error");
            }
            
        },'json');
        
    })



});
</script>
</body>
</html>
