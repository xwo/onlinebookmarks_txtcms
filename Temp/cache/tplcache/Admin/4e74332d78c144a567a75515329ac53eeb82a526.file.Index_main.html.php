<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:55:27
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Index_main.html" */ ?>
<?php /*%%SmartyHeaderCode:1284831310561be5ffec6b81-34347212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e74332d78c144a567a75515329ac53eeb82a526' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Index_main.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1284831310561be5ffec6b81-34347212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SERVER_NAME' => 0,
    'licence' => 0,
    'adminid' => 0,
    'article_count' => 0,
    'cms_name' => 0,
    'cms_version' => 0,
    'logtime' => 0,
    'class_count' => 0,
    'cms_release' => 0,
    'logip' => 0,
    'robot_count' => 0,
    'upload_max_filesize' => 0,
    'REMOTE_ADDR' => 0,
    'flink_count' => 0,
    'tips' => 0,
    'SERVER_ADDR' => 0,
    'SERVER_PORT' => 0,
    'SCRIPT_FILENAME' => 0,
    'SERVER_SOFTWARE' => 0,
    'php_os' => 0,
    'php_libz' => 0,
    'iconv' => 0,
    'mbstring' => 0,
    'display_errors' => 0,
    'magic_quotes_gpc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be60011cc15_17991046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be60011cc15_17991046')) {function content_561be60011cc15_17991046($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/smarty/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">
<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">系统信息</a></li>
</ul>
<div id="admin_right_b">
<table border="0" align="center" cellpadding="8" cellspacing="1" id="config0" style="width:100%;background:#ddd;">
	<tr class="firstalt">
		<td width="120">当前域名：</td><td><b><?php echo $_smarty_tpl->tpl_vars['SERVER_NAME']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['licence']->value;?>
</b></td>
		<td>管理员：</td><td><b><?php echo $_smarty_tpl->tpl_vars['adminid']->value;?>
</b></td>
		<td>文章统计：</td><td><b><?php echo $_smarty_tpl->tpl_vars['article_count']->value;?>
</b></td>
	</tr>
	<tr class="firstalt">
		<td><?php echo $_smarty_tpl->tpl_vars['cms_name']->value;?>
版本：</td><td><b><?php echo $_smarty_tpl->tpl_vars['cms_version']->value;?>
</b></td>
		<td>上次登录时间：</td><td><b><?php echo $_smarty_tpl->tpl_vars['logtime']->value;?>
</b></td>
		<td>分类统计：</td> <td><b><?php echo $_smarty_tpl->tpl_vars['class_count']->value;?>
</b></td>
	</tr>
	<tr class="firstalt">
		<td>最后更新时间：</td><td><b><font color="#990000"><?php echo $_smarty_tpl->tpl_vars['cms_release']->value;?>
</font></b> <a href="http://www.txtcms.com/" target="_blank">检查更新</a></td>
		<td>上次登录IP：</td> <td><b><?php echo $_smarty_tpl->tpl_vars['logip']->value;?>
</b></td>
		<td>蜘蛛爬行统计：</td> <td><b><?php echo $_smarty_tpl->tpl_vars['robot_count']->value;?>
</b></td>
	</tr>
	<tr class="firstalt">
		<td>上传文件最大限制：</td><td><b><?php echo $_smarty_tpl->tpl_vars['upload_max_filesize']->value;?>
</b></td>
		<td>本次登录IP：</td> <td><b><?php echo $_smarty_tpl->tpl_vars['REMOTE_ADDR']->value;?>
</b></td>
		<td>友情链接统计：</td><td><b><?php echo $_smarty_tpl->tpl_vars['flink_count']->value;?>
</b></td>
	</tr>
	<tr class="firstalt">
		<td>目录权限检查：</td><td colspan="5" align="left"><?php echo $_smarty_tpl->tpl_vars['tips']->value;?>
</td>
	</tr>
</table>
&nbsp;
<table border="0" align="center" cellpadding="8" cellspacing="1" style="width:100%;background:#ddd;">
    <tr class="firstalt">
      <td height="25" width='20%' align="center">函数描述</td>
      <td align="center" width='80%'>返回参数</td>
    </tr>
	<tr class="firstalt">
      <td height="20"align="right">当前域名 (IP地址：端口)</td>
      <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['SERVER_NAME']->value;?>
</b> (<?php echo $_smarty_tpl->tpl_vars['SERVER_ADDR']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['SERVER_PORT']->value;?>
)</td>
    </tr>
	<tr class="firstalt">
		<td height="20"align="right">程序目录绝对路径</td> 
		<td><?php echo dirname($_smarty_tpl->tpl_vars['SCRIPT_FILENAME']->value);?>
</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">服务器解译引擎</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['SERVER_SOFTWARE']->value;?>
</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">服务器操作系统( 服务器时间 )</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['php_os']->value;?>
(<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
)</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">PHP 运行方式( 版本 )</td> 
		<td><?php echo @constant('PHP_SAPI');?>
(<?php echo @constant('PHP_VERSION');?>
)</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">php zlib扩展</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['php_libz']->value;?>
</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">iconv编码转换</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['iconv']->value;?>
</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">mbstring扩展</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['mbstring']->value;?>
</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">显示错误信息(display_errors)</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['display_errors']->value;?>
</td>
	</tr>
	<tr class="firstalt">
		<td height="20"align="right">magic_quotes_gpc</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['magic_quotes_gpc']->value;?>
</td>
	</tr>
  </table>
</div>


</body>
</html><?php }} ?>