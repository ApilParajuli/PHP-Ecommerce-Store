<?php $connection = oci_connect('Apil', 'Nepal123$', '//localhost/xe');
if (!$connection) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
