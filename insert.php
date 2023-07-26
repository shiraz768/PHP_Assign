<?php
include("connection.php")
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    th,td{
        text-align: center;
    }
    
</style>

<body>
    <div class="container">
        <form action="" method="post" class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
            <label for="">English Marks</label>
            <input type="number" class="form-control" name="english">
            <label for="">Urdu Marks</label>
            <input type="number" class="form-control" name="urdu">
            <label for="">Maths Marks</label>
            <input type="number" class="form-control" name="maths">
            <label for="">Physics Marks</label>
            <input type="number" class="form-control" name="physics">
            <label for="">Chemistry Marks</label>
            <input type="number" class="form-control" name="chemistry">
            <br>
            <button type="Submit" class="btn btn-danger" name="insert">Submit</button>

        </form>
    </div>
    <div class="container m-5" id="viewbtn">
        <form action="" method="post">
        <button type="submit" class="btn btn-primary mr-auto" name="view">View</button>
        </form>
    </div>

    <?php
    if (isset($_POST["insert"])) {
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
        $query1 = $pdo->prepare("insert into marksheet(name,english,urdu,maths,physics,chemistry,marks_obtained,total_marks,persentage,grade,remarks) values
     (:stdname,:stdeng,:stdurdu,:stdmaths,:stdphysics,:stdchem,:stdob_marks,:stdtotal_marks,:stdpersentage,:stdgrade,:stdremarks)");
        $query1->bindParam('stdname', $name);
        $query1->bindParam('stdeng', $eng);
        $query1->bindParam('stdurdu', $urdu);
        $query1->bindParam('stdmaths', $maths);
        $query1->bindParam('stdphysics', $physics);
        $query1->bindParam('stdchem', $chem);
        $query1->bindParam('stdob_marks', $obtained_marks);
        $query1->bindParam('stdtotal_marks', $total_marks);
        $query1->bindParam('stdpersentage', $percentage);
        $query1->bindParam('stdgrade', $grade);
        $query1->bindParam('stdremarks', $remarks);
        $query1->execute();
        echo "<script>alert('data stored')</script>";
    }?>




    
    <table class="table table-dark text-white"><?php
    if(isset($_POST["view"])){?>
       
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">english</th>
            <th scope="col">urdu</th>
            <th scope="col">maths</th>
            <th scope="col">physics</th>
            <th scope="col">chemistry</th>
            <th scope="col">Obtained Marks</th>
            <th scope="col">Total_marks</th>
            <th scope="col">Percentage</th>
            <th scope="col">Grade</th>
            <th scope="col">Remarks</th>
            </tr>
        </thead>
   
    <?php 
     $query = $pdo->query("select * from marksheet");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($res as $data ){
    ?>
    <tbody>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['english']?></td>
        <td><?php echo $data['urdu']?></td>
        <td><?php echo $data['maths']?></td>
        <td><?php echo $data['physics']?></td>
        <td><?php echo $data['chemistry']?></td>
        <td><?php echo $data['marks_obtained']?></td>
        <td><?php echo $data['total_marks']?></td>
        <td><?php echo $data['persentage']?></td>
        <td><?php echo $data['grade']?></td>
        <td><?php echo $data['remarks']?></td>
    </tr>
    </tbody>
    
    <?php
}
    
   
    
    }
   

?>
 </table>
</body>

</html>