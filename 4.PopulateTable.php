
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Populate Table.
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
                <h1>Add a table to datbase : </h1>
                <?php
                    //mysqli_connect(host,username,password,database name)
                    $link = @mysqli_connect("localhost", "rautwebs_users","Nashik@123") or die("ERROR : Unable to connect ".mysqli_connect_error());
                    //var_dump($link);

                    echo"<p>Connected to the database Successfully.</p>";            
                ?>
                
                <h3>Populate Table</h3>
                <?php 
                    //name ,type(length)
                    $sql = "INSERT INTO user (firstname,lastname,email,password) VALUES('Roshan','Raut','roshanpk.@gmail.co.in','password')";
                    if(mysqli_query($link,$sql)){
                        echo "<p>Table users added  successfully</p>";
                    }else{
                        echo "ERROR : Unable to execute $sql".mysql_error($link);
                    }
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
