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
<header class="hy-header hy-fix-t hy-bo-b" style="background:#FFF;">
<a onclick="url_back()" class="hy-header-nav hy-header-left icon icon-chevron-small-left" style="color:#000"></a>
<h1 class="hy-header-title">回复详情</h1>
</header>
<section class="body" id="thread-body">
<div style="padding-bottom:5px">
	<div class="hy-box postlist">
		<table style="width: 100%;">
			<tbody>
				<tr>
					<td class="user">
						<a href="<?php HYBBS_URL('my',$post_data['user']); ?>" ajax="true" pos="right" class="avatar">
							<img src="<?php echo WWW;?><?php echo $post_data['avatar']['c'];?>">
				        </a>
					</td>
					<td style="padding-top: 10px;">
					    <div class="info">
					    	<h4 class="cl">
					        <a href="<?php HYBBS_URL('my',$post_data['user']); ?>" ajax="true" pos="right" class="info-user"><?php echo $post_data['user'];?></a>
							</h4>
					    	<p class="time"> <?php echo humandate($post_data['atime']) ?> 
					    	<?php if (IS_LOGIN ): ?>
			                    <?php if ($post_data['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP")): ?>
			                        <!-- 帖子作者 或者 管理员 -->
			                        <a class="" href="<?php HYBBS_URL('post','edit',['id'=>$post_data['pid']]);  ?>"><?php echo $_LANG['编辑'];?></a>
			                    <?php endif ?>
			                    <?php if ($post_data['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP") || is_forumg($forum,NOW_UID,$post_data['fid'])): ?>
			                        <!-- 作者 与 管理员 判断 -->
			                        <a href="javascript:void(0);" class="" onclick="del_thread(<?php echo $post_data['pid'];?>,'post')" ><?php echo $_LANG['删除帖子'];?></a>
			                    <?php endif ?>
			                    
			                <?php endif ?>
			                <a style="float:right;color: #929292;outline: 0;" href="javascript:void(0);" class=""  onclick="tp('post1',<?php echo $post_data['pid'];?>,this)" ><em><?php echo $post_data['goods'];?></em> <span style="margin-left: 4px;" class="icon icon-thumbs-up"></span></a>
			                </p> 

					    </div>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="content">
		  				<div class="ce">
		              		<?php echo $post_data['content'];?>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php if ($count): ?>
	<div class="hy-box postlist">
		<i class="icon-bubble" style="position: absolute;margin-top: 12px;font-size: 17px;margin-left: 3px;color: #B6B6B6;"></i>
		
		<table style="width: 100%;">
			<tbody id="post_post_tbody">
				<?php foreach ($post_post_data as $k => $v): ?>
				<tr>
					
					<td class="user">
						<a href="<?php HYBBS_URL('my',$v['user']); ?>" class="avatar">
							<img src="<?php echo WWW;?><?php echo $v['avatar']['c'];?>">
				        </a>
					</td>
					<td style="    padding-top: 10px;">
					    <div class="info">
					    	<h4 class="cl">
					        <a href="<?php HYBBS_URL('my',$v['user']); ?>" class="info-user"><?php echo $v['user'];?></a>
							</h4>
					    	<p class="time"> <?php echo humandate($v['atime']) ?> 
					    	<?php if (IS_LOGIN ): ?>
			                    <?php if ($v['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP")): ?>
			                        <!-- 帖子作者 或者 管理员 -->
			                        <a class="" href="<?php HYBBS_URL('post','edit',['id'=>$v['id']]);  ?>"><?php echo $_LANG['编辑'];?></a>
			                    <?php endif ?>
			                    <?php if ($v['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP") || is_forumg($forum,NOW_UID,$post_data['fid'])): ?>
			                        <!-- 作者 与 管理员 判断 -->
			                        <a href="javascript:void(0);" class="" onclick="del_thread(<?php echo $v['id'];?>,'post')" ><?php echo $_LANG['删除帖子'];?></a>
			                    <?php endif ?>
			                    
			                <?php endif ?>
			                <!-- <a style="float:right;color: #929292;" href="javascript:void(0);" class=""  onclick="tp2('post3',<?php echo $v['id'];?>,this)" ><em><?php echo $v['goods'];?></em> <span style="margin-left: 4px;" class="icon icon-thumbs-o-up"></span></a> -->
			                </p> 

					    </div>
					</td>
				</tr>
				<tr>
					
					<td colspan="2" class="content">
		  				<div class="ce">
		              		<?php echo $v['content'];?>
						</div>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<?php endif ?>
	<div onclick="" class="hy-box hy-bo-t" style="padding:10px;">
		<p onclick="load_post_post()" style="text-align: center;color: #787878;"><i class="icon-rotate-left "></i> <em class="loamore" style="font-size: 14px;">加载更多</em></p>
	</div>
</div>

</section>
<div class="post-box  hy-bo-t">
    <?php if (IS_LOGIN): ?>
	<div class="hy-box" style="font-size: 16px;">
		<div class="hy-input-box">
		<label style="font-weight: bold;
	    font-size: 1.4rem;">内容 <a href="javascript:void(0)" onclick="hide_post_box()">关闭评论</a></label>
		</div>
	    <div id="thread-post-editor" class="hy-editor" contenteditable="true">
	        
	    </div>
	</div>
	<link rel="stylesheet" type="text/css" href="<?php echo WWW;?>Plugin/hy_moblie_editor/hy_moblie.css">
	<div class="hy-box" style="padding:10px">
		<button type="button" id="post-thread-btn" class="hy-btn hy-btn-danger" >发 布</button>
	</div>
	<script type="text/javascript"> 
	$(function () {
	 
	    $("#post-thread-btn").click(function(){
	        var _obj = $(this);
	        _obj.attr('disabled','disabled');
	        _obj.text("提交中...");
	        
	        var forum = $("#forum").val();
	        $.ajax({
	         url: '<?php HYBBS_URL('post','post_post');?>',
	         type:"POST",
	         cache: false,
	         data:{
	             pid:<?php echo $post_data['pid'];?>,
	             content:$("#thread-post-editor").html(),
	             
	         },
	         dataType: 'json'
	     }).then(function(e) {
	         if(e.error){
	         	swal('发表成功','2秒后自动刷新页面','success');
	         	setTimeout(function(){
	         		window.location.reload();
	         	},2000);
	         }else{
	            $.hy.warning( e.info);
	         }
	         _obj.removeAttr('disabled');
	            _obj.text("发 布");
	       }, function() {
	         $.hy.warning( "请尝试重新提交");
	         _obj.removeAttr('disabled');
	            _obj.text("发 布");
	       });
	    })
	});
	</script>
    <?php else: ?>
        <a class="hy-btn hy-btn-block" href="<?php HYBBS_URL('user','login') ?>"><?php echo $_LANG['登陆后才可发表内容'];?></a>
    <?php endif ?>
</div>
<style type="text/css">
	.body{
		    background: #EDF6F7;
	}
</style>

<div class="hy-fix-b hy-bo-t" style="background: #f6f6f6;width:100%;padding:10px">
	<button type="button" onclick="open_post_box(this)" class="hy-btn hy-btn-danger hy-btn-outlined" style="border-radius: 3px;
    width: 100%;
    border: 1px solid #E2E2E2 !important;
    background: #FFF;
    text-align: left;
    color: #A9A9A9;"><i style="    color: #898989 !important;" class="icon icon-pencil2"></i> 编写评论</button>
</div>
<script type="text/javascript">
	window.post_<?php echo $post_data['pid'];?> = <?php echo $pageid+1;?>;
	window.post_<?php echo $post_data['pid'];?>_bool = false;
	function load_post_post(){
		if(window.post_<?php echo $post_data['pid'];?>_bool == true)
			return;
		window.post_<?php echo $post_data['pid'];?>_bool = true;
		$('.icon-rotate-left').addClass('fa-spin1');
		$('.loamore').text('正在加载中...');
		$.ajax({
			url:'<?php HYBBS_URL('thread','post',$post_data['pid'],EXP) ?>'+window.post_<?php echo $post_data['pid'];?>,
			type:'get',
			dataType:'html',
			success:function(e){
				$('.icon-rotate-left').removeClass('fa-spin1');
				$('.loamore').text('加载更多');

				window.post_<?php echo $post_data['pid'];?>_bool = false;
				var data = e.match(/<tbody id="post_post_tbody">([\s\S]+)<\/tbody>/);
				console.log(data);
				
				$('#post_post_tbody').append(data[1]);

				window.post_<?php echo $post_data['pid'];?>++;
			},
			error:function(e){
				$('.icon-rotate-left').removeClass('fa-spin1');
				$('.loamore').text('加载更多');
				window.post_<?php echo $post_data['pid'];?>_bool = false;
			}

		})
	}
	
</script>



</body>
</html>
