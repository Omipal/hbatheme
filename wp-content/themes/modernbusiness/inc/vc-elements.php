<?php 
function mb_vc_element(){
require_once(dirname(__FILE__).'/shortcodes/mb_about_section_1.php');
require_once(dirname(__FILE__).'/shortcodes/mb_about_section_2.php');
require_once(dirname(__FILE__).'/shortcodes/mb_team_member.php');    

}
add_action('vc_before_init', 'mb_vc_element');