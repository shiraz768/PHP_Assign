<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
       <form  method="POST" class="form-group">
        <label for="">TEXT</label>
        <input type="text" name="text" class="form-control">
        <label for=""></label>
        <input type="submit"  name="submit" class="btn btn-primary">
       </form>
    </div>
    <table>
        <tr>
            <?php 
            if (isset($_POST['submit'])){
              $text = $_POST['text'];
              $pak = '+92';
              $cm = strcmp($pak,$text);
              if($cm == 0) {
                 echo "true";
              }
              else {
                echo "false";
            }
            }
            
        
            ?>
        </tr>
    </table>
</body>
</html>