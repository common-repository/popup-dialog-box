<?php
if ( ! defined( 'ABSPATH' ) ) exit;
	// Load the options
$xyz_tinymce=get_option('xyz_dbx_tinymce');
if($xyz_tinymce==1)
{
	require( dirname( __FILE__ ) . '/tinymce_filters.php' );
}
	if (isset($_POST['xyz_dbx_html']))
	{
		
		if (
				! isset( $_REQUEST['_wpnonce'] )
				|| ! wp_verify_nonce( $_REQUEST['_wpnonce'],'add-setting' )
		) {
			wp_nonce_ays( 'add-setting');
			exit;
		
		}
		
		$_POST=stripslashes_deep($_POST);
		$xyz_dbx_iframe=intval($_POST['xyz_dbx_iframe']);
		$xyz_dbx_repeat_interval_timing=intval($_POST['xyz_dbx_repeat_interval_timing']);
		$xyz_dbx_display_user=intval($_POST['xyz_dbx_display_user']);
		$xyz_dbx_html=stripslashes($_POST['xyz_dbx_html']);
		$xyz_dbx_title=sanitize_text_field($_POST['xyz_dbx_title']);
		if($xyz_dbx_title=="")
		{
			
			$xyz_dbx_title="Title";
		}
		$xyz_dbx_title_color=sanitize_text_field($_POST['xyz_dbx_title_color']);
		$xyz_dbx_display_position=intval($_POST['xyz_dbx_display_position']);
		$xyz_dbx_top=abs(intval($_POST['xyz_dbx_top']));
	 	$xyz_dbx_bottom=abs(intval($_POST['xyz_dbx_bottom']));
		$xyz_dbx_width=abs(intval($_POST['xyz_dbx_width']));
		$xyz_dbx_height=abs(intval($_POST['xyz_dbx_height']));
		$xyz_dbx_left=abs(intval($_POST['xyz_dbx_left']));
	
		$xyz_dbx_right=abs(intval($_POST['xyz_dbx_right']));
		$xyz_dbx_delay=abs(intval($_POST['xyz_dbx_delay']));
		$xyz_dbx_page_count=abs(intval($_POST['xyz_dbx_page_count']));
		$xyz_dbx_repeat_interval=abs(intval($_POST['xyz_dbx_repeat_interval']));
		$xyz_dbx_mode=$_POST['xyz_dbx_mode'];
		$xyz_dbx_z_index=intval($_POST['xyz_dbx_z_index']);
		
		$xyz_dbx_showing_option="0,0,0";
		
		$xyz_dbx_bg_color=sanitize_text_field($_POST['xyz_dbx_bg_color']);		
		$xyz_dbx_corner_radius=abs(intval($_POST['xyz_dbx_corner_radius']));
		$xyz_dbx_top_dim=sanitize_text_field($_POST['xyz_dbx_top_dim']);
		$xyz_dbx_left_dim=sanitize_text_field($_POST['xyz_dbx_left_dim']);
		$xyz_dbx_right_dim=sanitize_text_field($_POST['xyz_dbx_right_dim']);
		$xyz_dbx_bottom_dim=sanitize_text_field($_POST['xyz_dbx_bottom_dim']);
		$xyz_dbx_width_dim=sanitize_text_field($_POST['xyz_dbx_width_dim']);
		$xyz_dbx_height_dim=sanitize_text_field($_POST['xyz_dbx_height_dim']);
		$xyz_dbx_border_color=sanitize_text_field($_POST['xyz_dbx_border_color']);
		$xyz_dbx_border_width=intval($_POST['xyz_dbx_border_width']);
		$xyz_dbx_page_option=intval($_POST['xyz_dbx_page_option']);
		$xyz_dbx_close_button_option=intval($_POST['xyz_dbx_close_button_option']);
		$xyz_dbx_positioning=intval($_POST['xyz_dbx_positioning']);
		$xyz_dbx_position_predefined=intval($_POST['xyz_dbx_position_predefined']);
		$xyz_dbx_bg_opacity=abs(intval($_POST['xyz_dbx_bg_opacity']));
		
		
	
		if($xyz_dbx_page_option==2)
		{
			$dbx_pgf=0;
			$dbx_pof=0;
			$dbx_hp=0;
			if(isset($_POST['xyz_dbx_pages']))
				$dbx_pgf=1;
			if(isset($_POST['xyz_dbx_posts']))
				$dbx_pof=1;
			if(isset($_POST['xyz_dbx_hp']))
				$dbx_hp=1;
		
			$xyz_dbx_showing_option=$dbx_pgf.",".$dbx_pof.",".$dbx_hp;
		
			update_option('xyz_dbx_showing_option',$xyz_dbx_showing_option);
		
		
		
	 }
		
		
$old_page_count=get_option('xyz_dbx_page_count');
$old_repeat_interval=get_option('xyz_dbx_repeat_interval');
if(isset($_POST['xyz_dbx_cookie_resett']))
{
?>	
	<script language="javascript">

 var cookie_date = new Date ( );  // current date & time
 cookie_date.setTime ( cookie_date.getTime() - 1 );

  document.cookie = "_xyz_dbx_pc=; expires=" + cookie_date.toGMTString()+ ";path=/";
  document.cookie = "_xyz_dbx_until=; expires=" + cookie_date.toGMTString()+ ";path=/";


</script>
	
	
<?php 	
}
	
		update_option('xyz_dbx_html',$xyz_dbx_html);
		update_option('xyz_dbx_top',$xyz_dbx_top);
		update_option('xyz_dbx_width',$xyz_dbx_width);
		update_option('xyz_dbx_right',$xyz_dbx_right);
		update_option('xyz_dbx_bottom',$xyz_dbx_bottom);
		update_option('xyz_dbx_height',$xyz_dbx_height);
		update_option('xyz_dbx_left',$xyz_dbx_left);
		update_option('xyz_dbx_delay',$xyz_dbx_delay);
		update_option('xyz_dbx_page_count',$xyz_dbx_page_count);
		update_option('xyz_dbx_repeat_interval',$xyz_dbx_repeat_interval);
		update_option('xyz_dbx_repeat_interval_timing',$xyz_dbx_repeat_interval_timing);
		update_option('xyz_dbx_display_user',$xyz_dbx_display_user);
		update_option('xyz_dbx_mode',$xyz_dbx_mode);
		update_option('xyz_dbx_z_index',$xyz_dbx_z_index);
		
		//update_option('xyz_dbx_color',$xyz_dbx_color);
		update_option('xyz_dbx_corner_radius',$xyz_dbx_corner_radius);
		update_option('xyz_dbx_top_dim',$xyz_dbx_top_dim);
		update_option('xyz_dbx_height_dim',$xyz_dbx_height_dim);	
		update_option('xyz_dbx_left_dim',$xyz_dbx_left_dim);
		update_option('xyz_dbx_bottom_dim',$xyz_dbx_bottom_dim);
		update_option('xyz_dbx_right_dim',$xyz_dbx_right_dim);

		update_option('xyz_dbx_width_dim',$xyz_dbx_width_dim);
		update_option('xyz_dbx_border_color',$xyz_dbx_border_color);
		update_option('xyz_dbx_border_width',$xyz_dbx_border_width);
		update_option('xyz_dbx_bg_color',$xyz_dbx_bg_color);
		update_option('xyz_dbx_page_option',$xyz_dbx_page_option);
		update_option('xyz_dbx_close_button_option',$xyz_dbx_close_button_option);
		update_option('xyz_dbx_iframe',$xyz_dbx_iframe);
	
		update_option('xyz_dbx_display_position',$xyz_dbx_display_position);
		
		update_option('xyz_dbx_positioning',$xyz_dbx_positioning);
		
		update_option('xyz_dbx_title',$xyz_dbx_title);
		update_option('xyz_dbx_title_color',$xyz_dbx_title_color);
		update_option('xyz_dbx_position_predefined',$xyz_dbx_position_predefined);
		update_option('xyz_dbx_bg_opacity',$xyz_dbx_bg_opacity);
		
		?><br>
		
<div  class="system_notice_area_style1" id="system_notice_area">Settings updated successfully.<span id="system_notice_area_dismiss">Dismiss</span></div>
<?php
}


