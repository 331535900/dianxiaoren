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

<h1 class="hy-header-title" onclick="$.hy.popover_bottom_show()"><?php echo $_LANG['帖子菜单'];?><span class="icon icon-circle-down" style="font-size: 17px;padding: 8px;" ></span></h1>


<?php if (ACTION_NAME != 'User'): ?>
<a class="hy-header-nav hy-header-right icon icon-dots-two-horizontal" style="font-size: 34px;padding: 7px;" onclick="$.hy.popover_bottom_show()"></a>
<?php endif ?>

</header>


<style type="text/css">
  .icon-chevron-small-left, .icon {
    color: #337ab7 !important;
}

</style>

<!-- 滑动 -->
<div class="hy-popover-bottom">
    
    <ul class="hy-table-view">
    
        <?php if (IS_LOGIN ): ?>
            <?php if (NOW_GID == C("ADMIN_GROUP")): ?>
            <li class="hy-table-view-cell">
            	<?php if ($thread_data['top'] == 2): ?>
                <a class="hy-font-danger" onclick="thread_top(<?php echo $thread_data['tid'];?>,'off',2)"><?php echo $_LANG['取消全站置顶'];?> </a>
                <?php else: ?>
                <a onclick="thread_top(<?php echo $thread_data['tid'];?>,'on',2)"><?php echo $_LANG['全站置顶'];?> </a>
                <?php endif ?>
            </li>
            <?php endif ?>
            <?php if (NOW_GID == C("ADMIN_GROUP") || is_forumg($forum,NOW_UID,$thread_data['fid'])): ?>
            <li class="hy-table-view-cell">
            	<?php if ($thread_data['top'] == 1): ?>
                <a class="hy-font-danger" onclick="thread_top(<?php echo $thread_data['tid'];?>,'off',1)"><?php echo $_LANG['取消板块置顶'];?> </a>
                <?php else: ?>
                <a onclick="thread_top(<?php echo $thread_data['tid'];?>,'on',1)"><?php echo $_LANG['板块置顶'];?> </a>
                <?php endif ?>
            </li>
            <li class="hy-table-view-cell">
                <?php if ($thread_data['digest'] == 1): ?>
                <a class="hy-font-danger" onclick="thread_digest(<?php echo $thread_data['tid'];?>,0)"><?php echo $_LANG['取消加精'];?> </a>
                <?php else: ?>
                <a onclick="thread_digest(<?php echo $thread_data['tid'];?>,1)"><?php echo $_LANG['加精'];?> </a>
                <?php endif ?>
            </li>
            <?php endif ?>
            <li class="hy-table-view-cell">
                <?php if ($thread_data['star']): ?>
                <a class="hy-font-danger" onclick="star(<?php echo $thread_data['tid'];?>,this)">取消收藏 </a>
                <?php else: ?>
                <a onclick="star(<?php echo $thread_data['tid'];?>,this)">收藏 </a>
                <?php endif ?>
            </li>
            <?php if ($thread_data['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP") || is_forumg($forum,NOW_UID,$thread_data['fid'])): ?>
            <li class="hy-table-view-cell">
                <a class="hy-font-purple" href="<?php HYBBS_URL('post','edit',['id'=>$post_data['pid']]);  ?>"><?php echo $_LANG['编辑文章'];?> </a>
            </li>
            <li class="hy-table-view-cell">
                <a class="hy-font-warning" onclick="set_state(<?php echo $thread_data['tid'];?>,<?php echo $thread_data['state'];?>)"><?php if ($thread_data['state']): ?><?php echo $_LANG['解锁帖子'];?><?php else: ?><?php echo $_LANG['锁定帖子'];?><?php endif ?> </a>
            </li>
            
            <li class="hy-table-view-cell">
                <a class="hy-font-danger" onclick="del_thread(<?php echo $thread_data['tid'];?>,'thread')" ><?php echo $_LANG['删除帖子'];?> </a>
            </li>
            <?php endif ?>
        <?php endif ?>
        
    </ul> 
    
    <ul class="hy-table-view">
        
    	<li class="hy-table-view-cell">
    		<a href="<?php HYBBS_URL('thread',$thread_data['tid']) ?>?order=desc"><?php echo $_LANG['最新评论'];?> <?php if (X("get.order") == 'desc'): ?><span class="hy-lable hy-lable-success"><?php echo $_LANG['当前'];?></span><?php endif ?></a>
    	</li>
    	<li class="hy-table-view-cell">
    		<a href="<?php HYBBS_URL('thread',$thread_data['tid']) ?>"><?php echo $_LANG['最早评论'];?> <?php if (X("get.order") != 'desc'): ?><span class="hy-lable hy-lable-success"><?php echo $_LANG['当前'];?></span><?php endif ?></a>
    	</li>
        
    	
    </ul>
    
    
</div>


<section class="body" id="thread-body">
<div style="padding-bottom:5px">

	<div class="hy-box thread-index" style="margin-bottom: 0;padding-bottom: 0;padding-top: 0;">
	
		<h2><?php echo $thread_data['title'];?><?php if ($thread_data['digest']): ?> <i class="icon icon-fire" title="<?php echo $_LANG['精'];?>" style="color: tomato !important;    font-size: inherit;"></i><?php endif ?>
		        	<?php if ($thread_data['state']): ?> <i class="icon icon-lock" title="<?php echo $_LANG['禁止回复'];?>" style="color: grey !important;    font-size: inherit;"></i><?php endif ?></h2>
		
		<p class="cl">
			<a href="<?php HYBBS_URL('my',$thread_data['user']); ?>" class="user">
				<img src="<?php echo WWW;?><?php echo $thread_data['avatar']['b'];?>" class="avatar"><?php echo $thread_data['user'];?>
			</a>
			<em class=""><?php echo humandate($thread_data['atime']) ?></em>
		</p>
		
	</div>
	
	<div class="hy-box thread-cen thread-content">
	
		<?php if ($thread_data['show'] && $thread_data['gold_show']): ?>
		<?php echo $post_data['content'];?>
		<?php else: ?>
		<?php if ($thread_data['gold_show']): ?>
          <blockquote style="color: #B75C5C;font-weight: bold;">
          <?php echo $_LANG['内容隐藏提示'];?>
          </blockquote>
          <?php else: ?>
          <blockquote style="color: #B75C5C;font-weight: bold;">
          <?php echo $_LANG['内容需要付费'];?> <a href="javascript:void(0);" onclick="buy_thread(<?php echo $thread_data['tid'];?>,<?php echo $thread_data['gold'];?>)">(<?php echo $_LANG['点击购买'];?>)</a> <?php echo $_LANG['售价'];?>：<?php echo $thread_data['gold'];?> <?php echo $_LANG['金币'];?>
          </blockquote>
          <?php endif ?>
        <?php endif ?>
    
		<div class="baod">
		<ul class="hy-lable-group">
			<?php if ($forum[$thread_data['fid']]['fid'] != -1): ?>
	        <li style="word-spacing: -0.35em;">
	            <a style="background:<?php echo forum($forum,$forum[$thread_data['fid']]['fid'],'background'); ?>;color:<?php echo forum($forum,$forum[$thread_data['fid']]['fid'],'color'); ?>;" href="<?php HYBBS_URL('forum',$forum[$thread_data['fid']]['fid']) ?>" class="hy-lable hy-lable-zz"><?php echo forum($forum,$forum[$thread_data['fid']]['fid'],'name'); ?></a>
	        </li>
	        <?php endif ?>
	        <li>
	            <a style="background:<?php echo forum($forum,$thread_data['fid'],'background'); ?>;color:<?php echo forum($forum,$thread_data['fid'],'color'); ?>;border-top-right-radius: 3px;border-bottom-right-radius: 3px;"  href="<?php HYBBS_URL('forum',$thread_data['fid']) ?>" class="hy-lable hy-lable-zz"><?php echo forum($forum,$thread_data['fid'],'name'); ?></a>
	        </li>
	     </ul>
			
		</div>
	</div>
	<?php if ($thread_data['files']): ?>
	
	<div class="hy-box hy-bo-t" style="padding:10px">
		<h2 class="hy-bo-b" style="padding-bottom:5px"><?php echo $_LANG['附件列表'];?></h2>
		
		<?php foreach ($filelist as $v): ?>
		
	     <?php if ($v['show']): ?>
	      <p style="padding:10px 0;font-size:18px">
	        <a href="javascript:void(0);" onclick="hy_downfile(<?php echo $v['fileid'];?>)"><?php echo $v['name'];?></a>
	        <i style="color: grey;    font-size: 14px;">&nbsp;&nbsp;<?php echo $_LANG['文件大小'];?>:<?php echo round($v['size']/1024/1024,2); ?>M (<?php echo $_LANG['下载次数'];?>：<?php echo $v['downs'];?>)</i>
	        <?php if ($v['gold']): ?>
	        <span style="color: brown;"> &nbsp;&nbsp;<?php echo $_LANG['售价'];?>:<?php echo $v['gold'];?></span>
	        <?php endif ?>
	      </p>
	      <?php else: ?>
	      <p style="padding:10px 0;font-size:18px">
	        <a href="javascript:void(0);"  style="color: #c31d1d;"><?php echo $_LANG['附件隐藏提示'];?></a>
	      </p>
	     <?php endif ?>
	     
	     <?php endforeach ?>
	     
	</div>
	<?php endif ?>
	
	<div class="hy-box postlist">
	
	<table style="width: 100%;">
		<?php $DataModel = M('Data');$User = M('User'); ?>
		<?php $floor=1; ?>
		<?php foreach ($PostList as $k => $v): ?>
		<?php if ($v['rpid']): ?>
        	<?php $quote_data = $DataModel->get_post_data($v['rpid']) ?>
        <?php endif ?>
		
		<tr>
			
			<td class="user">
				<a href="<?php HYBBS_URL('my',$v['user']); ?>" class="avatar">
					<img src="<?php echo WWW;?><?php echo $v['avatar']['c'];?>">
		        </a>
			</td>
			
			<td class="content">
			    <div class="info">
			    	<h4 class="cl">
			        <a href="<?php HYBBS_URL('my',$v['user']); ?>" class="info-user"><?php echo $v['user'];?></a>
					</h4>
			    	<p class="time"><em># <?php echo $floor++ + (($pageid-1) * $conf['postlist']);?><?php echo $_LANG['楼'];?></em> <?php echo humandate($v['atime']) ?> 
			    	<a class="ic" href="<?php HYBBS_URL('thread','post',$v['pid']); ?>" ajax="true" pos="right">
			        	
			        	<?php if ($v['posts']): ?>
			        	 <?php echo $v['posts'];?> 条点评
			        	<?php else: ?>
			        	 点评
			        	<?php endif ?>
			        </a>


			    	<?php if (IS_LOGIN ): ?>
			    		<a href="javascript:;" class="" data-pid="<?php echo $v['pid'];?>" data-uid="<?php echo $v['uid'];?>" data-avatar="<?php echo WWW;?><?php echo $v['avatar']['b'];?>" data-user="<?php echo $v['user'];?>" data-time="<?php echo $v['atime_str'];?>" onclick="jump_post(this)">回复帖子</a>
	                    <?php if ($v['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP")): ?>
	                        <!-- 帖子作者 或者 管理员 -->
	                        <a class="" href="<?php HYBBS_URL('post','edit',['id'=>$v['pid']]);  ?>"><?php echo $_LANG['编辑'];?></a>
	                    <?php endif ?>
	                    <?php if ($v['uid'] == NOW_UID || NOW_GID == C("ADMIN_GROUP") || is_forumg($forum,NOW_UID,$thread_data['fid'])): ?>
	                        <!-- 作者 与 管理员 判断 -->
	                        <a href="javascript:void(0);" class="" onclick="del_thread(<?php echo $v['pid'];?>,'post')" ><?php echo $_LANG['删除帖子'];?></a>
	                    <?php endif ?>
	                    
	                <?php endif ?>
	                </p> 

			    </div>
  				<div class="ce">
  				
              		<?php if ($v['rpid']): ?>
	            	<div class="quote-bx quote-box" style="display: block;">
					    
					    <div class="quote-bx">
					        <div class="quote-left">
					            <img class="quote-avatar" src="<?php echo WWW;?><?php echo get_avatar($quote_data['uid'])['b'];?>">
					        </div>
					        <div class="quote-info">
					            <p class="quote-user"><?php echo $User->uid_to_user($quote_data['uid']);?></sppan>
					            <p class="quote-time"><?php echo humandate($quote_data['atime']);?></p>
					        </div>
					    </div>
					    <div class="quote-content">
					    	<?php echo $quote_data['content'];?>
					    </div>
					</div>
					<?php endif ?>
  					<div id="pid-<?php echo $v['pid'];?>" class="post-content">
              		<?php echo $v['content'];?>
              		</div>
              	
				</div>
    
			</td>
			
		</tr>
		
		<?php endforeach ?>
		
	</table>
	
	</div>
	<div class="hy-box hy-bo-t" style="padding:10px">
	
		<a href="<?php if ($pageid==1): ?>javascript:void(0);<?php else: ?><?php HYBBS_URL('thread',$thread_data['tid'],$pageid-1); ?><?php echo X("get.order")?"?order=desc":''; ?><?php endif ?>" class="hy-btn hy-btn-danger l <?php if ($pageid==1): ?>disabled<?php endif ?>"><?php echo $_LANG['上一页'];?></a>
		
		<a href="<?php if ($pageid==$page_count): ?>javascript:void(0);<?php else: ?><?php HYBBS_URL('thread',$thread_data['tid'],$pageid+1); ?><?php echo X("get.order")?"?order=desc":''; ?><?php endif ?>" class="hy-btn hy-btn-danger r <?php if ($pageid==$page_count): ?>disabled<?php endif ?>"><?php echo $_LANG['下一页'];?></a>
		<div style="clear: both;"></div>
	
	</div>
</div>
</section>

<div class="hy-fix-b hy-bo-t" style="background: #f6f6f6;width:100%;padding:10px">

	<button type="button" onclick="open_post_box(this)" class="hy-btn hy-btn-danger hy-btn-outlined" style="border-radius: 15px;width:40%"><?php echo $_LANG['评论'];?></button>
	
	<div class="r post-div" style="width:19%">
		
		<a onclick="tp('thread2',<?php echo $thread_data['tid'];?>,this)">
			<i class="icon icon-thumbs-o-down"></i>
			<?php echo $_LANG['踩'];?> (<span><?php echo $thread_data['nos'];?></span>)
		</a>
		
	</div>
	
	<div class="r post-div"  style="width:19%">
		<a onclick="tp('thread1',<?php echo $thread_data['tid'];?>,this)">
			<i class="icon icon-thumbs-o-up"></i>
			<?php echo $_LANG['赞'];?> (<span><?php echo $thread_data['goods'];?></span>)
		</a>
	</div>
	
	<div class="r post-div"  style="width:19%">
		<a >
			<i class="icon icon-hand-pointer-o"></i>
			<?php echo $_LANG['查看'];?> (<span><?php echo $thread_data['views'];?></span>)
		</a>
	</div>

	
</div>
<div class="post-box  hy-bo-t">
	
        <?php if (IS_LOGIN): ?>
            
<?php //Hook ##START##a:3:{s:11:"plugin_name";s:19:"HY-MEditor编辑器";s:8:"dir_name";s:10:"hy_meditor";s:4:"path";s:69:"/www/wwwroot/luntanold/luntan/Plugin/hy_meditor/t_m_thread_index.hook";}## ?>

<?php $editor_inc = get_plugin_inc('hy_meditor');?>
<?php $tmp_md5 = rand_str(5); ?>
<?php if ($editor_inc['post'] == 1): ?>
<!-- HYBBS公用编辑器UI资源 -->
<link href="<?php echo WWW;?>public/css/editor.ui.css?ver=1.0" type="text/css" rel="stylesheet">

<!-- 编辑器资源 -->
<link rel="stylesheet" type="text/css" href="<?php echo WWW;?>Plugin/hy_meditor/icon/iconfont.css?ver=1.2">
<link rel="stylesheet" type="text/css" href="<?php echo WWW;?>Plugin/hy_meditor/editor.css?ver=1.2">
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/editor.js?ver=1.2"></script>
<!-- <script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/lib/uploadImage.js?ver=1.0"></script> -->
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/uploadImage2.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/uploadVideo.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/uploadAudio.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/help.js?ver=1.2"></script>

<div class="editor-box">
    <h3 style="display: block;">评论 <a style="float: right;" href="javascript:void(0)" onclick="hide_post_box()"><svg style="width: 18px;height: 18px;" t="1553785679066" class="icon" style="" viewBox="0 0 1025 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1169" xmlns:xlink="http://www.w3.org/1999/xlink" width="200.1953125" height="200"><defs><style type="text/css"></style></defs><path d="M513.344 0a512 512 0 1 0 0 1024 512 512 0 0 0 0-1024z m226.048 674.624l-54.528 56.896-171.52-164.928-171.392 164.928-54.592-56.896L456.576 512 287.36 349.312l54.592-56.768 171.392 164.8 171.52-164.8 54.528 56.768L570.176 512l169.216 162.624z" fill="" p-id="1170"></path></svg></a>
    </h3>
</div>

<div class="editor-box" >
<a name="post"></a>
<div class="rep-bx rep-box">
    <div class="rep-close rep-right" onclick="stop_post(this)">×</div>
    <div class="rep-bx">
        <div class="rep-left">
            <img class="rep-avatar" src="<?php echo WWW;?>public/images/user.gif">
        </div>
        <div class="rep-info">
            <p class="rep-user">loading</sppan></p>
            <p class="rep-time">loading</p>
        </div>
    </div>
    <div class="rep-content"></div>
</div>
</div>


<div class="editor-box" >
    <div class="hy-editor"></div>
</div>



<div class="editor-box" >
    <button  type="button" class="editor-btn editor-btn-primary" id="post_post"><i class="am-icon-check"></i> 发 表</button>
</div>

<style>
.hy-editor-container{
    max-height: 154px;
}
.post-box{
    overflow: initial
}
.editor-box{
    padding: 10px 10px 0 10px
}
.toolbar-item-video img{
      padding-top: 10px;
}
.rep-box{
    max-height: 300px;
    overflow: auto;
}
</style>



<script type="text/javascript">
var editor = new HY_editor('.hy-editor',{
    toolbar:'<?php echo $editor_inc['toolbar'];?>',
    upload_image_path:'<?php HYBBS_URL('Post','upload') ?>',
    upload_image_input_name:'photo',
    upload_image_argv:{
        tmp_md5:'<?php echo $tmp_md5;?>',
    },
    upload_image_maxsize:<?php echo kb2b(mb2kb($this->conf['uploadimagemax']));  ?>,
    upload_image_suffix:<?php echo json_encode(explode(",",trim($this->conf['uploadimageext'],','))); ?>,

    //上传视频
    upload_video_path:'<?php HYBBS_URL('Post','uploadvideo') ?>',
    upload_video_input_name:'video',
    upload_video_argv:{
        tmp_md5:'<?php echo $tmp_md5;?>',
    },
    upload_video_maxsize:<?php echo kb2b(mb2kb($this->conf['upload_video_size']));  ?>,
    upload_video_suffix:<?php echo json_encode(explode(",",trim($this->conf['upload_video_ext'],','))); ?>,

    //上传音频
    upload_audio_path:'<?php HYBBS_URL('Post','uploadaudio') ?>',
    upload_audio_input_name:'audio',
    upload_audio_argv:{
        tmp_md5:'<?php echo $tmp_md5;?>',
    },
    upload_audio_maxsize:<?php echo kb2b(mb2kb($this->conf['upload_audio_size']));  ?>,
    upload_audio_suffix:<?php echo json_encode(explode(",",trim($this->conf['upload_audio_ext'],','))); ?>,

    width:'<?php echo $editor_inc['width'];?>',
    height:'100px'
});
window.HY_editor_config.containerModalShow.hidetransform = function(_this){
    $(".post-box").css("cssText","transform:inherit !important;");
}
window.HY_editor_config.containerModalHide.hidetransform = function(_this){
    $(".post-box").css('transform','');
}
  
</script>


<script>
//回复帖子
function jump_post(obj){
    var _this   = $(obj);
    var pid     = _this.data('pid');
    var user    = _this.data('user');
    var avatar  = _this.data('avatar');
    var time    = _this.data('time');
    var content = $('#pid-'+pid);

    window.rep_pid = pid;

    $('.rep-user').text(user);
    $('.rep-time').text(time);
    $('.rep-avatar').attr('src',avatar);
    
    $('.rep-content').html(content.html());

    $('.rep-box').show();

    $("body,html").animate({
        scrollTop:$('.rep-box').offset().top //让body的scrollTop等于pos的top，就实现了滚动
    });
    open_post_box(obj);
}
function stop_post(){
    $('.rep-box').hide();
    window.rep_pid = 0;
}
//转换手机系统自带表情
function utf16toEntities(str) { 
    var patt=/[\ud800-\udbff][\udc00-\udfff]/g; // 检测utf16字符正则  
    str = str.replace(patt, function(char){  
        var H, L, code;  
        if (char.length===2) {  
            H = char.charCodeAt(0); // 取出高位  
            L = char.charCodeAt(1); // 取出低位  
            code = (H - 0xD800) * 0x400 + 0x10000 + L - 0xDC00; // 转换算法  
            return "&#" + code + ";";  
        } else {  
            return char;  
        }  
    });  
    return str;  
} 
$(function(){

    $("#post_post").click(function(){
        var _obj = $(this);
        _obj.attr('disabled','disabled');
        _obj.text("提交中...");

        var forum = $("#forum").val();
        $.ajax({
            url: '<?php HYBBS_URL('post','post');?>',
            type:"POST",
            cache: false,
            data:{
                id:<?php echo $tid;?>,
                pid:window.rep_pid,
                tmp_md5:'<?php echo $tmp_md5;?>',
                content:utf16toEntities(editor.getValue()),
                
            },
            dataType: 'json'
        }).then(function(e) {
            if(e.error){
                window.location.reload();
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
})
</script>
<?php endif ?>

<?php //Hook ##END##a:3:{s:11:"plugin_name";s:19:"HY-MEditor编辑器";s:8:"dir_name";s:10:"hy_meditor";s:4:"path";s:69:"/www/wwwroot/luntanold/luntan/Plugin/hy_meditor/t_m_thread_index.hook";}## ?>

        <?php else: ?>
            <a class="hy-btn hy-btn-block" href="<?php HYBBS_URL('user','login') ?>"><?php echo $_LANG['登陆后才可发表内容'];?></a>
        <?php endif ?>
      
</div>


</body>
</html>