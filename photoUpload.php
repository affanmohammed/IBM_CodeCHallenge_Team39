<?php
function insert_msql($photoname) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="certificate";
    $conn = new mysqli($servername, $username, $password,$dbname);
      if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
    }
$stmt = $conn->prepare("INSERT INTO livepic (image_name) VALUES (?)");
$stmt->bind_param("s", $photoname);
$stmt->execute();
$conn->close();
}
if(isset($_POST['photoStore'])) {
    $encoded_data = $_POST['photoStore'];
    $binary_data = base64_decode($encoded_data);

    $photoname = uniqid().'.jpeg';   
    $result = file_put_contents('uploadPhoto/'.$photoname, $binary_data);
    if($result) {
        insert_msql($photoname);
        echo 'success';
         }
        
     else {
            echo die('Could not save image! check file permission.');
        }
    }