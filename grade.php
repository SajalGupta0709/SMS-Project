<!DOCTYPE php>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Signup</title>
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
            <h4><b>ENTER GRADES</b></h4>
            <form method="post" action="grade_reg.php">
            
             <div class="form-group">
                 <lable for="r_no">Roll Number</lable>
                <input type="integer" class="form-control" id="r_no"
name="r_no" placeholder="Roll Number">
            </div>
            
            
                    <div class="form-group">
                <label for="branch">Branch</label>
                <select name="branch" class="form-control">
                 <option value="cse">Computer Science</option>
                 <option value="ece">Electronics and Communications</option>


</select>
                    </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <select name="subject" class="form-control">
                 <option value="cse104">computer organisation</option>
                 <option value="cse103">data structure</option>
                 <option value="ece102">electrical circuit analysis</option>
                 <option value="ece103">microelectronics</option>

</select>

            </div>
                <div class="form-group">
                 <lable for="grade">grade</lable>
                <input type="integer" class="form-control" id="grade"
name="grade" placeholder="grade">
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