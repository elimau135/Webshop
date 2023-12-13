<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/favicon.ico" />
    <link rel="stylesheet" href="../CSS/registration.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <section>
        <div class="form-box">
            <form action="">
                <h2 style="color: red;">easybike. </h2><h2>Register</h2>
                <div class="inputbox">
                    <ion-icon style="color: red;" name="person-outline"></ion-icon>
                    <input type="name" id="fname" required>
                    <label style="color: red;" for=""><b>Firstname</label>  
                </div>

                <div class="inputbox">
                    <ion-icon style="color: red;" name="person-outline"></ion-icon>
                    <input type="name" id="lname"  required>
                    <label style="color: red;" for=""><b>Lastname</label>  
                </div>

                
                <div class="inputbox">
                    <ion-icon style="color: red;" name="call-outline"></ion-icon>
                    <input type="text" id="number"  required>
                    <label style="color: red;" for=""><b>Phone number</label>  
                </div>

                <div class="inputbox">
                    <ion-icon style="color: red;" name="mail-outline"></ion-icon>
                    <input type="text" id="user_mail"  required>
                    <label style="color: red;" for="">Email</label>  
                </div>

                <div class="login">
                    <p>If you already have an Account<a href="Login.html"> Login!</a> now</p>  
                </div>
                <button onclick="sending_data()">Register!</button>
            </form>
        </div>
    </section>

    <script>

        let password;
      
        function check_for_username(){
            var user_mail = document.getElementById("user_mail").value
  
            if (user_mail.length >=5 && user_mail.includes("@")){
                console.log("Email format is valid");
                console.log(user_mail);
            }else{
                console.log("Email format is not valid");
                console.log(user_mail);
            }
        }

        function genPassword() {
            var chars =
              "abcdefghijklmnopqrstuvwxyz1234567890()$%-_ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            var password = "";
    
            for (i = 0; i <= passwordlength; i++) {
              var randomNumber = Math.floor(Math.random() * chars.length);
              password += chars.substring(randomNumber, randomNumber + 1);
            }
            console.log(password)
          }

        function check_systeminfo(){
            var resolution = window.innerHeight +"x"+window.innerWidth

            var os = "Unknown os";
            if (navigator.appVersion.indexOf("Win") != -1) os = "Windows"
            if (navigator.appVersion.indexOf("Mac") != -1) os = "Macos"
            if (navigator.appVersion.indexOf("Linux") != -1) os = "Linux"
            if (navigator.appVersion.indexOf("Android") != -1) os = "Android"

            const date = new Date()
            date.getDate()

            console.log(resolution)
            console.log(os)
            console.log(date)
        }

        function save_data(){   
            //send data to db
            //what info should be saved: date and time (of login), bildschirmauflösung, os
            check_systeminfo()
        }



        function check_database(){
            var xhr = new XMLHttpRequest();
           
        }

        function sending_data(){
            check_for_username()
            save_data()
            genPassword()
            check_systeminfo()

            

        }

        
    </script>
</body>
</html>

<?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "webshop_db";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Sample data to be inserted
            $username = $_POST["user_mail"];
            $pw = $_POST["pw"];
            $telephone = $_POST["number"];
            $firstname = $_POST["fname"];
            $lastname = $_POST["lname"];
            $user_date = $_POST["date"];
            $screen_resolution = "value2";
            $os = $_POST["os"];

            // SQL query to insert data
            $sql = "INSERT INTO user (username, pw, telephone, firstname, lastname, user_date, screen_resolution, operating_system) VALUES ('$username', '$pw', '$telephone', '$firstname', '$lastname', '$user_date', '$screen_resolution', '$os')";

            if ($conn->query($sql) === TRUE) {
                echo "Data inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close connection
            $conn->close();
            ?>


