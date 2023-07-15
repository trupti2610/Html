<?php
require '01_db_connection.php';

if(isset($_POST["Submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phno = $_POST["phno"];
    $comment = $_POST["comment"];
    $rating = $_POST["rating"];
 
    // $query = "INSERT INTO feedback VALUES('$name','$email','$phno','$comment')";
    $query = "INSERT INTO `feedback`(`name`, `email`, `phn`, `comment`, `rate`) 
    VALUES ('$name','$email','$phno','$comment','$rating')";
    // $result=mysqli_query($conn,$query);
    mysqli_query($conn,$query);

    echo
        "
        <script>alert('Data inserted successfully')</script>
        ";
  }
  

?>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    <link href="bootstrap.css" type="text/css" rel="stylesheet" >
    <script src="script.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-sm-offset-3 col-md-offset-4 col-lg-offset-4 " id="f2">
                <form method="post" action="">
                  <h1 style="font-size: 25px;color:#063970;text-allign:'center'">Feedback Form</h1>
                   <hr>
                  
             <div class="form-group">
                   <b>Name:</b><br>
                   <div class="input-group">
                   <input type="text" name="name" Size="32" placeholder="Enter Your name here..."><br>
            </div>
            </div>
            <div class="form-group">
                   <b>Email:</b><br>
                   <div class="input-group">
                   <input type="email" name="email" Size="32" placeholder="Enter Your name here..."><br>
                   </div>
            </div>
                   <div class="form-group">
                   <b>Contact no:</b><br>
                   <div class="input-group">
                   <input type="text" name="phno" Size="32" placeholder="Enter Your Phonenumber here....."><br>
                   </div>
            </div>
                   <div class="form-group">
                   <b>Comment:</b><br>
                   <div class="input-group">
                   <textarea rows="6" name="comment" cols="34" Size="32" placeholder="Enter Your Comment here....."></textarea><br>
                   </div>
            </div>
                   
                   <b>Rate Us:</b><br>
                   <div id="stars-default">
								<input type="hidden" value="1" name="rating"/>
							</div>
                   
                   <br>
                   
                   <!-- <button type="button" name="submit" class="btn btn-primary" style="font-size:20px;margin-left:70px;">Submit</button>
                    -->
                    <input type="submit" id="button" class="btn btn-primary"name="Submit" required value="Submit">
                   
                   <br><br>
                   </form>
                </div>
            </div>
         </div>
    </body>
</html>