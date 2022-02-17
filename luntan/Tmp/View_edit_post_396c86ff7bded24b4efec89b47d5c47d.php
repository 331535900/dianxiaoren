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
	<div class="wrap-box">
	
	
<?php //Hook ##START##a:3:{s:11:"plugin_name";s:18:"HY-Editor编辑器";s:8:"dir_name";s:9:"hy_editor";s:4:"path";s:63:"/www/wwwroot/luntanold/luntan/Plugin/hy_editor/t_post_edit.hook";}## ?>

<?php $editor_inc = get_plugin_inc('hy_editor');?>
<?php $tmp_md5 = rand_str(5); ?>
<!-- HYBBS公用编辑器UI资源 -->
<link href="<?php echo WWW;?>public/css/editor.ui.css?ver=1.0" type="text/css" rel="stylesheet">

<?php if ($data['isthread']): ?>
<!-- 附件上传资源 -->
<link href="<?php echo WWW;?>Plugin/hy_editor/uploadify.css?ver=1.0" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/jquery.Huploadify.js?ver=1.0"></script>
<?php endif ?>

<!-- 编辑器资源 -->
<link rel="stylesheet" type="text/css" href="<?php echo WWW;?>Plugin/hy_editor/icon/iconfont.css?ver=1.2">
<link rel="stylesheet" type="text/css" href="<?php echo WWW;?>Plugin/hy_editor/editor.css?ver=1.2">
<?php if ($editor_inc['theme']!=''): ?>
<link href="<?php echo WWW;?>Plugin/hy_editor/theme/<?php echo $editor_inc['theme'];?>.css?ver=1.2" type="text/css" rel="stylesheet">
<?php endif ?>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/editor.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/lib/uploadImage2.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/lib/uploadVideo.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/lib/uploadAudio.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/lib/help.js?ver=1.2"></script>

<?php if ($data['isthread']): ?>
<?php $fid = $thread_data['fid']; ?>
<?php
function select_forum($v,$forum){
    if($v['z']){
        echo '<ul>';
        foreach ($v as $key => $vv) {
            if(is_numeric($key) && is_array($vv)){
                echo '<li><i id="forum-'.$vv['id'].'" data-z="'.($forum[$key]['z']?1:0).'" data-id="'.$vv['id'].'" data-name="'.$vv['name'].'"></i><span><img src="'.WWW.'upload/forum'.$key.'.png" onerror="this.src=\''.WWW.'upload/de.png\'">'.$vv['name'].($forum[$key]['z'] ? '<svg t="1513168291570" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3276" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css"></style></defs><path d="M512 608c-6.4 0-19.2 0-25.6-6.4l-128-128c-12.8-12.8-12.8-32 0-44.8s32-12.8 44.8 0L512 531.2l102.4-102.4c12.8-12.8 32-12.8 44.8 0s12.8 32 0 44.8l-128 128C531.2 608 518.4 608 512 608z" p-id="3277"></path></svg>':'').'</span>';
                select_forum($forum[$key],$forum);
                echo '</li>';
            }
        }
        echo '</ul>';
    }
}
?>


