<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
                        <link rel="stylesheet" type="text/css" href="Signup.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
$con= mysqli_connect("localhost", "root", "", "sis") or die(mysqli_error($con));
 
 

        ?>
        <?php
        $select_query = "select remarks,subject,fac_name,r_no from remarks ";
        $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
        
                ?>
        <div class="container">
            <?php
             while ($row= mysqli_fetch_array($select_query_result)){
            ?>
            <div class="row">
                
            <div class="col-xs-2">
                <h4><b>Remark</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[remarks]</h4>";  ?>
            </div>
            </div>
            <div class="row">
             
                
            <div class="col-xs-2">
                <h4><b>Subject</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[subject]</h4>";  ?>
            </div>
            </div>    <div class="row">
                
            <div class="col-xs-2">
                <h4><b>Faculty Name</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[fac_name]</h4>";  ?>
            </div>
            </div>  
            <hr>
             <?php }; ?>
        </div>
            
        
        
        
    </body>
</html>
