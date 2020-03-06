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
 $r_no =  filter_input(INPUT_POST,'r_no');
 

        ?>
        <?php
        $select_query = "select name,email,p_num,elective,branch from student_info where r_no='$r_no'";
        $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
        
                ?>
        <div class="container">
            <?php
             while ($row= mysqli_fetch_array($select_query_result)){
            ?>
            <div class="row">
                
            <div class="col-xs-2">
                <h4><b>User</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[name]</h4>";  ?>
            </div>
            </div>
            <div class="row">
             
                
            <div class="col-xs-2">
                <h4><b>Email</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[email]</h4>";  ?>
            </div>
            </div>    <div class="row">
                
            <div class="col-xs-2">
                <h4><b>Contact</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[p_num]</h4>";  ?>
            </div>
            </div>    <div class="row">
                
            <div class="col-xs-2">
                <h4><b>Elective</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[elective]</h4>";  ?>
            </div>
            </div>
                <div class="row">
                
            <div class="col-xs-2">
                <h4><b>Branch</b></h4>
            </div>
            <div class="col-xs-10">
                <?php echo "<h4> $row[branch]</h4>";  ?>
            </div>
            </div>
             <?php }; ?>
        </div>
            <div>
            <h3>
                <a href="remark.php">Click Here</a> to write Remarks and give Feedbacks.<br>
                <a href="grade_veiw.php">Click Here</a> to view your result.<br>
                 <a href="att_veiw.php">Click Here</a> to view your attendance.
            </h3>
        </div>
        
            
       
        
        
        
        
    </body>
</html>