<div style="position: relative;display: table;border-collapse: separate;width: 100%;">
    <div style="display: table-cell;width: 150px;">
        <label>文章分类 <span></span></label>
        <div class="select-forum">
            <button value="<?php echo $fid;?>" onclick="open_select_forum()" id="forum" type="text" class="select-forum-input editor-text" style="width:150px;margin-bottom:10px;text-align: left;cursor:pointer"><?php echo $forum[$fid]['name'] ?></button>
            <div class="select-forum-ul">
                <ul>
                    <?php foreach ($forum as $key=> $v): ?>
                        <?php if ($v['fid']==-1): ?>
                        <li>
                            <i id="forum-<?php echo $v['id'];?>" data-z="<?php echo $v['z']?1:0 ?>" data-id="<?php echo $v['id'];?>" data-name="<?php echo $v['name'];?>"></i>
                            <span>
                                <img src="<?php echo WWW;?>upload/forum<?php echo $key;?>.png" onerror="this.src='<?php echo WWW;?>upload/de.png'">
                                <?php echo $v['name'];?>
                                <?php if ($v['z']): ?>
                                    <svg t="1513168291570" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3276" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style type="text/css"></style></defs><path d="M512 608c-6.4 0-19.2 0-25.6-6.4l-128-128c-12.8-12.8-12.8-32 0-44.8s32-12.8 44.8 0L512 531.2l102.4-102.4c12.8-12.8 32-12.8 44.8 0s12.8 32 0 44.8l-128 128C531.2 608 518.4 608 512 608z" p-id="3277"></path></svg>
                                <?php endif ?>
                            </span>
                            <?php select_forum($v,$forum); ?>
                        </li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
        function open_select_forum(){
            $('.select-forum-ul').toggle();
            $(document).bind('mousedown.efscbarEvent',function(e){
                if($(e.target).parents('.select-forum').length === 0){
                    $(document).unbind("mousedown.efscbarEvent");
                    $('.select-forum-ul').hide();
                }
            });
        }
        $(function(){
            var h = 40;
            $('.select-forum-ul i').click(function(e){
                if(e.target!=this) return;
                var _this = $(this);
                $('#forum').text(_this.data('name'));
                $('#forum').val(_this.data('id'));
                if(_this.data('z')==0){//
                    $('.select-forum-ul').hide();
                }

                if(parseInt(_this.parent().height()) != h) {//关闭
                    _this.next().children('svg').removeClass('active');
                    _this.parent().height(h+ parseInt(_this.next().next().height()) );
                    _this.parent().height(h);
                }else{//打开
                    _this.next().children('svg').addClass('active');
                    _this.parent().height(h+ parseInt(_this.next().next().height()) );
                    setTimeout(function(){
                        _this.parent().height('auto');
                    },500)
                }
            });
            <?php 
                $fid = X('get.fid');
                if(!isset($forum[$fid]))
                    $fid = false;
                if($fid !== false){
                    echo "
                    $('#forum').val(".$forum[$fid]['id'].");
                    $('#forum').text('".$forum[$fid]['name']."');
                    ";
                }
            ?>

        });
        </script>

    </div>
    <div style="display: table-cell;position: relative;z-index: 2;padding-left: 10px;vertical-align: top;">
        <label>文章标题 <span></span></label>
        <input type="text" id="title" class="editor-text" value="<?php echo $thread_data['title'];?>" placeholder="请填写标题">
    </div>
</div>

<?php endif ?>

<label>编辑内容： <span></span></label>
<!-- 加载编辑器的容器 -->
<div class="hy-editor"><?php echo ($data['content']) ?></div>


<?php if ($data['isthread']): ?>
    
    <label style="display: block" <?php if (!L('Usergroup')->read(NOW_GID,'thide',$usergroup)): ?>class="disabled"<?php endif ?>>文章内容评论后可见 <?php if (!L('Usergroup')->read(NOW_GID,'thide',$usergroup)): ?><span>(你所在用户组无权限)</span><?php endif ?></label>
    <label class="mui-switch-box" style="margin-top: 0px">
        <input class='tgl tgl-ios' id='thread-hide' type='checkbox' <?php if ($thread_data['hide']): ?>checked<?php endif ?>>
        <label class='tgl-btn' for='thread-hide'></label>
    </label>
    
    
    <label for="tgold" style="display: block" <?php if (!L('Usergroup')->read(NOW_GID,'tgold',$usergroup)): ?>class="disabled"<?php endif ?>>文章内容付费后可见 <?php if (!L('Usergroup')->read(NOW_GID,'tgold',$usergroup)): ?><span>(你所在用户组无权限)</span><?php endif ?></label>
    <input type="text" class="editor-text" id="tgold" style="width:100px" value="<?php echo $thread_data['gold'];?>" placeholder="金币数量">
    
    
    <label for="file" style="display:block" <?php if (!L('Usergroup')->read(NOW_GID,'uploadfile',$usergroup)): ?>class="disabled"<?php endif ?>>上传附件 <?php if (!L('Usergroup')->read(NOW_GID,'uploadfile',$usergroup)): ?><span>(你所在用户组无权限)</span><?php endif ?></label>
    <?php if (L('Usergroup')->read(NOW_GID,'uploadfile',$usergroup)): ?>
    <div id="file_upload"></div>
    <form id="fileform" style="">
        <table class="upload-table">
            <thead>
                <th width="60">附件ID</th>
                <th width="400">附件名称</th>
                <th width="70">付费金币</th>
                <th>隐藏附件</th>
                <th>附件描述语</th>
                <th width="70">操作</th>
            </thead>
            <tbody id="filetable">
            <?php foreach ($file_list as $v): ?>
            <tr>
                <td>
                    <input class="fileid" name="fileid" type="text" value="<?php echo $v['fileid'];?>" disabled>
                </td>
                <td>
                    <input type="text" value="<?php echo $v['filename'];?>" disabled>
                </td>
                <td>
                    <input class="filegold" name="filegold" type="text" value="<?php echo $v['gold'];?>">
                </td>
                <td>
                    <input class="filehide" name="filehide" style="width: auto;margin:10px"  type="checkbox" value="" <?php if ($v['hide']): ?>checked<?php endif ?>>(回复可见)
                </td>
                <td>
                    <input name="filemess" class="filemess" type="text" value="<?php echo $v['mess'];?>">
                </td>
                <td><button style="    margin-top: 4px;" type="button" class="editor-btn editor-btn-primary" onclick="$(this).parent().parent().remove()">删除</button>
                </td>
            </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </form>
    <?php endif ?>
