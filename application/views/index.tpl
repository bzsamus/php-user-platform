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
{block name=body}{/block}
<script>
{block name=js}{/block}
</script>
</body>
</html>
