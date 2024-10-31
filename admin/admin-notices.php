<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function wp_popup_admin_notice()
{
    add_thickbox();
    $sharelink_text_array_popup = array
    (
        "I use Popup Dialog Box wordpress plugin from @xyzscripts and you should too.",
        "Popup Dialog Box wordpress plugin from @xyzscripts is awesome",
        "Thanks @xyzscripts for developing such a wonderful Popup Dialog Box wordpress plugin",
        "I was looking for a Popup Dialog Box and I found this. Thanks @xyzscripts",
        "Its very easy to use Popup Dialog Box wordpress plugin from @xyzscripts",
        "I installed Popup Dialog Box from @xyzscripts,it works flawlessly",
        "Popup Dialog Box wordpress plugin that i use works terrific",
        "I am using Popup Dialog Box wordpress plugin from @xyzscripts and I like it",
        "The Popup Dialog Box plugin from @xyzscripts is simple and works fine",
        "I've been using this Popup Dialog Box plugin for a while now and it is really good",
        "Popup Dialog Box wordpress plugin is a fantastic plugin",
        "Popup Dialog Box wordpress plugin is easy to use and works great. Thank you!",
        "Good and flexible  Popup Dialog Box plugin especially for beginners",
        "The best Popup Dialog Box wordpress plugin I have used ! THANKS @xyzscripts",
    );
    $sharelink_text_popup = array_rand($sharelink_text_array_popup, 1);
    $sharelink_text_popup = $sharelink_text_array_popup[$sharelink_text_popup];
    $xyz_popup_link = admin_url('admin.php?page=popup-dialog-box-basic-settings&dialoguebox_blink=en');
    $xyz_popup_link = wp_nonce_url($xyz_popup_link,'dialoguebox_blink');
    $xyz_popup_notice = admin_url('admin.php?page=popup-dialog-box-basic-settings&dialoguebox_notice=hide');
    $xyz_popup_notice = wp_nonce_url($xyz_popup_notice,'dialoguebox_notice');
    echo '
	<script type="text/javascript">
			function xyz_dbx_shareon_tckbox(){
			tb_show("Share on","#TB_inline?width=500&amp;height=75&amp;inlineId=show_share_icons_popup&class=thickbox");
		}
	</script>
	<div id="dbx_notice_td" class="error" style="color: #666666;margin-left: 2px; padding: 5px;line-height:16px;">
	<p>Thank you for using <a href="https://wordpress.org/plugins/popup-dialog-box/" target="_blank">Popup Dialog Box</a> plugin from <a href="https://xyzscripts.com/" target="_blank">xyzscripts.com</a>. Would you consider supporting us with the continued development of the plugin using any of the below methods?</p>
	<p>
	<a href="https://wordpress.org/support/plugin/popup-dialog-box/reviews" class="button xyz_rate_btn" target="_blank">Rate it 5★\'s on wordpress</a>';
    if(get_option('xyz_credit_link')=="0")
        echo '<a href="'.$xyz_popup_link.'" class="button xyz_backlink_btn xyz_blink">Enable Backlink</a>';

        echo '<a class="button xyz_share_btn" onclick=xyz_dbx_shareon_tckbox();>Share on</a>
		<a href="https://xyzscripts.com/donate/5" class="button xyz_donate_btn" target="_blank">Donate</a>

	<a href="'.$xyz_popup_notice.'" class="button xyz_show_btn">Don\'t Show This Again</a>
	</p>

	<div id="show_share_icons_popup" style="display: none;">
	<a class="button" style="background-color:#3b5998;color:white;margin-right:4px;margin-left:100px;margin-top: 25px;" href="http://www.facebook.com/sharer/sharer.php?u=http://xyzscripts.com/wordpress-plugins/popup-dialog-box/&text='.$sharelink_text_popup.'" target="_blank">Facebook</a>
	<a class="button" style="background-color:#00aced;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://twitter.com/share?url=http://xyzscripts.com/wordpress-plugins/popup-dialog-box/&text='.$sharelink_text_popup.'" target="_blank">Twitter</a>
	<a class="button" style="background-color:#007bb6;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://www.linkedin.com/shareArticle?mini=true&url=http://xyzscripts.com/wordpress-plugins/popup-dialog-box/" target="_blank">LinkedIn</a>
	<a class="button" style="background-color:#dd4b39;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="https://plus.google.com/share?&hl=en&url=http://xyzscripts.com/wordpress-plugins/popup-dialog-box/" target="_blank">Google+</a>
	</div>
	</div>';


}
$popup_installed_date = get_option('popup_installed_date');
if ($popup_installed_date=="") {
    $popup_installed_date = time();
}

if($popup_installed_date < ( time() - (30*24*60*60)))
{
    if (get_option('xyz_popup_dnt_shw_notice') != "hide")
    {
        add_action('admin_notices', 'wp_popup_admin_notice');
    }
}
?>
