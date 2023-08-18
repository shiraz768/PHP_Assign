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
    $checkcat = $pdo->prepare("select * from cat where name=:cname");
    $checkcat->bindParam('cname',$cname);
    $checkcat->execute();
  
    $count = $checkcat->rowCount();
   
    if($count > 0){
        echo "<script>alert('category existed')</script>";
    }
    else{
        $query= $pdo->prepare("insert into cat (name,image) values (:pname,:pimg)");
    $query->bindParam("pname",$cname);
    $query->bindParam("pimg",$filename);
    $query->execute();
   
    echo "
    <script>
    alert('category added succesfully')
    </script>
    ";
    }
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



if(isset($_POST['product_add'])){
    $pname=$_POST['pro_name'];
    $pquantity=$_POST['pro_qty'];
    $pprice=$_POST['pro_price'];
    $ctype=$_POST['cat_type'];

    
    $filename=$_FILES["pro_img"]['name'];
    $file_tmp_name=$_FILES['pro_img']['tmp_name'];
    $filesize=$_FILES['pro_img']['size'];
    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    $destination='img/'.$filename;
   
    if($extension=="jpg" || $extension == "png" || $extension =="jpeg"){
if(move_uploaded_file($file_tmp_name,$destination)){
    $checkcat = $pdo->prepare("select * from product where product_name=:pname");
    $checkcat->bindParam('pname',$pname);
    $checkcat->execute();
  
    $count = $checkcat->rowCount();
   
    if($count > 0){
        echo "<script>alert('product existed')</script>";
    }
    else{
        $query= $pdo->prepare("insert into product (product_name,product_quantity,product_price,category_type,image) values (:pname,:pqty,:pprice,:ctype,:pimg)");
    $query->bindParam("pname",$pname);
    $query->bindParam("pqty",$pquantity);
    $query->bindParam("pprice",$pprice);
    $query->bindParam("ctype",$ctype);
    $query->bindParam("pimg",$filename);
    $query->execute();
   
    echo "
    <script>
    alert('product added succesfully')
    </script>
    ";
    }
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