?>
<style type="text/css">
label{
cursor:default;


}
</style>
<script type="text/javascript">
 
  jQuery(document).ready(function() {
    
    jQuery('#dbxbordercolorpicker').hide();
    jQuery('#dbxbordercolorpicker').farbtastic("#xyz_dbx_border_color");
    jQuery("#xyz_dbx_border_color").click(function(){jQuery('#dbxbordercolorpicker').slideToggle();});
    
    jQuery('#dbxbgcolorpicker').hide();
    jQuery('#dbxbgcolorpicker').farbtastic("#xyz_dbx_bg_color");
    jQuery("#xyz_dbx_bg_color").click(function(){jQuery('#dbxbgcolorpicker').slideToggle();});
    jQuery('#dbxdbxcolorpicker').farbtastic("#xyz_dbx_title_color");
    jQuery("#xyz_dbx_title_color").click(function(){jQuery('#dbxdbxcolorpicker').slideToggle();});
    
  });
  function bgchange()
  {
	  var v;
v=document.getElementById('xyz_dbx_page_option').value;
if(v==1)
{
	document.getElementById('automatic').style.display='block';
	document.getElementById('shopt').style.display='none';
	document.getElementById('shortcode').style.display='none';		
}
if(v==2)
{
	document.getElementById('shopt').style.display='block';
	document.getElementById('shortcode').style.display='none';
	document.getElementById('automatic').style.display='none';	
}
if(v==3)

{
	document.getElementById('shortcode').style.display='block';
	document.getElementById('shopt').style.display='none';
	document.getElementById('automatic').style.display='none';
}
  }
  function cdcheck()
  {

	 var display_mech;
	 display_mech=document.getElementById('xyz_dbx_mode').value;
	 if(display_mech=="delay_only")
	 {
		 
		 document.getElementById('xyz_dbx_delaysec').style.display='';
		 document.getElementById('xyz_dbx_pages').style.display='none';
	 }
	 if(display_mech=="page_count_only")
	 {
		 
		 document.getElementById('xyz_dbx_delaysec').style.display='none';
		 document.getElementById('xyz_dbx_pages').style.display='';
	 }
	 if(display_mech=="both")
	 {
		 
		 document.getElementById('xyz_dbx_delaysec').style.display='';
		 document.getElementById('xyz_dbx_pages').style.display='';
	 }


  }

  function dbxdispcoord()
  {
	  var disp_position;
	 disp_position=document.getElementById('xyz_dbx_display_position').value;
	

	
if(disp_position==1)
{
	 document.getElementById('xyz_dbx_pos_left').style.display='';	
	 document.getElementById('xyz_dbx_pos_top').style.display='';
	 document.getElementById('xyz_dbx_pos_right').style.display='none';	
	 document.getElementById('xyz_dbx_pos_bottom').style.display='none';
}

if(disp_position==2)
{
	 document.getElementById('xyz_dbx_pos_left').style.display='none';	
	 document.getElementById('xyz_dbx_pos_top').style.display='';
	 document.getElementById('xyz_dbx_pos_right').style.display='';	
	 document.getElementById('xyz_dbx_pos_bottom').style.display='none';
}
if(disp_position==3)
{
	 document.getElementById('xyz_dbx_pos_left').style.display='';	
	 document.getElementById('xyz_dbx_pos_top').style.display='none';
	 document.getElementById('xyz_dbx_pos_right').style.display='none';	
	 document.getElementById('xyz_dbx_pos_bottom').style.display='';
}
if(disp_position==4)
{
	 document.getElementById('xyz_dbx_pos_left').style.display='none';	
	 document.getElementById('xyz_dbx_pos_top').style.display='none';
	 document.getElementById('xyz_dbx_pos_right').style.display='';	
	 document.getElementById('xyz_dbx_pos_bottom').style.display='';
}



	
  }
  function dbxdisplaydef()
  {
	  var disp_positioning;
	 disp_positioning=document.getElementById('xyz_dbx_positioning').value;
		
		 
			 document.getElementById('xyz_dbx_position').style.display='';
			 if(disp_positioning==1)
			 {
				 document.getElementById('xyz_dbx_predefined').style.display='none';
				 document.getElementById('xyz_dbx_display_pos').style.display=''; 
				 dbxdispcoord();
				 
			 }
			 else

			 {	

				 document.getElementById('xyz_dbx_predefined').style.display='';
				 document.getElementById('xyz_dbx_display_pos').style.display='none';
				 
				 document.getElementById('xyz_dbx_pos_left').style.display='none';	
				 document.getElementById('xyz_dbx_pos_top').style.display='none';
				 document.getElementById('xyz_dbx_pos_right').style.display='none';	
				 document.getElementById('xyz_dbx_pos_bottom').style.display='none';
				
				 document.getElementById('xyz_dbx_pos_width').style.display='';	
				 document.getElementById('xyz_dbx_pos_height').style.display='';
				
		 }
 
  }
