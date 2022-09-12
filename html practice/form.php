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
            margin-top:30px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Form</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, distinctio!</p><br>
                <?php if(isset($_GET['fname']) && !empty($_GET['fname'])){ ?>
                    First Name: <?php echo $_GET['fname']; ?> <br>
                <?php } ?>
                <?php if(isset($_GET['fname']) && !empty($_GET['lname'])){ ?>
                    Last Name: <?php echo $_GET['lname']; ?> <br>
                <?php } ?><br>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="get" action="">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
