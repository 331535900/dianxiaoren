<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php echo $title;?><?php echo $conf['title2'];?></title>
        <link href="<?php echo WWW;?>View/hy_user/css/um.css" rel="stylesheet">
        <link href="<?php echo WWW;?>View/hy_user/icon/iconfont.css" rel="stylesheet">
        <!-- <link href="<?php echo WWW;?>public/css/font-awesome.min.css" type="text/css" rel="stylesheet" /> -->
        <!--[if (gte IE 9)|!(IE)]><!-->
        <script src="<?php echo WWW;?>public/js/jquery.min.js"></script>
        <!--<![endif]-->
        <!--[if lte IE 8 ]>
        <script src="<?php echo WWW;?>public/js/jquery1.11.3.min.js"></script>
        <![endif]-->
        <script src="<?php echo WWW;?>public/js/sweet-alert.min.js"></script>
        <link href="<?php echo WWW;?>public/css/alert.css" rel="stylesheet">

        
        <script>
        var www = "<?php echo WWW;?><?php echo RE;?>";
        var WWW = "<?php echo WWW;?>";

        var exp = "<?php echo EXP;?>";

        </script>
    </head>
    <body>
        <div class="bj"></div>
            <div id="main-wrap" class="content page dashboard space centralnav">
                <div id="author-page" class="primary bd clx" role="main">
                <div class="aside">
    <div class="user-avatar">
        <a href="<?php if (IS_LOGIN): ?><?php if ($data['uid'] == $user['uid']): ?><?php HYBBS_URL('my',$data['user'],'op'); ?><?php else: ?>javascript:;<?php endif ?><?php else: ?>javascript:;<?php endif ?>">
            <img src="<?php echo WWW;?><?php echo $data['avatar']['a'];?>" class="avatar avatar-200" height="200" width="200">
        </a>
        <h3 style="margin-bottom: 5px">
            <font color="<?php echo $usergroup[$data['gid']]['font_color'];?>" style="<?php echo $usergroup[$data['gid']]['font_css'];?>" ><?php echo $usergroup[$data['gid']]['name'];?></font>
        </h3>
        <h2><?php echo $data['user'];?></h2>
        <?php 
            $now_credits_bfb = ($data['credits'] / $usergroup[$data['gid']]['credits_max']) * 100;
            $update_title = '距离下个等级还需要：'.($usergroup[$data['gid']]['credits_max'] - $data['credits']).' 积分';
            if($now_credits_bfb >100){
                $now_credits_bfb = 100;
            }
            if($usergroup[$data['gid']]['credits'] == -1 || $usergroup[$data['gid']]['credits_max'] == -1){
                $update_title = '你所在用户组无法靠积分升级';
                $now_credits_bfb = 0;
            }
            
            
            ?>
        <div class="progress" title="<?php echo $update_title;?>">
            <span class="progress-bk"></span>
            <span class="progress-bar" style="width: <?php echo $now_credits_bfb;?>%"></span>
        </div>
        <div id="num-info">
            
            <div>
                <span class="num"><?php echo $data['follow'];?></span><span class="text"><?php echo $_LANG['关注数量'];?></span>
            </div>
            <div>
                <span class="num"><?php echo $data['fans'];?></span><span class="text"><?php echo $_LANG['粉丝数量'];?></span>
            </div>
            <div>
                <span class="num"><?php echo $data['threads'];?></span><span class="text"><?php echo $_LANG['文章数量'];?></span>
            </div>
            
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="menus">
        <ul>

            
            <li class="tab-index <?php if (in_array($method,['index']) !== false): ?>active<?php endif ?>">

            <a href="<?php HYBBS_URL('my',$data['user']); ?>"><i class="icon icon-home1"></i><?php echo $_LANG['首页中心'];?></a>
            </li>
            <li class="tab-post <?php if (in_array($method,['thread','post','collections']) !== false): ?>active<?php endif ?>">
            <a href="<?php HYBBS_URL('my',$data['user'],'thread'); ?>"><i class="icon icon-post"></i>我的帖子</a>
            </li>
            
            <?php if (IS_LOGIN): ?>
                <?php if ($data['uid'] == $user['uid']): ?>
                    <li class="tab-profile <?php if (in_array($method,['op','log','file']) !== false): ?>active<?php endif ?>">
                    <a href="<?php HYBBS_URL('my',$data['user'],'op'); ?>"><i class="icon icon-user-info"></i>我的信息</a>
                    </li>
                    <li class="tab-profile <?php if (in_array($method,['message']) !== false): ?>active<?php endif ?>">
                    <a href="<?php HYBBS_URL('my',$data['user'],['message'=>'index']); ?>"><i class="icon icon-message2"></i>我的消息</a>
                    </li>
                <?php endif ?>
                <?php if (NOW_GID == C("ADMIN_GROUP")): ?>
                    <li class="tab-message">
                    <a href="<?php HYBBS_URL('admin'); ?>"><i class="icon icon-admin"></i><?php echo $_LANG['管理后台'];?></a>
                    </li>
                <?php endif ?>
            <?php endif ?>
            
        </ul>
    </div>
    <a href="<?php echo WWW;?>" style="
     bottom: 0;
    position: absolute;
    font-size: 16px;
    padding: 10px;
    left: 0;
