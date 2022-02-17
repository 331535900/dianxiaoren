<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="webkit" />
	<meta name="viewport" content="width=device-width, user-scalable=yes" />
	<title><?php echo $title;?><?php echo $conf['title2'];?></title>
	<meta name="keywords" content="<?php echo $conf['keywords'];?>">
	<meta name="description" content="<?php echo $conf['description'];?>">
	<link rel="shortcut icon" href="<?php echo WWW;?>favicon.ico">
	<link rel="stylesheet" href="<?php echo WWW;?>View/hybbs/icon/iconfont.css?ver=<?php echo get_theme_version('hybbs');?>">
	<link rel="stylesheet" href="<?php echo WWW;?>View/hybbs/app.css?ver=<?php echo get_theme_version('hybbs');?>">
	<link rel="stylesheet" href="<?php echo WWW;?>public/css/public.css?ver=<?php echo get_theme_version('hybbs');?>">
	<script>
	var www = "<?php echo WWW;?><?php echo RE;?>";
	var WWW = "<?php echo WWW;?>";
	var exp = "<?php echo EXP;?>";
	</script>
	<!--[if (gte IE 9)|!(IE)]><!-->
	<script src="<?php echo WWW;?>public/js/jquery.min.js"></script>
	<!--<![endif]-->
	<!--[if lte IE 8 ]>
	<script src="<?php echo WWW;?>public/js/jquery1.11.3.min.js"></script>
	<![endif]-->
	<script src="<?php echo WWW;?>View/hybbs/jquery.darktooltip.js"></script>
	<script src="<?php echo WWW;?>View/hybbs/app.js"></script>

	<?php if (IS_LOGIN): ?>
	<!-- 好友系统资源文件 -->
	<link href="<?php echo WWW;?>public/css/friend.css?ver=<?php echo get_theme_version('hybbs');?>" rel="stylesheet">
	<script src="<?php echo WWW;?>public/js/friend.js?ver=<?php echo get_theme_version('hybbs');?>"></script>
	<?php endif ?>
	<script src="<?php echo WWW;?>public/js/app.js"></script>
	
	<style type="text/css">
	<?php if (view_form('hybbs','menu_fix')): ?>
	header{
		    position: fixed;
	    top: 0;
	    left: 0;
	    right: 0;
	    z-index: 4;
	}
	body>.container{
		    margin-top: 76px !important
	}
	<?php endif ?>
	
	<?php if (view_form('hybbs','width')): ?>
		.container{
			width:<?php echo view_form('hybbs','width') ?>;
		}
		.left{
			width: <?php echo (intval(view_form('hybbs','width')) - 300-20) ?>px !important;
		}
	<?php endif ?>
	<?php if (view_form('hybbs','css')): ?>
		<?php echo view_form('hybbs','css') ?>
	<?php endif ?>
	
	</style>

	
