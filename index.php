<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insert using PHP and Mysql</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <h1 class="form-title">Send Your Record</h1>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="firstname" class="form-input" placeholder="First Name">
            <input type="text" name="lastname" class="form-input" placeholder="Last Name">
            <input type="email" class="form-input" name="email" placeholder="Email"> <br>
            <label class="custom-file-input">
                Choose File
                <input type="file" name="file"> 
            </label> <br>
            <input type="submit" class="form-submit" name="submit" value="Submit Data">
        </form>
    </div>
</body>

</html>