</script>
<div >
<?php  $xyz_dbx_top_dim=get_option('xyz_dbx_top_dim');
$xyz_dbx_left_dim=get_option('xyz_dbx_left_dim');
$xyz_dbx_right_dim=get_option('xyz_dbx_right_dim');
$xyz_dbx_bottom_dim=get_option('xyz_dbx_bottom_dim');
$xyz_dbx_height_dim=get_option('xyz_dbx_height_dim');
$xyz_dbx_width_dim=get_option('xyz_dbx_width_dim');
$xyz_dbx_close_button_option=get_option('xyz_dbx_close_button_option');
$xyz_dbx_cookie_resett=get_option('xyz_dbx_cookie_resett');
$xyz_dbx_iframe=get_option('xyz_dbx_iframe');

$xyz_dbx_display_position=get_option('xyz_dbx_display_position');
$xyz_dbx_positioning=get_option('xyz_dbx_positioning');
$xyz_dbx_position_predefined=get_option('xyz_dbx_position_predefined');

?>
<h2>Dialogbox  Settings</h2>
<form method="post" >
<?php wp_nonce_field( 'add-setting' );?>
<?php 
$xyz_dbx_showing_option=get_option('xyz_dbx_showing_option');
$xyz_dbx_sh_arr=explode(",", $xyz_dbx_showing_option);
?>
<table  class="widefat" style="width:98%">
<tr valign="top" >
<td  scope="row" style="width: 50%" ><h3>  Title</h3></td>
<td></td>
</tr>

