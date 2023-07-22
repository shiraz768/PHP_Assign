<?php 
    include("connection.php"); 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>id</th>
            <th>name</th>
            <th>english</th>
            <th>urdu</th>
            <th>maths</th>
            <th>physics</th>
            <th>chemistry</th>
            <th>Obtained Marks</th>
            <th>Total_marks</th>
            <th>Grade</th>
            <th>Remarks</th>
            </tr>
        </thead>
   
    <?php 
$query = $pdo->query("select * from marksheet");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($res as $data ){
    ?>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['english']?></td>
        <td><?php echo $data['urdu']?></td>
        <td><?php echo $data['maths']?></td>
        <td><?php echo $data['physics']?></td>
        <td><?php echo $data['chemistry']?></td>
        <td><?php echo $data['obtained_marks']?></td>
        <td><?php echo $data['total_marks']?></td>
        <td><?php echo $data['persentage']?></td>
        <td><?php echo $data['grade']?></td>
        <td><?php echo $data['remarks']?></td>
    </tr>
    <?php
}
    ?>
     </table>
</body>
</html>