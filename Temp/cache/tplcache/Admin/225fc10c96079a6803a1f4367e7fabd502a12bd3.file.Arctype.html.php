<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 01:08:48
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Arctype.html" */ ?>
<?php /*%%SmartyHeaderCode:1218831811561be920a4d2e3-34171840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '225fc10c96079a6803a1f4367e7fabd502a12bd3' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Arctype.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1218831811561be920a4d2e3-34171840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be920ad8380_02310566',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be920ad8380_02310566')) {function content_561be920ad8380_02310566($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">
<div class="admin_notice"><span>管理操作：</span><a href="<?php echo url('Admin/Arctype/edit');?>
">添加分类</a>　┊　<a href="<?php echo url('Admin/Arctype/index');?>
">分类管理</a></div>
<br>
<ul id="admin_sub_title">
	<li class="sub"><a>分类管理</a></li>
</ul>

<div id="admin_right_b">

  <table border="0" style="width:700px" align="center" cellpadding="3" cellspacing="1" class="table_b">
   <form action="<?php echo url('Admin/Arctype/uporder');?>
" method="post"> 
	<tr>
	  <td width="50" align='center' class="title_bg">id</td>
      <td class="title_bg">分类名称</td>
      <td width="150" align='center' class="title_bg">管理</td>
	  <td width="50" align='center' class="title_bg">排序</td>
    </tr>
	<?php echo $_smarty_tpl->tpl_vars['class_list']->value;?>

	<tr>
      <td colspan="4" class="tdbg" align="center"><div class="aui_buttons"  style="text-align:left;display: inline;"><button type="submit" class="aui_state_highlight">保存排序</button></div></td>
	</tr>
	
	</form>
  </table>

<div class="runtime"></div>  
</div>
</body>
</html><?php }} ?>