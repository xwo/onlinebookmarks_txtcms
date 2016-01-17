<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 00:55:27
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Index.html" */ ?>
<?php /*%%SmartyHeaderCode:106047019561be5ff8781d7-57352170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070e17b8cc55bdb4bd304d852be58cfebd729f73' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Index.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106047019561be5ff8781d7-57352170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_name' => 0,
    'cms_version' => 0,
    'adminid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be5ff9a49b2_79584526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be5ff9a49b2_79584526')) {function content_561be5ff9a49b2_79584526($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<script>if(self!=top){ top.location=self.location;}</script>
	<div id="head">
		<div class="left"><img src="static/images/logo.gif" height='60' title="<?php echo $_smarty_tpl->tpl_vars['cms_name']->value;?>
管理系统<?php echo $_smarty_tpl->tpl_vars['cms_version']->value;?>
"/></div>
		<div class="left head_txt"></div>
		<div class="right head_menu">
		  <ul id="head_menu">
			  <li> 您好：<?php echo $_smarty_tpl->tpl_vars['adminid']->value;?>
　[ <a href="<?php echo url('Admin/Master/Index');?>
" target="main">修改密码</a> <span><a href="<?php echo url('Admin/login/out');?>
">退出</a></span> ]</li>
			  <li><a href="./" target="_blank">预览网站</a></li>
			  <li><a href="<?php echo url('Admin/Index/index');?>
">后台首页</a></li>
			  <li><a href="<?php echo url('Admin/config/index');?>
" target="main">系统设置</a></li>
			  <li><a href="<?php echo url('Admin/cache/clear');?>
" target="main">更新缓存</a></li>
		  </ul>
		</div>
	</div>
<!--head is over-->
	 <div id="content">
	 <div id="left">
          <div class="left_title">系统管理</div>
		  <ul class="dis">
		  <li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/config/index');?>
" target="main">站点设置</a></li>
		  <li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/master/index');?>
" target="main">修改密码</a></li>
		  </ul>
		  
		  <div class="left_title">内容管理</div>
		  <ul class="dis">
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/Article/index');?>
" target="main">所有文档列表</a></li>
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/Arctype/index');?>
" target="main">分类管理</a></li>
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/Arcflag/index');?>
" target="main">属性管理</a></li>
		  </ul>

		  <div class="left_title">缓存管理</div>
		  <ul class="dis">
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/cache/index');?>
" target="main">缓存设置</a></li>
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/cache/clear');?>
" target="main">清除缓存</a></li>
		  </ul>

		  <div class="left_title">广告管理</div>
		  <ul class="dis">
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/ad/index');?>
" target="main">广告管理</a></li>
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/ad/edit');?>
" target="main">添加广告</a></li>
		  </ul>

		  <div class="left_title">其他设置</div>
		  <ul class="dis">
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/flink/index');?>
" target="main">友情链接管理</a></li>
			<li class="left_link" onClick="selemenu(this)"><a href="<?php echo url('Admin/robot/index');?>
" target="main">蜘蛛爬行记录</a></li>
		  </ul>

	   </div>

	<div id="right" style="_float: left;_margin-left:0px;">
		<iframe id="main" scrolling="auto" width="100%" height="auto" name="main" src="<?php echo url('Admin/index/main');?>
" frameborder="0"></iframe>
	</div>

	</div>
</div>
<script type="text/javascript">
$(function(){
	$(".left_title").click(function(){
		$(this).next("ul").slideToggle(200).siblings(".dis:visible").slideUp(200);
		$(this).toggleClass("left_title_over");
		$(this).siblings(".left_title_over").removeClass("left_title_over");
	});
});
window.onresize = function(){
	var heights = document.documentElement.clientHeight-60;
	document.getElementById('main').height = heights;
}
window.onresize();
</script>
</body>
</html><?php }} ?>