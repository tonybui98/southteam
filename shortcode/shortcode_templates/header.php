<?php 
wp_localize_script( 'ajax-auth-script', 'header-content', array( 
  'ajaxurl' => admin_url( 'admin-ajax.php' ),
  'redirecturl' => home_url(),
  'loadingmessage' => __('Sending user info, please wait...')
));
