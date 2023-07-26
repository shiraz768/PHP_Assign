<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    table {
        /* width: 500px; */
        text-align: center;
        border: 1px solid;
    }

    th {
        font-size: 20px;
        border: 1px solid;
        padding: 10px 10px 10px 10px;
    }

    input {
        height: 40px;
    }
</style>

<body>
    <form method="POST" class="form-group">
        <input type="text" name="name" class="col-lg-4 m-2" placeholder="enter your name"><br>
        <input type="text" name="id" class="col-lg-4 m-2" placeholder="enter your id"><br>
        <input type="text" name="sub1" class="col-lg-4 m-2" placeholder="enter subject 1"><br>
        <input type="text" name="sub2" class="col-lg-4 m-2" placeholder="enter subject 2"><br>
        <input type="text" name="sub3" class="col-lg-4 m-2" placeholder="enter subject 3"><br>
        <input type="number" name="mrks_ob" class="col-lg-4 m-2" placeholder="enter obtained marks"><br>
        <input type="number" name="total_mrks" class="col-lg-4 m-2" placeholder="enter total marks "><br>
        <input type="submit" name="submit" class="btn btn-dark">
    </form>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>Subject1</th>
                <th>Subject2</th>
                <th>Subject3</th>
                <th>Obtained Marks</th>
                <th>Total Marks</th>
                <th>Persentage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
              
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $id = $_POST['id'];
                    $sub1 = $_POST['sub1'];
                    $sub2 = $_POST['sub2'];
                    $sub3 = $_POST['sub3'];
                    $marks_obtained = $_POST['mrks_ob'];
                    $total_marks = $_POST['total_mrks'];
                    ?>
                    
                    <td>
                        <?php echo $name ?>
                    </td>
                    <td>
                        <?php echo $id ?>
                    </td>
                    <td>
                        <?php echo $sub1?>
                    </td>
                    <td>
                        <?php echo $sub2?>
                    </td>
                    <td>
                        <?php echo $sub3?>
                    </td>
                    <td>
                        <?php echo $marks_obtained ?>
                    </td>
                    <td>
                        <?php echo $total_marks ?>
                    </td>
                    <td>
                        <?php echo $marks_obtained / $total_marks * 100, "%" ?>
                    </td>


                    <?php }
                else  {
                    echo "<script>alert('please enter the fields')</script>";
                
            }
        
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>