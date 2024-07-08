<?php
include 'config.php';

// Initialize variables
$id = 'id';
$Faculty = 'Faculty';
$Title = 'Title';
$Date = 'Date';
$Message = 'message';

// Check if 'updateid' is set in the URL
if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    // Fetch data based on the provided ID
    $sql = "SELECT * FROM `announcement` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    
    // Check if the query was successful and fetch data
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $Faculty = $row['Faculty'];
        $Title = $row['Title'];
        $Date = $row['Date'];
        $Message = $row['Message'];
    } else {
        echo "Error: Unable to fetch data from the database.";
    }
}

// Check if form is submitted
if(isset($_POST['submit'])){
    // Retrieve form data
    $Faculty = $_POST['Faculty'];
    $Title = $_POST['Title'];
    $Date = $_POST['Date'];
    $Message = $_POST['Message']; 

    // Update data in the database
    $sql = "UPDATE `announcement` SET Faculty='$Faculty', Title='$Title', Date='$Date', Message='$Message' WHERE id=$id";
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo "<script>alert('Data updated successfully!!'); window.location='update.php';</script>";
    } else{
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANAK UNI</title>
    <link rel="stylesheet" href="updateAnc.css">
</head>
<body>
    <div class="content">
        
<div class="display">
    <h2 class="createform">Annoucements</h2>
 
     <section id="updateAnc" class="container">
         
    <form method="post" class="create">
                <!-- <div class="form-group">
                    <label>id</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your id"
                    id="id" autocomplete="off" value="<?php
                    echo $name;?>">
    </div> -->
    <div class="form-group">
                    <label>Faculty</label>
                    <input type="Faculty" class="form-control"
                    placeholder="Enter your Faculty"
                    name="Faculty" autocomplete="off" value="<?php
                    echo $Faculty;?>">
    </div>
    <div class="form-group">
                    <label>Title</label>
                    <input type="Title" class="form-control"
                    placeholder="Enter your title"
                    name="Title" autocomplete="off" value="<?php
                    echo $Title;?>">
    </div>    
    <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your date"
                    name="Date" autocomplete="off" value="<?php
                    echo $Date;?>">
    
    </div>

    <div class="form-group">
                    <label>Message</label>
                    <input type="text" class="form-control"
                    placeholder="Enter your message"
                    name="Message" autocomplete="off" value="<?php
                    echo $Message;?>">
    </div> 
    
    <button type="submit"  name="submit" style="margin-left:170px;">Update</button>
             
 </form>
 
             
</body>
</html>