<tr valign="top" id="xyz_dbx">
<td scope="row" colspan="1"><label for="xyz_dbx_title"> Title </label>	</td><td>
<input class="xyz_dbx_width" name="xyz_dbx_title" type="text" id="xyz_dbx_title"  value="<?php print(get_option('xyz_dbx_title')); ?>" size="40" />
</td>
</tr>
<tr valign="top" class="disable">
<td scope="row"><label> Title font size </label></td>
<td><input readonly class="xyz_dbx_width" type="text" value="" size="40" />  </td>
</tr>
<tr valign="top" id="xyz_dbx_color">
<td scope="row"><label for="xyz_dbx_title_color"> Title color </label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_title_color" type="text" id="xyz_dbx_title_color"  value="<?php print(get_option('xyz_dbx_title_color')); ?>" size="40" /> <div id="dbxdbxcolorpicker"></div> </td>
</tr>

<tr valign="top" >
<td  scope="row" style="width: 50%" ><h3>  Content</h3></td>
<td></td>
</tr>

<tr valign="top" class="disable">
<td scope="row" colspan="1"><label>Show referrer URL based messages? </label></td><td>
<select>
<option style="display:none;" >Yes </option>
<option style="display:none;" >No </option>
</select>
</td>
</tr>

<tr valign="top" >
<td colspan="2" >
<?php wp_editor(get_option('xyz_dbx_html'),'xyz_dbx_html');?></td>
</tr>

<tr valign="top" id="xyz_dbx_pos"><td scope="row" colspan="2"><h3> Position Settings</h3></td></tr>

<tr valign="top" class="disable">
<td scope="row"><label> Position style</label></td>
<td><select>
<option style="display:none;" value ="1">Fixed</option>
<option style="display:none;" value ="2">Absolute</option>
</select></td>
</tr>

<tr valign="top" id="xyz_dbx_position">
<td scope="row"><label for="xyz_dbx_positioning"> Positioning</label></td>
<td><select  name="xyz_dbx_positioning"   id="xyz_dbx_positioning"  onchange="dbxdisplaydef()">
<option value ="1" <?php if($xyz_dbx_positioning=='1') echo 'selected'; ?>>Manually edit</option>
<option value ="2" <?php if($xyz_dbx_positioning=='2') echo 'selected'; ?>>Predefined settings</option>
</select></td>
</tr>
<tr valign="top" id="xyz_dbx_display_pos">

<td scope="row" colspan="1"><label for="xyz_dbx_display_position"> Display position </label></td><td>


<select name="xyz_dbx_display_position" id="xyz_dbx_display_position"  onchange="dbxdispcoord()">

<option value ="1" <?php if($xyz_dbx_display_position=='1') echo 'selected'; ?> >From  Top Left</option>
<option value ="2" <?php if($xyz_dbx_display_position=='2') echo 'selected'; ?> >From Top Right </option>
<option value ="3" <?php if($xyz_dbx_display_position=='3') echo 'selected'; ?> >From Bottom Left</option>
<option value ="4" <?php if($xyz_dbx_display_position=='4') echo 'selected'; ?> >From Bottom Right</option>
</select>
</td>

</tr>
<tr valign="top" id="xyz_dbx_predefined">

<td scope="row" colspan="1"><label for="xyz_dbx_position_predefined"> Choose a position </label>	</td><td>


<select name="xyz_dbx_position_predefined" id="xyz_dbx_position_predefined"  >

<option value ="1" <?php if($xyz_dbx_position_predefined=='1') echo 'selected'; ?> >On top left corner </option>

<option value ="2" <?php if($xyz_dbx_position_predefined=='2') echo 'selected'; ?> >On left center </option>
<option value ="3" <?php if($xyz_dbx_position_predefined=='3') echo 'selected'; ?> >On bottom left cornor</option>


<option value ="4" <?php if($xyz_dbx_position_predefined=='4') echo 'selected'; ?> >On bottom center </option>

