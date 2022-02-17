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

<a href="<?php echo WWW;?>" class="hy-header-nav hy-header-left icon icon-chevron-small-left" ></a>

<h1 class="hy-header-title"><?php echo $data['user'];?></h1>



</header>

<style type="text/css">
	body{
		background: #f1f4f9;
	}
</style>

<style type="text/css">
	body{
		background: #f1f4f9;
	}
</style>
<section class="body" style="overflow:auto" onscroll="gd_b(this)">
	
	<div class="hy-box user-index-list" >
	
		<img src="<?php echo WWW;?><?php echo $user['avatar']['c'];?>">
		<div class="user">
			<?php echo NOW_USER;?>
		</div>
		<div class="upavatar">
			<form class="form-horizontal" action="<?php HYBBS_URL('user','ava'); ?>" method="post" enctype="multipart/form-data">
			<input type="file" class="icon icon-image" style="outline: 0;border: none;width: 26px;height: 22px;" onchange="$(this).parent().submit();" name="photo">
			</form>
		</div>
		
	</div>

	<div class="hy-list">
	
	    <a href="<?php HYBBS_URL('my',$user['user']); ?>">
	        <span class="icon icon-user"></span>
	        <span class="title"><?php echo $_LANG['个人中心'];?></span>
	        <span class="icon icon-chevron-right"></span>
	    </a>
	    
	    <a href="javascript:;">
	        <span class="icon icon-key"></span>
	        <span class="title"><?php echo $_LANG['更换密码'];?></span>
	        <span class="icon icon-chevron-right"></span>
	    </a>
	    
	    
	</div>
	<div class="hy-box" style="margin-top:20px">
	
		<?php if (BBSCONF('on_edit_user')): ?>
		<form action="<?php HYBBS_URL('user','edit'); ?>" class="form-horizontal" role="form" method="post">
			<input type="hidden" name="gn" value="edit_username">
			<div class="hy-input-box">
				<h3><?php echo $_LANG['username'];?></h3>
			</div>
			<div class="hy-input-box">
				<input type="text" name="username" value="<?php echo $data['user'];?>" placeholder="<?php echo $_LANG['请输入用户名'];?>">
			</div>
			<div class="hy-input-box">
				<button type="submit" class="hy-btn hy-btn-danger hy-btn-block" style="padding: 8px 0;"><?php echo $_LANG['修改'];?></button>
			</div>
		</form>
		<?php endif ?>
		<form action="<?php HYBBS_URL('user','edit'); ?>" class="form-horizontal" role="form" method="post">
		<input type="hidden" name="gn" value="ps">
		
			<div class="hy-input-box">
				<h3><?php echo $_LANG['个性签名'];?></h3>
			</div>
			
		    <div class="hy-input-box">
		        <input type="text" name="ps" value="<?php echo $data['ps'];?>" placeholder="在此输入">
		    </div>
		   
		    <div class="hy-input-box">
		    <button type="submit" class="hy-btn hy-btn-danger hy-btn-block" style="padding: 8px 0;"><?php echo $_LANG['修改'];?></button>
		    </div>
		    
	    </form>
	</div>
	
	<div class="hy-box" style="margin-top:20px">
		<form class="form-horizontal" action="<?php HYBBS_URL('user','edit'); ?>" method="post">
		<input type="hidden" name="gn" value="pass">
		
			<div class="hy-input-box">
				<h3><?php echo $_LANG['修改密码'];?></h3>
			</div>
			<div class="hy-input-box">
		        <input type="text" name="pass0" placeholder="<?php echo $_LANG['旧密码'];?>">
		    </div>
			
		    <div class="hy-input-box">
		        <input type="password" name="pass1" placeholder="<?php echo $_LANG['新密码'];?>">
		    </div>
		    
		    <div class="hy-input-box">
		        <input type="password" name="pass2" placeholder="<?php echo $_LANG['确认新密码'];?>">
		    </div>
		    
		    <div class="hy-input-box">
		    <button type="submit" class="hy-btn hy-btn-danger hy-btn-block" style="padding: 8px 0;"><?php echo $_LANG['提交修改密码'];?></button>
		    </div>
		   
	    </form>
	</div>
	

</section>

</body>
</html>