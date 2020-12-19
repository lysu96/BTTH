<?php

session_start();

include_once('config.php');

    //kiem tra cookid xem da tôn tai chua

    //neu chua thi minh ha dang nhap;

if(empty($_SESSION['username'])){
    if(isset($cookie_name)){
        if(isset($_COOKIE[$cookie_name])){
            parse_str($_COOKIE[$cookie_name]);

            $sql2="select * from user where username='$usr' and password='$hash'";

            $result2=mysqli_query($dbconect,$sql2);

            if($result2){
                header('location:infomation.php');
                exit;
            }
        }
    }
}
else
{
    header('location:infomation.php');
    exit;
}    

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $a_check=((isset($_POST['remember'])!=0)?1:"");

    if($username=="" || $password==""){
        echo "vui long dien day du thong tin";
        exit;
    }
    else
    {

        $sql="select * from user where username='$username' and password='$password'";

        echo $sql;

        $result=mysqli_query($dbconect,$sql);

        if(!$result){
            echo "loi cau truy van".mysqli_error();
            exit;
        }

        $row=mysqli_fetch_array($result);
        $f_user=$row['username'];
        $f_pass=$row['password'];

        if($f_user==$username && $f_pass==$password){

            $_SESSION['username']=$f_user;
            $_SESSION['password']=$f_pass;

            if($a_check==1){
                setcookie ($cookie_name, 'usr='.$f_user.'&hash='.$f_pass, time() + $cookie_time);
            }
            header('location:infomation.php');
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Remember</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <style>
        .container{margin:0px auto;}

        .form{width: 400px;margin:0px auto;margin-top: 100px;}

        h3{font-family: serif;font-weight: bold;}

        .remember{margin-left: 123px;}
    </style>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="login_template.php" method="post">
             <h3 class="btn btn-primary form-control">Login Infomation</h3>
             <table class="table">
                 <tr>
                     <td><label class="label label-danger">Username</label></td>
                     <td><input type="text"  class="form-control" name="username" value=""></td>
                 </tr>

                 <tr>
                     <td><label class="label label-danger">Password</label></td>
                     <td><input type="password" class="form-control" name="password" value=""></td>
                 </tr>

                 <tr>
                     <td colspan="2">
                         <div class="remember">
                             <input type="checkbox"  name="remember" value="1">
                             <label>Remember login</label>
                         </div>
                     </td>

                 </tr>

                 <tr>
                     <td colspan="2">
                         <input type="submit" class="form-control btn-info submit_login" value="Login" name="submit">
                     </td>
                 </tr>
             </table>
         </form>
     </div>
 </div>
 <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>

</html>