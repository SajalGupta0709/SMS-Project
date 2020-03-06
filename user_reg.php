<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registration Success</title>
                <link rel="stylesheet" type="text/css" href="Signup.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
               $con= mysqli_connect("localhost", "root","","sis")
                or die(mysqli_error($con));                     
        
            $name = filter_input(INPUT_POST,'name');
            $r_no =  filter_input(INPUT_POST,'r_no');
            $email =  filter_input(INPUT_POST,'email');
            $p_num =  filter_input(INPUT_POST,'p_num');
            $elective = filter_input(INPUT_POST,'elective');
            $branch = filter_input(INPUT_POST,'branch');
            $user_reg= "insert into student_info(name, r_no, email, p_num, elective, branch) values ('$name' , '$r_no', '$email', '$p_num', '$elective', '$branch') " or
            die($user_reg);
            $user_reg_sub = mysqli_query($con, $user_reg) or die(mysqli_error($con));
            
                    
            ?>
           <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">DARWIN INC.</a>
                </div>
                <div class="collapse navbar-collapse"  id="mynavbar" >
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <h1>You Have Been Registered Succesfully. </h1>
        <h2>Click Login in navbar to use Student information System</h2>
        
                 <footer>
            <div class="container">
                <center>
                    <p>
                     Copyright © DARWIN INC. All Rights Reserved. Contact Us: +91900000000
                    </p>
                </center>
            </div>
        </footer>
    
        
          
       
    </body>
</html>
