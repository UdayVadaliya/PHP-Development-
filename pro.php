
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'uday', '19', 'male', 'udu@gmail.com', '999999999', 'fgfgfgfg', current_timestamp()); -->
    <?php
    $insert = false;
    if(isset($_POST['name'])){
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);   
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);   
    $phone = trim($_POST['phone']);
    $desc = trim($_POST['desc']);
    
    if(empty($name) || empty($age) || empty($gender) || empty($email) || empty($phone) || empty($desc)){
        echo "<p style='color: red; text-align: center;'>Please fill all fields!</p>";
       } 
       else{

    $server = "localhost";
    $username = "root"; 
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    $name = $_POST['name'];
    $age = $_POST['age'];   
    $gender = $_POST['gender'];
    $email = $_POST['email'];   
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql ="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    if($con->query($sql) == true){
        //echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR $sql <br> $con->error";
    }
    
    $con->close();
        }

    }
    


    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trip form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<img src="stanford-3906631_640.webp" alt="collage campus" style="width: 100%; height: 100vh; object-fit: cover; position: absolute; z-index: -1; opacity: 0.8;">
</head>
<style>
    *{
        font-family: 'Roboto', sans-serif;
    }
    
    .container{
        width: 80%;
        margin: auto;
        background-color: rgb(240, 240, 240);
        padding: 20px;
    }
    input, textarea{
    display: block;
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid rgb(91, 79, 79);
    /* border-right: #3b7c7c; */
    border-end-end-radius: 38px;
    }
    h1, p{
        text-align: center;
        font-family: 'Funnel Display', sans-serif;
    }
    .btn{
  
    display: block;
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: rgb(91, 79, 79);
    color: white;
    border: none;
    cursor: pointer;
    border-end-end-radius: 38px;

    }
    p.submitMsg{
        color: green;
        font-size: 20px;
        text-align: center;
    }

    

</style>

<body>
<div class="container">
    <h1>Welcome to Travel Form</h1>
    <p>Enter your details and submit this form to confirm your participation in the trip</p>
    <?php
     if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";

     }
     else{
        echo "<p class='submitMsg'>Please fill the form and submit to confirm your participation in the trip</p>";

     }
    ?>
    <form action="pro.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <input type="text" name="age" id="age" placeholder="Enter your age" required>
        <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button type="submit" class="btn">Submit</button>
        <button type="reset" class="btn">Reset</button>

        
         
    </form>
</div>
<br>


</body>
</html>