<?php
   if(!empty($_POST)) {
       $name = $_POST['truck'];
       $driver = $_POST['driver'];
   }
        




       if(!empty($_FILES)){
        $targetDir = "trucks/";
        $targetFile = $targetDir.basename($_FILES['photo_truck']['name']);
        $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
     
        
        if(file_exists($targetFile)) {
           die('File already exists!');
        }
     
        if($_FILES['photo_truck']['size'] > 500000) {
            die('Image is too big!');
        }
     
        if($imgType != 'jpeg' && $imgType !='jpg' && $imgType != 'png') {
            die('Image format is not correct!');
        }
     
        if(move_uploaded_file($_FILES['photo_truck']['tmp_name'],$targetFile)){
            echo "OKfff";
        } else {
            die('nie jest ok');
        }
        }
     
?>