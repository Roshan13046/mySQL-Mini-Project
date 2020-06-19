
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        UPDATE from DataBase
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
                <h1>Update table using form:</h1>
                <h3>Connect to database:</h3>
                <?php
                    //mysqli_connect(host,username,password,database name)
                    $link = @mysqli_connect("localhost", "rautwebs_users","Nashik@123","rautwebs_users") or die("ERROR : Unable to connect ".mysqli_connect_error());
                    //var_dump($link);
                
                    echo"<p>Connected to the database Successfully.</p>";        
                ?>
                <h3>Update data:</h3>
                <?php
                //update emails if where conditions are age='23' and password ='password'
                    $sql = "UPDATE users SET email='name21122@gmail.com' WHERE age = '23' AND password='password'";
                    if(mysqli_query($link,$sql)){
                        echo"<p>Data was Updated successfully !</p>";
                    }else{
                        echo "<p>ERROR : Unable to execute $sql".mysqli_error($link)."</p>";
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
