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
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     
        <nav class="navbar navbar-inverse">
            <div class="container">
                     <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">DARWIN INC.</a>
                </div>
                <div class="collapse navbar-collapse"  id="mynavbar" >
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
   
    
        <div class="col-xs-4 col-xs-offset-4">
            <h4><b>SIGN UP</b></h4>
            <form method="post" action="user_reg.php">
            <div class="form-group">
                <lable for="name">Name</lable>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
             <div class="form-group">
                 <lable for="r_no">Roll Number</lable>
                <input type="integer" class="form-control" id="r_no" name="r_no" placeholder="Roll Number">
            </div>
            <div class="form-group">
                <lable for="email">Email</lable>
                <input type="text" class="form-control" id="email" name="email"   placeholder="Email">
            </div>
            <div class="form-group">
                <lable for="password">Password</lable>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <lable for="p_num">Phone Number</lable>
                <input type="integer" class="form-control" id="p_num" name="p_num" placeholder="Phone Number">
            </div>
                    <div class="form-group">
                <label for="branch">Branch</label>
                <select name="branch" class="form-control">
                 <option value="cse">Computer Science</option>
                 <option value="ece">Electronics and Communications</option>
                 
  
</select>    
                    </div>
                
            <div class="form-group">
                <label for="elective">Elective</label>
                <select name="elective" class="form-control">
                 <option value="hss104">English</option>
                 <option value="hss102">Political</option>
                 
  
</select>
                
            </div>
            <button class="btn btn-primary">Submit
  
            </button>
                

            
            
        </form>
        </div>
    
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
