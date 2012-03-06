{* Extend index template *}
{extends file="index.tpl"}

{block name=title}
    {$title}
{/block}

{block name=body}
<div id="wrapper">
<div id="ColumnContainer">
<ul id="noteList">
{foreach from=$notes item=note}
	<li>
		<div class="pin pinBoard" style="position:relative" id="{$note.id}">
			<h3>{$note.title}</h3>
			<div class="link"><p>{$note.content}</p></div>
			<div class="followBoard">
				<a href="/note/{$note.id}" class="Button13 Button WhiteButton"><strong>Edit</strong><span></span></a>
			</div>
		</div>
	</li>
{/foreach}
</ul>
</div>
</div>
{/block}

{block name=js}
{/block}
