<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 09:03:19
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Arctype_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:363130596561c5857f3cd62-85662050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17abaa29d618c4e7c6c201b71a9aa9dae395e50' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Arctype_edit.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '363130596561c5857f3cd62-85662050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'cname' => 0,
    'class_option' => 0,
    'order' => 0,
    'isshow' => 0,
    'keywords' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561c58581dac36_74571675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c58581dac36_74571675')) {function content_561c58581dac36_74571675($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">
<div class="admin_notice"><span>管理操作：</span><a href="<?php echo url('Admin/Arctype/edit');?>
">添加分类</a>　┊　<a href="<?php echo url('Admin/Arctype/index');?>
">分类管理</a></div>
<br>
<ul id="admin_sub_title">
	<li class="sub"><a><?php if ($_smarty_tpl->tpl_vars['id']->value==0){?>添加<?php }else{ ?>编辑<?php }?>分类</a></li>
</ul>

<div id="admin_right_b">
  <form method="post">
    <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" id="tagContent0">
	<tr>
      <td width="120" align="right" class="tdbg">分类名称：</td>
	  <input type="hidden" name="con[id]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? 0 : $tmp);?>
">
      <td class="tdbg"><input name="con[cname]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
" class="input" size="30"></td>
    </tr>

	<tr>
      <td width="120" align="right" class="tdbg">上级分类：</td>
      <td class="tdbg"><select name="con[pid]">
		<option value="0">顶级分类</option>
		<?php echo $_smarty_tpl->tpl_vars['class_option']->value;?>

		</select></td>
    </tr>

	<tr>
      <td width="120" align="right" class="tdbg">排序：</td>
      <td class="tdbg"><input name="con[order]" type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['order']->value)===null||$tmp==='' ? 1 : $tmp);?>
" class="input" size="30"> 数字越大越前面</td>
    </tr>

	<tr>
      <td width="120" align="right" class="tdbg">前台显示：</td>
      <td class="tdbg"><input name="con[isshow]" type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['isshow']->value==1||$_smarty_tpl->tpl_vars['isshow']->value==''){?>checked<?php }?> />显示 
				<input name="con[isshow]" type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['isshow']->value=='0'){?>checked<?php }?>/>隐藏</td>
    </tr>

	<tr>
      <td width="120" align="right" class="tdbg">关键词：</td>
      <td class="tdbg"><input name="con[keywords]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" class="input" size="30"></td>
    </tr>

    <tr class="tdbg">
      <td align="center">分类简介</td>
      <td valign="top"><textarea id="body" name="con[description]" style="width:630px;height:80px;" ><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>
	  </td>
    </tr>
	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" >
		<tr class="tdbg">
		  <td width="100">&nbsp;</td>
		  <td><div class="aui_buttons"  style="text-align:left;"><button type="submit" id="dosave" class="aui_state_highlight">保存</button><button type="reset" class="aui_state_highlight">重置</button><button type="button" onClick="history.go(-1)" class="aui_state_highlight">返回</button></div></td>
		</tr>
	</table>
 </form>
<script type="text/javascript">
$("#dosave").click(function(){
		showDialog();
		$.ajax({
			type:"post",
			url:"<?php echo url('Admin/Arctype/update');?>
",
			data:$("form").serialize(),
			dataType:'json',
			timeout:28000,
			global:false,
			success:function(data){
				if(data.status==1){
					showAlert('success','恭喜你，修改成功',"<?php echo url('Admin/Arctype/index');?>
");
				}else{
					showAlert('error',data.info);
				}
			}
		});
	 return false;
	});
</script>
<div class="runtime"></div>  
</div>
</body>
</html><?php }} ?>