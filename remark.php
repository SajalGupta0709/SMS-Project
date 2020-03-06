<!DOCTYPE php>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>FEEDBACK FORM</title>
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

        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle"
data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">DARWIN INC.</a>
                </div>
                <div class="collapse navbar-collapse"  id="mynavbar" >
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="Login.php"><span class="glyphicon
glyphicon-log-in"></span> Login</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="col-xs-4 col-xs-offset-4">
            <h4><b> FEEDBACK FORM </b></h4>
            <form method="post" action="remark_reg.php">
             <div class="form-group">
                 <lable for="r_no">Roll Number</lable>
                <input type="integer" class="form-control" id="r_no"
name="r_no" placeholder="Roll Number">
            </div>
        
            <div class="form-group">
                <lable for="subject">Subject</lable>
                <input type="text" class="form-control " id="subject" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
                <lable for="fac_name">INSTRUCTOR NAME</lable>
                <input type="text" class="form-control" id="fac_name"
name="fac_name" placeholder="Instructor Name">
            </div>
                   <div class="form-group">
                <lable for="remarks">ENTER YOUR FEEDBACK HERE</lable>
                <input type="text" class="form-control" id="remarks"
name="remarks" placeholder="feedback ">

         

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