<html>
<head>
    <title>FARMERS BUDDY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Peralta"     rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="farmer/css/style.css">
    <link rel="stylesheet" href="farmer/css/sell.css">
    <link rel="stylesheet" href="farmer/css/buy.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/navbar.js"></script>
    <script src="js/sell.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<?php
 include 'includes/dbh.inc.php';
 session_start();
 $farmerid = $_GET['farmerid'];
 $sql = "SELECT * FROM users WHERE user_id='$farmerid';";
$result = mysqli_query($conn,$sql);
if($result) {
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_row($result);
        echo'<body class="bkgrnd">
       <div class="contain shadow-lg  bg-white rounded ">
    <h1 class="web-name success ml-5 pl-5"><span class="text-center ml-5">Farmers Buddy</span></h1><br>
       <div class=" inner-contain text-center p-4">
        <h1><b>CONTACT</b></h1>
        <h4>NAME : '.$row[1].' '.$row[2].'</h4>
        <h4>CONTACT NO : '.$row[6].'</h4>
        <div class="text-center m-5 ">
          <button class="mr-2 ml-2 back ">
            <a href="cancel_fb.php">Back to main page</a>
          </button>

 </div>
       </div>
    </div>
 </body></html>';
    }
}
else
{
    echo "couldn't contact";
}