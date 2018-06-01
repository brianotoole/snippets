<?php
/**
 * Put up quick maint. page for all non-admin users
 */
function quick_maintenance_mode() {
    if (!current_user_can('administrator')) {
        wp_die('<div style="text-align:center!important;"><h1 style="font-family: \'Helvetica Neue\', \'HelveticaNeue\', Helvetica, Arial, sans-serif;margin-bottom:1em;border-bottom:0;font-weight:bold;">Our site is currently undergoing scheduled maintenance.</h1><p style="line-height:1.5;font-size:18px;color:#666;">We are sorry for the inconvenience.<br/>Please try again <strong>in 15 minutes</strong>.</p></div>','Scheduled Maintenance', array('response' => 503));
    }
}
add_action('get_header', 'quick_maintenance_mode');