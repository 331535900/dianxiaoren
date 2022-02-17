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

<a class="hy-header-nav hy-header-left icon icon-menu" onclick="$.hy.canvas_show('left')"></a>

<h1 class="hy-header-title"><?php echo $_LANG['板块'];?></h1>

<a class="hy-header-nav hy-header-right icon icon-pencil2" href="<?php if (IS_LOGIN): ?><?php HYBBS_URL('post') ?><?php else: ?><?php HYBBS_URL('user','login') ?><?php endif ?>" ajax="true" pos="right" ></a>

</header>


<div class="hy-canvas-left" style="overflow: hidden;">
	<div id="iframe-forum-box">
    	<div id="iframe-forum-top">
    	
			<a href="<?php echo WWW;?>">
				<img class="logo" src="<?php echo WWW;?>View/hy_moblie/logo.png" >
		    </a>
			<div>
				<?php if (!IS_LOGIN): ?>
				<div class="hy-btn-group">
					<a href="<?php HYBBS_URL('user','login') ?>" ajax="true" pos="right" rgb="#f1f4f9" class="hy-btn hy-btn-sblue hy-btn-xs"><?php echo $_LANG['登录'];?></a>
					<a href="<?php HYBBS_URL('user','add') ?>" ajax="true" pos="right" rgb="#f1f4f9" class="hy-btn hy-btn-xs"><?php echo $_LANG['注册'];?></a>
					
				</div>
				<?php else: ?>
				<img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" width="100" height="100" class="img-circle hy-btn-group">
				<div class="info-list">
				
					<span><?php echo $_LANG['关注'];?> <i><?php echo $user['follow'];?></i></span>
					<span><?php echo $_LANG['粉丝'];?> <i><?php echo $user['fans'];?></i></span>
					<span><?php echo $_LANG['金币'];?> <i><?php echo $user['gold'];?></i></span>
					
				</div>
				<div class="hy-btn-group" style="margin-top:10px">
				
					<a href="<?php HYBBS_URL('my',$user['user']); ?>"  class="hy-btn hy-btn-warning hy-btn-xs"><?php echo $_LANG['空间'];?></a>
					<a href="javascript:void(0);" class="hy-btn hy-btn-danger hy-btn-xs" onclick="tog_friend_box()"><?php echo $_LANG['好友'];?></a>
				
				</div>
				<?php endif ?>
			</div>
		</div>
		<div class="hy-list iframe_forum" style="overflow-y: auto;">
			<div>
		    <?php foreach ($forum as $key => $v): ?>
		    
		    <a hide_menu="true" iframe="true" ajax="true" href="<?php HYBBS_URL('forum',$v['id']); ?>" <?php if (isset($fid)): ?><?php if ($fid==$v['id']): ?>class="active"<?php endif ?><?php endif ?>> 
		        <img src="<?php echo WWW;?>upload/forum<?php echo $key;?>.png" width="20" height="20" style="margin-right:10px" onerror="this.src='<?php echo WWW;?>upload/de.png'">
		        <span class="title"><?php echo $v['name'];?></span>
		        <span class="icon icon-chevron-right"></span>
		    </a>
		    
		    <?php endforeach ?>
		    </div>
		</div>

	</div>
</div>
<section class="body"  id="index_body" style="">

	
	<?php 
	$forum_group = M('Forum_group')->read_all_cache();
	?>
	<div class="wrap-box forum" style="margin-bottom:10px;overflow-x: hidden;">
		<?php $has_none = true; ?>
		<ul>
			<?php foreach ($forum as $key => $v): ?>
		        <?php $has = false; ?>
		        <?php foreach ($forum_group as $vv): ?>
		            
		            <?php if ($v['fgid'] == $vv['id']): ?>
		                <?php $has = true;break; ?>
		            <?php endif ?>
		            
		        <?php endforeach ?>
		        <?php if (!$has): ?>
		        <?php $has_none = false; ?>
				<li> 
					<a iframe="true" ajax="true"  href="<?php HYBBS_URL('forum',$v['id']); ?>">
		            	<i fid="<?php echo $v['id'];?>"> 
		            		<img src="<?php echo WWW;?>upload/forum<?php echo $key;?>.png" onerror="this.src='<?php echo WWW;?>upload/de.png'" align="left" alt="">
			            </i> 
			            <strong><?php echo $v['name'];?></strong>
			            
		            </a>
	            </li>
	            <?php endif ?>
		    <?php endforeach ?>
        </ul>
        <?php if (!$has_none): ?><script type="text/javascript">$('#none-forum').show()</script><?php endif ?>
	</div>
	
	<?php foreach ($forum_group as $v): ?>
	<div id="" class="wrap-box forum" style="margin-bottom:10px">
		<h3><?php echo $v['name'];?></h3>
		<ul>
			<?php foreach ($forum as $key => $vv): ?>
			<?php if ($vv['fgid'] == $v['id']): ?>
			<li> 
				<a iframe="true" ajax="true"  href="<?php HYBBS_URL('forum',$vv['id']); ?>">
	            	<i> 
	            		<img src="<?php echo WWW;?>upload/forum<?php echo $key;?>.png" onerror="this.src='<?php echo WWW;?>upload/de.png'" align="left" alt="">
		            </i> 
		            <strong><?php echo $vv['name'];?></strong>
		            
	            </a>
            </li>
            <?php endif ?>
            <?php endforeach ?>
        </ul>
	</div>
	<?php endforeach ?>
	
</section>

<div class="hy-fix-b hy-bo-t hy-footer-nav">
    <!---->
    <a href="<?php echo WWW;?>" iframe="true" ajax="true"  <?php if (ACTION_NAME=='Index' || ACTION_NAME=='New' || ACTION_NAME=='Btime'): ?> class="a"<?php endif ?>>
        <span class="icon icon-yahoo2"></span><?php echo $_LANG['论坛'];?>
    </a>
    <!---->
    <a href="<?php HYBBS_URL('forum') ?>" iframe="true" ajax="true"  <?php if (ACTION_NAME=='Forum'): ?> class="a"<?php endif ?>>
        <span class="icon icon-grid2"></span><?php echo $_LANG['板块'];?>
    </a>
    
    <a class="" <?php if (IS_LOGIN): ?>href="<?php HYBBS_URL('post') ?>"<?php else: ?>href="<?php HYBBS_URL('user','login') ?>" <?php endif ?>ajax="true" pos="right" rgb="#f1f4f9" style="    position: relative;display: block;top: -18px;">
        <span class="hy-footer-c icon icon-plus" style="display: inline-block;    box-shadow: 0px 0px 1px #496676;"></span>
    </a>
    
    <a href="<?php if (IS_LOGIN): ?>javascript:void(0);<?php else: ?><?php HYBBS_URL('user','login') ?><?php endif ?>" <?php if (IS_LOGIN): ?>onclick="tog_friend_box()"<?php else: ?> ajax="true" pos="right" rgb="#f1f4f9"<?php endif ?>>
        <span class="icon icon-users" ></span><?php echo $_LANG['好友'];?><?php if (IS_LOGIN): ?><?php if ($user['mess']): ?><i id="hy-mess">(<em class="hy-font-warning"><?php echo $user['mess'];?></em>)</i><?php endif ?><?php endif ?>
    </a>
    
    <a <?php if (!IS_LOGIN): ?>onclick="$.hy.canvas_show('left')"<?php else: ?>href="<?php HYBBS_URL('my',$user['user']); ?>"<?php endif ?>>
        <span class="icon icon-star" ></span><?php echo $_LANG['我的'];?>
    </a>
    
</div>




</body>
</html>