<option value ="5" <?php if($xyz_dbx_position_predefined=='5') echo 'selected'; ?> >On bottom right corner </option>
<option value ="6" <?php if($xyz_dbx_position_predefined=='6') echo 'selected'; ?> >On right center</option>
<option value ="7" <?php if($xyz_dbx_position_predefined=='7') echo 'selected'; ?> >On top right corner </option>

<option value ="8" <?php if($xyz_dbx_position_predefined=='8') echo 'selected'; ?> >On top center </option>
<option value ="9" <?php if($xyz_dbx_position_predefined=='9') echo 'selected'; ?> >Absolute center</option>
</select>
</td>
</tr>

<tr valign="top" id="xyz_dbx_pos_top">
<td scope="row"><label for="xyz_dbx_top"> Top coordinate</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_top" type="text" id="xyz_dbx_top"  value="<?php print(get_option('xyz_dbx_top')); ?>" size="40" /><select  name="xyz_dbx_top_dim"   id="xyz_dbx_top_dim" >
<option value ="px" <?php if($xyz_dbx_top_dim=='px') echo 'selected'; ?>>px</option>
<option value ="%" <?php if($xyz_dbx_top_dim=='%') echo 'selected'; ?>>%</option>

</select></td>
</tr>
<tr valign="top" id="xyz_dbx_pos_left">
<td scope="row"><label for="xyz_dbx_left"> Left coordinate</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_left" type="text" id="xyz_dbx_left"  value="<?php print(get_option('xyz_dbx_left')); ?>" size="40" /><select  name="xyz_dbx_left_dim"   id="xyz_dbx_left_dim" >
<option value ="px" <?php if($xyz_dbx_left_dim=='px') echo 'selected'; ?>>px</option>
<option value ="%" <?php if($xyz_dbx_left_dim=='%') echo 'selected'; ?>>%</option>

</select></td>
</tr>

<tr valign="top" id="xyz_dbx_pos_right">
<td scope="row"><label for="xyz_dbx_right"> Right coordinate</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_right" type="text" id="xyz_dbx_right"  value="<?php print(get_option('xyz_dbx_right')); ?>" size="40" /><select  name="xyz_dbx_right_dim"   id="xyz_dbx_right_dim" >
<option value ="px" <?php if($xyz_dbx_right_dim=='px') echo 'selected'; ?>>px</option>
<option value ="%" <?php if($xyz_dbx_right_dim=='%') echo 'selected'; ?>>%</option>

</select></td>
</tr>
<tr valign="top" id="xyz_dbx_pos_bottom">
<td scope="row"><label for="xyz_dbx_bottom"> Bottom coordinate</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_bottom" type="text" id="xyz_dbx_bottom"  value="<?php print(get_option('xyz_dbx_bottom')); ?>" size="40" /><select  name="xyz_dbx_bottom_dim"   id="xyz_dbx_bottom_dim" >
<option value ="px" <?php if($xyz_dbx_bottom_dim=='px') echo 'selected'; ?>>px</option>
<option value ="%" <?php if($xyz_dbx_bottom_dim=='%') echo 'selected'; ?>>%</option>

</select></td>
</tr>
<tr valign="top" id="xyz_dbx_pos_width">
<td scope="row"><label for="xyz_dbx_width"> Width</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_width" type="text" id="xyz_dbx_width"  value="<?php print(get_option('xyz_dbx_width')); ?>" size="40" /><select  name="xyz_dbx_width_dim"   id="xyz_dbx_width_dim" >
<option value ="px" <?php if($xyz_dbx_width_dim=='px') echo 'selected'; ?>>px</option>
<option value ="%" <?php if($xyz_dbx_width_dim=='%') echo 'selected'; ?>>%</option>

</select>
</td>
</tr>
<tr valign="top" id="xyz_dbx_pos_height">
<td scope="row"><label for="xyz_dbx_height"> Height</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_height" type="text" id="xyz_dbx_height"  value="<?php print(get_option('xyz_dbx_height')); ?>" size="40" /><select  name="xyz_dbx_height_dim"   id="xyz_dbx_height_dim" >
<option value ="px" <?php if($xyz_dbx_height_dim=='px') echo 'selected'; ?>>px</option>
<option value ="%" <?php if($xyz_dbx_height_dim=='%') echo 'selected'; ?>>%</option>
</select></td>
</tr>


 <tr valign="top" class="disable">
 <td scope="row" colspan="2"><h3> Effect settings</h3></td></tr>
<tr valign="top" class="disable">
<td scope="row"><label>Draggable option </label></td>
<td><select>
<option style="display:none;" value="0">No</option>
<option style="display:none;" value="1">Yes</option>
</select></td>
</tr>
<tr valign="top" class="disable">
<td scope="row"><label>Slidable option </label></td>
<td><select>
<option style="display:none;" value="0">No</option>
<option style="display:none;" value="1">Yes</option>
</select></td>
</tr>

