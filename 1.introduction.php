<?php 
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Introduction to mySQL
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: fuchsia;
        }

        h3 {
            color: rebeccapurple;
        }

        .containingDiv {
            border: 1px solid brown;
            margin-top: 100px;
            border-radius: 15px;
        }

    </style>
</head>

<body>   
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10 containingDiv">                
                <h1>Connect to database</h1>
                <?php
                
//                    //mysqli_connection(host , username , password , database name)
//                    $link = @mysqli_connect("localhost", "rautwebs_user","Nashik@123","rautwebs_user") or die("ERROR : Unable to connect : ".mysqli_connect_error());
//                  var_dump($link);
//             echo "<p>Connected Successfully to database</p>";
                
                //Another way to connect to database using Constructor
                
                //connect
                $link = new mysqli("localhost", "rautwebs_user","Nashik@123","rautwebs_user");
                
                //check connection
                
                if($link->connect_errno > 0){
                    die("ERROR : Unable to connect : ".$link->connect_error());
                }
                echo "<p>Connected Successfully to database</p>";
            ?>
                
                
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
</body>

</html>

<?php
ob_flush();
?>
