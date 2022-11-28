<?php
$uname = $_POST['uname'];
$emal = $_POST['eml'];
$passw = $_POST['pwd'];
$connec = mysqli_connect("localhost","root","","project_my");
$insert_query = "insert into regis(uname,eml,passwo) values('$uname','$emal','$passw')";
if(mysqli_query($connec,$insert_query)){
    header("refresh:0,url=index.html");
}
else{
    echo "unable to register";
}

?>