<?php endif ?>

<?php if ($data['isthread']): ?>
<script type="text/javascript">
    $(function() {
        $('#file_upload').Huploadify({
            auto:true,
            multi:true,
            'formData'     : {
                'timestamp' : '<?php echo NOW_TIME;?>',
            },
            'buttonText': '选择文件[可多选]',
            'uploader' : '<?php HYBBS_URL('post','uploadfile') ?>',
            'height':30,
            'fileSizeLimit':'<?php echo ($this->conf['uploadfilemax']) . ' MB';  ?>',
            'fileTypeExts' : '<?php echo '*.'.str_replace(',','; *.',$this->conf['uploadfileext']) ;  ?>',
            //'removeCompleted' : false,
            //'checkExisting':false,
            'fileObjName' : 'photo',
            'formData':{
                ffmd5:"<?php echo cookie('HYBBS_HEX')?>",
                tmp_md5:"<?php echo $tmp_md5;?>"
            },
            onUploadComplete : function(file, data, response) { 
                var json = eval('('+data+')');
                if(json.error){
                    $("#filetable").append('<tr><td><input class="fileid" name="fileid" type="text" value="'+json.id+'" disabled></td><td><input type="text" value="'+json.name+'" disabled></td><td><input class="filegold" name="filegold" type="text" value="0"></td><td><input type="checkbox" style="width: auto;margin:10px" class="filehide" value=""/>(回复可见)</td><td><input name="filemess" class="filemess" type="text" value=""></td><td><button style="    margin-top: 4px;" type="button" class="editor-btn editor-btn-primary" onclick="$(this).parent().parent().remove()">删除</button></td></tr>');
                    return;
                }else{
                    return swal(json.info);
                }
            }
           
        });
    });
</script>
<?php endif ?>

<button type="button" class="editor-btn editor-btn-primary" id="post1" style="margin-top: 10px">
    <i class="am-icon-check"></i> 提交编辑
</button>

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


        toolbarFixed:true,

        width:'<?php echo $editor_inc['width'];?>',
        height:'<?php echo $editor_inc['height'];?>'
  });
</script>
<script>
$(function(){
var edit_bool = function(){};
    $("#post1").click(function(){
        var _obj = $(this);
        _obj.attr('disabled','disabled');
        _obj.text("提交中...");

        <?php if ($data['isthread']): ?>
        var fileid='';
        var filegold='';
        var filemess='';
        var filehide = '';
        $(".fileid").each(function(e){
            fileid+=$(this).val()+'||';
        });
        $(".filegold").each(function(e){
            filegold+=$(this).val()+'||';
        });
        $(".filemess").each(function(e){
            filemess+=$(this).val()+'||';
        });
        $(".filehide").each(function(e){
            filehide+=($(this).is(':checked')?'1':0)+'||';
        });
        <?php endif ?>

        $.ajax({
         url: "<?php HYBBS_URL('post','edit') ?>",
         type:"POST",
         cache: false,
         data:{
             id:<?php echo $id;?>,
             tmp_md5:'<?php echo $tmp_md5;?>',
        <?php if ($data['isthread']) :?>
             title:$("#title").val(),
             fid:$("#forum").val(),
             fileid:fileid,
             filegold:filegold,
             filemess:filemess,
             filehide:filehide,

             thide:($("#thread-hide").is(':checked')?1:0),
             tgold:$("#tgold").val(),
         
        <?php endif ?>
             content:editor.getValue(),
             
         },
         dataType: 'json'
     }).then(function(e) {
        if(!e.error){
            _obj.removeAttr('disabled');
            _obj.text("提交编辑");
        }
        

         swal(e.error?"修改成功":"修改失败", e.info, e.error?"success": "error");
         
         if(e.error){
            
             setTimeout(function(){
                 window.location.href="<?php HYBBS_URL('thread',$data['tid']); ?>";
             },1000);
             
         }


       }, function() {
        
        _obj.removeAttr('disabled');
            _obj.text("提交编辑");
         swal("失败", "请尝试重新提交", "error");
         
       });
    })
})
</script>

<?php //Hook ##END##a:3:{s:11:"plugin_name";s:18:"HY-Editor编辑器";s:8:"dir_name";s:9:"hy_editor";s:4:"path";s:63:"/www/wwwroot/luntanold/luntan/Plugin/hy_editor/t_post_edit.hook";}## ?>

	</div>
	
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