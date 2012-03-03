{extends file="index.tpl"}

{block name=title}
    {$title}
{/block}

{block name=body}
<div class="FixedContainer">
{$form}
<h3>Edit Profile</h3>
<ul>
	<!-- Email -->
	<li>
		<label for="id_email">Email</label>
		<div class="Right">
			<input type="text" name="email" value="{$user.email}" id="id_email" />
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
                    <input type="text" name="first_name" value="{$user.firstname}" id="id_first_name" />
                </div>
            </li>

	<!-- Last Name -->
            <li>
                <label for="id_last_name">Last name</label>
                <div class="Right">
                    <input type="text" name="last_name" value="{$user.lastname}" id="id_last_name" />
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
{/block}
