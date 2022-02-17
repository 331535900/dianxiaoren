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
<div class="dashboard-header">
<p class="sub-title"><?php echo $_LANG['您已发表'];?><span><?php echo $data['posts'];?></span><?php echo $_LANG['条评论'];?></p>
<p class="tip"></p>
</div>

<div class="dashboard-wrapper select-comment">
	<ul class="user-msg">
		<!-- <li class="tip">共有 6 条评论，其中 6 条已获准， 0 条正等待审核。</li> -->
        
        <?php foreach ($post_data as $v): ?>
        
		<li>
		<div class="message-content">
			<?php echo $v['content'];?>
            
		</div>
		<a class="" href="<?php HYBBS_URL('thread',$v['tid']); ?>"><?php echo humandate($v['atime']) ?>  <?php echo $_LANG['发表在'];?>  <?php echo $v['title'];?></a></li>
        </li>
        
        <?php endforeach ?>
        
	</ul>
    
    <div class="pagination">
        <?php if ($pageid!=1): ?>
        <span class="pg-item" disabled>
            <a class="page-numbers" href="<?php HYBBS_URL('my',$data['user'],['post'=>$pageid-1]); ?>"><?php echo $_LANG['上一页'];?></a>
        </span>
        <?php endif ?>
        <?php $tmp = ($data['posts']%10) ?(intval($data['posts']/10)+1) : intval($data['posts']/10) ; ?>
        <?php for ($i=($pageid-5 < 1) ? 1 : $pageid -5; $i< (($pageid + 5 > $tmp) ? $tmp+1 : $pageid + 5) ; $i++): ?>


        <span class="pg-item ">
            <<?php if ($pageid == $i): ?>span<?php else: ?>a<?php endif ?> class="page-numbers <?php if ($pageid == $i): ?>current<?php endif ?>" href="<?php HYBBS_URL('my',$data['user'],['post'=>$i]); ?>">
                <?php echo $i;?>
            </<?php if ($pageid == $i): ?>span<?php else: ?>a<?php endif ?>>
        </span>
        <?php endfor ?>
        <?php if ($pageid!=$page_count): ?>
        <span class="pg-item" >
            <a class="next page-numbers" href="<?php HYBBS_URL('my',$data['user'],['post'=>$pageid+1]); ?>"><?php echo $_LANG['下一页'];?></a>
        </span>
        <?php endif ?>
    </div>
    
</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </body>
</html>

