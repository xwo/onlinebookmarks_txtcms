<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:55:43
         compiled from "/home/ftp/w/wsunxa/wwwroot/template/default/Article_show.html" */ ?>
<?php /*%%SmartyHeaderCode:1782615249561be60f444841-21388467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a235c472dc07eaf82aadd6544cf51b766adbb0' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/template/default/Article_show.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1782615249561be60f444841-21388467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'cname' => 0,
    'web_name' => 0,
    'keywords' => 0,
    'description' => 0,
    'theme_path' => 0,
    'web_path' => 0,
    'pname' => 0,
    'purl' => 0,
    'curl' => 0,
    'addtime' => 0,
    'writer' => 0,
    'body' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be60f67f156_53805772',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be60f67f156_53805772')) {function content_561be60f67f156_53805772($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/modifier.date.php';
if (!is_callable('smarty_block_channel')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/block.channel.php';
if (!is_callable('smarty_block_loop')) include '/home/ftp/w/wsunxa/wwwroot/core/txtcms/libs/template/plugins/block.loop.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<link rel="stylesheet" rev="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/style/style.css" type="text/css" media="all"/>
	<script src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
/style/js/prettify.js" type="text/javascript"></script>
</head>

<body>
<div id="w980">
<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="place"><strong>当前位置：</strong><a href="<?php echo $_smarty_tpl->tpl_vars['web_path']->value;?>
/">首页</a><?php if (isset($_smarty_tpl->tpl_vars['pname']->value)){?> > <a href="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
</a><?php }?> > <a href="<?php echo $_smarty_tpl->tpl_vars['curl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
</a> > <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 内容</div>
<div id="info">
<dl id="title"><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<p><span>选择字号： <A href="javascript:doZoom(12.5)">超大</A> <A href="javascript:doZoom(10.5)">标准</A> </span>发布时间：<?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['addtime']->value,'Y-m-d H:i');?>
  | 作者：<?php echo $_smarty_tpl->tpl_vars['writer']->value;?>
</p></dl>

<dl id="zi">
	<?php echo $_smarty_tpl->tpl_vars['body']->value;?>

</dl>

<script language=javascript>
function doZoom(size){
document.getElementById('zi').style.fontSize=size+'pt'
}
prettyPrint();
</script>
</div>

</div>

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
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('channel', array('row'=>"20")); $_block_repeat=true; echo smarty_block_channel(array('row'=>"20"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<li><a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</a></li>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_channel(array('row'=>"20"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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