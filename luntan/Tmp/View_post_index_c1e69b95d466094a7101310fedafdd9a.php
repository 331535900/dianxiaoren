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

<a href="javascript:history.back(-1)" class="hy-header-nav hy-header-left icon icon-chevron-small-left" ></a>

<h1 class="hy-header-title"><?php echo $title;?></h1>



</header>



<style type="text/css">
  .icon-chevron-small-left, .icon {
    color: #337ab7 !important;
}

</style>


<section class="body">
	
	
	
<?php //Hook ##START##a:3:{s:11:"plugin_name";s:19:"HY-MEditor编辑器";s:8:"dir_name";s:10:"hy_meditor";s:4:"path";s:57:"/www/wwwroot/luntan/Plugin/hy_meditor/t_m_post_index.hook";}## ?>

<?php $editor_inc = get_plugin_inc('hy_meditor');?>
<?php $tmp_md5 = rand_str(5); ?>
<!-- HYBBS公用编辑器UI资源 -->
<link href="<?php echo WWW;?>public/css/editor.ui.css?ver=1.2" type="text/css" rel="stylesheet">

<!-- 编辑器资源 -->
<link rel="stylesheet" type="text/css" href="<?php echo WWW;?>Plugin/hy_meditor/icon/iconfont.css?ver=1.2">
<link rel="stylesheet" type="text/css" href="<?php echo WWW;?>Plugin/hy_meditor/editor.css?ver=1.2">
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/editor.js?ver=1.2"></script>
<!-- <script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_editor/lib/uploadImage.js?ver=1.0"></script> -->
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/uploadImage2.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/uploadVideo.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/uploadAudio.js?ver=1.2"></script>
<script type="text/javascript" src="<?php echo WWW;?>Plugin/hy_meditor/lib/help.js?ver=1.2"></script>

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

<div class="editor-box" style="padding:10px;">
    <label>文章分类 <span></span></label>
    <div class="select-forum">
        <button onclick="open_select_forum()" id="forum" type="text" class="select-forum-input editor-text" style="width:150px;margin-bottom:10px;text-align: left;cursor:pointer">选择分类</button>
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

<div class="editor-box" style="padding:10px;">
    <label>文章标题 <span></span></label>
    <input type="text" id="title" class="editor-text " placeholder="请填写标题">
</div>



<div class="editor-box" style="padding:10px;">
    <label>文章内容： <span></span></label>
    <!-- 加载编辑器的容器 -->
    <div class="hy-editor"></div>
</div>



<div class="editor-box" style="padding:10px;">
    <label style="display: block" <?php if (!L('Usergroup')->read(NOW_GID,'thide',$usergroup)): ?>class="disabled"<?php endif ?>>文章内容评论后可见 <?php if (!L('Usergroup')->read(NOW_GID,'thide',$usergroup)): ?><span>(你所在用户组无权限)</span><?php endif ?></label>
    <label class="mui-switch-box" style="margin-top: 0px">
        <input class='tgl tgl-ios' id='thread-hide' type='checkbox'>
        <label class='tgl-btn' for='thread-hide'></label>
    </label>
</div>



<div class="editor-box" style="padding:10px;">
    <label for="tgold" style="display: block" <?php if (!L('Usergroup')->read(NOW_GID,'tgold',$usergroup)): ?>class="disabled"<?php endif ?>>文章内容付费后可见 <?php if (!L('Usergroup')->read(NOW_GID,'tgold',$usergroup)): ?><span>(你所在用户组无权限)</span><?php endif ?></label>
    <input type="text" class="editor-text" id="tgold" style="width:100px" placeholder="金币数量">
</div>



<div class="editor-box" id="file-box" style="padding:10px;display:block">
    <label for="file" style="display:block" <?php if (!L('Usergroup')->read(NOW_GID,'uploadfile',$usergroup)): ?>class="disabled"<?php endif ?>>附件区 <?php if (!L('Usergroup')->read(NOW_GID,'uploadfile',$usergroup)): ?><span>(你所在用户组无权限)</span><?php endif ?></label>

    <?php if (L('Usergroup')->read(NOW_GID,'uploadfile',$usergroup)): ?>
    <div id="file_rq">
       
    </div>
    <input type="file" name="fileToUpload" id="fileToUpload1" onchange="uploadFile(this);" style="display: none;">
    <button type="button" onclick="$('#fileToUpload1').click()" class="hy-btn hy-btn-primary">上传附件</button>
    <?php endif ?>
