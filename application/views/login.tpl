{* Extend index template *}
{extends file="index.tpl"}

{block name=title}
    {$title}
{/block}

{block name=body}
<!-- Container -->
<div id="container">

    <!-- Header -->
    <div id="header">
        <div id="branding">
		<h1 id="site-name">{$sitename}</h1>
        </div>
    </div>
    <!-- END Header -->

    <!-- Content -->
    <div id="content" class="colM">
        
<div id="content-main">

<!--
<form action="/user/login" method="post" id="login-form">
  <input type="hidden" name='{$csrf_token}' value='{$csrf_hash}' />
-->
{$form}
  <div style="width:100%;text-align:center;"><span style="color:red">{$error}</span></div>
  <div class="form-row">
    <label for="id_username" class="required">Username:</label> <input id="id_username" type="text" name="username" maxlength="30" />
  </div>
  <div class="form-row">
    
    <label for="id_password" class="required">Password:</label> <input type="password" name="password" id="id_password" />
    <input type="hidden" name="this_is_the_login_form" value="1" />
    <input type="hidden" name="next" value="/admin/" />
  </div>
  <div class="submit-row">
    <label>&nbsp;</label><input type="submit" value="Log in" />
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

{/block}
