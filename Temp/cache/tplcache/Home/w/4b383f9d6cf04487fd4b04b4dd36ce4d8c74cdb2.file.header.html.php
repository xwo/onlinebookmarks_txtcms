<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:59:45
         compiled from "/home/ftp/w/wsunxa/wwwroot/template/w/header.html" */ ?>
<?php /*%%SmartyHeaderCode:1938651534561be701b0e0e2-84272356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b383f9d6cf04487fd4b04b4dd36ce4d8c74cdb2' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/template/w/header.html',
      1 => 1444660074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938651534561be701b0e0e2-84272356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_path' => 0,
    'web_name' => 0,
    'myad' => 0,
    'cid' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be701b9f221_17884375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be701b9f221_17884375')) {function content_561be701b9f221_17884375($_smarty_tpl) {?><?php if (!is_callable('smarty_block_channel')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/block.channel.php';
?>
<div id="head">
<h2><a href="<?php echo $_smarty_tpl->tpl_vars['web_path']->value;?>
/" title="<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
"></a></h2>
<dl id="ad"><?php echo $_smarty_tpl->tpl_vars['myad']->value['top_center'];?>
</dl>
<dl id="ad1"><?php echo $_smarty_tpl->tpl_vars['myad']->value['top_right'];?>
</dl>
<div class="clear"></div></div>

<div id="nav">
	<ul>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['web_path']->value;?>
/">首页</a></li>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('channel', array('row'=>"20")); $_block_repeat=true; echo smarty_block_channel(array('row'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<li><a<?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['vo']->value['id']){?> class="on"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_channel(array('row'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</div>
<div id="left"><?php }} ?>