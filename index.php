<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <style>
    body{
        background-color: aquamarine;
    }
  </style>
</head>
<body>
    <div class='container'>
        <div class='row'>
           <div class='col-md-12'>
            <h1 class='text-center'>DEPENDENT SELECT BOX <br> USING AJAX AND JQUERY</h1>
           </div>
           <div class='col-md-12'>

       <div class='form-group'>
        <?php
             include 'config.php';
             $slect='SELECT * FROM `countries`';
             $query=$conn->query($slect);
            // for country ///
            echo" <select class='form-control' id='country' name='country'>
            <option value=''>select country</option>";  
            while ($row=mysqli_fetch_assoc($query)) {
            echo"  <option value='{$row['id']}'>{$row['name']}</option>";
             }
            echo"</select>";
           ?>
           <br>
        <!-- for state -->
        <select class='form-control' id='state' name='state'>
        <option value=''>select state</option>
        </select>
        <br>
        <!-- for city -->
        <select class='form-control' id='city' name='city'>
           <option value=''>select city</option>
           
        </select>
       </div>
           </div>
        </div>
    </div>
    <script src="my_jquery.js"></script>
</body>
</html>