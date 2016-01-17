<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 09:35:33
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Cache.html" */ ?>
<?php /*%%SmartyHeaderCode:73855546561c5fe5733041-71784263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8b4f6735fcaaa923d779183a13318fd8d03831' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Cache.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73855546561c5fe5733041-71784263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_robot_onnotes' => 0,
    'web_caching' => 0,
    'cache_lifetime_index' => 0,
    'cache_lifetime_channel' => 0,
    'cache_lifetime_view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561c5fe5899168_78297673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c5fe5899168_78297673')) {function content_561c5fe5899168_78297673($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">


<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">缓存设置</a></li>
	<li class="unsub"><a href="<?php echo url('Admin/Cache/clear');?>
">清除缓存</a></li>
</ul>
<div id="admin_right_b">
<script>
$(function() {
	$("#dosave").click(function(){
		showDialog();
		$.ajax({
			type:"post",
			url:"<?php echo url('Admin/Cache/update');?>
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
      <td align="right">蜘蛛访问记录开关：</td>
      <td><input type="radio" name="con[web_robot_onnotes]" value="1"<?php if ($_smarty_tpl->tpl_vars['web_robot_onnotes']->value){?> checked<?php }?>>开启 <input type="radio" name="con[web_robot_onnotes]" value="0"<?php if (!$_smarty_tpl->tpl_vars['web_robot_onnotes']->value){?> checked<?php }?>>关闭</td>
    </tr>

	<tr class="tdbg">
      <td align="right">静态缓存开关：</td>
      <td><input type="radio" name="con[web_caching]" value="1"<?php if ($_smarty_tpl->tpl_vars['web_caching']->value){?> checked<?php }?>>开启 <input type="radio" name="con[web_caching]" value="0"<?php if (!$_smarty_tpl->tpl_vars['web_caching']->value){?> checked<?php }?>>关闭</td>
    </tr>

	<tr class="tdbg">
      <td width="150" align="right">首页缓存生命期(小时)：</td>
      <td class="tdbg"><input name="con[cache_lifetime_index]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['cache_lifetime_index']->value;?>
" size="20"> <span>首页缓存更新时间，建议值<font color=red>24小时内</font></span></td>
    </tr>
	
	<tr class="tdbg">
      <td width="150" align="right">分类页缓存生命期(小时)：</td>
      <td class="tdbg"><input name="con[cache_lifetime_channel]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['cache_lifetime_channel']->value;?>
" size="20"> <span>分类页缓存更新时间，建议值<font color=red>24小时内</font></span></td>
    </tr>
	
	<tr class="tdbg">
      <td width="150" align="right">内容页缓存生命期(小时)：</td>
      <td class="tdbg"><input name="con[cache_lifetime_view]" type="text" class="input" value="<?php echo $_smarty_tpl->tpl_vars['cache_lifetime_view']->value;?>
" size="20"> <span>内容页缓存更新时间，建议值<font color=red>72小时内</font></span></td>
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