<?php
$msg = "";
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
    $phone=mysqli_real_escape_string($db, $phone);


    $sql="SELECT email FROM users WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $query = mysqli_query($db, "INSERT INTO users (username, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.<br> An administrator will need to aprove your account before accessing data!";
        }

    }
}
?>