<!-- fadeinout -->
<tr valign="top" class="disable">
<td scope="row"><label> Fade In And Fade Out Effect</label></td>
<td><div>
<input type="radio" class="checked_false"><label>Yes</label>
<input type="radio" class="checked_false"><label>No</label>
</div></td>
</tr>
 
<?php
$xyz_dbx_mode=get_option('xyz_dbx_mode');
$xyz_dbx_page_option=get_option('xyz_dbx_page_option');
$xyz_dbx_repeat_interval_timing=get_option('xyz_dbx_repeat_interval_timing');
$xyz_dbx_display_user=get_option('xyz_dbx_display_user');
?>
<tr valign="top"><td scope="row" colspan="2"><h3> Display Logic Settings</h3></td></tr>

<tr valign="top" class="disable">
<td scope="row"><label> Display control cookie name </label></td>
<td><input readonly class="xyz_dbx_width" type="text" value="" size="40" />
</td></tr>

<tr valign="top">
<td scope="row"><label for="xyz_dbx_mode"> Display logic </label></td>
<td><select  name="xyz_dbx_mode"   id="xyz_dbx_mode"  onchange="cdcheck()">
<option value ="delay_only" <?php if($xyz_dbx_mode=='delay_only') echo 'selected'; ?>>Based on delay </option>
<option value ="page_count_only" <?php if($xyz_dbx_mode=='page_count_only') echo 'selected'; ?>>Based on  number of pages browsed </option>
<option value ="both" <?php if($xyz_dbx_mode=='both') echo 'selected'; ?>>Based on both </option>
</select></td>
</tr>
<tr valign="top" id="xyz_dbx_delaysec">
<td scope="row"><label for="xyz_dbx_delay"> Delay in seconds before popup appears </label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_delay" type="text" id="xyz_dbx_delay"  value="<?php print(get_option('xyz_dbx_delay')); ?>" size="40" /> sec</td>
</tr>

<tr valign="top" id="xyz_dbx_pages">
<td scope="row"><label for="xyz_dbx_page_count">Number of pages to browse before popup appears</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_page_count" type="text" id="xyz_dbx_page_count"  value="<?php print(get_option('xyz_dbx_page_count')); ?>" size="40" /> pages</td>
</tr>

<tr valign="top">
<td scope="row"><label for="xyz_dbx_repeat_interval"> Repeat interval for a user </label></td>
<td ><input class="xyz_dbx_width" name="xyz_dbx_repeat_interval" type="text" id="xyz_dbx_repeat_interval"  value="<?php print(get_option('xyz_dbx_repeat_interval')); ?>" size="40" /> 
<select name="xyz_dbx_repeat_interval_timing" id="xyz_dbx_repeat_interval_timing" >
<option value ="1" <?php if($xyz_dbx_repeat_interval_timing=='1') echo 'selected'; ?> >Hrs </option>
<option value ="2" <?php if($xyz_dbx_repeat_interval_timing=='2') echo 'selected'; ?> >Minutes </option>
</select>
</td>
</tr>

<tr valign="top" class="disable">
<td scope="row"><label>Maximum number of times that the popup should display (0 for unlimited display)</label></td>
<td><input readonly class="xyz_dbx_width" type="text" value="" size="40" /> </td>
</tr>

<tr valign="top" class="disable">
<td scope="row"><label>Reset counter ?</label></td>
<td><input class="checked_false" type="checkbox"/>
</td>
</tr>

<tr valign="top" >
<td scope="row"><label for="dbx_display_user">Do not show popup for logged in users ?</label></td>
<td><select name="xyz_dbx_display_user" id="xyz_dbx_display_user">
<option value ="1" <?php if($xyz_dbx_display_user=='1') echo 'selected'; ?>>Yes</option>
<option value ="0" <?php if($xyz_dbx_display_user=='0') echo 'selected'; ?>>No</option>
</select></td>
</tr>

<tr valign="top" class="disable">
<td scope="row"><label>Should popup expire ?</label></td>
<td>
<input type="radio" class="checked_false"/><label>Yes</label>
<input type="radio" class="checked_false"/><label>No</label>
</td></tr>

<tr valign="top" class="disable">
<td scope="row"><label> Display trigger </label></td>
<td><select>
<option style="display:none;">On load</option>
<option style="display:none;">On click</option>
</select></td>
</tr>

<tr valign="top">
<td scope="row" colspan="1"><label for="xyz_dbx_iframe">Display as iframe </label></td><td>
<select name="xyz_dbx_iframe" id="xyz_dbx_iframe"  >
<option value ="1" <?php if($xyz_dbx_iframe=='1') echo 'selected'; ?> >Yes </option>
<option value ="0" <?php if($xyz_dbx_iframe=='0') echo 'selected'; ?> >No </option>
</select>
</td>
</tr>

