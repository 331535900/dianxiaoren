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


<div class="user-index-top">
	<div>
		<img src="<?php echo WWW;?><?php echo $data['avatar']['a'];?>">
        <p style="margin-top: 14px;color: rgba(255, 255, 255, 0.91);font-size: 14px;"><span><?php echo $_LANG['关注'];?> <?php echo $data['follow'];?></span> <span style="margin:0 10px;color:#bdbdbd">|</span> <span><?php echo $_LANG['粉丝'];?> <?php echo $data['fans'];?></span></p>
        
        
	</div>
</div>

<div class="hy-cent-list">
  <ul>
  
    <li class="<?php echo $menu_action['index'];?>"><a href="<?php HYBBS_URL('my',$data['user']); ?>"><?php echo $_LANG['空间'];?></a></li>
    
    <li class="<?php echo $menu_action['thread'];?>"><a href="<?php HYBBS_URL('my',$data['user'],'thread'); ?>"><?php echo $_LANG['主题'];?></a></li>
    
    <li class="<?php echo $menu_action['post'];?>"><a href="<?php HYBBS_URL('my',$data['user'],'post'); ?>"><?php echo $_LANG['帖子'];?></a></li>
    
    <li <?php if ($method == 'collections'): ?>class="active"<?php endif ?>><a href="<?php HYBBS_URL('my',$data['user'],'collections'); ?>">收藏</a></li>
    
  </ul>
</div>

<style type="text/css">
	.hy-header{
		background: rgba(0, 0, 0, 0);
        color: #FFF;
        border-bottom:none;
	}
    .hy-header .icon{
        color: #FFF !important;
    }
    .hy-header-title{
        color: #FFF !important;
    }



</style>
<?php foreach ($thread_data as $v): ?>
<div class="hy-box" >

	<div class="thread">
		
		
		

		<a class="list-title" href="<?php HYBBS_URL('thread',$v['tid']); ?>" ajax="true" pos="right">
			<h3><?php if ($v['digest']): ?><span title="<?php echo $_LANG['精'];?>" style="color: red;"><?php echo $_LANG['精'];?></span><?php endif ?><?php echo $v['title'];?></h3>
		</a>
		
		<ul class="hy-lable-group">
			<?php if ($forum[$v['fid']]['fid'] != -1): ?>
			
	        <li style="word-spacing: -0.35em;">
	            <a style="background:<?php echo forum($forum,$forum[$v['fid']]['fid'],'background'); ?>;color:<?php echo forum($forum,$forum[$v['fid']]['fid'],'color'); ?>;" iframe="true" ajax="true" href="<?php HYBBS_URL('forum',$forum[$v['fid']]['fid']) ?>" class="hy-lable hy-lable-zz"><?php echo forum($forum,$forum[$v['fid']]['fid'],'name'); ?></a>
	        </li>
	        
	        <?php endif ?>
	        
	        <li>
	            <a style="background:<?php echo forum($forum,$v['fid'],'background'); ?>;color:<?php echo forum($forum,$v['fid'],'color'); ?>;border-top-right-radius: 3px;border-bottom-right-radius: 3px;" iframe="true" ajax="true" href="<?php HYBBS_URL('forum',$v['fid']) ?>" class="hy-lable hy-lable-zz"><?php echo forum($forum,$v['fid'],'name'); ?></a>
	        </li>
	        
	        <li class="blt">
	            <span class="icon-reply"></span>
	            <?php if (ACTION_NAME != 'My'): ?>
	            <?php if ($v['posts']): ?>
	            <span class="user"><?php echo $v['buser'];?></span>
	            <?php echo $_LANG['回复于'];?>
	            <?php else: ?>
	            <span class="user"><?php echo $v['user'];?></span>
	            <?php echo $_LANG['发表于'];?>
	            <?php endif ?>
	            <?php else: ?>
	            <?php echo $_LANG['发表于'];?>
	            <?php endif ?>
	            <span class="time"><?php if ($v['posts']): ?><?php echo humandate($v['btime']); ?><?php else: ?><?php echo humandate($v['atime']); ?><?php endif ?></span>
	        </li>
	        
	    </ul>
		<span class="posts" title="" <?php if (($v['btime']+1800) > NOW_TIME && $v['btime'] != $v['atime']): ?>style="background: #e7672e;color: #fff;font-weight: bold;"<?php endif ?>><?php echo $v['posts'];?></span>
		
		
		
	</div>
	
</div>
<?php endforeach ?>

<div class="hy-box" style="padding:10px">

	<?php if ($pageid!=1): ?>
	<span class="pg-item">

        <a class="hy-btn hy-btn-danger" href="<?php HYBBS_URL('my',$data['user'],['thread'=>$pageid-1]); ?>"><?php echo $_LANG['上一页'];?></a>
    </span>
    <?php endif ?>
    
    <?php $tmp = ($data['threads']%10) ?(intval($data['threads']/10)+1) : intval($data['threads']/10) ; ?>
    <?php for ($i=($pageid-3 < 1) ? 1 : $pageid -3; $i< (($pageid + 3 > $tmp) ? $tmp+1 : $pageid + 3) ; $i++): ?>


    <span class="pg-item ">
        <<?php if ($pageid == $i): ?>span<?php else: ?>a<?php endif ?> class="hy-btn hy-btn-danger <?php if ($pageid == $i): ?>disabled<?php endif ?>" href="<?php HYBBS_URL('my',$data['user'],['thread'=>$i]); ?>">
            <?php echo $i;?>
        </<?php if ($pageid == $i): ?>span<?php else: ?>a<?php endif ?>>
    </span>
    <?php endfor ?>
    
    <?php if ($pageid!=$page_count): ?>
    <span class="pg-item">
        <a class="next hy-btn hy-btn-danger" href="<?php HYBBS_URL('my',$data['user'],['thread'=>$pageid+1]); ?>"><?php echo $_LANG['下一页'];?></a>
    </span>
    <?php endif ?>
    
</div>

<script type="text/javascript">
	$(function(){
		$(window).scroll(function(){
			
			if(this.scrollY > 100  ){
				$(".hy-header").css('background','#Fff');
				$(".hy-header").addClass('header_shadow');
				$(".hy-header-title,.hy-header .icon").css("cssText","color: #0d7dbb !important");
				    

			}else{
				$(".hy-header").css('background','rgba(0, 0, 0, 0)');
				$(".hy-header").removeClass('header_shadow');
				$(".hy-header-title,.hy-header .icon").css("cssText","color: #fff");
				    
			}
			
		});
		

	})
</script>
<style type="text/css">
	.hy-btn{
		    padding: 4px 8px;
		    font-size: 12px;
	}
	.thread{
		padding-bottom: 10px;
		    padding-left: 10px;
	}
</style>

</body>
</html>