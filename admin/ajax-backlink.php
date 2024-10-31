<?php
if ( ! defined( 'ABSPATH' ) ) exit;
add_action('wp_ajax_xyz_dbx_ajax_backlink', 'xyz_dbx_ajax_backlink_call');

function xyz_dbx_ajax_backlink_call() {
    global $wpdb;
    if($_POST){
        if (
            ! isset( $_POST['_wpnonce'] )
            || ! wp_verify_nonce( $_POST['_wpnonce'],'backlink' )
            ) {
                echo 1;
                //wp_nonce_ays( 'backlink' );
                
                exit();
            }
            if(current_user_can('administrator')){
                global $wpdb;
                if(isset($_POST)){
                    if(intval($_POST['enable'])==1){
                        update_option('xyz_credit_link','dbx');
                        echo "dbx";
                    }
                    if(intval($_POST['enable'])==-1){
                        update_option('xyz_dbx_credit_dismiss', "hide");
                        echo -1;
                    }
                }
            }
            
    }
    die();
}
?>