</head>
<body>
<header>
	<div id="header" class="container">
		<a style="color:#0f88eb;font-size: 26px;" href="<?php echo WWW;?>">电销人</a>
		<!--<?php echo view_form('hybbs','logo') ?>-->
		<!--<nav>-->

		<!--	<a href="#">111</a>-->
		
		<!--	<a href="#">222</a>-->

		<!--</nav>-->
		
		
		<!--<nav>-->
		<!--	<?php if (view_form('hybbs','menu_forum')): ?>-->
		<!--	<?php foreach ($forum as $v): ?>-->
		<!--	<a href="<?php HYBBS_URL('forum',$v['id']); ?>"><?php echo $v['name'];?></a>-->
		<!--	<?php endforeach ?>-->
		<!--	<?php endif ?>-->
		<!--	<?php if (view_form('hybbs','diy_link')): ?>-->
		<!--		<?php $tmp = explode("\r\n",view_form('hybbs','diy_link')) ?>-->
		<!--		<?php foreach ($tmp as $v): ?>-->
		<!--			<?php $tmp1 = explode(",",$v) ?>-->
		<!--			<a href="<?php echo $tmp1[0];?>"  <?php if ($tmp1[2]==1): ?>target="_blank"<?php endif ?>><?php echo $tmp1[1];?></a>-->
					
		<!--		<?php endforeach ?>-->
		<!--	<?php endif ?>-->
		<!--</nav>-->
		<form method="get" action="<?php HYBBS_URL('search') ?>" class="searchBar" >
			<input type="hidden" name="s" value="search">
			<div data-reactid="20">
				<div class="Popover">
					<div class="searchBar-input ">
						<input type="text" name="key" value="" autocomplete="off" placeholder="搜索帖子，用户">
							<button class="btn" aria-label="搜索" type="submit">
							<svg viewBox="0 0 16 16" class="Icon Icon--search" style="height:16px;width:16px;" width="16" height="16" aria-hidden="true" data-reactid="26"><title></title><g><path d="M12.054 10.864c.887-1.14 1.42-2.57 1.42-4.127C13.474 3.017 10.457 0 6.737 0S0 3.016 0 6.737c0 3.72 3.016 6.737 6.737 6.737 1.556 0 2.985-.533 4.127-1.42l3.103 3.104c.765.46 1.705-.37 1.19-1.19l-3.103-3.104zm-5.317.925c-2.786 0-5.053-2.267-5.053-5.053S3.95 1.684 6.737 1.684 11.79 3.95 11.79 6.737 9.522 11.79 6.736 11.79z"></path></g></svg>
							</button>
						
					</div>
				</div>
			</div>
		</form>

		<div class="pull-right menu-box">
			<?php if (!IS_LOGIN): ?>
				<a href="<?php HYBBS_URL('user','login'); ?>" style="margin-right: 5px;" class="btn"><?php echo $_LANG['登录'];?></a>
				<a href="<?php HYBBS_URL('user','add'); ?>" style="margin-right: 5px;" class="btn btn-primary"><?php echo $_LANG['注册'];?></a>
				
			<?php else: ?>
				<a href="javascript:void(0);" style="margin-right:10px" onclick="$('.friend-box').toggleClass('friend-box-a');">
					<img style="border-radius:50%;vertical-align: middle;" width="35" height="35" src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>">
					<span class="xx " style="<?php if (!$user['mess']): ?>display:none<?php endif ?>"><?php echo $user['mess'];?></span>
				</a>
			<?php endif ?>
			
		</div>
	</div>
</header>

