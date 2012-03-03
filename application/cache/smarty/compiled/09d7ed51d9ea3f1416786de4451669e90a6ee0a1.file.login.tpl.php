<?php /* Smarty version Smarty-3.1.7, created on 2012-03-03 13:04:17
         compiled from "application/views/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783273854f41615dc07156-33076755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09d7ed51d9ea3f1416786de4451669e90a6ee0a1' => 
    array (
      0 => 'application/views/login.tpl',
      1 => 1330751053,
      2 => 'file',
    ),
    '362c2aba28b903456d185ab556019218d88a24bd' => 
    array (
      0 => 'application/views/index.tpl',
      1 => 1330748162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783273854f41615dc07156-33076755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f41615dc8e7f',
  'variables' => 
  array (
    'css' => 0,
    'c' => 0,
    'bodyclass' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f41615dc8e7f')) {function content_4f41615dc8e7f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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

<!-- Container -->
<div id="container">


    <!-- Content -->
    <div id="content" class="colM">
        
<div id="content-main">

<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

  <div style="width:100%;text-align:left;">
    <?php if ($_smarty_tpl->tpl_vars['error']->value){?><p class="error" style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
    <ul>
	<li>
    	<input id="id_username" type="text" name="username" maxlength="30" />
    	<label>Email</label>
	<span class="fff"></span>
	</li>
	<li>
    	<input type="password" name="password" id="id_password" />
    	<label>Password</label>
	<span class="fff"></span>
	</li>
	<input type="hidden" name="next" value="/" />
    </ul>  
	<div class="non_inputs">
            <a href="#" class="Button WhiteButton Button18" onclick="$('.AuthForm').submit(); return false"><strong>Login</strong><span></span></a>
        </div>
</form>

<script type="text/javascript">
document.getElementById('id_username').focus()
</script>
</div>
        <br class="clear" />
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->


<script>

$(document).ready(function(){
	$('input').each(function(){
		$(this).keyup(function(){
			var label = $(this).parent().find('label');
			if($(this).val() == ""){
				label.show();
			}
			else{
				label.hide();
			}
		});
	});
});

</script>
</body>
</html>
<?php }} ?>