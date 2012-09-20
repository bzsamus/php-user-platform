<?php /* Smarty version Smarty-3.1.7, created on 2012-05-11 19:59:37
         compiled from "application/views/createnote.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6470722134f51f1cf732708-27265987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad20ce07956088076fd790f74bac4c9fd67639b9' => 
    array (
      0 => 'application/views/createnote.tpl',
      1 => 1330775158,
      2 => 'file',
    ),
    '362c2aba28b903456d185ab556019218d88a24bd' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1336528701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6470722134f51f1cf732708-27265987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f51f1cf77ff0',
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
<?php if ($_valid && !is_callable('content_4f51f1cf77ff0')) {function content_4f51f1cf77ff0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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


<div class="FixedContainer">
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<h3>Create Note</h3>
<ul>

                <!-- Title -->
                <li>
                    <label for="field_title">Title</label>
                    <div class="Right">
                        <input type="text" name="title" value="" id="field_title" />
                        <span class="help_text">title of the note</span>
                        
                    </div>
                </li>
		<li>
                    <label for="id_content">Content</label>
                    <div class="Right">
                        <textarea id="id_content" rows="8" cols="54" name="content"></textarea>
                        
                    </div>
                </li>
		<li>
			<label class="radio">Who can read?</label>
			<div class="Right">
                        <div style="display:none; border-top: 0;"></div>
			<ul class="pinability">
                            <li>
                                <label>
                                    <input type="radio" name="permission" value="1" checked="checked" />
                                    <span>Just Me</span>
                                </label>
                            </li>
			    <li>
                                <label>
                                    <input type="radio" name="permission" value="2" />
                                    <span>Me + Friends</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="permission" value="3" />
                                    <span>Everyone</span>
                                </label>
                            </li>
                        </ul>
			</div>
		</li>
</ul>
<div class="Submit">
                <a href="#" class="Button RedButton Button24 userform_submit editpage_submit" onclick="$('#createNote').submit(); return false"><strong>Create Note</strong><span></span></a>
            </div>
</form>
</div>

<script>

</script>
</body>
</html>
<?php }} ?>