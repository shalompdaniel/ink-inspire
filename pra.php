<?php 

$host = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "test";

$con = myswli_connect($host,$username,$dbpassword,$dbname);

if($con){
    die("connection failed:" .mysqli_connect_error());
}
    
    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

    $sql = "INSERT INTO registration(firstname,lastname,email)
    VALUES('$firstname','$lastname','$email')";

    if(mysqli_query($con,$sql)){
        echo"entries added";

    }else{
        echo"error" .mysqli_error($con);
    }
    }
if(isset($_POST['delete'])){
    $firstname = $_POST['firstname'];

$result_delete=mysqli_query($con,"DELETE FROM registration
WHERE firstname ='$firstname");
if($result_delete){
    echo"record delte";

}else{
    echo"error" .mysqli_error($con);
}
}

mysqli_close($con);

?>



