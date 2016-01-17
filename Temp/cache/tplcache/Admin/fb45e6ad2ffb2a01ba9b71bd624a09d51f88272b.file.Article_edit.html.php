<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 09:37:15
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Article_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:434987385561c604b4564b3-74975997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb45e6ad2ffb2a01ba9b71bd624a09d51f88272b' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Article_edit.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '434987385561c604b4564b3-74975997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_option' => 0,
    'id' => 0,
    'title' => 0,
    'style' => 0,
    'flaglist' => 0,
    'flag' => 0,
    'vo' => 0,
    'source' => 0,
    'writer' => 0,
    'adminid' => 0,
    'addtime' => 0,
    'default_day' => 0,
    'isshow' => 0,
    'litpic' => 0,
    'keywords' => 0,
    'description' => 0,
    'body' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561c604b87ad02_37077156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c604b87ad02_37077156')) {function content_561c604b87ad02_37077156($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/modifier.date.php';
?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">
<div class="admin_notice">
	<span>管理操作：</span><select onChange="self.location.href='?Admin-article-Index-cid-'+this.value+''">
			<option value="">所有分类</option>
			<?php echo $_smarty_tpl->tpl_vars['class_option']->value;?>

			</select> ┊ <a href="<?php echo url('Admin/Article/edit');?>
">添加文档</a> ┊ <a class="hand" id="search">搜索文档</a></div>
<br>
<ul id="admin_sub_title">
	<li class="unsub"><a href="<?php echo url('Admin/Article/index');?>
">文档管理</a></li>
	<li class="sub"><a><?php if ($_smarty_tpl->tpl_vars['id']->value==0){?>添加<?php }else{ ?>编辑<?php }?>文档</a></li>
</ul>
<script>
$(function() {
	$("#search").click(function(){
		art.dialog({
			id:'s',
			title:'搜索',
			content:'关键词：<input name="keyword" type="text" class="input" id="keyword" value="" />',
			ok: function(){
				if($('#keyword').val()!='') location.href="?Admin-Article-index-q-"+$('#keyword').val();
			}
		});
	});
});
</script>
<style type="text/css">
dd { float:left }
</style>
<div id="admin_right_b">
  <form method="post">
    <table width="98%" border="0" align="center" cellpadding="3" cellspacing="2" id="tagContent0">
	<tr>
      <td width="120" align="right" class="tdbg">标题：</td>
	  <input type="hidden" name="con[id]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? 0 : $tmp);?>
">
      <td class="tdbg">
		<dd><input name="con[title]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="input" size="50"></dd>
		<dd>&nbsp;<select name="con[style1]">
				<option value="" >默认</option>
				<option value="color:#CC0000;" style="color:#CC0000;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'color:#CC0000;')>-1){?> selected<?php }?>>红色</option>
				<option value="color:#0000FF;" style="color:#0000FF;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'color:#0000FF;')>-1){?> selected<?php }?>>蓝色</option>
				<option value="color:#009900;" style="color:#009900;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'color:#009900;')>-1){?> selected<?php }?>>绿色</option>
				<option value="color:#996600;" style="color:#996600;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'color:#996600;')>-1){?> selected<?php }?>>咖啡色</option>
				<option value="color:#8142BF;" style="color:#8142BF;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'color:#8142BF;')>-1){?> selected<?php }?>>紫色</option>
				<option value="color:#FF6600;" style="color:#FF6600;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'color:#FF6600;')>-1){?> selected<?php }?>>橘黄色</option>
			</select>
			<select name="con[style2]">
				<option value="" >默认</option>
				<option value="font-weight:bold;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'font-weight:bold;')>-1){?> selected<?php }?>>加粗</option>
				<option value="text-decoration:underline;"<?php if (stripos($_smarty_tpl->tpl_vars['style']->value,'text-decoration:underline;')>-1){?> selected<?php }?>>下划线</option>
			</select></dd>
	  
	  </td>
    </tr>
	
	<tr>
      <td align="right">文章属性：</td>
      <td>
		<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flaglist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
			<input<?php if (stripos($_smarty_tpl->tpl_vars['flag']->value,$_smarty_tpl->tpl_vars['vo']->value['en'])>-1){?> checked<?php }?> name="con[flag][]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['en'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['vo']->value['cn'];?>

		<?php } ?>
	  </td>
    </tr>

	<tr>
      <td align="right">所属栏目：</td>
      <td><select name="con[cid]"><?php echo $_smarty_tpl->tpl_vars['class_option']->value;?>
</select>
	  </td>
    </tr>

	<tr>
      <td align="right">来源：</td>
      <td>
		<dd>
			<input name="con[source]" class="input" type="text" style="width:90px;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['source']->value)===null||$tmp==='' ? '互联网' : $tmp);?>
">
		</dd>
		<dd>&nbsp;作者：</dd>
		<dd>
			<input name="con[writer]" class="input" type="text" style="width:90px;" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['writer']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['adminid']->value : $tmp);?>
