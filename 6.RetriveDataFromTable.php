
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>
        Retrive from DataBase
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
                
                <h1>Populate table using form:</h1>
                <h3>Connect to database:</h3>
                <?php
                    //mysqli_connect(host,username,password,database name)
                    $link = @mysqli_connect("localhost", "rautwebs_users","Nashik@123","rautwebs_users") or die("ERROR : Unable to connect ".mysqli_connect_error());
                    //var_dump($link);

                    echo"<p>Connected to the database Successfully.</p>";        
                ?>
                <h3>Retrive data from a database table : </h3>
                <?php 
               $sql = "SELECT * FROM users"; //query
                //toselect specific data query from table
            //    $sql = "SELECT * FROM users WHERE ID='8'";
             //   $sql = "SELECT * FROM users WHERE email='name2@gmail.com'";
                //$sql = "SELECT * FROM users WHERE age='23'";
              //  $sql = "SELECT * FROM users WHERE ORDER BY ID";
                // $sql = "SELECT * FROM users WHERE ORDER BY ID DESC";
                
                if($result = mysqli_query($link,$sql)){
                    print_r($result);
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table  table-stripped table-hover table-condensed table-borderd'>
                        <tr>
                            <th>ID</th>
                            <th>email</th>
                            <th>password</th>
                            <th>age</th>                            
                        </tr> "   ;                                
                   
                        
  //                      $count = 0;
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                            
                            //printing the row data in html format
                            echo"<tr>";
                                echo "<td>".$row["ID"]."</td>";
                                echo "<td>".$row["email"]."</td>";
                                echo "<td>".$row["password"]."</td>";
                                echo "<td>".$row["age"]."</td>";
                            echo"</tr>";
                                     
//                            $count++;
//                            echo "<br/>Row number : $count<br/>";
//                            print_r($row);
                        }
                        echo "</table>";
                        //closing the result set
                        mysqli_free_result($result);//freeing the memory          
                    }else{
                        echo "<p>mySQL returned an empty result set.</p>";
                    }
                }else{
                    echo "<p>Unable to execute: $sql ".mysqli_error($link)."</p>";
                }
                    
                    
//                    if( mysqli_num_rows($result) > 0){//no of table rows
//                        
//                        echo "<p>Call 1</p>";                        print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));//MYSQLI_ASSOC: for associative array printing, for numeric printing put : MYSQLI_NUM
//                        echo "<p>Call 2</p>";                        print_r();
//                        echo "<p>Call 3</p>";                        print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));
//                        echo "<p>Call 4</p>";                        print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));
//                        echo "<p>Call 5</p>";                        print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));
//                        echo "<p>Call 6</p>";                        print_r(mysqli_fetch_array($result,MYSQLI_ASSOC));//NULL PRINTING of TABLE ROW 6
                                 
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
