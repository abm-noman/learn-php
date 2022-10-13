<?php
session_start([
    'cookie_lifetime'=>300
]);
$error = false;
if(isset($_POST['username']) && isset($_POST['password'])){
    if('name' == $_POST['username'] && 'pass12' == $_POST['password']){
        $_SESSION['loggedin'] = true;
    }
    else{
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Index</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body{
            margin-top: 30px;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Simple Authentication Form</h1>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php  
                    if($error){
                        echo "<blockquote>Wrong Username or Password</blockquote>";
                    }      
                    if(true == $_SESSION['loggedin']){
                        echo "Hello Admin. Welcome";
                    }
                    else{
                        echo "Hello Stranger. Login Below";
                    }
                ?>
            </div>
        </div>
        <div class="row" style="...">
            <div class="column column-60 column-offset-20">
                <?php
                
                    if(false == $_SESSION['loggedin']):
                ?>
                <form method="POST">

                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">

                    <button type="submit" class="button-primary" name="submit">Log In</button>
                </form>
                <?php
                else:
                ?>
                <form action="auth.php" method="POST">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" class="button-primary" name="submit">Log Out</button>
                </form>
                <?php
                    endif;
                    ?>
            </div>
        </div>
    </div>
</body>
</html>
