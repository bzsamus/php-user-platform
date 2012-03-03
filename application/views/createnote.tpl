{extends file="index.tpl"}

{block name=title}
    {$title}
{/block}

{block name=body}
<div class="FixedContainer">
{$form}
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
{/block}
