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
                用户组 管理
            </h2>
            <div class="gallery-filter m-top-md m-bottom-md">
                <ul class="clearfix">
                    <li class="active"><a href="javascript:void(0)" data-toggle="modal" data-target="#normalModal"><i class="fa fa-plus"></i> 添加用户组</a></li>
                </ul>
            </div>
            
            <script>
          
            function del_group(id,obj){
                swal({
                    title: "确认删除？",
                    text: '切勿随意删除用户组，删除前先确认是否有用户正在使用该用户组。删除后无法恢复用户组！',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "删除",
                    cancelButtonText:'取消',

                }).then(
                    function(){
                        $(obj).attr("disabled", true);

                        $.post('<?php HYBBS_URL('admin','usergroup') ?>',{id:id,gn:'del'},function(e) {
                            $(obj).removeAttr("disabled");
                            if (e.error) {
                                swal(e.info,'页面自动刷新中...','success');
                                setTimeout(function(){
                                    location.reload();    
                                },500);
                                
                            }

                        }, 'json');
                    },
                    function(e){
                        console.log(e);
                    }
                );

               

            }
            function edit_forum(obj){
                var _this = $(obj);
                $('#edit-iid').val(_this.data('gid'));
                $('#edit-id').val(_this.data('gid'));
                // if(parseInt(_this.data('gid')) <= 3){
                //     $('#edit-id').attr('disabled','disabled');
                // }else{
                //     $('#edit-id').removeAttr('disabled');
                // }

                // if(parseInt(_this.data('gid')) == 1 || parseInt(_this.data('gid')) == 3){
                //     $('#edit-credits').attr('disabled','disabled');
                //     $('#edit-credits-max').attr('disabled','disabled');
                // }else{
                //     $('#edit-credits').removeAttr('disabled');
                //     $('#edit-credits-max').removeAttr('disabled');
                // }


                $('#edit-name').val(_this.data('name'));
                $('#edit-credits').val(_this.data('credits'));
                $('#edit-credits-max').val(_this.data('credits-max'));
                $('#edit-space-size').val(_this.data('space-size'));
                $('#edit-chat-size').val(_this.data('chat-size'));
                $('#edit-font-color').val(_this.data('font-color'));

                $('#edit-font-css').val($('#pre-'+_this.data('gid')).html());

                $('#normalModal1').modal('show')
            }
            // function edit_user(obj,id,type,b){



            //     $.post('<?php HYBBS_URL('admin','usergroup') ?>',{gn:3,id:id,b:b,type:type},function(e){
            //         if(e.error){
            //             var bb = b ? 0 : 1;
            //             if(b){
            //                 $(obj).attr('onclick',"edit_user(this,"+id+",'"+type+"',"+ bb +")");
            //                 $(obj).text("禁止");
            //                 $(obj).removeClass('btn-success').addClass('btn-danger');
            //             }else{
            //                 $(obj).attr('onclick',"edit_user(this,"+id+",'"+type+"',"+ bb +")");
            //                 $(obj).text("允许");
            //                 $(obj).removeClass('btn-danger').addClass('btn-success');
            //             }

            //         }
            //     },'json')
            // }

            window.onload = function(){
                $('.mui-switch-box input').click(function(){
                    loading('修改中');
                    var _this = $(this);
                    var gid   = _this.data('gid');
                    var type  = _this.data('type');
                    $.ajax({
                        url:'<?php HYBBS_URL('admin','usergroup') ?>',
                        type:'post',
                        data:{
                            gn:'edit_permission',
                            id:gid,
                            type:type,
                            b:_this.prop('checked') ? 0:1
                        },
                        dataType:'json',
                        success:function(e){
                            wait_close();
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
                            wait_close();
                        }

                    })
                });
            }


            </script>
            <div class="alert alert-success alert-custom alert-dismissible" role="alert">
                <i class="fa fa-warning m-right-xs"></i> <strong>积分段说明:</strong> 用户的积分处于用户组什么积分段则使用什么用户>
            </div>
            <div class="alert alert-danger alert-custom alert-dismissible" role="alert">
                <i class="fa fa-warning m-right-xs"></i> <strong>特殊说明:</strong> &lt;管理员&gt;&lt;新用户&gt;&lt;游客&gt; 这3个是HYBBS必须使用的用户组. 请勿删除!
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered m-top-md" id="dataTable" >
                    <thead>
                        <tr class="bg-dark-blue">
                            <th></th>
                            <?php foreach ($data as $v): ?>
                            <th><?php echo $v['name'];?> 
                                <button data-gid="<?php echo $v['gid'];?>" data-name="<?php echo $v['name'];?>" data-credits="<?php echo $v['credits'];?>" data-credits-max="<?php echo $v['credits_max'];?>" data-space-size="<?php echo $v['space_size'];?>" data-chat-size="<?php echo $v['chat_size'];?>" data-font-color="<?php echo $v['font_color'];?>" type="button" onclick="edit_forum(this)" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>
                                <?php if (!in_array($v['gid'],array(1,2,3))): ?>
                                <button type="button" onclick="del_group(<?php echo $v['gid'];?>,this)" class="pull- btn btn-danger btn-xs"><i class="fa fa-remove "></i> </button>
                                <?php endif ?>

                                 
                            </th>
                            <?php endforeach ?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GID</td>
                            <?php foreach ($data as $v): ?>
                            <td><?php echo $v['gid'];?></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>用户组名称</td>
                            <?php foreach ($data as $v): ?>
                            <td><font color="<?php echo $v['font_color'];?>" style="<?php echo $v['font_css'];?>"><?php echo $v['name'];?></font></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>积分段</td>
                            <?php foreach ($data as $v): ?>
                            <td><?php echo $v['credits'];?> ~ <?php echo $v['credits_max'];?></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>字体颜色</td>
                            <?php foreach ($data as $v): ?>
                            <td><?php echo $v['font_color'];?> <i style="background: <?php echo $v['font_color'];?>;float: left;width: 20px;height: 20px;display: inline-block;border-radius: 4px;margin-right:5px"></i></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>额外CSS</td>
                            <?php foreach ($data as $v): ?>
                            <td><pre id="pre-<?php echo $v['gid'];?>" style="max-height:200px"><?php echo $v['font_css'];?></pre></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>上传空间</td>
                            <?php foreach ($data as $v): ?>
                            <td><?php if ($v['gid'] != 3): ?><?php echo $v['space_size'];?>（kb）<?php endif ?></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>聊天记录空间</td>
                            <?php foreach ($data as $v): ?>
                            <td><?php if ($v['gid'] != 3): ?><?php echo $v['chat_size'];?>（b）<?php endif ?></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>目前用户量</td>
                            <?php foreach ($data as $v): ?>
                            <td><?php if ($v['gid'] != 3): ?><?php echo M('User')->count(['gid'=>$v['gid']]);?><?php endif ?></td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>权限管理</td>
                            <?php foreach ($data as $v): ?>
                            <td>-</td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>允许发帖</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    <input data-type="thread" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb1<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['thread']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb1<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>允许评论</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="post" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb2<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['post']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb2<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>允许按特@</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="mess" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb3<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['mess']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb3<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>上传图片</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="upload" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb4<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['upload']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb4<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>删除帖子</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="del" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb5<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['del']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb5<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>下载附件</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="down" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb6<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['down']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb6<?php echo $v['gid'];?>'></label>
                                </label>
                                
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>上传附件</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="uploadfile" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb7<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['uploadfile']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb7<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>上传视频</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="uploadvideo" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='uploadvideo-<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['uploadvideo']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='uploadvideo-<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>上传音频</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="uploadaudio" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='uploadaudio-<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['uploadaudio']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='uploadaudio-<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>隐藏帖子</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="thide" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb8<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['thide']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb8<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>帖子收费</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <?php if ($v['gid'] != 3): ?>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="tgold" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb9<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['tgold']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb9<?php echo $v['gid'];?>'></label>
                                </label>
                                <?php endif ?>
                            </td>
                            <?php endforeach ?>
                        </tr>
                        <tr>
                            <td>免金币购买</td>
                            <?php foreach ($data as $v): ?>
                            <td>
                                <label class="mui-switch-box">
                                    
                                    <input data-type="nogold" data-gid="<?php echo $v['gid'];?>" class='tgl tgl-ios' id='cb10<?php echo $v['gid'];?>' type='checkbox' <?php if ($v['json']['nogold']): ?>checked<?php endif ?>>
                                    <label class='tgl-btn' for='cb10<?php echo $v['gid'];?>'></label>
                                </label>
                            </td>
                            <?php endforeach ?>
                        </tr>

                    </tbody>
                </table>
                
            </div>
           
            

        </div><!-- ENd box  -->

    </div>