<div class="container" style="margin-top: 23px;">
	<div class="left">
		<div class="wrap-box t-info">
			<div class="head">
		        <h1>
		        	<a href="<?php HYBBS_URL('thread',$thread_data['tid']) ?>">返回 - <?php echo $thread_data['title'];?></a>
		        </h1>
		        <div class="meta">
				<a href="<?php HYBBS_URL('my',$post_data['user']); ?>" target="_blank">
					<?php echo $post_data['user'];?>
				</a>
				&nbsp;&nbsp;·&nbsp;&nbsp;
				发表于 <?php echo humandate($post_data['atime']); ?>
				&nbsp;&nbsp;·&nbsp;&nbsp;
				<a href="<?php HYBBS_URL('forum',$thread_data['fid']); ?>" >
					<?php echo forum($forum,$thread_data['fid'],'name'); ?>
				</a>
		        </div>
		        <a href="<?php HYBBS_URL('my',$thread_data['user']); ?>" class="avatar" target="_blank">
					<img src="<?php echo WWW;?><?php echo $post_data['avatar']['b'];?>" pos="left" width="60" height="60" class="circle js-info" uid="<?php echo $thread_data['uid'];?>">
		        </a>
		      </div>
		      <div class="content typo editor-style">
		        
		        <?php echo $post_data['content'];?>
		        
		      </div>
		      <div class="actions">
				<button class="btn btn-info" onclick="tp('post1',<?php echo $post_data['pid'];?>,this)">
					<i class="iconfont icon-thumbsup1"></i> <span><?php echo $post_data['goods'];?></span>
				</button>
				<button class="btn btn-info" onclick="tp('post2',<?php echo $post_data['pid'];?>,this)">
					<i class="iconfont icon-thumbsdown1"></i> <span><?php echo $post_data['nos'];?></span>
				</button>
		        
		        <?php if (IS_LOGIN ): ?> 
					<?php $arr = explode(",",forum($forum,$thread_data['fid'],'forumg')); ?>
		            <?php if ($post_data['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP") || is_forumg($forum,NOW_UID,$thread_data['fid'])): ?>
		            
		            <a class="btn btn-link" href="<?php HYBBS_URL('post','edit',['id'=>$post_data['pid']]);  ?>">
		            <i class="iconfont icon-edit3" ></i> 编辑评论
		            </a>
		            <a href="javascript:void(0);" class="btn btn-link" onclick="del_thread(<?php echo $post_data['pid'];?>,'post')" >
		            <i class="iconfont icon-delete"></i> <?php echo $_LANG['删除帖子'];?>
		            </a>

		            <?php endif ?>
		            
		          <?php endif ?>
		      </div>
		</div>
		
		<div class="wrap-box comment-list">
			<div class="head">
				<?php echo $post_data['posts'];?> <?php echo $_LANG['条回复'];?> &nbsp;
				<?php if (!empty($post_post_data)): ?>
				<div class="pull-right">
					<button id="thread-sort" class="btn btn-link">
					<?php if (X('get.order')=='desc'): ?><?php echo $_LANG['最新回复'];?><?php else: ?>默认排序<?php endif ?> <i class="iconfont icon-sort"></i>
					</button>
					<div class="select-pop wrap-box">
					<button onclick="location.href='<?php HYBBS_URL('thread','post',$post_data['pid']) ?>'" class="btn select-option">默认排序</button>
					<button onclick="location.href='<?php HYBBS_URL('thread','post',$post_data['pid']) ?>?order=desc'" class="btn select-option"><?php echo $_LANG['最新回复'];?></button>
					</div>
					<script type="text/javascript">
					$(document).ready(function(){
						$("#thread-sort,.post--sort").click(function() {

							var _this2 = $(this).next();
							_this2.addClass('select-pop-show');
							$(document).bind('mousedown.efscbarEvent',function(e){
								$(document).unbind("mousedown.efscbarEvent");
						        if(!$(e.target).is($('#btn')) && !$(e.target).is($('#box')) && $(e.target).parent('#box').length === 0){
						        	_this2.removeClass('select-pop-show');
						        }
						    });
						});
					});
					
					</script>
				</div>
				<?php endif ?>
	        </div>
	        <?php foreach ($post_post_data as $k => $v): ?>
	        <div class="item">
				<a name="reply26"></a>
				<a href="<?php HYBBS_URL('my',$v['user']); ?>" class="avatar" target="_blank">
	            	<img class="circle js-unveil js-info" uid="<?php echo $v['uid'];?>" pos="right" src="<?php echo WWW;?><?php echo $v['avatar']['b'];?>">
				</a>
				<div class="r">
					<p class="meta">
						<a href="<?php HYBBS_URL('my',$v['user']); ?>" class="author" target="_blank">
							<?php echo $v['user'];?>
						</a>
						<br>
						<span class="time" title="test">
							发表于 <?php echo $v['atime_str'];?>
						</span>
	            	</p>
		            <div class="text typo editor-style">
		            
						<?php echo $v['content'];?>
		            
		            </div>
		            
	                
	        	</div>
	        </div>
	        <?php endforeach ?>
		</div>
		<div class="wrap-box">
			
			<a href="<?php if ($pageid==1): ?>javascript:void(0);<?php else: ?><?php HYBBS_URL('thread','post',[$post_data['pid']=>$pageid-1] ); ?><?php echo X("get.order")?"?order=desc":''; ?><?php endif ?>"  class="btn bg-primary <?php if ($pageid==1): ?>disabled<?php endif ?>" ><?php echo $_LANG['上一页'];?></a>
			<a href="<?php if ($pageid==$page_count): ?>javascript:void(0);<?php else: ?><?php HYBBS_URL('thread','post',[$post_data['pid']=>$pageid+1]); ?><?php echo X("get.order")?"?order=desc":''; ?><?php endif ?>" class="btn bg-primary large pull-right <?php if ($pageid==$page_count): ?>disabled<?php endif ?>" ><?php echo $_LANG['下一页'];?></a>
			
		</div>
		<div class="wrap-box">
			
			<?php if (IS_LOGIN): ?>
			<span id="post--<?php echo $post_data['pid'];?>" onfocus="if(this.textContent=='编写评论内容')this.textContent=''" onblur="if(this.textContent=='')this.textContent='编写评论内容'" type="text" class="input-text" contenteditable="true">编写评论内容</span>
			<button style="    margin-top: 5px;" class="btn btn-primary" onclick="post_postA(<?php echo $post_data['pid'];?>)">发表</button>
			<?php else: ?>
			<a href="<?php HYBBS_URL('user','login') ?>"><?php echo $_LANG['登录'];?></a><?php echo $_LANG['后才可发表内容'];?>
			<?php endif ?>
			
      </div>
	</div>
	<script type="text/javascript">
	function post_postA(pid){
		post_post(pid,function(e){
			swal(e.error ? "操作成功" : "操作失败", e.info, e.error ? "success" : "error");
			if(e.error) window.location.reload();
		},function(e){
			//swal(e.error ? "操作成功" : "操作失败", e.info, e.error ? "success" : "error");
		});
	}
	</script>
<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
    <?php if (ACTION_NAME != 'Post'): ?>
    <div class="right" style="float: right;width: 300px;">
        
        <?php if (view_form('hybbs','forum_right')): ?>
        <?php isset($fid) || $fid = -1; ?>
        <?php if (ACTION_NAME == 'Thread'): ?><?php $fid = $thread_data['fid'] ?><?php endif ?>
        <?php if ((ACTION_NAME == 'Thread' || ACTION_NAME == 'Forum') && isset($forum[$fid]['z'])): ?>
        <div class="right-widget only-logo">
            
            <ul id="right-forum-list">
                <?php if ($forum[$fid]['fid'] != -1): ?>
                <li>
                    <a href="<?php HYBBS_URL('forum',$forum[$forum[$fid]['fid']]['id']); ?>">
                        <img src="<?php echo WWW;?>upload/forum<?php echo $forum[$forum[$fid]['fid']]['id'];?>.png" onerror="this.src='<?php echo WWW;?>upload/de.png'">
                        返回：<?php echo $forum[$forum[$fid]['fid']]['name'];?> <i class="iconfont icon-right2 pull-right"></i>
                    </a>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo WWW;?>">
                        <img src="<?php echo WWW;?>View/hybbs/forum_home.png">
                        返回首页 <i class="iconfont icon-right2 pull-right"></i>
                    </a>
                </li>
                <?php endif ?>
                <li>
                    <a class="active" href="<?php HYBBS_URL('forum',$fid); ?>">
                        <img src="<?php echo WWW;?>upload/forum<?php echo $fid;?>.png" onerror="this.src='<?php echo WWW;?>upload/de.png'">
                        <?php echo $forum[$fid]['name'];?> <i class="iconfont icon-right2 pull-right"></i>
                    </a>
                </li>
                <?php foreach ($forum as $key => $v): ?>
                <?php if ($v['fid'] == $fid): ?>
                <li>
                    <a href="<?php HYBBS_URL('forum',$v['id']); ?>">
                        <img src="<?php echo WWW;?>upload/forum<?php echo $key;?>.png" onerror="this.src='<?php echo WWW;?>upload/de.png'">
                        <?php echo $v['name'];?> <i class="iconfont icon-right2 pull-right"></i>
                    </a>
                </li>
                <?php endif ?>
                <?php endforeach ?>
            
            </ul>
        </div>
        <?php else: ?>
        <div class="right-widget only-logo">
            <div class="head">
                分类列表 <a href="<?php HYBBS_URL('forum') ?>" class="pull-right js-tooltip">更多</a>
            </div>
            <ul id="right-forum-list">
                <?php foreach ($forum as $key => $v): ?>
                <?php if ($v['fid'] == -1): ?>
                <li>
                    <a href="<?php HYBBS_URL('forum',$v['id']); ?>" >
                        <img src="<?php echo WWW;?>upload/forum<?php echo $key;?>.png" onerror="this.src='<?php echo WWW;?>upload/de.png'" >
                        <?php echo $v['name'];?> <i class="iconfont icon-right2 pull-right"></i>
                    </a>
                </li>
                <?php endif ?>
                <?php endforeach ?>
            
            </ul>
        </div>
        <?php endif ?>
        <?php endif ?>
        
    </div>
    <?php endif ?>
    <div class="clearfix"></div>
</div>
<footer>
    <div class="container">
        <div class="version">
            <p>HYBBS © 2016. All Rights Reserved. <a href="<?php echo WWW;?>"><?php echo $conf['logo'];?></a> </p>
            <p>Powered by <a href="http://bbs.hyphp.cn/">HYBBS</a> Version <?php echo HYBBS_V;?></p>
            <?php if (view_form('hybbs','show_sleep')): ?>
            <p>Runtime:<?php echo number_format(microtime(1) - $GLOBALS['START_TIME'], 4); ?>s Mem:<?php echo round((memory_get_usage() - $GLOBALS['START_MEMORY'])/1024); ?>Kb</p>
            <?php endif ?>
        </div>
    </div>
</footer>

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
</body>
</html>