<?php /* Smarty version Smarty-3.1.7, created on 2012-03-04 04:34:26
         compiled from "application/views/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10905658154f51f0df672070-62094302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81e4ca9782bcaa15ad5feb6253b64d41c78c2611' => 
    array (
      0 => 'application/views/profile.tpl',
      1 => 1330774069,
      2 => 'file',
    ),
    '362c2aba28b903456d185ab556019218d88a24bd' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1330804226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10905658154f51f0df672070-62094302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f51f0df6eecf',
  'variables' => 
  array (
    'css' => 0,
    'c' => 0,
    'bodyclass' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f51f0df6eecf')) {function content_4f51f0df6eecf($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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

<h3>Edit Profile</h3>
<ul>
	<!-- Email -->
	<li>
		<label for="id_email">Email</label>
		<div class="Right">
			<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" id="id_email" />
			<span class="help_text">Not shown publicly</span>
		</div>
	</li>
	<!-- Password -->
	<li>
		<label>Password</label>
                <div class="Right">
                    <a href="/user/changePassword/" class="Button WhiteButton Button18"><strong>Change Password</strong><span></span></a>
                </div>
        </li>
	<!-- First Name -->
            <li>
                <label for="id_first_name">First name</label>
                <div class="Right">
                    <input type="text" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['firstname'];?>
" id="id_first_name" />
                </div>
            </li>

	<!-- Last Name -->
            <li>
                <label for="id_last_name">Last name</label>
                <div class="Right">
                    <input type="text" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['lastname'];?>
" id="id_last_name" />
                </div>
            </li>
	<!-- Location -->
            <li>
                <label for="id_location">Location</label>
                <div class="Right">
                    <input type="text" name="location" id="id_location" />
                </div>
            </li>
	<!-- About -->
            <li>
                <label for="id_about">About</label>
                <div class="Right">
                    <textarea id="id_about" rows="3" cols="54" name="about"></textarea>
                </div>
            </li>

	<!-- Image -->
            <li>
                <label for="id_img">Image</label>
                <div class="Right">
                        
                    <div class="current_avatar_wrapper">
                      <img src="" class="current_avatar floatLeft" alt="Current profile picture" />
                    </div>

                    <div class="floatLeft NoInput" style="padding-left: 12px;">
                        <p><a href="#" class="Button WhiteButton Button18 change_avatar"><strong>Upload an Image</strong><span></span></a><input id="id_img" type="file" name="img" size="6" /></p>
                    </div>
                </div>
            </li>
</ul>
<div class="Submit">
                <a href="#" class="Button RedButton Button24 userform_submit editpage_submit" onclick="$('#userProfile').submit(); return false"><strong>Save Profile</strong><span></span></a>
            </div>
</form>

<script>

</script>
</body>
</html>
<?php }} ?>