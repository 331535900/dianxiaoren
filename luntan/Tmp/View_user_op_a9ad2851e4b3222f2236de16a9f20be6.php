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
<p class="sub-title"><?php echo $_LANG['个人资料'];?></p>
<p class="tip">Hi，<?php echo $data['user'];?>，<?php echo $_LANG['个人资料介绍'];?>。</p>
<!-- Page global message -->
</div>

<div class="dashboard-wrapper select-profile">
	<div id="profile">
		<ul class="user-msg">
			<li class="tip"><?php echo $data['user'];?> 来社区已经<?php echo diffBetweenTwoDays($data['atime'],NOW_TIME); ?><?php echo $_LANG['天了'];?></li>
		</ul>
		
		<table id="author-profile">
		<tbody>

		<tr>
			<td class="title">
				<?php echo $_LANG['用户名'];?>:
			</td>
			<td>
				<?php echo $data['user'];?>
			</td>
		</tr>

		<tr>
			<td class="title">
				注册邮箱:
			</td>
			<td>
				<?php echo $data['email'];?>
			</td>
		</tr>

		<tr>
			<td class="title">
				个人签名:
			</td>
    		<td>
    			<?php echo $data['ps'];?>
    		</td>
		</tr>
		</tbody>
		</table>

		<div class="page-header">
			<h3 id="info"><?php echo $_LANG['修改资料'];?> <small></small></h3>
		</div>
		
		<?php if (BBSCONF('on_edit_user')): ?>
		<form class="form-horizontal" action="<?php echo HYBBS_URL('user','edit'); ?>" method="post">
			<input type="hidden" name="gn" value="edit_username">
			<div class="form-group">
				<label for="display_name" class="col-sm-3 control-label"><?php echo $_LANG['用户名'];?></label>
				<div class="col-sm-9">
					<input class="" type="text" name="username" value="<?php echo $data['user'];?>"/>
					<span><?php echo $_LANG['usernamelength'];?></span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-success"><?php echo $_LANG['save'];?></button>
				</div>
			</div>
		</form>
		<?php endif ?>
		<form class="form-horizontal" action="<?php echo HYBBS_URL('user','edit'); ?>" method="post">
			<input type="hidden" name="gn" value="ps">
			<div class="form-group">
				<label for="display_name" class="col-sm-3 control-label"><?php echo $_LANG['个性签名'];?></label>
				<div class="col-sm-9">
					<input class="" type="text" name="ps" value="<?php echo $data['ps'];?>"/>
					<span><?php echo $_LANG['最大支持40个字符'];?></span>
				</div>
			</div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success"><?php echo $_LANG['保存资料'];?></button>
                </div>
            </div>
        </form>

		
        <form class="form-horizontal" action="<?php HYBBS_URL('user','ava'); ?>" method="post" enctype="multipart/form-data">
            <div class="page-header">
				<h3 id="info"><?php echo $_LANG['修改头像'];?> <small></small></h3>
			</div>
            <div class="form-group">
				<label class="col-sm-3 control-label"><?php echo $_LANG['头像'];?></label>
				<div class="col-sm-9">
					<div class="radio">
						<img style="display:block" src="<?php echo WWW;?><?php echo $data['avatar']['a'];?>" class="avatar avatar-80" height="80" width="80"><label>


					</div>

				</div>
			</div>
			<div class="form-group">
				<label for="display_name" class="col-sm-3 control-label"><?php echo $_LANG['选择头像文件'];?></label>
				<div class="col-sm-9">
					<input class="" type="file" name="photo" />
					<span>上传成功后，浏览器显示新头像会有延迟！</span>
				</div>
			</div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-success"><?php echo $_LANG['上传头像'];?></button>
                </div>
            </div>

        </form>
        
		<form action="<?php HYBBS_URL('user','edit'); ?>" class="form-horizontal" role="form" method="post">
			<input type="hidden" name="gn" value="pass">
			<div class="page-header">
				<h3><?php echo $_LANG['账号安全'];?> <small>修改登陆密码</small></h3>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">旧密码</label>
				<div class="col-sm-9">
					<input type="password" class="form-control" name="pass0">
					<span class="help-block">请输入当前用户所使用的密码</span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label"><?php echo $_LANG['新密码'];?></label>
				<div class="col-sm-9">
					<input type="password" class="form-control" name="pass1">
					<span class="help-block"><?php echo $_LANG['新密码提示'];?></span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label"><?php echo $_LANG['确认密码'];?></label>
				<div class="col-sm-9">
					<input type="password" class="form-control" name="pass2">
					<span class="help-block"><?php echo $_LANG['新密码提示A'];?></span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-success"><?php echo $_LANG['保存资料'];?></button>
				</div>
			</div>
		</form>
		



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

