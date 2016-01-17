<?php /* Smarty version Smarty-3.1.13, created on 2015-10-13 01:08:47
         compiled from "/home/ftp/w/wsunxa/wwwroot/static/Admin/Article.html" */ ?>
<?php /*%%SmartyHeaderCode:476693101561be91f832e86-17555266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6a5a16dd307b4aed6d7dca4bb5f797d70ce3dab' => 
    array (
      0 => '/home/ftp/w/wsunxa/wwwroot/static/Admin/Article.html',
      1 => 1444509162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '476693101561be91f832e86-17555266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_option' => 0,
    'list' => 0,
    'vo' => 0,
    'total' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_561be91f999532_90674227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561be91f999532_90674227')) {function content_561be91f999532_90674227($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body class="body-main">
<div class="admin_notice">
	<span>管理操作：</span><select onChange="self.location.href='?Admin-article-Index-cid-'+this.value+''">
			<option value="">所有分类</option>
			<?php echo $_smarty_tpl->tpl_vars['class_option']->value;?>

			</select> ┊ <a href="<?php echo url('Admin/Article/edit');?>
">添加文档</a> ┊ <a class="hand" id="search">搜索文档</a></div>
<br>
<ul id="admin_sub_title">
	<li class="sub"><a>文档管理</a></li>
	<li class="unsub"><a href="<?php echo url('Admin/Article/edit');?>
">添加文档</a></li>
</ul>
<script>
$(function() {
	$("#search").click(function(){
		art.dialog({
			id:'s',
			title:'搜索',
			content:'关键词：<input name="keyword" type="text" class="input" id="keyword" value="" />',
			ok: function(){
				if($('#keyword').val()!='') location.href="?Admin-Article-index-q-"+$('#keyword').val();
			}
		});
	});
});
</script>
<div id="admin_right_b">

  <table border="0" align="center" cellpadding="3" cellspacing="1" class="table_b">
   <form action="<?php echo url('Admin/Article/Update');?>
" method="post" id="form" name="form"> 
	<tr>
	  <td align='center' width="30" class="title_bg">选择</td>
	  <td width="50" align='center' class="title_bg">id</td>
      <td class="title_bg">标题</td>
	  <td width="120" align='center' class="title_bg">分类</td>
	  <td width="100" align='center' class="title_bg">状态</td>
	  <td width="140" align='center' class="title_bg">添加时间</td>
      <td width="130" align='center' class="title_bg">管理</td>
    </tr>
<?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
    <tr onmouseover=this.bgColor='#EDF8FE'; onmouseout=this.bgColor='#ffffff'; bgcolor='#ffffff'>
	  <td height="25" align="center"><input name="ids[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
"></td>
	  <td align="center"><?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
</td>
      <td><a href="?Admin-Article-edit-id-<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['vo']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['vo']->value['title'];?>
</a></td>
	  <td align="center"><?php echo $_smarty_tpl->tpl_vars['vo']->value['cname'];?>
</td>
	  <td align="center"><?php echo $_smarty_tpl->tpl_vars['vo']->value['isshow'];?>
</td>
	  <td align="center"><?php echo $_smarty_tpl->tpl_vars['vo']->value['addtime'];?>
</td>
      <td align="center"><a href="<?php echo get_show_url($_smarty_tpl->tpl_vars['vo']->value['id']);?>
" target="_blank">预览</a> <a href="?Admin-Article-edit-id-<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
">编辑</a> <a href="?Admin-Article-del-id-<?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
" onclick='return confirm("确定删除?删除后不可恢复!");'>删除</a></td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['vo']->_loop) {
?>
	<tr bgcolor='#ffffff'>
		<td colspan='7' height="25" align="center">暂无文档！</td>
	</tr>
<?php } ?>
	<tr>
      <td colspan="7" height='30' class="tdbg">
	  <span class="right"></span>&nbsp;&nbsp;<input name="chkall" type="checkbox" id="chkall" onclick=checkall(this.form) value="checkbox">&nbsp;<label for="chkall">全选</label>  
      <div class="aui_buttons"  style="text-align:left;display: inline;">
	<button type="submit" class="aui_state_highlight" onClick="if(confirm('确定要删除吗?')){ form.action='?Admin-Article-delmore';}else{ return false}">批量删除</button>
	<button type="submit" class="aui_state_highlight" onclick="form.action='?Admin-Article-Statusall-sid-1';">批量审核</button>
	<button type="submit" class="aui_state_highlight" onclick="form.action='?Admin-Article-Statusall-sid-0';">批量未审核</button>
	<button type="button" class="aui_state_highlight" onclick="showchange();">批量移动</button>
	</div>
</td>
    </tr>
	
	<tr>
      <td colspan="7" class="tdbg content_page" align="center"><a>共 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 条</a>&nbsp;<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</td>
	</tr>
	
	</form>
  </table>
<script type="text/javascript">
function showchange(){
	art.dialog({
		id:'c',
		title:'文档批量移动',
		content:"移动到：<select name='changecid' id='changecid'><?php echo $_smarty_tpl->tpl_vars['class_option']->value;?>
</select>&nbsp;&nbsp;<input type='button' class='input' onclick='change_submit();' value='确定' />"
	});
	return false;
}
function change_submit(){
	$('#form').attr('action','?Admin-Article-movecid');
	var changecid=$("#changecid option:selected").val();
	$('#form').append('<input type="hidden" name="cid" value="'+changecid+'"/>');
	$('#form').submit();
}
</script>
<div class="runtime"></div>  
</div>
</body>
</html><?php }} ?>