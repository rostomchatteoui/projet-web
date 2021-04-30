<?php
$echeck="select username from client where username=".$_POST['username'];
   $echk=mysql_query($echeck);
   $ecount=mysql_num_rows($echk);
  if($ecount!=0)
   {
      echo "username already exists";
   }
 ?>
