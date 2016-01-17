<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:57:53
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Config.html" */ ?>
<?php /*%%SmartyHeaderCode:196881031561be691b944f0-41296294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c74c8ab78c077526c8b0c84f77f6776dbcb26c9' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Config.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196881031561be691b944f0-41296294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'web_seo_name' => 0,
    'web_url' => 0,
    'web_keywords' => 0,
    'web_description' => 0,
    'web_beian' => 0,
    'web_tongji' => 0,
    'themelist' => 0,
    'vo' => 0,
    'web_default_theme' => 0,
    'web_close' => 0,
    'web_closecon' => 0,
    'web_gzip_open' => 0,
    'web_debug' => 0,
    'web_url_model' => 0,
    'web_path_suffix' => 0,
    'web_path_depr' => 0,
    'web_url_route_on' => 0,
    'web_url_route_list' => 0,
    'web_url_route_list_p' => 0,
    'web_url_route_show' => 0,
    'web_url_route_show_p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be691da4449_68950279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be691da4449_68950279')) {function content_561be691da4449_68950279($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">


<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">站点设置</a></li>
	<li class="unsub"><a href="javascript:void(0)" onClick="selectTab('config1',this)">URL设置</a></li>
</ul>
<div id="admin_right_b">
<script>
$(function() {
	$("#web_close_true").click(function(){
		$("#web_close_reason").show();
	});
	$("#web_close_false").click(function(){
		$("#web_close_reason").hide();
	});
	$("#dosave").click(function(){
		showDialog();
		$.ajax({
			type:"post",
			url:"<?php echo url('Admin/Config/update');?>
",
			data:$("form").serialize(),
			dataType:'json',
			timeout:28000,
			global:false,
			success:function(data){
				if(data.status==1){
					showAlert('success','恭喜你，修改成功');
				}else{
					showAlert('error',data.info);
				}
			}
		});
	 return false;
	});
});
</script>
<form method="post">
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" id="config0">
    <tr class="tdbg">
      <td width="150" align="right">网站名称：</td>
      <td class="tdbg"><input name="con[web_name]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
" size="40"></td>
    </tr>
	<tr class="tdbg">
      <td align="right">首页长标题：</td>
      <td class="tdbg"><input name="con[web_seo_name]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_seo_name']->value;?>
" size="40">　<span>首页长标题，显示在网站名称后面</span></td>
    </tr>
    <tr class="tdbg">
      <td align="right">网站地址：</td>
      <td><input name="con[web_url]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_url']->value;?>
" size="40">　<span>你的网址,以<font color=red>http://</font>开头,<font color=red>/</font>结尾</font></span></td>
    </tr>

	<tr class="tdbg">
      <td align="right">首页关键字：</td>
      <td><input name="con[web_keywords]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_keywords']->value;?>
" style="width:440px">　<span>首页关键字keywords,以半角逗号隔开</span></td>
    </tr>

	<tr class="tdbg">
      <td align="right">首页网站描述：</td>
      <td><textarea name="con[web_description]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo $_smarty_tpl->tpl_vars['web_description']->value;?>
</textarea></td>
    </tr>

    <tr class="tdbg">
      <td align="right">网站备案号：</td>
      <td class="tdbg"><input name="con[web_beian]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_beian']->value;?>
" size="40"></td>
    </tr>

	<tr class="tdbg">
      <td align="right">统计代码：</td>
      <td><textarea name="con[web_tongji]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo $_smarty_tpl->tpl_vars['web_tongji']->value;?>
</textarea></td>
    </tr>

	<tr class="tdbg">
      <td align="right">默认模板：</td>
      <td><select name="con[web_default_theme]">
	  <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['dir'];?>
"<?php if ($_smarty_tpl->tpl_vars['web_default_theme']->value==$_smarty_tpl->tpl_vars['vo']->value['dir']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['dir'];?>
</option>
	  <?php } ?>
	</select>　<span>位于template文件夹下</span>      </td>
    </tr>

	<tr class="tdbg">
      <td align="right">是否关闭站点：</td>
      <td><input type="radio" id="web_close_true" name="con[web_close]" value="1"<?php if ($_smarty_tpl->tpl_vars['web_close']->value){?> checked<?php }?>>是
			<input type="radio" id="web_close_false" name="con[web_close]" value="0"<?php if (!$_smarty_tpl->tpl_vars['web_close']->value){?> checked<?php }?>>否</td>
    </tr>
	
	<tr class="tdbg" id="web_close_reason"<?php if (!$_smarty_tpl->tpl_vars['web_close']->value){?> style="display:none"<?php }?>>
		<td align="right">关闭站点的原因：</td>
		<td><textarea name="con[web_closecon]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo $_smarty_tpl->tpl_vars['web_closecon']->value;?>
</textarea></td>
	</tr>
	
	<tr class="tdbg">
      <td align="right">GZIP页面压缩：</td>
      <td><input type="radio" name="con[web_gzip_open]" value="1"<?php if ($_smarty_tpl->tpl_vars['web_gzip_open']->value){?> checked<?php }?>>开启
			<input type="radio" name="con[web_gzip_open]" value="0"<?php if (!$_smarty_tpl->tpl_vars['web_gzip_open']->value){?> checked<?php }?>>关闭　<span>加快访问速度，轻微加重服务器负担，<font color=red>前提是开启了zlib扩展函数</font></span></td>
    </tr>

	<tr class="tdbg">
      <td align="right">调试模式：</td>
      <td><input type="radio" name="con[web_debug]" value="1"<?php if ($_smarty_tpl->tpl_vars['web_debug']->value){?> checked<?php }?>>开启
			<input type="radio" name="con[web_debug]" value="0"<?php if (!$_smarty_tpl->tpl_vars['web_debug']->value){?> checked<?php }?>>关闭　<span><font color=red>会暴露错误信息，不需要开启</font>，前提display_errors设置为On</span></td>
    </tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" id="config1" style="display:none">
	<tr class="tdbg">
      <td align="right">URL模式：</td>
      <td><select name="con[web_url_model]">
		<option value="1"<?php if ($_smarty_tpl->tpl_vars['web_url_model']->value==1){?> selected<?php }?>>普通模式</option>
		<option value="2"<?php if ($_smarty_tpl->tpl_vars['web_url_model']->value==2){?> selected<?php }?>>兼容模式</option>
		<option value="3"<?php if ($_smarty_tpl->tpl_vars['web_url_model']->value==3){?> selected<?php }?>>伪静态</option>
	</select>　<span>不支持伪静态的主机请选择其他方式</span>      </td>
    </tr>
	<tr class="tdbg">
      <td width="150" align="right">URL后缀：</td>
      <td class="tdbg"><input name="con[web_path_suffix]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_path_suffix']->value;?>
" size="10">&nbsp;<span>默认为 html，不用带点 .</span></td>
    </tr>
	<tr class="tdbg">
      <td align="right">参数分割符号：</td>
      <td class="tdbg"><input name="con[web_path_depr]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_path_depr']->value;?>
" size="10">&nbsp;<span>默认为 - ，该参数只在URL模式为 兼容模式、伪静态时有效</span></td>
    </tr>
	<tr class="tdbg">
      <td align="right">是否开启URL路由：</td>
      <td><input type="radio" id="web_url_route_true" name="con[web_url_route_on]" value="1"<?php if ($_smarty_tpl->tpl_vars['web_url_route_on']->value){?> checked<?php }?>>是
			<input type="radio" id="web_url_route__false" name="con[web_url_route_on]" value="0"<?php if (!$_smarty_tpl->tpl_vars['web_url_route_on']->value){?> checked<?php }?>>否</td>
    </tr>
	<tr class="tdbg">
      <td align="right">列表页规则：</td>
      <td class="tdbg"><input name="con[web_url_route_list]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_url_route_list']->value;?>
" size="30">&nbsp;<span>必要参数 {id}</span></td>
    </tr>
	<tr class="tdbg">
      <td align="right">列表页(带分页)规则：</td>
      <td class="tdbg"><input name="con[web_url_route_list_p]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_url_route_list_p']->value;?>
" size="30">&nbsp;<span>必要参数 {id}，{page}</span></td>
    </tr>
	<tr class="tdbg">
      <td align="right">内容页规则：</td>
      <td class="tdbg"><input name="con[web_url_route_show]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_url_route_show']->value;?>
" size="30">&nbsp;<span>必要参数 {id}</span></td>
    </tr>
	<tr class="tdbg">
      <td align="right">内容页(带分页)规则：</td>
      <td class="tdbg"><input name="con[web_url_route_show_p]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['web_url_route_show_p']->value;?>
" size="30">&nbsp;<span>必要参数 {id}，{page}</span></td>
    </tr>
	<tr class="tdbg">
      <td align="right">注意：</td>
	  <td class="tdbg">{id}必须要在{page}前面</td>
	</tr>
	
</table>
	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
    <tr class="tdbg">
	  <td width="130" align="center" class="tdbg">&nbsp;</td>
      <td><div class="aui_buttons"  style="text-align:left;"><button type="submit" id="dosave" class="aui_state_highlight">保存设置</button> <button type="reset" class="aui_state_highlight">重置</button></div></td>
    </tr>
	</table>
	</form>
<div class="runtime"></div>  
</div>
</body>
</html><?php }} ?>