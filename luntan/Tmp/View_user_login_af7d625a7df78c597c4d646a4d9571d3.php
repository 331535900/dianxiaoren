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


<section class="body" id="user_body">
<div>	  
    <form id="user-login-form" method="post" onsubmit="return user_login()">
        <div class="hy-box" style="margin-top:20px"> 
        
	    <div class="hy-input-box">
	        <input type="text" name="user" placeholder="<?php echo $_LANG['请输入用户名'];?>">
	    </div>
        
	    <div class="hy-input-box">
	        <input type="password" name="pass" placeholder="<?php echo $_LANG['请输入密码'];?>">
	    </div>
        
        </div>
        
    	<div style="padding:10px;    text-align: center;">
    		<button id="login" type="submit" class="id-login hy-btn hy-btn-danger hy-btn-block" style="padding: 8px 0;"><?php echo $_LANG['登录'];?></button>
    		<a href="<?php HYBBS_URL('user','add') ?>"  ajax="true" pos="right" rgb="#f1f4f9"  type="button" class="hy-btn hy-btn-link" style="color: #a2a2a2;">
                <?php echo $_LANG['注册新账号'];?>
            </a>
            <a href="<?php HYBBS_URL('user','repass') ?>"  ajax="true" pos="right" rgb="#f1f4f9" type="button" class="hy-btn hy-btn-link" style="color: #a2a2a2;"><?php echo $_LANG['忘记密码'];?>?</a>
            <hr style="
        border-top: 1px solid #d4d4d4;
        margin: 10px 0;">
    <?php if (is_plugin_on('hy_qq_login')): ?>
            <a href="<?php HYBBS_URL('user','qqlogin') ?>" class="icon icon-qq" style="
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: inline-block;
        font-size: 40px;
        background: #FFF;
        padding: 12px 12px 12px 12px;
        color: #3cf;
        border: solid 1px #DDD;
        <?php if (is_plugin_on('hy_weibo_login')): ?>
            margin-right: 40px;
           <?php endif ?>
    "></a>
    <?php endif ?>
    <?php if (is_plugin_on('hy_weibo_login')): ?>
            <a href="<?php HYBBS_URL('user','weibologin') ?>" class="icon icon-weibo" style="
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        display: inline-block;
        font-size: 40px;
        background: #FFF;
        padding: 12px 12px 12px 12px;
        color: #f33;
        border: solid 1px #DDD;
    "></a>
    <?php endif ?>
        <div style="height:40px"></div>
    	</div>
    </form>
</div>
</section>

<script>
function user_login(){
    var postdata = $('#user-login-form').serialize();
    $(".id-login").attr('disabled','disabled').text('正在登录中...');
    
    $.ajax({
        url:"<?php HYBBS_URL('user','login') ?>",
        type:'post',
        data:postdata,
        dataType:'json',
        success:function(e){
            
            $(".id-login").removeAttr('disabled').text('<?php echo $_LANG['登录'];?>');
            if(e.error){
                if(e.url !='')
                    window.location.href=e.url;
                else
                    window.location.href="<?php echo WWW;?>";
            }else{
                $.hy.warning(e.info);
            }
            
        },
        error:function(e){
            
            $(".id-login").removeAttr('disabled').text('<?php echo $_LANG['登录'];?>');
        }
    });
    
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