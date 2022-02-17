<?php !defined('HY_PATH') && exit('HY_PATH not defined.'); ?>
<!DOCTYPE html>
<html>
  	<head>
	    <meta charset="utf-8">
	    <title>HYBBS后台管理系统</title>
	    <meta name="renderer" content="webkit">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="renderer" content="webkit" />
		<meta name="viewport" content="width=device-width, user-scalable=yes" />
	    <meta name="description" content="">
	    <meta name="author" content="">
		<link rel="shortcut icon" href="<?php echo WWW;?>favicon.ico">
        <link href="<?php echo WWW;?>public/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo WWW;?>public/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo WWW;?>public/css/alert.css" rel="stylesheet">
		<!-- Simplify -->
		<link href="<?php echo WWW;?>public/admin/css/simplify.min.css?var=2.1" rel="stylesheet">
        <script type="text/javascript">
            var www="<?php echo WWW;?>";
            var exp="<?php echo EXP;?>";
        </script>
        <style type="text/css">
        	.table-responsive{
        		overflow: auto
        	}
        </style>
  	</head>
<div class="wrapper">
    <header class="top-nav">
    <div class="top-nav-inner">
        <div class="nav-header">
            <button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleSM">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav-notification pull-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i></a>
                    <span class="badge badge-danger bounceIn">1</span>
                    <ul class="dropdown-menu dropdown-sm pull-right user-dropdown">
                        <li class="user-avatar">
                            <img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" alt="" class="img-circle">
                            <div class="user-content">
                                <h5 class="no-m-bottom"><?php echo $user['user'];?></h5>
                                <div class="m-top-xs">
                                    <a href="<?php echo WWW;?>" class="m-right-sm">返回网站首页</a>
                                    <a href="<?php HYBBS_URL('admin','out') ?>">退出</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="<?php HYBBS_URL('admin') ?>">
                                后台主页
                                <span class="badge badge-danger bounceIn animation-delay2 pull-right">1</span>
                            </a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="<?php HYBBS_URL('admin','op') ?>">网站设置</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <a href="<?php echo WWW;?>" class="brand">
                <i class="fa fa-yc"></i><span class="brand-name">HY BBS</span>
            </a>
        </div>
        <div class="nav-container">
            <button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleLG">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav-notification">
                <li>
                    <a href="javascript:history.back(-1)">
                        <i class="fa fa-chevron-circle-left"></i>
                        返回上一页
                    </a>
                </li>
                <li>
                    <a href="javascript:;" onclick="location.href=location.href">
                        <i class="fa fa-retweet"></i>
                        刷新本页
                    </a>
                </li>
            </ul>
            <div class="pull-right m-right-sm">
                <div class="user-block hidden-xs">
                    <a href="#" id="userToggle" data-toggle="dropdown">
                        <img src="<?php echo WWW;?><?php echo $user['avatar']['b'];?>" alt="" class="img-circle inline-block user-profile-pic">
                        <div class="user-detail inline-block">
                            <?php echo $user['user'];?>
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </a>
                    <div class="panel border dropdown-menu user-panel">
                        <div class="panel-body paddingTB-sm">
                            <ul>

                                <li>
                                    <a href="<?php echo WWW;?>">
                                        <i class="fa fa-inbox fa-lg"></i><span class="m-left-xs">返回首页</span>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php HYBBS_URL('admin','out') ?>">
                                        <i class="fa fa-power-off fa-lg"></i><span class="m-left-xs">退出后台</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- ./top-nav-inner -->
