<?php
include_once "functions.php";
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
                <p>
                    <?php
                        $fname = '';
                        $lname = '';
                        $check = '';

                        if(isset($_GET['cb1']) && ($_GET['cb1']==1)){
                            $check='checked';
                        }

                    ?>

                <?php if(isset($_GET['fname']) && !empty($_GET['fname'])){
                    $fname = htmlspecialchars($_REQUEST['fname']);
                } ?>
                
                <?php if(isset($_GET['lname']) && !empty($_GET['lname'])){ 
                    $lname = htmlspecialchars($_REQUEST['lname']);
                } ?><br>

                </p>

            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="get" action="">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $check ?>>
                        <label for="cb1" class="label-inline"> Checkbox</label>
                    </div>

                    <label class="label">Select Some Fruits</label>

                        <input type="checkbox" name="fruits[]" value="Orange" <?php isChecked('fruits','Orange') ?> >
                        <label class="label-inline"> Orange</label><br>
                        <input type="checkbox" name="fruits[]" value="Mango" <?php isChecked('fruits','Mango') ?> >
                        <label class="label-inline"> Mango</label><br>
                        <input type="checkbox" name="fruits[]" value="Banana" <?php isChecked('fruits','Banana') ?> >
                        <label class="label-inline"> Banana</label><br>
                        <input type="checkbox" name="fruits[]" value="Coconut" <?php isChecked('fruits','Coconut') ?> >
                        <label class="label-inline"> Coconut</label><br>


                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
