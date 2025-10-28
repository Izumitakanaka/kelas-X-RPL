<h1>login</h1>

<form action=" method="post>
<input type="email" name="email" placeholder="email" required> <br>
<input type="password" name="password" placeholder="password"> <br>
<input type="submit" value="login"  name="login">
</form>

<?php 
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


if ($email== "1@gmail.com" && $password =="123"){
    // echo "berhasil login";
    $_SESION['email']=$email;
    header("location: index.php");
}else{ 
    echo"email atau password salah!";
}

echo"email:$email <br>";
echo"password:$password <br>";
}
?>