<?php
/*
///##### STOP! #####\\\
DO NOT EDIT THIS FILE DIRECTLY
This file is mamanged by GIT
Contribute at https://github.com/cchsctv/cchsctv.com/
*/

// Use in the "Post-Receive URLs" section of your GitHub repo.

if ( $_POST['payload'] ) {
  shell_exec( 'cd /home/ctvserver/public_html && git reset --hard HEAD && git pull' ); 
}
?>hi
