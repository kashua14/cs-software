<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AGE DISPLAYER</title>
    <!-- CSS FOR THE PAGE -->
    <style>
                body{
                    margin:0;
                    padding:0;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
                    background: fixed;
                    background-color: cornsilk;
                    text-align: center;
                }
                .box{
                    position: absolute;
                    top: 20%;
                    left: 20%;
                    width: 500px;
                    height: 270px;
                    box-sizing: border-box;
                    border-radius: 10px;
                    box-shadow:0 15px 20px cadetblue;
                }




    </style>

</head>

<body>
    <div class="box">
        <!-- Form to display where one can input there detials -->
    <form method="post">
        <br>
        AGE DISPLAYER
        <br>
        LAST NAME:
        
        <input type="text" name="lastname" placeholder="Enter Your Last Name"> <br><br>
        FIRST NAME:
        <input type="text" name="firstname" placeholder="Enter Your First Name"><br><br>
        Year Of Birth:
        <input type="number" name="age"placeholder="Enter Your Year of Birth"><br><br>
        <input type="submit" name="submit">

    </form>
    
    <br>
    <!-- PHP SCRIPT FOR THE OUTPUT -->
    <?php

    
    if (isset($_POST['submit'])) { 
        $CurrentYear = date("Y");
        
echo $_POST["lastname"] ." ". $_POST["firstname"]. " " . " is " . ($CurrentYear - $_POST["age"] . " Years Old") ;
    }
    else{
        echo( "Please Enter Your Detials");
    }
?>
   </div>
</body>
</html>