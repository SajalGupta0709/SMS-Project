<!DOCTYPE php>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="Login.css"> 
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body >
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

        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>
                            Login for Students
                        </h4>
                    </div>
                    <div class="panel-body ">
                        <p class="text-warning ">
                            Login to access student information system
                        </p>
                        <form method="post" action="login_user.php">
                            <div class="form-group">
                                <label for="r_no">Roll Number</label>
                                <input type="integer" class="form-control" name="r_no" placeholder="Roll number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Password"> <br>
                                
                        </form>
                        <div class="bt">
                        <button class="btn btn-primary" >
                            <a href="login_user.php"> Login</a>
                        </button>
                        </div>
                        <div class="panel-footer">
                            <p class='acc'>
                                Don't have an account?
                            </p> 
                            <a class='re' href='signup.php'>Register</a>
                            
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
                
                 <div class="container ">
            <div class="row row_style">
                <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>
                            Login For Instructor
                        </h4>
                    </div>
                    <div class="panel-body ">
                        <p class="text-warning ">
                            Login to access the database
                        </p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Password"> <br>
                                
                        </form>
                        <div class="bt">
                        <button class="btn btn-primary">
                            <a href="index1.php"> Login</a>
                        </button>
                        </div>
                        <div class="panel-footer">
                         
                           
                            
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
            
        </div>
            
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
