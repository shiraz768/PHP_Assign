<?php
include("connection.php")
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<style>
    label{
        font-weight: bold;
    }
</style>

<body>
    <div class="container"><h1 class="bg-danger text-white">Delete Table Row</h1></div>
    <?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = $pdo->prepare("SELECT * FROM marksheet WHERE id = :stdid");
$query->bindParam("stdid", $id);
$query->execute();
$obj = $query->fetch(PDO::FETCH_ASSOC);?>
<div class="container">
        <form action="" method="post" class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $obj['name']?>">
            <label for="">English Marks</label>
            <input type="number" class="form-control" name="english" value="<?php echo $obj['english']?>">
            <label for="">Urdu Marks</label>
            <input type="number" class="form-control" name="urdu"  value="<?php echo $obj['urdu']?>">
            <label for="">Maths Marks</label>
            <input type="number" class="form-control" name="maths"  value="<?php echo $obj['maths']?>">
            <label for="">Physics Marks</label>
            <input type="number" class="form-control" name="physics"  value="<?php echo $obj['physics']?>">
            <label for="">Chemistry Marks</label>
            <input type="number" class="form-control" name="chemistry"  value="<?php echo $obj['chemistry']?>">
            <br>
            <button type="Submit" class="btn btn-danger" name="delete">Delete row</button>

        </form>
  <?php
  }
  if(isset($_POST['delete'])){
    $name = $_POST['name'];
    $eng = $_POST['english'];
    $urdu = $_POST["urdu"];
    $maths = $_POST["maths"];
    $physics = $_POST["physics"];
    $chem = $_POST["chemistry"];
    $total_marks = 500;
    $obtained_marks = ($eng + $urdu + $maths + $physics + $chem);
    $percentage = $obtained_marks / $total_marks * 100;
    $grade = "";
    $remarks = "";
    if ($percentage >= 80 && $percentage <= 100) {
        $grade = "A+";
        $remarks = "Excellent";
    } elseif ($percentage > 70 && $percentage < 80) {
        $grade = "A";
        $remarks = "Well Done";
    } elseif ($percentage > 60 && $percentage < 70) {
        $grade = "B";
        $remarks = "Better";
    } elseif ($percentage > 50 && $percentage < 60) {
        $grade = "C";
        $remarks = "Good";
    } elseif ($percentage > 40 && $percentage < 50) {
        $grade = "D";
        $remarks = "Improve Yourself";
    }
    $query1 = $pdo->prepare("DELETE FROM marksheet WHERE id = :stdid");
    $query1->bindParam(':stdid',$id);
    $query1->execute();
    echo "<script>alert('row is deleted successfully')</script>";
}
?>
   
</div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>