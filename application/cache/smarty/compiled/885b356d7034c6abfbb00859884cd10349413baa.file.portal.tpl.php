<?php /* Smarty version Smarty-3.1.7, created on 2012-08-27 12:50:06
         compiled from "application/views/portal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14848814814f51d9c57b1130-72885629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '885b356d7034c6abfbb00859884cd10349413baa' => 
    array (
      0 => 'application/views/portal.tpl',
      1 => 1331197049,
      2 => 'file',
    ),
    '362c2aba28b903456d185ab556019218d88a24bd' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1346043002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14848814814f51d9c57b1130-72885629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f51d9c581412',
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
<?php if ($_valid && !is_callable('content_4f51d9c581412')) {function content_4f51d9c581412($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
	<script type="text/javascript" src="/media/js/bootstrap.min.js"></script>
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


<div id="wrapper" class="BoardLayout">
<div id="ColumnContainer" style="margin-top: 49px;">

<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
<div style="margin-top:15px;" class="pin" data-id="<?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
">
	<h3><?php echo $_smarty_tpl->tpl_vars['note']->value[0]['title'];?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['note']->value['image']){?>
        <a href="/note/<?php echo $_smarty_tpl->tpl_vars['note']->value[0]['id'];?>
/" class="PinImage ImgLink">
            	<img src="http://media-cdn.pinterest.com/upload/83598136802667669_XNijjvaP_b.jpg" alt="star light fixture - West Vintage Trading Company" class="PinImageImg" style="height: 144px;" />
        </a>
	<?php }?>
        <p class="description"><?php echo $_smarty_tpl->tpl_vars['note']->value[0]['content'];?>
</p>
        <!--
        <p class="stats colorless"><span class="LikesCount">11 likes&nbsp;&nbsp;</span></p>
        -->
        <div class="convo attribution clearfix">
                <a href="/user/<?php echo $_smarty_tpl->tpl_vars['note']->value['uid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['note']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['note']->value['lastName'];?>
" class="ImgLink">
                    <img src="<?php if ($_smarty_tpl->tpl_vars['note']->value['profile_pic']){?>/upload/<?php echo $_smarty_tpl->tpl_vars['note']->value['profile_pic'];?>
<?php }?>" alt="Picture of <?php echo $_smarty_tpl->tpl_vars['note']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['note']->value['lastName'];?>
" />
                </a>
                <p>
                    by <a href="/user/<?php echo $_smarty_tpl->tpl_vars['note']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['note']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['note']->value['lastName'];?>
</a>
                </p>
        </div>
</div>
<?php } ?>
</div>
</div>

<script>

$(function(){
  $('#ColumnContainer').masonry({
    // options
    itemSelector : '.pin',
    columnWidth : 240
  });
});

</script>
</body>
</html>
<?php }} ?>