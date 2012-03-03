{* Extend index template *}
{extends file="index.tpl"}

{block name=title}
    {$title}
{/block}

{block name=body}
<!-- Container -->
<div id="container">


    <!-- Content -->
    <div id="content" class="colM">
        
<div id="content-main">

{$form}
  <div style="width:100%;text-align:left;">
    {if $error}<p class="error" style="text-align: center">{$error}</p>{/if}
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

{/block}

{block name=js}
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
{/block}
