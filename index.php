<?php
    require('connection.php');
    //IF THE VALUES ARE POSTED, INSERT THEM INTO A DATABASE
        if(isset($_POST['email']) && isset($_POST['password']))
        {

            $fname =  $_POST['Fname'];
            $lname =  $_POST['Lname'];
            $email =  $_POST['email'];
            $password = $_POST['password'];

                $query = "INSERT INTO smart (fname,lname,email,pass) VALUES ('$fname','$lname','$email','$password')";
                $result = mysqli_query($connection, $query);

                    if($result)
                        {
                            $smg = "<center><div style='color:green'>User Created Successfully</div></center>";
                            echo $smg;
                        }
                        else
                        {
                            $fsmg = "<center><div style='color:red'>User's Registration Failed.</div></center>";
                            echo $fsmg;
                        }
        }
?>


<html>
    <head>
        <title>Registration Page</title>
    </head>
    <body>
        <center>
            <form method="post">
                First Name: <input type="text" name="Fname" placeholder="First Name" required> <br><br>
                Last  Name: <input type="text" name="Lname" placeholder="Last Name"> <br><br>
                Email:<input type="text" name="email" placeholder="Email" required style="margin-left:2.6%"><br><br>
                Password: <input type="password" name="password" placeholder="Password" required style="margin-left:0.5%"> <br><br>
                <input type=submit name="submitBtn" value="Sign up" style="margin-left:5%">
            </form>
        </center>
    </body>
</html>