<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $con= mysqli_connect("localhost", "root","","sis")
                or die(mysqli_error($con));                     
        
            
            $r_no =  filter_input(INPUT_POST,'r_no');
            $branch =  filter_input(INPUT_POST,'branch');
             $subject = filter_input(INPUT_POST,'subject');
            $grade = filter_input(INPUT_POST,'grade');
            $user_reg= "insert into grades(r_no, branch , subject, grade) values ('$r_no', '$branch', '$subject', '$grade') " or
            die($user_reg);
            $user_reg_sub = mysqli_query($con, $user_reg) or die(mysqli_error($con));
            
                    
        ?>
        <h1> Data Entered Successfully</h1>
        <h3><a href="index1.php">Click Here</a> to go to index page</h3> 
    </body>
</html>
