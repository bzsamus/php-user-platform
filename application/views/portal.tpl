{extends file="index.tpl"}

{block name=title}
    {$title}
{/block}

{block name=body}
<div id="wrapper" class="BoardLayout">
<div id="ColumnContainer" style="margin-top: 49px;">

{foreach from=$notes item=note}
<div style="margin-top:15px;" class="pin" data-id="{$note.id}">
	<h3>{$note.0.title}</h3>
	{if $note.image}
        <a href="/note/{$note.0.id}/" class="PinImage ImgLink">
            	<img src="http://media-cdn.pinterest.com/upload/83598136802667669_XNijjvaP_b.jpg" alt="star light fixture - West Vintage Trading Company" class="PinImageImg" style="height: 144px;" />
        </a>
	{/if}
        <p class="description">{$note.0.content}</p>
        <p class="stats colorless"><span class="LikesCount">11 likes&nbsp;&nbsp;</span></p>
        <div class="convo attribution clearfix">
                <a href="/user/{$note.uid}" title="{$note.firstName} {$note.lastName}" class="ImgLink">
                    <img src="https://a248.e.akamai.net/media.pinterest.com.s3.amazonaws.com/avatars/kelley_white3-49.jpg" alt="Picture of Kelley W" />
                </a>
                <p>
                    by <a href="/user/{$note.uid}">{$note.firstName} {$note.lastName}</a>
                </p>
        </div>
</div>
{/foreach}
</div>
</div>
{/block}

{block name=js}
$(function(){
  $('#ColumnContainer').masonry({
    // options
    itemSelector : '.pin',
    columnWidth : 240
  });
});
{/block}