<tr valign="top" class="disable">
<td scope="row" colspan="1"><label> If content is larger than window?   </label></td><td>
<select>
<option style="display:none;" value ="0" >Hide content </option>
<option style="display:none;" value ="1" >Show scrollbar </option>
</select>
</td>
</tr>

<tr valign="top"  class="disable">
<td scope="row" colspan="1"><label>Target display devices</label></td><td>
<select>
<option style="display:none;" value ="0" >Desktop only</option>
<option style="display:none;" value ="1" >Mobile only </option>
</select>
</td>
</tr>

<tr valign="top" id="xyz_dbx_close">
<td scope="row" colspan="1"><label for="xyz_dbx_close_button_option"> Close button option </label></td><td>
<select name="xyz_dbx_close_button_option" id="xyz_dbx_close_button_option"  >
<option value ="1" <?php if($xyz_dbx_close_button_option=='1') echo 'selected'; ?> >Yes </option>
<option value ="0" <?php if($xyz_dbx_close_button_option=='0') echo 'selected'; ?> >No </option>
</select>
</td>
</tr>

<tr valign="top" class="disable"><td scope="row" colspan="2"><h3> Popup Closing settings</h3></td></tr>
<tr valign="top" class="disable">
<td scope="row" colspan="1"><label> Close mode </label></td><td>
<select>
<option style="display:none;" value ="0" >None </option>
<option style="display:none;" value ="1" >When user clicks close button</option>
</select>
</td>
</tr>

<tr valign="top" class="disable">
<td scope="row" colspan="1"><label> Auto close after timeout </label></td><td>
<select>
<option style="display:none;" value ="0" >No </option>
<option style="display:none;" value ="1" >Yes </option>
</select>
</td>
</tr>

<tr valign="top" class="disable">
<td scope="row"><label>Don't show again element (Must be id of  element to indicate don't show again in  html content, not applicable in case of iframe display)</label></td>
<td><input readonly class="xyz_dbx_width" type="text" value="" size="40" /> eg : #dontshow </td>
</tr>
<tr valign="top" class="disable">
<td scope="row"><label>Don't show again time period (in days)</label></td>
<td><input readonly class="xyz_dbx_width" type="text" value="" size="40" />  </td>
</tr>

<tr valign="top" class="disable"><td scope="row" colspan="2"><h3> Javascript Callback Settings</h3></td></tr>
<tr valign="top" class="disable">
<td scope="row"><label>Callback on popup display</label></td>
<td><textarea readonly ></textarea> </td>
</tr>
<tr valign="top" class="disable">
<td scope="row"><label>Callback on popup hide</label></td>
<td><textarea readonly></textarea> </td>
</tr>

<tr valign="top"><td scope="row" colspan="2"><h3> Style Settings</h3></td></tr>
<tr valign="top">
<td scope="row"><label for="xyz_dbx_z_index"> Z index</label></td>
<td><input name="xyz_dbx_z_index" class="xyz_dbx_width" type="text" id="xyz_dbx_z_index"  value="<?php print(get_option('xyz_dbx_z_index')); ?>" size="40" /> </td>
</tr>

<tr valign="top" class="disable">
<td scope="row" colspan="1"><label> Background image option </label></td><td>
<select>
<option style="display:none;" value ="1" >Yes </option>
<option style="display:none;" value ="0" >No </option>
</select>
</td></tr>

<tr valign="top" id="dbx_backgrnd_overopa">
<td scope="row"><label for="xyz_dbx_bg_opacity"> Background opacity(10-100)</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_bg_opacity" type="text" id="xyz_dbx_bg_opacity" value="<?php print(get_option('xyz_dbx_bg_opacity')); ?>" size="40" /> </td>
</tr>

<tr valign="top" >
<td scope="row"><label for="xyz_dbx_bg_color"> Background color</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_bg_color" type="text" id="xyz_dbx_bg_color"  value="<?php print(get_option('xyz_dbx_bg_color')); ?>" size="40" /> <div id="dbxbgcolorpicker"></div> </td>
</tr>
<tr valign="top">
<td scope="row"><label for="xyz_dbx_border_color"> Border color</label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_border_color" type="text" id="xyz_dbx_border_color"  value="<?php print(get_option('xyz_dbx_border_color')); ?>" size="40" /> <div id="dbxbordercolorpicker"></div> </td>
</tr>
<tr valign="top">
<td scope="row"><label for="xyz_dbx_border_width">  Border  width </label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_border_width" type="text" id="xyz_dbx_border_width"  value="<?php print(get_option('xyz_dbx_border_width')); ?>" size="40" /> px </td>
</tr>
<tr valign="top" id="xyz_dbx_rad">
<td scope="row"><label for="xyz_dbx_corner_radius">  Border  radius </label></td>
<td><input class="xyz_dbx_width" name="xyz_dbx_corner_radius" type="text" id="xyz_dbx_corner_radius"  value="<?php print(get_option('xyz_dbx_corner_radius')); ?>" size="40" /> px </td>
</tr>

