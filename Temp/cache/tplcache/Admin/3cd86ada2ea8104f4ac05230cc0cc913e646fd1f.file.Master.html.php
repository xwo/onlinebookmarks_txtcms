<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:59:25
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Master.html" */ ?>
<?php /*%%SmartyHeaderCode:888218905561be6ed55cd83-53340530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd86ada2ea8104f4ac05230cc0cc913e646fd1f' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Master.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888218905561be6ed55cd83-53340530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be6ed5fa262_79202127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be6ed5fa262_79202127')) {function content_561be6ed5fa262_79202127($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">

<ul id="admin_sub_title">
	<li class="sub">修改密码</li>
</ul>
<div id="admin_right_b">
  <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
  <form method="post">
    <tr class="tdbg">
      <td align="right">用户名：</td>
      <td><input name="name" id="name" type="text" class="input"value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" style="width:200px;">　<span>账号支持中文，不包含特殊符号</span></td>
    </tr>
    <tr class="tdbg">
      <td align="right">旧密码：</td>
      <td><input name="pass" class="input" id="pass" title="输入旧密码" type="password" style="width:200px;">　<span>输入旧密码</span></td>
    </tr>

	<tr class="tdbg">
      <td align="right">新密码：</td>
      <td><input name="pass1" class="input" id="pass1" title="输入新密码" type="password" style="width:200px;">　<span>输入新密码</span></td>
    </tr>
	
    <tr class="tdbg">
	  <td>&nbsp;</td>
      <td><div class="aui_buttons"  style="text-align:left;"><button type="submit" id="dosave" class="aui_state_highlight">保存</button><button type="button" onClick="history.go(-1)" class="aui_state_highlight">返回</button></div></td>
    </tr>
	</form>
  </table>
<script type='text/javascript'>
$(function() {
	$("#dosave").click(function(){
		if($('#pass').val()==''){ blert('旧密码不能为空！');return false;}
		if($('#pass1').val()==''){ blert('新密码不能为空！');return false;}
		showDialog();
		$.ajax({
			type:"post",
			url:"<?php echo url('Admin/Master/update');?>
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
<div class="runtime"></div>  
</div>
</body>
</html><?php }} ?>