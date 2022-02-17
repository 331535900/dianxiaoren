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


<div class="hy-list" style="    ">

    <?php if (IS_LOGIN): ?>
    <?php if ($data['uid'] != NOW_UID): ?>
    <a href="javascript:void(0)" >
        
        <button type="button"  style="margin-right:10px" class="hy-btn hy-btn-<?php if ($data['friend_state']): ?>danger<?php else: ?>primary<?php endif ?> " onclick="friend(<?php echo $data['uid'];?>,this)"><?php if ($data['friend_state']): ?><?php echo $_LANG['取消关注'];?><?php else: ?><?php echo $_LANG['关注'];?><?php endif ?></button>
        <button style="float:right" type="button" class="hy-btn hy-btn-success" onclick="open_lt('<?php echo $data['user'];?>',<?php echo $data['uid'];?>,'<?php echo $data['avatar']['b'];?>');ys_header();">聊天</button>
        <script type="text/javascript">
        function ys_header(){
            setTimeout(function(){
                $("#lt-<?php echo $data['uid'];?> header").css({color:'#000',background:'#FFF'})
                $("#lt-<?php echo $data['uid'];?> header a,#lt-<?php echo $data['uid'];?> header h1").css("cssText","color:#000!important");
            },500)
            
        }
        
        
    

        </script>
    </a>
    <?php endif ?>
    <?php endif ?>
    <a href="javascript:;">
        <span class="icon icon-bubbles4"></span>
        <span class="title"><?php echo $_LANG['主题数'];?></span>
        <span class="hy-lable hy-lable-success"><?php echo $data['threads'];?></span>
    </a>
    
    <a href="javascript:;">
        <span class="icon icon-pencil2"></span>
        <span class="title"><?php echo $_LANG['帖子数'];?></span>
        <span class="hy-lable hy-lable-danger"><?php echo $data['posts'];?></span>
    </a>
    
    <?php if ($data['uid'] == NOW_UID): ?>
    <a href="javascript:;">
        <span class="icon icon-coin-dollar"></span>
        <span class="title"><?php echo $_LANG['财富'];?></span>
        <span class="hy-lable hy-lable-warning"><?php echo $data['gold'];?></span>
    </a>
    <?php endif ?>
    
    <a href="javascript:;">
        <span class="icon icon-accessibility "></span>
        <span class="title"><?php echo $_LANG['加入时间'];?></span>
        <span class="hy-lable hy-lable-purple"><?php echo date("Y-m-d",$data['atime']); ?></span>
    </a>
    
    <?php if ($data['uid'] == NOW_UID): ?>
    <a href="<?php HYBBS_URL('my',$user['user'],'op'); ?>">
        <span class="icon icon-cog "></span>
        <span class="title"><?php echo $_LANG['个人设置'];?></span>
    </a>
    <?php endif ?>
    
    <?php if ($data['uid'] == NOW_UID): ?>
    <a href="<?php HYBBS_URL('user','out') ?>">
    <span class="icon icon-exit "></span>
        <span class="title"><?php echo $_LANG['注销账号'];?></span>
    </a>
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
    });
</script>


</body>
</html>