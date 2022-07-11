<?php
include ('server.php');
//access form imput using supper global variable
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$email = $_POST['email'];
$mobilenumber = $_POST['mobilenumber'];
$comment = $_POST['comment'];

//data insertion using myqli_quwry method
$sql="insert INTO feedback()
values('$fn','$ln','$email','$mobilenumber ','$comment ');";

$insert = mysqli_query($db,$sql);

// check data insertion pass or not

if(!$insert)
{
    echo "data failed to insert";


}
else

{
    include('feedback.php');
}
?>