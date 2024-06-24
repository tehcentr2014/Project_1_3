<?php  
  
foreach ($_REQUEST as $key=>$val) {  
    ${$key}=$val;  
}  
  
  
  
//echo $name;  
//echo "<br>";  
///echo $email;  
//echo "<br>";  
///echo $subject;  
  
$message = "$mess \n  $name \n $email";  
  
 echo "<b>Mail Send!</b>"; 
  
  
  
mail('tehcentr1920@gmail.com', $subject, $message);  
mail('tehcentr1720@gmail.com', $subject, $message);  
  
  
  
?>
