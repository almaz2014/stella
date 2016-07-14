<?php

//$target_path = "";

//$target_path=$target_path.basename($_FILES['uploadedfile']['name']); 
$target_path=basename($_FILES['uploadedfile']['name']); 



echo "TARGET <b>".$target_path."</b><br>";

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".basename( $_FILES['uploadedfile']['name'])." has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
    echo "<br><b>$target_path<b>";
}


//phpinfo();
?>