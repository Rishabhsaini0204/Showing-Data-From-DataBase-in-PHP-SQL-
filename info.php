 <?php 
$connection =mysqli_connect('localhost','root');
if($connection){
    // echo "Connected !";

    mysqli_select_db($connection,'signup');
    $fistname =$_POST['fname'];
    $lastname =$_POST['lname'];
    $email =$_POST['email'];
    $dob =$_POST['dob'];
    $mobile =$_POST['mobile'];
    $designation =$_POST['designation'];
    $gender =$_POST['gender'];;
    $hobbies =implode(',',$_POST['hobies']);
    $data="INSERT INTO  user_info (FNAME,LNAME,EMAIL,DOB,MOBILE,DESIGNATION,GENDER,HOBBIES) VALUES('$fistname','$lastname','$email','$dob','$mobile','$designation','$gender','$hobbies')";
    mysqli_query($connection, $data);
    header('location:thankyou.php');
    
}

else {
    die("Error".mysqli_connect_error());
}


?> 
