<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 09:17:37
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Arcflag.html" */ ?>
<?php /*%%SmartyHeaderCode:921559976561c5bb1d16a67-07516053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24076be44df684330445d47947ee01272a5e7d43' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Arcflag.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '921559976561c5bb1d16a67-07516053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561c5bb1efa403_67390905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561c5bb1efa403_67390905')) {function content_561c5bb1efa403_67390905($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">

<ul id="admin_sub_title">
	<li class="sub">属性管理</li>
	<li class="unsub"><a href="<?php echo url('Admin/Arcflag/edit');?>
">添加属性</a></li>
</ul>

<div id="admin_right_b">

  <table border="0" align="center" cellpadding="3" cellspacing="1" class="table_b">
	<tr class="title_bg">
	  <td width="80" align='center' class="title_bg">id</td>
      <td class="title_bg" width="200">标识(唯一)</td>
	  <td class="title_bg" width="200" align='center'>名称</td>
      <td width="100" align='center' class="title_bg">操作</td>
	  <td></td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
    <tr onmouseover=this.bgColor='#EDF8FE'; onmouseout=this.bgColor='#ffffff'; bgcolor='#ffffff'>
	  <td align="center" height="25"><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</td>
	  <td align="center"><?php echo $_smarty_tpl->tpl_vars['vo']->value['en'];?>
</td>
	  <td align="center"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cn'];?>
</td> 
      <td align="center"><a href="?Admin-Arcflag-edit-id-<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">编辑</a> <a href="?Admin-Arcflag-del-id-<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" onclick='return confirm("确定删除?删除后不可恢复!");'>删除</a></td>
	  <td></td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['vo']->_loop) {
?>
	<tr bgcolor='#ffffff'>
		<td colspan='4' height="25" align="center">暂无属性！</td><td></td>
	</tr>
<?php } ?>
  </table>
<div class="runtime"></div>  
</div>
</body>
</html><?php }} ?>