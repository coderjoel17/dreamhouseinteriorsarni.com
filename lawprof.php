<html>
<title>Profile</title>

    <head> 
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <style>
        body,html{
            height:96%;
            margin:0;
            font-family:Arial,Helvetica,sans-serif
           
        }
        *{
            box-sizing:border-box;
        }
        .bg-images{
            

            background-image: url('back5.jpg');
             height: 100%;
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
        }
        .bg-text{
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.6);
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%
            left: 50%
            transform: translate(-50%,-50%);
            z-index: 2;
            width: 100%;
            padding: 220px;
            text-align: center;
        }
        ul{
            list-style-type:none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
        }
        li{
            float:left;
        }
        li a{
            display: block;
            color:white;
            text-align:center;
            padding: 14px 16px;
            text-decoration:none;
        }
        li a:hover{
            background-color: #111;
        }
        .active{
            background-color:green;
        }
    </style>
</head>
<body >
    <ul>
    <li><a href="home3.php">Home</a></li>
</ul>
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db_name="law";
$conn=mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_errno())
{
die("failed to connect ".mysqli_Connect_error());
}
if($_SESSION["BID"])
{
$a=$_SESSION["BID"];
$sql="SELECT * FROM pro where BID=$a";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
  
?>

<link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
<div class="container">
<div class="main-body">
    <div class="col">
    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                     <img src = "<?php echo $row['src'];?>" alt="Admin" class="rounded-circle" width="150">       
                     <div class="mt-3">
                        <h4><?php echo $row['name'];?></h4>     
                        <p class="text-secondary mb-1"><?php echo $row['work'];?></p>
                        <p class="text-muted font-size-sm"><?php echo $row['court'];?></p>     
                    </div>
                </div>
            </div>
            <form action="edit.php" method="POST">
            <center>
            <a href="edit.php"><button class="btn btn-primary" name="submit" value=" <?php=$a ?>">EDIT</button></a>
            <?php  $_SESSION["id"]=$a; ?>
    </center>
            </form>
            </div>
          
    
</div>
    <div class="col">
    <div class="row gutters-sm">
    <div class="col-mb-5 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="d-flex aligan-items-center mb-3"><i class="matrial-icons text-info mr-2">Handled cases - </i><?php echo $row['hc'];?></h6>
                <div class="progress mb-3" style="height:5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:190" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
</div>
<h6 class="d-flex aligan-items-center mb-3"><i class="matrial-icons text-info mr-2">Winning- </i> <?php echo $row['winning'];?></h6>
                <div class="progress mb-3" style="height:5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:166" aria-valuenow="<?php echo $row['winning'];?>" aria-valuemin="0" aria-valuemax="<?php echo $row['hc'];?>">
            </div>
</div>
<h6 class="d-flex aligan-items-center mb-3"><i class="matrial-icons text-info mr-2">Language Known</i></h6>
<small><?php echo $row['lang1'];?></small>
                <div class="progress mb-3" style="height:5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
</div>
<h6 class="d-flex aligan-items-center mb-3"><i class="matrial-icons text-info mr-2"></i></h6>
<small><?php echo $row['lang2'];?></small>
                <div class="progress mb-3" style="height:5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
</div>
<h6 class="d-flex aligan-items-center mb-3"><i class="matrial-icons text-info mr-2"></i></h6>
<small><?php echo $row['lang3'];?></small>
                <div class="progress mb-3" style="height:5px">
                <div class="progress-bar bg-primary" role="progressbar" style="width:60%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
            </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-mb-3 sm-5">
<div class="card mt-2">
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
             <h6 class="mb-0">Qualification</h6>
             <span class="text-secondary"><?php echo $row['quali'];?> </span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
            <h6 class="mb-0">Email</h6>
             <span class="text-secondary"><?php echo $row['email'];?></span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
        <h6 class="mb-0">Contact</h6>
        <span class="text-secondary"><?php echo $row['con'];?></span>
        </li>
    </ul>
</div>
</div>
</div>
</div>
<?php
    }
}
}
?>
<center><a href="home3.php"><button class="btn btn-primary" >BACK</button></a></center>








   
    