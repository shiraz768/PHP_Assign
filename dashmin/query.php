<?php
include("connection.php");



if(isset($_POST['cat_add'])){
    $cname=$_POST['cat_name'];
    $filename=$_FILES["cat_file"]['name'];
    $file_tmp_name=$_FILES['cat_file']['tmp_name'];
    $filesize=$_FILES['cat_file']['size'];
    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    $destination='img/'.$filename;
    if($extension=="jpg" || $extension == "png" || $extension =="jpeg"){
if(move_uploaded_file($file_tmp_name,$destination)){
    $query= $pdo->prepare("insert into category (name,image) values (:pname,:pimg)");
    $query->bindParam("pname",$cname);
    $query->bindParam("pimg",$filename);
    $query->execute();
    echo"
    <script>
    alert('category added succesfully')
    </script>
    ";
}
else{
    echo"
    <script>
    alert('something went wrong')
    </script>
    ";
}

    }
}

?>