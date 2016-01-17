<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:55:04
         compiled from "/home/ftp/w/wsunxa/wwwroot/core/txtcms/tpl/_jump.html" */ ?>
<?php /*%%SmartyHeaderCode:344408212561be5e8780758-31995060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9975a7548ca4c079e193716dc82f1898a2569f' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/core/txtcms/tpl/_jump.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344408212561be5e8780758-31995060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'waitSecond' => 0,
    'jumpUrl' => 0,
    'msgTitle' => 0,
    'message' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be5e8814ef7_23421080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be5e8814ef7_23421080')) {function content_561be5e8814ef7_23421080($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>友情提示</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='Refresh' content='<?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
'>
</head>
<body>
<table border="0" align="center" cellpadding="5" cellspacing="1" style="font-size:14px;color:#333333;margin-top:100px;background:#468bd7;border: 5px solid #eee;">
<tr style="color:#FFFFFF">
    <th><?php echo $_smarty_tpl->tpl_vars['msgTitle']->value;?>
</th>
</tr>
<tr><td height="100" style="font-size:12px; background:#FFFFFF">
    <div style="font-size:14px;font-weight:bold;margin:10px;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <div style="margin:10px;">系统将在&nbsp;<span id="wait" style="color:blue;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['waitSecond']->value;?>
</span>&nbsp;秒后自动跳转,如果不想等待,直接 <a href="<?php echo $_smarty_tpl->tpl_vars['jumpUrl']->value;?>
" style="color:#069;" id="href">点击这里</a></div>
</td></tr>
</table>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html><?php }} ?>