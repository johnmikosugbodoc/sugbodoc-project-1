<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>
    <?php  
           foreach ($results as $object){ //pass the results as variable object

            echo $object -> username , "<br>"; //print/echo the variable of what is in the table such as 'username' and 'password'
        }
        // echo $results;
     ?>
</h1>
    
</body>
</html>