</div>



<div class="editor-box" style="padding:10px">
    <button type="button" id="post1" class="hy-btn hy-btn-danger" >发 布</button>
</div>


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
        height:'<?php echo $editor_inc['height'];?>'
  });
</script>
<script type="text/javascript">
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
//提交发帖相关
$(function(){
    $("#post1").click(function(){
        console.log('发布');
        var _obj = $(this);
        _obj.attr('disabled','disabled');
        _obj.text("提交中...");



        var fileid='';
        var filegold='';
        var filemess='';
        var filehide = '';
        $(".fileid").each(function(e){
            fileid+=$(this).text()+'||';
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



        var forum = $("#forum").val();
        $.ajax({
            url: '<?php HYBBS_URL('post');?>',
            type:"POST",
            cache: false,
            data:{
                title:$("#title").val(),
                content:utf16toEntities(editor.getValue()),
                forum:forum,
                tmp_md5:'<?php echo $tmp_md5;?>',
                fileid:fileid,
                filegold:filegold,
                filemess:filemess,
                filehide:filehide,
                thide:($("#thread-hide").is(':checked')?1:0),
                tgold:$("#tgold").val(),
                
            },
            dataType: 'json'
        }).then(function(e) {
         
            if(e.error){ 
                window.location.href="<?php HYBBS_URL('thread','','',EXP);?>"+e.id + "<?php echo EXT;?>";

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

//上传附件封装
function uploadFile(obj){

    var fd = new FormData();
    fd.append("tmp_md5", "<?php echo $tmp_md5;?>");
    fd.append("photo", obj.files[0]);
    var xhr = new XMLHttpRequest();
    xhr.upload.addEventListener("progress", function(evt){
        //上传进度
        
    }, false);
    xhr.addEventListener("load", function(evt){
        //传输完成
        var json = eval("("+evt.target.response+")");
        if(json.error){
            $("#file_rq").append('<table><tr><th>ID</th><td class="fileid">'+json.id+'</td></tr><tr><th>附件名称</th><td>'+json.name+'</td></tr><tr><th>付费金币</th><td ><input type="number" class="filegold"></td></tr><tr><th>隐藏附件</th><td><input class="hy-switch hy-switch-anim filehide" type="checkbox"></td></tr><tr><th>附件描述</th><td><input type="text" class="filemess"></td></tr><tr><th>操作</th><td><button  type="button" class="hy-btn hy-btn-danger" onclick="$(this).parent().parent().parent().remove()">删除</button></td></tr></table>');
        }else{
            swal('Error',json.info,'error');
        }
    }, false);
    xhr.addEventListener("error", function(){
        //上传失败
    }, false);
    xhr.addEventListener("abort", function(){
        //传输中断
    }, false);
    xhr.open("POST", www+'post'+exp+'uploadfile');
    xhr.send(fd);
    obj.files=null;
    obj.value=null;
}
</script>
<style type="text/css">
    
#file-box table {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  border-spacing: 0;
  margin: 15px 0;
}
#file-box table th {
  background-color: #f9f9f9;
}
#file-box table td, #file-box table th {
  min-width: 40px;
  height: 30px;
  border: 1px solid #ccc;
  vertical-align: top;
  padding: 2px 4px;
  text-align: left;
  box-sizing: border-box;
}
 #file-box table td.active, #file-box table th.active {
  background-color: #ffffee;
}
</style>

<?php //Hook ##END##a:3:{s:11:"plugin_name";s:19:"HY-MEditor编辑器";s:8:"dir_name";s:10:"hy_meditor";s:4:"path";s:57:"/www/wwwroot/luntan/Plugin/hy_meditor/t_m_post_index.hook";}## ?>

	
</section>

<style type="text/css">
	.body{
		overflow: auto;
		-webkit-overflow-scrolling: touch;
	}
</style>

<script type="text/javascript">
	document.removeEventListener('touchmove', touchmove_handler, false);
</script>

</body>
</html>