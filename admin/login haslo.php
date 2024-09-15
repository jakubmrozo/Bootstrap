<?php
if(!empty($_POST)) {
echo $_POST['nick'],'',hash('whirpool',$_POST['password']);
  }else{
      echo hash('whirlpool','jakub1jakub1');
      
  }
  
 
    
?>