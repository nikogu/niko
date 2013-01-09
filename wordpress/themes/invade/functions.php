<?php

// Translations can be filed in the /lang/ directory
load_theme_textdomain( 'themejunkie', TEMPLATEPATH . '/lang' );

require_once(TEMPLATEPATH . '/includes/sidebar-init.php');
require_once(TEMPLATEPATH . '/includes/custom-functions.php'); 
require_once(TEMPLATEPATH . '/includes/post-thumbnails.php');

require_once(TEMPLATEPATH . '/includes/theme-posttypes.php');
require_once(TEMPLATEPATH . '/includes/theme-bookmeta.php');

require_once(TEMPLATEPATH . '/includes/theme-options.php');
//require_once(TEMPLATEPATH . '/includes/theme-widgets.php');

require_once(TEMPLATEPATH . '/functions/theme_functions.php'); 
require_once(TEMPLATEPATH . '/functions/admin_functions.php');

?>
