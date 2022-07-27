
<?php include("database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>My Files</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<form action="action.php" method="post">
<body>

<div class="container"> 
    <div class="row">
<?php 
$qq = "select * from file";
$result = $conn -> query ($qq);
 //fetches data from db
while ($data= $result -> fetch_assoc()){ ?>
    <div class="col-md-4">
<p><img src="th.webp" class="img-thumbnail" /></p></a>
<h2 ><?php echo $data ['subject']; ?></h2>
<p> semester: <?php echo $data ['semester']; ?></p>
<p> filename: <?php echo $data ['file_name']; ?></p>


<button class="btn btn-danger" type="button" name="deletgame"> <a
                                        href="action.php?delid=<?php echo $data['id'];?>"
                                        style="color:white;">delete</a> </button>
<button type="button" class="btn btn-success"><a href="update.php?id=<?php echo $data['id']; ?>" style="color:white">Update </a>


</div>
<?php
}
?>

    
</body>
</form>
</html>