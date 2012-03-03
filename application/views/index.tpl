<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us" >
<head>
	<title>{block name=title}{/block}</title>
	<link rel="stylesheet" type="text/css" href="/media/css/base.css" />
	{foreach from=$css item=c}
		<link rel="stylesheet" type="text/css" href="/media/css/{$c}" />
	{/foreach}
	<script type="text/javascript" src="/media/js/jquery.min.js"></script>
</head>
<body {if $bodyclass}class="{$bodyclass}"{/if}>

<div id="Header">
    <div class="LiquidContainer HeaderContainer">

<ul id="Navigation">
        {if !$user}
        <li><a href="/user/login/?next=%2F" class="nav LoginNav">Login</a></li>
        {else}
        <li id="UserNav">
                <a href="/user/" class="nav">{$user.firstname}<span></span></a>
                <ul>
                <li><a href="/friend">My Friends</a></li>
                <li class="beforeDivider"><a href="/friend/request">Requests</a></li>
                <li class="divider"><a href="/note/create">New Note</a></li>
                <li class="beforeDivider"><a href="/note">My Notes</a></li>
                <li class="divider"><a href="/user/profile">Settings</a></li>
                <li><a href="/user/logout">Logout</a></li>
                </ul>
        </li>
        {/if}
</ul>
    </div>
</div>

{block name=body}{/block}
<script>
{block name=js}{/block}
</script>
</body>
</html>