"><i class="fa fa-sign-out"></i> <?php echo $_LANG['返回网站首页'];?></a>
</div>

                    <div class="area">
                        <div class="page-wrapper">
                            <div class="dashboard-main">

<div class="dashboard-head">
    <nav>
        
        <?php if (in_array($method,['thread','post','collections']) !== false): ?>
        <a href="<?php HYBBS_URL('my',$data['user'],'thread'); ?>" <?php if ($method == 'thread'): ?>class="active"<?php endif ?>><?php echo $_LANG['我的文章'];?></a>
        <a href="<?php HYBBS_URL('my',$data['user'],'post'); ?>" <?php if ($method == 'post'): ?>class="active"<?php endif ?>><?php echo $_LANG['帖子评论'];?></a>
        <a href="<?php HYBBS_URL('my',$data['user'],'collections'); ?>" <?php if ($method == 'collections'): ?>class="active"<?php endif ?>>我的收藏</a>
        <?php endif ?>

        <?php if (in_array($method,['op','log','file']) !== false ): ?>
        <a href="<?php HYBBS_URL('my',$data['user'],'op'); ?>" <?php if ($method == 'op'): ?>class="active"<?php endif ?>>个人资料</a>
        <a href="<?php HYBBS_URL('my',$data['user'],'log'); ?>" <?php if ($method == 'log'): ?>class="active"<?php endif ?>>积分日志</a>
        <a href="<?php HYBBS_URL('my',$data['user'],'file'); ?>" <?php if ($method == 'file'): ?>class="active"<?php endif ?>>我的文件</a>

        <?php endif ?>

        <?php if (in_array($method,['message']) !== false ): ?>
        <a href="<?php HYBBS_URL('my',$data['user'],['message'=>'index']); ?>" <?php if (X('get.message') == 'index'): ?>class="active"<?php endif ?>>最新消息
        </a>
        <a href="<?php HYBBS_URL('my',$data['user'],['message'=>'follow']); ?>" <?php if (X('get.message') == 'follow'): ?>class="active"<?php endif ?>>我的关注</a>
        <a href="<?php HYBBS_URL('my',$data['user'],['message'=>'fans']); ?>" <?php if (X('get.message') == 'fans'): ?>class="active"<?php endif ?>>我的粉丝</a>
        <?php endif ?>

        
        
    </nav>
</div>
<div class="dashboard-body">
<!-- 好友系统资源文件 -->
  <link href="<?php echo WWW;?>public/css/friend.css?var=<?php echo HYBBS_V;?>" rel="stylesheet">
  <script src="<?php echo WWW;?>public/js/friend.js?var=<?php echo HYBBS_V;?>"></script>

  
  
<div class="dashboard-header">
	<p class="sub-title">
		<?php echo $_LANG['用户中心'];?>
	</p>
	
