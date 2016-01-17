<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 01:09:15
         compiled from "/home/ftp/w/wsunxa/wwwroot/template/w/Article_lists.html" */ ?>
<?php /*%%SmartyHeaderCode:678983928561be93badb279-04863490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37c6d749785f9f9ad4b6c3bab26e3462819e6250' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/template/w/Article_lists.html',
      1 => 1444668728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '678983928561be93badb279-04863490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cname' => 0,
    'pname' => 0,
    'web_name' => 0,
    'keywords' => 0,
    'description' => 0,
    'theme_path' => 0,
    'web_path' => 0,
    'purl' => 0,
    'list' => 0,
    'vo' => 0,
    'flag' => 0,
    'sonclass' => 0,
    'pages' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be93bda2152_57301469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be93bda2152_57301469')) {function content_561be93bda2152_57301469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_list')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/function.list.php';
if (!is_callable('smarty_modifier_date')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/modifier.date.php';
if (!is_callable('smarty_block_channel')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/block.channel.php';
if (!is_callable('smarty_block_loop')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/block.loop.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['pname']->value)){?>/<?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
<?php }?>-<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/style/style.css" type="text/css" media="all"/>
</head>

<body>
<div id="w980">
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="place"><strong>当前位置：</strong><a href="<?php echo $_smarty_tpl->tpl_vars['web_path']->value;?>
/">Home</a><?php if (isset($_smarty_tpl->tpl_vars['pname']->value)){?> > <a href="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
</a><?php }?> > <?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</div>
<div id="lieb">
<?php echo smarty_function_list(array('as'=>"list",'row'=>'10','orderby'=>"order desc,id desc"),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
	<dl>
		<dt><?php if (!empty($_smarty_tpl->tpl_vars['vo']->value['flag'])){?>
			<?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vo']->value['flag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value){
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
				<i class="icon flag_<?php echo $_smarty_tpl->tpl_vars['flag']->value['en'];?>
"><?php echo $_smarty_tpl->tpl_vars['flag']->value['cn'];?>
</i>
			<?php } ?>
		<?php }?><h2><a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></h2></dt>
		<dd><p><?php echo $_smarty_tpl->tpl_vars['vo']->value['description'];?>
</p>
		<p class="tags"> 栏目：<?php if ($_smarty_tpl->tpl_vars['sonclass']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['curl'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</a><?php }?>&nbsp;&nbsp;&nbsp;发布时间：<?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['vo']->value['addtime'],'Y-m-d H:i');?>
</p>
		</dd>
		<div class="clear"></div>
	</dl>              
<?php } ?>
  <dl class="pagebar"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</dl>
</div></div>

<div id="rigth"><dl id="ss"><form name="search" method="post" action="<?php echo url('Home/Article/search');?>
"><input type="text" name="q" size="11" id="search-keyword" /> <input type="submit" value="搜索"  class="search-submit"/></form><div class="clear"></div></dl>
 
<dl class="function" id="divCalendar">
<dt style="display:none;"></dt><dd class="function_c">

<div></div>


</dd>
</dl> 
<dl class="function" id="divCatalog">
<dt class="function_t">网站分类</dt>
	<dd class="function_c">
		<ul>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('channel', array('row'=>"20",'type'=>"self",'id'=>$_smarty_tpl->tpl_vars['id']->value)); $_block_repeat=true; echo smarty_block_channel(array('row'=>"20",'type'=>"self",'id'=>$_smarty_tpl->tpl_vars['id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</a></li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_channel(array('row'=>"20",'type'=>"self",'id'=>$_smarty_tpl->tpl_vars['id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</dd>
</dl> 
<dl class="function" id="divArchives">
<dt class="function_t">最新文章</dt><dd class="function_c">
	<ul>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('table'=>"article",'row'=>'5','orderby'=>"id desc")); $_block_repeat=true; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"id desc"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a title="<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['vo']->value['style'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"id desc"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</dd>
</dl> 
<dl class="function" id="divArchives">
<dt class="function_t">随机文章</dt><dd class="function_c">
	<ul>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('loop', array('table'=>"article",'row'=>'5','orderby'=>"rand")); $_block_repeat=true; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"rand"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a title="<?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['vo']->value['style']){?> style="<?php echo $_smarty_tpl->tpl_vars['vo']->value['style'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></li>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_loop(array('table'=>"article",'row'=>'5','orderby'=>"rand"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</ul>
</dd>
</dl>
</div>
<div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>