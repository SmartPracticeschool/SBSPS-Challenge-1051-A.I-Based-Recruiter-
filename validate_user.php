<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
session_start();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  #$data=mysql_real_escape_string($data);
  return $data;
};
#if ($_SERVER["REQUEST_METHOD"] == "POST")
if(isset($_POST['submit1'])){
$uname = test_input($_POST['uname']);
$passwd= test_input($_POST['pass']);  // Storing Selected Value In Variable
include 'db_connection.php';
$conn = OpenCon();
echo "<br>";
//echo "Connected to database Successfully"."<br>";
  // Displaying Selected Value
  if ($uname != "" && $passwd!= ""){

        $sql= "select * from auth where uname='".$uname."' and passwd='".$passwd."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
              if ($row["uname"]==$uname) {
                  $_SESSION['uname'] = $uname;
                if(isset($_SESSION["uname"]))
                {

                    header('Location: https://web-chat.global.assistant.watson.cloud.ibm.com/preview.html?region=eu-gb&integrationID=a91117ae-0910-45f4-a387-03e181030e1c&serviceInstanceID=db02f08b-9f9a-4553-9355-7ba28d1834e5');
                // code...
              }
              }
              else {


                header('Location: index.php');
              }
              }




        }

        else
        {
          ?>
          <!DOCTYPE html>
          <html lang="en" dir="ltr">
            <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
              <title>login</title>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

              <title>Invalid Request</title>
            </head>
            <body>
              <center><h1><label>Invalid Credentials</label></h1></center>
              <body style="background-image: url(https://www.ilkayozturk.com/wp-content/uploads/2018/05/47576345_m-e1526633015545.jpg)">
                <form class="" action="index.php" method="post">
                  <button type="submit" class="btn btn-primary" name="submit">"Back To Login Form</button>

                </form>
            </body>
          </html>
          <?php

        }

    }
}
CloseCon($conn);
?>
