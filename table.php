<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        text-align: center;
        width: 300px;
        height: 300px;
    }
    th {
        background-color: slategrey;
        color: white;
        height: 40px;
    }
</style>
<body>
    <table>
        <thead><tr><th>Age</th><th>Name</th><th>Course</th></tr></thead>
    <?php 
    $arr = [
        [24,"Maaz","CPISM"],
    [20,"Ahmed","CPISM"],
    [22,"Zain","CPISM"],
    [23,"Anoosh","CPISM"],
    [24,"Mudassir","CPISM"],
    [22,"Sameer","CPISM"],
    ];

for($i = 0; $i < count($arr);$i++){ ?>
<tr> <?php
    if($i % 2 == 0){
        for($j = 0; $j < count($arr[$i]);$j++){ ?>
         <td style='background-color:maroon;color:white'><?php echo $arr[$i][$j]?></td><?php
        }}
        else{ for($j = 0; $j < count($arr[$i]);$j++){ ?>
         <td style='background-color:aqua;color:black'><?php echo $arr[$i][$j]?></td> <?php
        } }?>
        </tr><?php
    }?>
    

</table>
</body>
</html>