</div>
<div class="dashboard-wrapper select-index">
	<div class="briefly">
		<ul>
			
			<li class="post">
			<div class="visual">
				<i class="icon icon-tasks"></i>
			</div>
			<div class="number">
				<?php echo $data['threads'];?><span><?php echo $_LANG['文章作品'];?></span>
			</div>
			<div class="more">
				<a href="<?php HYBBS_URL('my',$data['user'],'thread'); ?>"><?php echo $_LANG['查看更多'];?><i class="icon icon-arrow-circle-right"></i></a>
			</div>
			</li>
			<li class="photo">
			<div class="visual">
				<i class="icon icon-heart"></i>
			</div>
			<div class="number">
				0<span><?php echo $_LANG['我的收藏'];?></span>
			</div>
			<div class="more">
				<a href="<?php HYBBS_URL('my',$data['user'],'collections'); ?>"><?php echo $_LANG['查看更多'];?><i class="icon icon-arrow-circle-right"></i></a>
			</div>
			</li>
			<li class="credit">
			<div class="visual">
				<i class="icon icon-gold"></i>
			</div>
			<div class="number">
				<?php echo $data['gold'];?><span>我的金币</span>
			</div>
			<div class="more">
				<a href="<?php HYBBS_URL('my',$data['user'],'thread'); ?>"><?php echo $_LANG['查看更多'];?><i class="icon icon-arrow-circle-right"></i></a>
			</div>
			</li>
			<li class="comments">
			<div class="visual">
				<i class="icon icon-comments"></i>
			</div>
			<div class="number">
				<?php echo $data['posts'];?><span><?php echo $_LANG['评论留言'];?></span>
			</div>
			<div class="more">
				<a href="<?php HYBBS_URL('my',$data['user'],'post'); ?>"><?php echo $_LANG['查看更多'];?><i class="icon icon-arrow-circle-right"></i></a>
			</div>
			</li>
			
		</ul>
	</div>
	
	<div class="summary">
		<div class="box">
			<div class="title">
				<?php echo $_LANG['最近发布'];?>
			</div>
			<ul>
                <?php foreach ($thread_data as $v): ?>
				<li><a href="<?php HYBBS_URL('thread',$v['tid']); ?>" target="_blank"><?php echo $v['title'];?></a></li>
                <?php endforeach ?>

			</ul>
		</div>
		<div class="box">
			<div class="title">
				<?php echo $_LANG['最近评论'];?>
			</div>
			<ul>
                <?php foreach ($post_data as $v): ?>
				<li><a href="<?php HYBBS_URL('thread',$v['tid']); ?>" target="_blank"><?php echo $v['content'];?></a></li>
                <?php endforeach ?>

			</ul>
		</div>
	</div>
	
	<div class="fast-navigation">
		<div class="nav-title">
			<?php echo $_LANG['快捷菜单'];?>
		</div>
		<ul>
			
			<?php if (IS_LOGIN): ?>
			<?php if (NOW_UID != $data['uid']): ?>
			<li><a href="javascript:void(0);" onclick="new_chat('<?php echo $data['user'];?>','',444,465,<?php echo $data['uid'];?>,'<?php echo $data['user'];?>','<?php echo $data['avatar']['b'];?>','<?php echo $data['ps'];?>')" style="color:#368bbf"><i class="fa fa-send"></i><?php echo $_LANG['聊天'];?></a></li>
			<li><a href="javascript:void(0);" onclick="friend(<?php echo $data['uid'];?>,this)" style="color:#c12397"><i class="fa fa-<?php if ($data['friend_state']): ?>star<?php else: ?>star-o<?php endif ?>"></i><span id="star"><?php if ($data['friend_state']): ?><?php echo $_LANG['取消关注'];?><?php else: ?><?php echo $_LANG['关注'];?><?php endif ?></span></a></li>
			<?php endif ?>
			<?php if (NOW_GID == C("ADMIN_GROUP")): ?>
			<li><a href="<?php HYBBS_URL('admin'); ?>"><i class="icon icon-admin"></i><?php echo $_LANG['管理后台'];?></a></li>
			<?php endif ?>
			<?php endif ?>
			<li><a href="<?php echo WWW;?>"><i class="icon icon-home"></i><?php echo $_LANG['网站首页'];?></a></li>

			<li>
			<a href="<?php HYBBS_URL('post'); ?>">
			<i class="icon icon-post"></i><?php echo $_LANG['发布文章'];?></a></li>

			<?php if (NOW_UID == $data['uid']): ?>
			<li><a href="<?php HYBBS_URL('my',$data['user'],'file'); ?>"><i class="icon icon-file"></i><?php echo $_LANG['我的文件'];?></a></li>
			<li><a href="<?php HYBBS_URL('my',$data['user'],'op'); ?>"><i class="icon icon-user-info"></i><?php echo $_LANG['修改资料'];?></a></li>
			
			<li><a href="<?php HYBBS_URL('user','out'); ?>"><i class="icon icon-out"></i><?php echo $_LANG['注销登录'];?></a></li>
			<?php endif ?>
			
		</ul>
	</div>
	
</div>

<script type="text/javascript">
function friend(uid,obj){
    friend_state(uid,function(b,m){
        
        if(m){
        	$(".fa-star-o").addClass("fa-star");
            $(".fa-star-o").removeClass("fa-star-o");
        	
            
            $("#star").text("<?php echo $_LANG['取消关注'];?>");
        }
        else{

            $(".fa-star").addClass("fa-star-o");
            $(".fa-star").removeClass("fa-star");
            $("#star").text("<?php echo $_LANG['关注'];?>");
        }
    })
}
function friend_state(uid,callback){
	$.ajax({
		url: '<?php HYBBS_URL('friend','friend_state'); ?>',
		type:"POST",
		cache: false,
		data:{
			uid:uid,
		},
		dataType: 'json'
	}).then(function(e) {
		callback(e.error,e.id);
	}, function() {
		swal("<?php echo $_LANG['失败'];?>", "<?php echo $_LANG['请尝试重新提交'];?>", "error");
	});
}
</script>


