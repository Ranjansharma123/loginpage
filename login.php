<?php

    include("connection/connection.php");
    session_start();
    if(!empty($_SESSION['uid']))
    {
        $uid=$_SESSION['uid'];
    }
    if(isset($_POST['btn']))
    {
        $id=$_POST["uid"];
        $pd=$_POST["pd"];
        $sql="select * from adminlogin where Admin_Id='$id'and Admin_Password='$pd'";
        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0)
        {
            $_SESSION['uid']=$id;
            header("location:admin/myaccount.php");
        }
        else
        {
            echo"<script>alert('Please Enter Correct User Id and Password')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link type="text/css" rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo.png">
    <title>NGI Kanpur</title>
</head>

<body>
    <div id="preloader"></div>
    <div class="container-fluid erpheader">
        <div class="row">
            <div class="col-lg-2">
                <a href="#"><img src="Images/logo.png"></a>
            </div>
            <div class="col-lg-10">
                <h1 class="animate__animated animate__fadeInDown">NARAINA GROUP OF INSTITUTIONS</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid erplogin">
        <div class="row">
            <div class="col-lg-12">
                <h3>ERP Login</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid p-4 erpform">
        <div class="row">
            <div class="col-lg-4 p-3 ngikanpur">
                <h1>NGI<span>Kanpur</span></h1>
                <form method="post">
                    <div class="form-group">
                        <label>User Id</label>
                        <input type="text" class="form-control" name="uid" value="<?php if(isset($uid)) echo $uid; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pd" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label class="form-check-label">Agree Terms & Conditions</label>
                    </div>
                    <center>
                        <button type="submit" class="btn form-control" name="btn">Sign In</button>
                    </center>
                    <div class="m-3">
                        <button type="submit" class="btn bg-danger form-control mb-3">Forgot Password</button>
                        <button type="submit" class="btn bg-success form-control">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 erpwelcome">
                <h1 class="animate__animated animate__fadeInDown">Welcome to NGI Kanpur</h1>
                <div>
                    <img src="Images/one.jpg" class="img-fluid">
                    <p>
                        The access to this website is limited to the institute Management, Faculty and Students only
                        (Login to your accounts to navigate the website). Visitors may kindly visit <a href="#"
                            target="_blank">www.ngikanpur.in</a> for information about the
                        institutes.
                    </p>
                </div>

            </div>
        </div>
    </div>

     <!---preloader-->
     <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display="none";
        })
    </script>
</body>

</html>