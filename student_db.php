<?php
$servername="localhost";
$username="root";
$password="";
$database_name="student_database";

$conn=mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $teacher=$_POST['teacher'];
    $roll_no=$_POST['roll_no'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sec_que=$_POST['sec_que'];
    $sec_ans=$_POST['sec_ans'];
    $address=$_POST['address'];
    $course=$_POST['course'];
    $division=$_POST['division'];

    $sql_query="INSERT INTO student_data (name,id,roll_no,course,division,teacher,gender,dob,email,phone,sec_que,sec_ans,address)
    VALUES ('$name','$id','$roll_no','$course','$division','$teacher','$gender','$dob','$email','$phone','$sec_que','$sec_ans','$address')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "Entered";
    }

    else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>