<tr valign="top" class="disable">
<td scope="row"><label>Border Shadow</label></td>
<td>
<input type="radio" class="checked_false"><label>Yes</label>
<input type="radio" class="checked_false"><label>No</label>
</td>
</tr>

<tr valign="top"><td scope="row" colspan="2"><h3> Placement Settings</h3></td></tr>

<tr valign="top" id="pgopt" ><td scope="row"><label for="xyz_dbx_page_option"> Placement mechanism </label></td>
<td>
<select name="xyz_dbx_page_option" id="xyz_dbx_page_option" onchange="bgchange()">
<option value ="1" <?php if($xyz_dbx_page_option=='1') echo 'selected'; ?> >Automatic </option>
<option value ="2" <?php if($xyz_dbx_page_option=='2') echo 'selected'; ?> >Specific Pages</option>
<option value ="3" <?php if($xyz_dbx_page_option=='3') echo 'selected'; ?> >Manual </option>
</select></td></tr>



<tr valign="top" ><td scope="row" ></td><td>
<span  id="automatic" >Popup will load in all pages</span>
<span  id="shopt" >
<input name="xyz_dbx_pages" value="<?php echo $xyz_dbx_sh_arr[0];?>"<?php if($xyz_dbx_sh_arr[0]==1){?> checked="checked"<?php } ?> type="checkbox"> On Pages 
<input name="xyz_dbx_posts" value="<?php echo $xyz_dbx_sh_arr[1];?>"<?php if($xyz_dbx_sh_arr[1]==1){?> checked="checked"<?php }?>  type="checkbox"> On Posts
<input name="xyz_dbx_hp" value="<?php echo $xyz_dbx_sh_arr[2];?>"<?php if($xyz_dbx_sh_arr[2]==1){?> checked="checked"<?php }?>  type="checkbox"> On Home page 
</span>
<span  id="shortcode" >Use this short code in your pages - [xyz_dbx_default_code]</span>
</td>
</tr>
<!--  <tr valign="top" id="automatic"  style="display: none"><td scope="row" ></td><td >(Popup will load in all pages)</td>
</tr>
<tr valign="top" id="shortcode"  style="display: none"><td scope="row"></td><td>Use this short code in your pages - [xyz_dbx_default_code]</td>
</tr>-->
<tr valign="top">
<td scope="row"><label for="xyz_lcookie_resett"><h3>Reset cookies ? </h3>
 </label></td>
<td><input name="xyz_dbx_cookie_resett" type="checkbox" id="xyz_dbx_cookie_resett"   <?php  echo 'checked'; ?> /> 
(This is just for your testing purpose. If you want to see a popup  immediately after you make changes in any settings, you have to reset the cookies.)
 </td>
</tr>
<tr>
<td scope="row"> </td>
<td><br>
<input type="submit" class="submit_dbx" value="Update Settings" /></td>
</tr>
</table>
</form>
</div>
<div id="xyz_premium_only_info">
	<label>Only available in Premium version</label>
</div>

<script type="text/javascript">
bgchange();
cdcheck();
dbxdisplaydef();

jQuery(".disable").click(function(e){
	premiumClick(e);
	jQuery(".checked_false").prop("checked", false);
});

function premiumClick(e){
var left=e.pageX-170;
var top=e.pageY-30;
	
jQuery("#xyz_premium_only_info").css({"left" : left + "px", "top" : top + "px"});
jQuery("#xyz_premium_only_info").show();
jQuery("#xyz_premium_only_info").fadeIn( "slow", function() {
window.tooltip = setTimeout(function(){ jQuery("#xyz_premium_only_info").hide(); }, 2000);
});
return false;
}
</script>

<style>
#xyz_premium_only_info
{
display:none;
font-family:sans-serif;
font-size:13px;
text-align: center;
border-radius: 5px;
float: left;
background-color: rgb(51, 51, 51);
color: white; 
width: 98px; 
padding: 10px 20px;
position:absolute;
z-index:1000;
}
.disable select,.disable input,.disable input[type=radio]
{
cursor: not-allowed;
}
.disable{
	opacity:0.4;
	cursor:not-allowed;
}
.disable_option
{
display:none;
}
</style>
