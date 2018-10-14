<table align="center">
<tr><td colspan="2">
  <img src="{$banner_url}" alt="Midwest Food Bank" width="759" height="118" />
</td></tr>
<tr>
    <td style="font-family: Calibri; font-size: 14px;" align="left">
   <!-- {html_href href="$link_people"  text='People Home' status='People Menu'} -->
   	  {if $link_person != ''}
         - {html_href href="$link_person"  text='People Home' status='People Menu'} 
      {/if}
      {if $link_org != ''}
         - {html_href href="$link_org"  text='Organization Home' status='Organization Menu'} 
      {/if}
      {if $link_admin != ''}
         - {html_href href="$link_admin"  text='Administrator Home' status='Administrator Menu' title='Administrator Menu'} 
      {/if}
</td>
<td align="right" style="font-family: Calibri; font-size: 14px;">
<div align='right'>
{if $cur_user != ''}
       <font size='1' ><br />(Logged In As: 
       <strong>{$cur_user})</strong></font>&#160;
       {html_href href="$link_logout"  text='Logout' status='Logout'}
{else}
       {html_href href="$link_login" text='Login' status='Login'}
{/if}
</div>
</td></tr>
</table>