">
		</dd>
		<dd>&nbsp;发布时间：</dd>
		<dd>
			<input name="con[addtime]" type="text" onClick="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input Wdate" style="width:150px;" value="<?php if ($_smarty_tpl->tpl_vars['addtime']->value){?><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['addtime']->value,'Y-m-d H:i:s');?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['default_day']->value;?>
<?php }?>">
		</dd>
	  </td>
    </tr>
	<tr>
      <td align="right">状态：</td>
      <td><input style="display: inline;height: 1em;border:0;background:none;" name="con[isshow]" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['isshow']->value==1||$_smarty_tpl->tpl_vars['isshow']->value==''){?>checked<?php }?> />已审 
		<input style="display: inline;height: 1em;border:0;background:none;" name="con[isshow]" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['isshow']->value=='0'){?>checked<?php }?>/>未审
	  </td>
	</tr>
	<tr>
      <td align="right">缩略图：</td>
      <td><input type="text" name="con[litpic]" class="input" size="60" id="litpicfile" value="<?php echo $_smarty_tpl->tpl_vars['litpic']->value;?>
" /> <span class="ke-button-common ke-button-outer"><input type="button" id="filemanager" value="选择图片" class="ke-button-common ke-button" /></span></td>
    </tr>
	
	<tr>
      <td align="right">关键词：</td>
      <td><input name="con[keywords]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" class="input" size="65"></td>
    </tr>

	<tr>
	  <td align="right">摘要：</td>
      <td valign="top"><textarea name="con[description]" style="width:530px;height:70px;" ><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>
	  </td>
    </tr>

	<tr>
      <td align="right">内容：</td>
      <td><input name="remote" id="remote" type="checkbox" value="1" /> 远程图片自动下载&nbsp;&nbsp;<input name="autolitpic" id="autolitpic" type="checkbox" value="1" /> 提取第一个图片为缩略图</td>
    </tr>

    <tr class="tdbg">
      <td align="center"></td>
      <td valign="top"><textarea id="body" name="con[body]" style="width:650px;height:320px;" ><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea>
	  </td>
    </tr>

	<tr>
      <td align="right">排序：</td>
      <td><input name="con[order]" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value)===null||$tmp==='' ? 0 : $tmp);?>
" class="input" size="10"> <span>越大排越前面</span></td>
    </tr>

	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" >
		<tr class="tdbg">
		  <td width="100">&nbsp;</td>
		  <td><div class="aui_buttons"  style="text-align:left;"><button type="submit" id="dosave" class="aui_state_highlight">保存</button><button type="reset" class="aui_state_highlight">重置</button><button type="button" onClick="history.go(-1)" class="aui_state_highlight">返回</button></div></td>
		</tr>
	</table>
 </form>
<script type="text/javascript">
editor=KindEditor.create('#body',{
	resizeType : 1,
	allowPreviewEmoticons : false,
	allowImageUpload : true,
	fileManagerJson : "?g=Plus&m=Editor&a=fileManager",
	allowFileManager : true,
	items : [
		'source','preview','|','undo','redo', '|','fontname','fontsize', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
		'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', '|', 'emoticons', 'image', 'multiimage', 'baidumap','|','link','unlink','|','code','fullscreen']
});
$('#filemanager').click(function() {
	editor.loadPlugin('image', function() {
		editor.plugin.imageDialog({
			imageUrl : $('#litpicfile').val(),
			clickFn : function(url, title, width, height, border, align) {
				$('#litpicfile').val(url);
				//$('#litpic').attr('src',url);
				editor.hideDialog();
			}
		});
	});
});
$("#dosave").click(function(){
	if($("#remote").attr("checked")==true){
		body=editor.html();
		var autolitpic=($("#autolitpic").attr("checked")) ? 1 : 0;
		msgdialog=art.dialog({
			id:'savepic',
			title:'提示',
			lock:true,
			content:"<img src='static/images/load_blue.gif' /><br>保存远程图片中..."
		});
		$.ajax({
			type:"post",
			url:"<?php echo url('Admin/Article/downBodyImg');?>
",
			data:"body="+encodeURIComponent(body),
			dataType:'text',
			timeout:120000,
			global:false,
			success:function(data){
				editor.html(data);
				msgdialog.content("<img src='static/images/load_blue.gif' /><br>图片保存成功！正在保存文章..");
				setTimeout("msgdialog.close();",500);
				setTimeout("savearticle();",500);
			}
		});
	}else{
		savearticle();
	}
	return false;
});
function savearticle(){
	editor.sync('#body');
	showDialog();
	$.ajax({
		type:"post",
		url:"<?php echo url('Admin/Article/update');?>
",
		data:$("form").serialize(),
		dataType:'json',
		timeout:28000,
		global:false,
		success:function(data){
			if(data.status==1){
				showAlert('success','恭喜你，修改成功',data.url);
			}else{
				showAlert('error',data.info);
			}
		}
	});
}
</script>
<div class="runtime"></div>  
</div>
</body>
</html><?php }} ?>