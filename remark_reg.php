<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reamark</title>
    </head>
    <body>
        <?php
         $con= mysqli_connect("localhost", "root","","sis")
                or die(mysqli_error($con));                     
        
            
            $remarks =  filter_input(INPUT_POST,'remarks');
            $subject =  filter_input(INPUT_POST,'subject');
             $fac_name = filter_input(INPUT_POST,'fac_name');
            $r_no = filter_input(INPUT_POST,'r_no');
            $user_reg= "insert into remarks(remarks, subject , fac_name, r_no) values ('$remarks', '$subject', '$fac_name', '$r_no') " or
            die($user_reg);
            $user_reg_sub = mysqli_query($con, $user_reg) or die(mysqli_error($con));
            
                    
        ?>
        <h1> Data Entered Successfully</h1>
        <h3><a href="index1.php">Click Here</a> to go to index page</h3> 
    </body>
</html>
