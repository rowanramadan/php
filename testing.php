<?php
// phpinfo ();


define("NAME","Rowan");
echo NAME;


$age=10;
switch ($age) {
  case $age<5:
    echo "stay at home";
    break;
  case $age==5:
    echo "go to kindergarden";
    break;
  case  $age>6 and $age<12:
    echo "go to grade";
    break;
  default:
    echo "enter your age";
}
?>
 




