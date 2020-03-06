<!DOCTYPE php>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Elective</title>
        <link rel="stylesheet" type="text/css" href="Signup.css">
          <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

      

        <div class="col-xs-4 col-xs-offset-4">
            <h4><b>Electives</b></h4>
            <form method="post" action="elective_reg.php">
            
             <div class="form-group">
                 <lable for="r_no">Roll Number</lable>
                <input type="integer" class="form-control" id="r_no"
name="r_no" placeholder="Roll Number">
            </div>
           
            <div class="form-group">
                <label for="elective">Elective</label>
                <select name="elective" class="form-control">
                 <option value="hss104">English</option>
                 <option value="hss102">Political</option>


</select>

            </div>
            <div class="form-group">
                <lable for="integer">Attendance</lable>
                <input type="integer" class="form-control"
id="attendance" name="attendance" placeholder="Attendance  ">
            </div>
            <div class="form-group">
                <lable for="grade">Grade</lable>
                <input type="integer" class="form-control" id="grade"
name="grade" placeholder="Grade ">
            </div>
                   

            <button class="btn btn-primary">Submit

            </button>




        </form>
        </div>

         <footer>
            <div class="container">
                <center>
                    <p>
                     Copyright © DARWIN INC. All Rights Reserved.
Contact Us: +91900000000
                    </p>
                </center>
            </div>
        </footer>



    </body>
</html>