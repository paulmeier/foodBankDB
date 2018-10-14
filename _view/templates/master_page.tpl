<!--{ debug }     {* comment out 'debug' to not display list of Smarty variables and values *}-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="REFRESH" content="{$redirect}" />
<title>{$page_title}</title>
<style type="text/css">@import url({$css_url_default});</style>
{foreach from=$css_url item=curr_url}
  <style type="text/css">@import url({$curr_url});</style>
{/foreach}
{if $js_url_default != ''}
<script type="text/javascript" src="{$js_url_default}"></script>
{/if}
{foreach from=$js_url item=curr_url}
  <script type="text/javascript" src="{$curr_url}"></script>
{/foreach}
</head>
<body onLoad="{$onload}" >
<!-- Begin container for page body -->
<div id="container">
<!--  Page Header  -->
<table align="center" width="60%">
<tr><td>
<!-- Box looks bad <fieldset> -->
{if $page_head != ''}
  {include file="$page_head"}
{/if}

<!--  Page Content  -->
{if $view_content != ''}
  {include file="$view_content"}
{/if}

<!--  Page Footer  -->
{if $page_foot != ''}
  {include file="$page_foot"}
{/if}
<!-- </fieldset> -->
</td></tr>
</table>
</div>   <!-- End of Container   -->
</body>
</html>

