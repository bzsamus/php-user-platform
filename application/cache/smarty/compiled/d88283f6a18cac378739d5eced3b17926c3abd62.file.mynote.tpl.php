<?php /* Smarty version Smarty-3.1.7, created on 2012-05-11 19:59:28
         compiled from "application/views/mynote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18082674744f5219929a5336-77505880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88283f6a18cac378739d5eced3b17926c3abd62' => 
    array (
      0 => 'application/views/mynote.tpl',
      1 => 1330827918,
      2 => 'file',
    ),
    '362c2aba28b903456d185ab556019218d88a24bd' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1336528701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18082674744f5219929a5336-77505880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f5219929f936',
  'variables' => 
  array (
    'css' => 0,
    'c' => 0,
    'javascript' => 0,
    'j' => 0,
    'bodyclass' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f5219929f936')) {function content_4f5219929f936($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us" >
<head>
	<title>
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</title>
	<link rel="stylesheet" type="text/css" href="/media/css/base.css" />
	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
		<link rel="stylesheet" type="text/css" href="/media/css/<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
" />
	<?php } ?>
	<script type="text/javascript" src="/media/js/jquery.min.js"></script>
	<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
	<script type="text/javascript" src="/media/js/<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"></script>
	<?php } ?>
	
</head>
<body <?php if ($_smarty_tpl->tpl_vars['bodyclass']->value){?>class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
"<?php }?>>

<div id="Header">
    <div class="LiquidContainer HeaderContainer">

<ul id="Navigation">
        <?php if (!$_smarty_tpl->tpl_vars['user']->value){?>
        <li><a href="/user/login/?next=%2F" class="nav LoginNav">Login</a></li>
        <?php }else{ ?>
        <li id="UserNav">
                <a href="/user/" class="nav"><?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
<span></span></a>
                <ul>
                <li><a href="/friend">My Friends</a></li>
                <li class="beforeDivider"><a href="/friend/request">Requests</a></li>
                <li class="divider"><a href="/note/create">New Note</a></li>
                <li class="beforeDivider"><a href="/note">My Notes</a></li>
                <li class="divider"><a href="/user/profile">Settings</a></li>
                <li><a href="/user/logout">Logout</a></li>
                </ul>
        </li>
        <?php }?>
</ul>
    </div>
</div>


<div id="wrapper">
<div id="ColumnContainer">
<ul id="noteList">
<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
	<li>
		<div class="pin pinBoard" style="position:relative" id="<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
">
			<h3><?php echo $_smarty_tpl->tpl_vars['note']->value['title'];?>
</h3>
			<div class="link"><p><?php echo $_smarty_tpl->tpl_vars['note']->value['content'];?>
</p></div>
			<div class="followBoard">
				<a href="/note/<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
" class="Button13 Button WhiteButton"><strong>Edit</strong><span></span></a>
			</div>
		</div>
	</li>
<?php } ?>
</ul>
</div>
</div>

<script>


</script>
</body>
</html>
<?php }} ?>