<?php

$db = mysqli_connect("localhost", "root", "", "data_insert");
if (!$db) {
    echo mysqli_connect_error();
}

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    // Getting the image
    $imagename = $FILES['image']['name'];
    $tmplocation = $FILES['image']['tmp_name'];

    $uplocation = 'images/' . $imagename;

    
}

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
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
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