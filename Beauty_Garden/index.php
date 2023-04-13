<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Book an appointment</title>
        
        <style type = "text/css">
        
        body {
            font-family: helvetica, sans-herif;
            font-size: 100%;
        }
        input {
            padding: 5px 5px 12px 5px;
            font-size: 20px;
            border-radius: 10px;
            border: 1px solid grey;
            width: 320px;
        }
        label {
            position: relative;
            top: 12px;
            width: 200px;
            float: left;
        }
        #wrapper {
            width: 550px;
            margin: 0 auto;
            
        }
        .form-element {
            margin-bottom: 10px;
        }
input[type=submit] {
  background-color: palevioletred;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: mediumvioletred;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=text], select, textarea {
  width: 30%; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 10px;
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical;
  
}
    
h2 {
  width: 70%;
  border: 5px solid magenta;
  padding: 20px;
  margin: 5px;
  background-color: mediumorchid;
  border-radius: 20px;
  text-align: center;
}


        </style>
    </head>
    <body>
        <h2>Let's not wait anymore... for the "Perfect Look"
        Book an Appointment Now!!!</h2>
        <div class="container">
            <form>
            <div class = "form-element">
              <label for="fname">Name</label>
              <input type="text" id="Name" name="name" placeholder="Your name..">
            </div>
                  <div class = "form-element">
                    <label for="email">E-mail</label>
                    <input type="email" id="Email" name="email" placeholder="Your email..">
                  
              </div>
              <div class = "form-element">
                <label for="phone">Phone number:</label>
                <input type="tel" id="Phone_Number" name="phone" placeholder = "0123456789">
              </div>
              <div class = "form-element">
              <label for="services">Services Available</label>
              <select id="Services" name="services">
                <option value="haircut">Hair Cut</option>
                <option value="threading">Threading</option>
                <option value="party">Party Makeup</option>
                <option value = "bridal">Stunning Bridal Look</option>
                <option value = "straightening">Permanent Hair Straightening</option>
                <option value = "facial">Facial/ Clean up</option>
                <option value = "styling">Hair Styling</option>
                <option value = "detannning">Detanning</option>
                <option value = "bleach">Bleach</option>

              </select>
              </div>
             
              <div class = "form-element">
                  <label for = "date">Preffered Date</label>
                  <input type="date" id="date" name="preffered date">
              </div>
            
              <div class = "form-element">
              <label for="subject">Any types of allergies</label>
              <textarea id="subject" name="message" placeholder="Write something..(if any)" style="height:200px"></textarea>
              </div>
              <input class="btn" type="submit" name="submit" value="submit">
          
            </form>
          </div>
          
    </body>
</html>

<?php
    if(isset($_POST['Name'])){
    $server ="localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    ?>
    <script>
    alert('Success connecting to the db');
     </script>
     <?php
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone_Number=$_POST['phone'];
    $Services=$_POST['services'];
    $Location=$_POST['location'];

    $sql = "INSERT INTO `testing`.`testing` ( `Name`, `Tell`, `Time`) VALUES ( '$Name', '$Tell', current_timestamp());";

    if($con->query($sql) == true){
       
        echo "Successsfully inserted";
      
    }
    else{
      
        echo "ERROR: $sql <br> $con->error";
     
    }

    $con->close();
}
?>