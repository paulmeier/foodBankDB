<br />
<br />
<div align="center" style="font-size: 18px; font-weight: bold;  color: #808080; font-face:Calibri">{$page_heading}</div><br />
<table border="0" align="center">

{section name=idx_1 loop=$adminLinks}
{if $adminLinks[idx_1].tr != ''}<tr valign="top">{/if}
<td>
 <fieldset>
    <legend style="font-size: 13px;font-weight: bold; font-style: italic; color: #808080">
	   {$adminLinks[idx_1].legend} </legend>
	<table border="0">

	{section name=idx_2 loop=$adminLinks[idx_1].links}
  	 <tr><td style="font-size: 13px">
	<a href="{$adminLinks[idx_1].links[idx_2].url}">{$adminLinks[idx_1].links[idx_2].text}</a>
	</td></tr>
	{/section}

	</table>
</fieldset>
</td>
{if $adminLinks[idx_1].tr == ''}</tr>{/if}


{/section}
</table>
<br />
<br />
<br />