<?php if (IS_LOGIN): ?>
<div class="friend-box">
	<audio id="play-msg">
    <source src="<?php echo WWW;?>public/mp3/msg.mp3" type="audio/mp3">
</audio>
	<audio id="play-system">
    <source src="<?php echo WWW;?>public/mp3/system.mp3" type="audio/mp3">
</audio>
	<div class="friend-box-close" onclick="$('.friend-box').toggleClass('friend-box-a')">×</div>
	<div class="friend-info-box">
		<img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>">
		<h2><?php echo $user['user'];?> </h2>
		<p>
			<span class="badge badge-purple bounceIn animation-delay2" style="font-size: 14px;font-weight: 400;background: cadetblue;"><?php echo $usergroup[NOW_GID]['name'];?></span>
		</p>
		<p>
		<a href="<?php HYBBS_URL('my',$user['user']); ?>"><?php echo $_LANG['个人中心'];?></a>
		<span>|</span>
		<a href="<?php HYBBS_URL('user','out') ?>"><?php echo $_LANG['退出账号'];?></a>
		</p>
		<p>
		<a href="javascript:void(0);" onclick="clear_mess()"><?php echo $_LANG['清空未读'];?></a>
		<?php if ($user['gid'] == C('ADMIN_GROUP')): ?>
		<span>|</span>
		<a href="<?php HYBBS_URL('admin') ?>"><?php echo $_LANG['管理后台'];?></a>
		<?php endif ?>
		</p>
	</div>
	<script type="text/javascript">
	<?php if (IS_LOGIN): ?>
	window.hy_user = "<?php echo NOW_USER;?>";
	window.hy_avatar = WWW + "<?php echo $user['avatar']['a'];?>";
	<?php else: ?>
	window.hy_user = '';
	window.hy_avatar = '';
	<?php endif ?>
	$(function(){
		load_friend();
	})
	</script>
	<div class="friend-div-box">
		<input type="text" class="friend-text" placeholder="<?php echo $_LANG['搜索好友名'];?>">
		<img src="<?php echo WWW;?>View/hy_friend/cog.png" style="padding-top: 7px;padding-left: 7px;font-size: 18px;display: inline-block;"></span>
	</div>
	<div class="friend-title">
		<?php echo $_LANG['关注列表'];?> +
	</div>
	<div class="friend-div-box">
		<ul class="friend-ul" id="friend-1">
			<li><a onclick="new_chat('title','ssss',444,465,0,'<?php echo $_LANG['系统'];?>','View/hy_friend/bell.png','系统消息')" class="clearfix">
			<img src="<?php echo WWW;?>View/hy_friend/bell.png" class="img-circle" alt="user avatar">
			<div class="chat-detail m-left-sm">
				<div class="chat-name"><?php echo $_LANG['系统'];?></div>
				<div class="chat-message"><?php echo $_LANG['系统消息'];?></div>
			</div>
			<div class="chat-status">
			<span class="friend-zx"></span>
			</div>
			<div class="chat-alert">
				<span id="friend-span-0" class="badge badge-purple bounceIn animation-delay2 friend-hide">0</span></div></a></li>
		</ul>
	</div>
	<div class="friend-title">
		<?php echo $_LANG['粉丝列表'];?> +
	</div>
	<div class="friend-div-box">
		<ul class="friend-ul" id="friend-3">
			
		</ul>
	</div>
	<div class="friend-title">
		<?php echo $_LANG['陌生人'];?> +
	</div>
	<div class="friend-div-box">
		<ul class="friend-ul" id="friend-0">
			
		</ul>
	</div>

</div>
<div class="friend-v" onclick="$('.friend-box').toggleClass('friend-box-a')"></div>
<script type="text/javascript">
	$(function(){
		$(".friend-title").click(function(){
			$(this).next().toggleClass('friend-div-box-hide');
		})
	})
</script>
<?php endif ?>
	<style type="text/css">
	.lt-dlg-box *{
		    font: 500 .875em PingFang SC,Lantinghei SC,Microsoft Yahei,Hiragino Sans GB,Microsoft Sans Serif,WenQuanYi Micro Hei,sans;
	}
	</style>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </body>
</html>