<!-- Modal -->
    <form method="post">
    <div class="modal fade" id="normalModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">添加分类</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="gn" value="add">
                    <div class="form-group">
                        <label for="">用户组 ID</label>
                        <input type="text" name="id" class="form-control" value="<?php $i=-1; foreach ($usergroup as $v) {
                                if($v['gid'] > $i)
                                    $i = $v['gid'];
                            }echo $i+1; ?>">
                        <span>如果这个ID与上面的出现重复,请自行修改 , 请勿使用 0 </span>
                    </div>
                    <div class="form-group">
                        <label for="">用户组 名称</label>
                        <input type="text" name="name" class="form-control" >

                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">积分所处(最低)</label>
                                <input type="text" name="credits" class="form-control" value="-1">
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">积分所处(最高)</label>
                                <input type="text" name="credits_max" class="form-control" value="-1">
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            
                            <div class="alert alert-info alert-custom alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-exclamation-circle m-right-xs"></i><strong>升级积分说明!</strong> 最低处写：0 最高处写：49 . 用户如果积分在 0 ~ 49 中 则使用该用户组。 如果最低 最高 任意一项填写 -1 都代表无法升级该用户组
                            </div>

                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="">文件空间大小(kb) 注意单位</label>
                        <input type="text" name="space_size" class="form-control" value="51200">
                        <span>"1024" 代表只有 "1M的上传储存空间大小", "1024*(N) = M" 给予多大的空间 . 建议: "51200", 也就是50M </span>
                    </div>
                    <div class="form-group">
                        <label for="">聊天记录储存空间大小(b) 注意单位</label>
                        <input type="text" name="chat_size" class="form-control" value="4294967295">
                        <span>填入 "1024" 代表 1KB, "4294967295" (4G)为最大</span>
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
                    <h4 class="modal-title">修改用户组</h4>
                </div>
                <div class="modal-body">
                   <input type="hidden" name="gn" value="edit">
                    <input type="hidden" name="iid" id="edit-iid">

                    <div class="form-group">
                        <label for="">用户组 ID</label>
                        <input name="id" id="edit-id" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">用户组 名称</label>
                        <input name="name" id="edit-name" type="text" class="form-control" >
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">积分所处(最低)</label>
                                <input type="text" id="edit-credits" name="credits" class="form-control" value="-1">
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">积分所处(最高)</label>
                                <input type="text" id="edit-credits-max" name="credits_max" class="form-control" value="-1">
                                <span></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            
                            <div class="alert alert-info alert-custom alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-exclamation-circle m-right-xs"></i><strong>升级积分说明!</strong> 最低处写：0 最高处写：49 . 用户如果积分在 0 ~ 49 中 则使用该用户组。 如果最低 最高 任意一项填写 -1 都代表无法升级该用户组
                            </div>

                        </div>
                    </div>
                    <span>输入 -1 代表该用户组是无法通过积分升级的!</span>
                    <div class="form-group">
                        <label for="">文件空间大小</label>
                        <input name="space_size" id="edit-space-size" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">聊天记录储存空间大小</label>
                        <input name="chat_size" id="edit-chat-size" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">字体颜色</label>
                        <input name="font_color" id="edit-font-color" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">额外CSS</label>
                        <textarea class="form-control" name="font_css" id="edit-font-css"></textarea>
                        <span>用户组名称外还包裹着一层font元素，可以在此元素下增加额外的CSS 用于包裹用户组名称</span>
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
