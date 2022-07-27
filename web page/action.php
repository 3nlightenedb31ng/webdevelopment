
<?php
include("database.php");
if(isset($_POST['register']))
{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Password=md5($_POST['Password']);
    $BirthDate=$_POST['BirthDate'];
    $PhoneNumber=$_POST['PhoneNumber'];
    $Gender=$_POST['Gender'];
    $usertype=$_POST['usertype'];

    $query="insert into registration(ID,FirstName,LastName,Email,Password,BirthDate,PhoneNumber,Gender,usertype)
    values(NULL,'$FirstName','$LastName','$Email','$Password','$BirthDate','$PhoneNumber','$Gender','$usertype')";
    $conn->query($query);
    header("location:index.php");
}

 //login//
 if(isset($_POST['Login'])){
    echo "hello";
    $Email=$_POST['Email'];
    $Password=md5($_POST['Password']);
    $query="select * from registration where Email='$Email' and Password='$Password'";
    $result=$conn->query($query);
    //fetches user data
    $usertype=$result->fetch_assoc();
    // print_r($userdata);
    $count=$result->num_rows;
    if($count==0){
        //login detail fail
        echo "message=invalid";
    }
    else{
        // header("location:useerpage.php");

        if($usertype['usertype']=='admin'){
            $_SESSION['usertype']='admin';
            $_SESSION['ticket']='ok';
            $_SESSION['userid']=$usertype['id'];
            // echo "admin";
            header('location:userpage.php');
        
        }
        else{
            $_SESSION['usertype']='user';
            $_SESSION['ticket']='ok';
            $_SESSION['userid']=$usertype['id'];
         // echo "user";
            header('location:userpage.php'); 
        }
    }
}
if(isset($_POST['addfile'])){
    $subject=$_POST['subject'];
    $semester=$_POST['semester'];
    $file=$_FILES['file']['name'];

    $abc=pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
    $randomfilename=rand(1,100000);
    $newfilename=$randomfilename."abc.".$abc;
    if($abc=='PDF' || $abc=='pdf')
    {

    move_uploaded_file($_FILES['file']['tmp_name'],"abc/".$newfilename);
    $query="insert into file (id,subject,semester,file_name) values (NULL, '$subject' , '$semester' , '$newfilename')";
    $conn->query($query);
    header('location:display_file.php');

    }
    else{
        echo '<script>alert("Invalid file format.")</script>';

    }
    }
    if(isset($_GET['delid'])){

        $filedelid=$_GET['delid'];
        $query="delete from file where id='$filedelid'";
        $conn->query($query);
        echo "success";

        header('location:display_file.php');
        }
if (isset($_POST['update'])) {
  $sub=$_POST['subject'];
  $sem=$_POST['Semester'];
  $id=$_POST['id'];
  $q="update file set subject='$sub' , semester='$sem' where  id='$id'";
$conn -> query($q);
#echo "hello";
header('location:display_file.php');
}

?>