</header>

    <aside class="sidebar-menu fixed">
	<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
		<div class="sidebar-inner scrollable-sidebar" style="overflow: hidden; width: auto; height: 100%;overflow-y: auto;">
			<div class="main-menu">
				<ul class="accordion">
					<li class="menu-header">
						Main Menu
					</li>
					<li class="bg-palette1 <?php if (METHOD_NAME == 'Index'): ?>active open<?php endif ?>">
						<a href="<?php HYBBS_URL('admin') ?>">
							<span class="menu-content block">
								<span class="menu-icon"><i class="block fa fa-home fa-lg"></i></span>
								<span class="text m-left-sm">首页</span>
							</span>
							<span class="menu-content-hover block">
								首页
							</span>
						</a>
					</li>
					<li class="bg-palette4 <?php if (METHOD_NAME == 'Op'): ?>active open<?php endif ?>">
						<a href="<?php HYBBS_URL('admin','op') ?>">
							<span class="menu-content block">
								<span class="menu-icon"><i class="block fa fa-cog fa-lg"></i></span>
								<span class="text m-left-sm">全局设置</span>
							</span>
							<span class="menu-content-hover block">
								全局设置
							</span>
						</a>
					</li>
					<li class="bg-palette2">
						<a href="<?php echo WWW;?>">
							<span class="menu-content block">
								<span class="menu-icon"><i class="block fa fa-desktop fa-lg"></i></span>
								<span class="text m-left-sm">网站首页</span>
							</span>
							<span class="menu-content-hover block">
								网站首页
							</span>
						</a>
					</li>
					<li class="openable bg-palette3 <?php if (METHOD_NAME == 'Forum_group' || METHOD_NAME == 'Forum' || METHOD_NAME == 'Forumg' || METHOD_NAME == 'Forum_json' ): ?>active open<?php endif ?>">
						<a href="#">
							<span class="menu-content block">
								<span class="menu-icon"><i class="block fa fa-list fa-lg"></i></span>
								<span class="text m-left-sm">板块分类</span>
								<span class="submenu-icon"></span>
							</span>
							<span class="menu-content-hover block">
								板块分类
							</span>
						</a>
						<ul class="submenu bg-palette4">
							<li><a <?php if (METHOD_NAME == 'Forum_group'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','forum_group') ?>" title="板块分组"><span class="submenu-label">大分组</span></a></li>
							<li><a <?php if (METHOD_NAME == 'Forum'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','forum') ?>" title="板块分类列表管理"><span class="submenu-label">分类管理</span></a></li>
							<li><a <?php if (METHOD_NAME == 'Forumg'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','forumg') ?>" title="板块分类 版主列表编辑"><span class="submenu-label">分类版主</span></a></li>
							<li><a <?php if (METHOD_NAME == 'Forum_json'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','forum_json') ?>" title="板块用户组列表权限控制"><span class="submenu-label">分类用户组权限</span></a></li>

						</ul>
					</li>
					<li class="openable bg-palette4 <?php if (METHOD_NAME == 'User' || METHOD_NAME == 'Usergroup'): ?>active open<?php endif ?>">
						<a href="#">
							<span class="menu-content block">
								<span class="menu-icon"><i class="block fa fa-users fa-lg"></i></span>
								<span class="text m-left-sm">用户管理</span>
								<span class="submenu-icon"></span>
							</span>
							<span class="menu-content-hover block">
								用户管理
							</span>
						</a>
						<ul class="submenu"  style="display: none;">
							<li><a <?php if (METHOD_NAME == 'User'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','user') ?>"><span class="submenu-label">用户管理</span></a></li>
							<li><a <?php if (METHOD_NAME == 'Usergroup'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','usergroup') ?>"><span class="submenu-label">用户组</span></a></li>

						</ul>
					</li>

					<li class="openable bg-palette3 <?php if (METHOD_NAME == 'Thread' || METHOD_NAME == 'Post' || METHOD_NAME == 'Post_post'): ?>active open<?php endif ?>">
						<a href="#">
							<span class="menu-content block">
								<span class="menu-icon">
								<i class="block fa fa-tags fa-lg"></i>
								</span>
								<span class="text m-left-sm">主题评论</span>	
								<span class="submenu-icon"></span>
							</span>
							<span class="menu-content-hover block">
								主题评论
							</span>
						</a>
						<ul class="submenu"  style="display: none;">
							<li><a <?php if (METHOD_NAME == 'Thread'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','Thread') ?>"><span class="submenu-label">文章管理</span></a></li>
							<li><a <?php if (METHOD_NAME == 'Post'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','Post') ?>"><span class="submenu-label">评论管理</span></a></li>
							<li><a <?php if (METHOD_NAME == 'Post_post'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','Post_post') ?>"><span class="submenu-label">子评论管理</span></a></li>

						</ul>
					</li>


					
					<li class="bg-palette2 <?php if (METHOD_NAME == 'View'): ?>active open<?php endif ?>">
						<a href="<?php HYBBS_URL('admin','view') ?>">
							<span class="menu-content block">
								<span class="menu-icon"><i class="block fa fa-paint-brush fa-lg"></i></span>
								<span class="text m-left-sm">外观&模板</span>

							</span>
							<span class="menu-content-hover block">
								外观模板
							</span>
						</a>
					</li>
					<li class="bg-palette3 <?php if (METHOD_NAME == 'Code'): ?>active open<?php endif ?>">
						<a href="<?php HYBBS_URL('admin','code') ?>">
							<span class="menu-content block">
								<span class="menu-icon"><i class="block fa fa-code fa-lg"></i></span>
								<span class="text m-left-sm">插件</span>

							</span>
							<span class="menu-content-hover block">
								插件
							</span>
						</a>
					</li>

					<li class="openable bg-palette4 <?php if (METHOD_NAME == 'Log' || METHOD_NAME == 'Log_php'): ?>active open<?php endif ?>">
						<a href="#">
							<span class="menu-content block">
								<span class="menu-icon">
								<i class="block fa fa-cube fa-lg"></i>
								</span>
								<span class="text m-left-sm">日志</span>
								<span class="submenu-icon"></span>
							</span>
							<span class="menu-content-hover block">
								日志
							</span>
						</a>
						<ul class="submenu"  style="display: none;">
							<li><a <?php if (METHOD_NAME == 'Log'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','Log') ?>"><span class="submenu-label">用户日志</span></a></li>
							<li><a <?php if (METHOD_NAME == 'Log_php'): ?>class="active"<?php endif ?> href="<?php HYBBS_URL('admin','Log_php') ?>"><span class="submenu-label">PHP日志</span></a></li>
							

						</ul>
					</li>

					

					

				</ul>
			</div>
			<div class="sidebar-fix-bottom clearfix">
				<div class="user-dropdown dropup pull-left">
					<a title="快捷菜单" href="javascript:;" class="dropdwon-toggle font-18" data-toggle="dropdown">
						<i class="fa fa-flickr"></i>
					</a>
					<ul class="dropdown-menu">
						<li class="dropdown-header"><i class="fa fa-flickr"></i> 快捷菜单</li>
						<li>
							<a href="javascript:;" onclick="delete_cache({'one1':true})">
								<i class="fa fa-trash"></i> 清空文件缓存
							</a>
						</li>
						<li>
							<a href="<?php HYBBS_URL('admin','view',['op'=>BBSCONF('theme')]) ?>" >
								<i class="fa fa-cog"></i> 配置PC模板
							</a>
						</li>
						<li>
							<a href="<?php HYBBS_URL('admin','view',['op'=>BBSCONF('wapview')]) ?>" >
								<i class="fa fa-cog"></i> 配置手机模板
							</a>
						</li>			  	  
						<li class="divider"></li>
						<li>
							<a href="<?php HYBBS_URL('admin','op') ?>"><i class="fa fa-cog"></i> 全局设置</a>
						</li>			  	  
					</ul>
				</div>
				<a title="注销后台账户" href="<?php HYBBS_URL('admin','out') ?>" class="pull-right font-18">
					<i class="fa fa-sign-out"></i>
				</a>
			</div>
			<script type="text/javascript">
			function delete_cache(data){
				swal({
		            title: "删除缓存",
		            text: '确认删除文件缓存！',
		            type: "warning",
		            confirmButtonColor: "#DD6B55",
		            confirmButtonText: "确定",
		            cancelButtonText: '取消',
		           //allowOutsideClick:false,
		           showCancelButton: true,
		        }).then(
		        	function() {
		        		$.ajax({
							url:'<?php HYBBS_URL('admin') ?>',
							type:'post',
							data:data,
							dataType:'json',
							success:function(e){
								if(e.error){
				                    swal('成功',e.info,'success');
				                }
				                else{
				                    swal('错误',e.info,'error');
				                }
							},error:function(e){

							}
						});
		            },
		            function(){

		            }
		        );
				
				

			}
			</script>
			
		</div>
		<div class="slimScrollBar" style="width: 0px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 651px; background: rgb(0, 0, 0);"></div>
		<div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div>
	</div><!-- sidebar-inner -->
</aside>

    <div class="main-container">
        <div class="padding-md">
            <h2 class="header-text no-margin">
                用户管理
            </h2>
            <script>
            function edit_forum(uid, user, gid, email, gold, credits) {

                $("#edit0").val(uid);
                $("#edit1").val(user);
                $("#edit2").val(gid);
                $("#edit3").val(email);
                $("#edit7").val(gold);
                $("#edit8").val(credits);

                $('#normalModal1').modal('show')
            }

            function deluser(id, obj) { //删除用户
            
                swal({
                    title: "确认删除？",
                    text: '一旦删除该用户，用户下的所有数据将被删除，包括所有上传的文件，图片，文章，评论等等！',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "删除",
                    cancelButtonText:'取消',

                }).then(
                    function(){
                        $(obj).attr("disabled", true);

                        $.post('<?php HYBBS_URL('admin','user') ?>',{id:id,gn:'del'},function(e) {
                            $(obj).removeAttr("disabled");
                            if (e.error) {
                                $(obj).parent().parent().remove();
                                swal(e.info);
                            }

                        }, 'json');
                    },
                    function(e){
                        console.log(e);
                    }
                );
                
            }
            </script>
            <div class="row" style="    margin-top: 10px;">
                <div class="col-md-3">
                    <div class="widget-stat clearfix">
                        <span class="stat-icon bg-info bounceIn animation-delay3"><i class="fa fa-users"></i></span>
                        <div class="stat-info">
                            <small class="text-muted text-upper">站点用户数量</small>
                            <span><?php echo S('User')->count() ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-stat clearfix">
                        <span class="stat-icon bg-success bounceIn animation-delay3"><i class="fa fa-user-plus"></i></span>
                        <div class="stat-info">
                            <small class="text-muted text-upper">今日注册</small>
                            <span><?php echo S('User')->count(['atime[>]'=>strtotime(date('Y-m-d'))]) ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="">
                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <span class="fa fa-search" aria-hidden="true"></span> 搜索用户
                </button>

                <button class="btn btn-success" href="javascript:void(0)" data-toggle="modal" data-target="#normalModal"><i class="fa fa-plus"></i> 添加用户</button>

                <div style="margin-top:10px" class="collapse <?php if (X('get.search_submit')): ?>in<?php endif ?>" id="collapseExample">
                    <div class="well">
                        <form action="<?php HYBBS_URL(ACTION_NAME,METHOD_NAME,['pageid'=>1]) ?>" method="get" class="form-horizontal" onsubmit="return search_from(this)">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="uid" class="col-sm-2 control-label">UID</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="uid" placeholder="完整用户UID" value="<?php echo X('get.uid') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-sm-2 control-label">用户名</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="user" class="form-control" placeholder="完整用户名" value="<?php echo X('get.user') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_key" class="col-sm-2 control-label">模糊用户名</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="user_key" placeholder="模糊搜索用户名" value="<?php echo X('get.user_key') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">邮箱</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="email" placeholder="完整邮箱" value="<?php echo X('get.email') ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_key" class="col-sm-2 control-label">模糊邮箱</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="email_key" placeholder="筛选某文章下的评论, 输入完整TID" value="<?php echo X('get.email_key') ?>">
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gid" class="col-sm-2 control-label">用户组</label>
                                        <div class="col-sm-10">
                                            <select name="gid" class="form-control">
                                              <option value="-1">不筛选</option>
                                              <?php foreach (S('usergroup')->select('*',['ORDER'=>['gid'=>'ASC']]) as $v): ?>
                                              <option value="<?php echo $v['gid'];?>" <?php if (X('get.gid') == $v['gid']): ?>selected<?php endif ?>>[<?php echo $v['gid'];?>] <?php echo $v['name'];?></option>
                                              <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">登陆状态</label>
                                        <div class="col-sm-10">
                                          <select name="ban_login" class="form-control">
                                              <option value="0">不筛选</option>
                                              <option value="1" <?php if (X('get.ban_login') == 1): ?>selected<?php endif ?>>允许登陆</option>
                                              <option value="2" <?php if (X('get.ban_login') == 2): ?>selected<?php endif ?>>禁止登陆</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">发言状态</label>
                                        <div class="col-sm-10">
                                          <select name="ban_post" class="form-control">
                                              <option value="0">不筛选</option>
                                              <option value="1" <?php if (X('get.ban_post') == 1): ?>selected<?php endif ?>>允许发贴</option>
                                              <option value="2" <?php if (X('get.ban_post') == 2): ?>selected<?php endif ?>>禁止发贴</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="col-md-5 col-md-offset-2">
                                            <input type="hidden" name="search_submit" value="search_submit">
                                            <button type="submit" name="search_submit" value="search_submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span> 搜索
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- 搜索 -->
            <form action="" method="post" onsubmit="return confirm('确定操作吗？');">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered m-top-md" id="dataTable">
                        <thead>
                            <tr class="bg-dark-blue">
                                <th>
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="chkx" onclick="if($(this).is(':checked'))$('.checkboxx').prop('checked','checked'); else $('.checkboxx').attr('checked',false);">
                                        <label for="chkx"></label>
                                    </div>
                                </th>
                                <th>用户信息</th>
                                <th>权限信息</th>
                                <th>发表数量</th>
                                <th>货币积分</th>
                                <th>粉丝</th>
                                <th>关注</th>
                                <th>已用空间</th>
                                <th>注册时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $v): ?>
                            <tr>
                                <td>
                                    <div class="custom-checkbox">
                                        <input name="id[]" value="<?php echo $v['uid'];?>" class="checkboxx" type="checkbox" id="chk<?php echo $v['uid'];?>">
                                        <label for="chk<?php echo $v['uid'];?>"></label>
                                    </div>
                                </td>
                                <td>
                                    <p>UID：<?php echo $v['uid'];?></p>
                                    <p>用户名：<?php echo $v['user'];?></p>
                                    <p>邮箱：<?php echo $v['email'];?></p>
                                </td>
                                <td>
                                    <p>用户组GID：<?php echo $v['gid'];?></p>
                                    <p>用户组名称：<?php echo $usergroup[$v['gid']]['name'];?></p>
                                    <?php if (C('ADMIN_GROUP') != $v['gid']): ?>
                                    <label class="mui-switch-box">
                                        <span>允许登陆：</span>
                                        <input data-type="login" data-uid="<?php echo $v['uid'];?>" class='tgl tgl-ios' id='cb1<?php echo $v['uid'];?>' type='checkbox' <?php if ($v[ 'ban_login']==0 ): ?>checked<?php endif ?>>
                                        <label class='tgl-btn' for='cb1<?php echo $v['uid'];?>'></label>

                                    </label>
                                    <label style="display:block;margin-top:5px" class="mui-switch-box">
                                        <span>允许发言：</span>

                                        <input data-type="post" data-uid="<?php echo $v['uid'];?>" class='tgl tgl-ios' id='cb2<?php echo $v['uid'];?>' type='checkbox' <?php if ($v[ 'ban_post']==0 ): ?>checked<?php endif ?>>
                                        <label class='tgl-btn' for='cb2<?php echo $v['uid'];?>'></label>

                                    </label>
                                    <?php endif ?>
                                </td>
                                <td>
                                    <p>文章数量：<?php echo $v['threads'];?></p>
                                    <p>评论数量：<?php echo $v['posts'];?></p>
                                    <p>子评论数量：<?php echo $v['post_ps'];?></p>
                                </td>
                                <td>
                                    <p>金币数量：<?php echo $v['gold'];?></p>
                                    <p>积分数量：<?php echo $v['credits'];?></p>
                                </td>
                                <td><?php echo $v['follow'];?></td>
                                <td><?php echo $v['fans'];?></td>
                                <td>
                                    <p>上传：<?php echo $v['file_size'];?>kb</p>
                                    <p>聊天：<?php echo $v['chat_size'];?>b</p>
                                </td>
                                <td>
                                    <?php echo empty($v['atime'])?'史前生物':date("Y-m-d H:i:s",$v['atime']) ?>
                                </td>
                                <td>
                                    <button type="button" onclick="edit_forum(<?php echo $v['uid'];?>,'<?php echo $v['user'];?>',<?php echo $v['gid'];?>,'<?php echo $v['email'];?>',<?php echo $v['gold'];?>,<?php echo $v['credits'];?>)" class="btn btn-success btn-xs">编辑</button>
                                    <?php if (C('ADMIN_GROUP') != $v['gid']): ?>
                                    <button type="button" onclick="deluser(<?php echo $v['uid'];?>,this)" class="btn btn-danger btn-xs">删除</button>
                                    <?php endif ?>
                                    <div class="btn-group marginTB-x navbar-right">
                                    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">操作 <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                                        <li><a href="javascript:;" onclick="clean_user(<?php echo $v['uid'];?>,'del_thread')">删除所有文章</a></li>
                                        <li><a href="javascript:;" onclick="clean_user(<?php echo $v['uid'];?>,'del_post')">删除所有评论</a></li>
                                        <li><a href="javascript:;" onclick="clean_user(<?php echo $v['uid'];?>,'del_post_post')">删除所有子评论</a></li>
                                        <li><a href="javascript:;" onclick="clean_user(<?php echo $v['uid'];?>,'del_file')">删除所有已上传文件</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:;" onclick="clean_user(<?php echo $v['uid'];?>,'del_follow')">清空关注列表</a></li>
                                        <li><a href="javascript:;" onclick="clean_user(<?php echo $v['uid'];?>,'del_chat')">清空聊天记录</a></li>
                                    </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-custom alert-dismissible" role="alert">
                            <i class="fa fa-times-circle m-right-xs"></i> <strong>特殊警告!</strong> 当你删除用户后，他的所有文章，评论，附件，文件，图片，聊天记录，好友粉丝等。有关他的一切数据都会被删除。而且无法恢复数据！
                        </div>
                        
                        <button type="submit" name="gn" value="del_more" class="btn btn-danger"><i class="fa fa-trash"></i> 彻底删除</button>
                        
                    </div>
                </div>
            </form>
            <nav aria-label="..." class="text-center">
                <ul class="pagination ">
                <?php if ($pageid!=1): ?>
                    <li class="">
                        <a href="<?php HYBBS_URl(ACTION_NAME,METHOD_NAME,['pageid'=>$pageid-1]) ?><?php echo $x;?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                    </li>
                <?php endif ?>
                <?php $tmp = $page_count ?>

                <?php for ($i=($pageid-5 < 1) ? 1 : $pageid -5; $i< (($pageid + 5 > $tmp) ? $tmp+1 : $pageid + 5) ; $i++): ?>
                <li class="<?php if ($pageid == $i): ?>active<?php endif ?>">
                    <a href="<?php HYBBS_URl(ACTION_NAME,METHOD_NAME,['pageid'=>$i]) ?><?php echo $x;?>"  >
                    <?php echo $i;?>
                    </a>
                </li>
                <?php endfor ?>
                <?php if ($pageid!=$page_count): ?>
                <li>
                    <a href="<?php HYBBS_URl(ACTION_NAME,METHOD_NAME,['pageid'=>$pageid+1]) ?><?php echo $x;?>" aria-label="Next"><span aria-hidden="true">»</span></a>
                </li>
                <?php endif ?>
                </ul>
            </nav>
        </div>
        <!-- ENd box  -->
    </div>

<!-- Modal -->
<form method="post">
    <div class="modal fade" id="normalModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">添加用户</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="gn" value="add">
                    <div class="form-group">
                        <label for="">用户名</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">用户组</label>
                        <select class="form-control" name="group">
                            <?php foreach ($usergroup as $v): ?>
                            <option value="<?php echo $v['gid'];?>" <?php if ($v['gid']==2): ?>selected="selected"<?php endif ?>><?php echo $v['name'];?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">邮箱</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">密码</label>
                        <input type="text" name="pass" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form method="post">
    <div class="modal fade" id="normalModal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">修改用户</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="gn" value="edit">
                    <input type="hidden" name="id" id="edit0">
                    <div class="form-group">
                        <label for="">用户名</label>
                        <input name="user" id="edit1" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">用户组</label>
                        <select class="form-control" id="edit2" name="group">
                            <?php foreach ($usergroup as $v): ?>
                            <option value="<?php echo $v['gid'];?>"><?php echo $v['name'];?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">邮箱</label>
                        <input name="email" id="edit3" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">密码 (留空则不修改)</label>
                        <input name="pass" id="" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">金币</label>
                        <input name="gold" id="edit7" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">积分</label>
                        <input name="credits" id="edit8" type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- !Modal -->

<script type="text/javascript">
    function search_from(obj){
        var data = $(obj).serialize();
        window.location.href='<?php HYBBS_URL(ACTION_NAME,METHOD_NAME) ?>?'+data;//+'&pageid=1';
        return false;
    }

    window.onload = function(){
        $('.mui-switch-box input').click(function(){
            var _this = $(this);
            var uid   = _this.data('uid');
            var type  = _this.data('type');
            $.ajax({
                url:'<?php HYBBS_URL('admin','ajax_user_switch') ?>',
                type:'post',
                data:{
                    uid:uid,
                    type:type
                },
                dataType:'json',
                success:function(e){
                    if(!e.error){
                        swal('无法切换',e.info,'error');
                    }
                    else{
                        if(e.state){
                            _this.removeAttr("checked"); 
                            console.log('禁止使用');
                            
                        }else{
                            _this.attr("checked","true");
                            console.log('开放');
                        }
                        
                    }

                },
                error:function(e){

                }

            })
        });
    }
    function clean_user(uid,type){
        var a = {
            del_thread:'删除所有文章',
            del_post:'删除所有评论',
            del_post_post:'删除所有子评论',
            del_file:'删除所有已上传文件',
            del_follow:'清空关注列表',
            del_chat:'清空聊天记录'
        };
        swal({
            title: "确认操作",
            text: a[type],
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "确定",
            cancelButtonText: '取消',
            closeOnConfirm: false,
        }).then(
            function() {
                $.ajax({
                    url: '<?php HYBBS_URL('admin','ajax_clean_user') ?>' ,
                    type: "POST",
                    cache: false,
                    data: {
                        uid: uid,
                        type:type
                    },
                    dataType: 'json'
                }).then(function(e) {
                    swal(e.error ? "操作成功" : "操作失败", e.info, e.error ? "success" : "error");
                    /*if (e.error) {
                        setTimeout(function() {
                            if (type == 'thread')
                                window.location.href = www;
                            else
                                window.location.reload();

                        }, 1000);
                    }*/

                }, function() {
                    swal("失败", "请尝试重新提交", "error");
                });
            },
            function() {

            }

        );
    }
</script>
	<footer class="footer">
	    <span class="footer-brand">
			<strong ><a class="text-danger" href="http://bbs.hyphp.cn/" target="_blank">HYBBS</a></strong> 后台管理 Version <?php echo HYBBS_V;?>
		</span>
	    <!-- <p class="no-margin">
	        &copy; 2018 <strong><a class="text-danger" href="http://bbs.hyphp.cn/" target="_blank">HYBBS</a></strong> 后台管理</strong>. ALL Rights Reserved.
	    </p> -->
	</footer>
	</div>
	<!-- Jquery -->
	<script src="<?php echo WWW;?>public/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo WWW;?>public/admin/bootstrap/js/bootstrap.min.js"></script>
	<!-- Slimscroll -->
	<script src='<?php echo WWW;?>public/admin/js/jquery.slimscroll.min.js'></script>
	<!-- Simplify -->
	<script src="<?php echo WWW;?>public/admin/js/simplify.js"></script>
	<script src="<?php echo WWW;?>public/js/sweet-alert.min.js"></script>
	<script>
	$(function() {
	    $('#lockScreen').modal({
	        show: true,
	        backdrop: 'static'
	    })
	});
	</script>
	</body>

</html>