<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Images/favicon.ico" />
    <link rel="stylesheet" href="../CSS/login.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <section>
        <div style="color: red;" class="form-box">
            <form action="">
                <h2 style="color: red;">easybike. </h2><h2>Login</h2>
                <div class="inputbox">
                    <ion-icon style="color: red;" name="mail-outline"></ion-icon>
                    <input type="email" id="user_mail"  required>
                    <label style="color: red;" for=""><b>Email</label>
                    
                </div>
                <div  class="inputbox">
                    <ion-icon style="color: red;" class="bx bx-hide" name="lock-closed-outline"></ion-icon>
                    <input type="password" id="pw" required>
                    <label style="color: red;" for="">Password</label>
                    
                </div>
                <div class="inputbox">
                    <ion-icon style="color: red;"  class="bx bx-hide" name="lock-closed-outline"></ion-icon>
                    <input  type="code2fa" required>
                    <label style="color: red;" for="">Code2FA</b></label>
                    
                </div>
               
                <button>Login!</button>
                <div class="register">
                    <p><a href="#">Whats my Password again?</a> <br> <br>If you dont have an Account yet <a href="Registration.html">Register</a> now!</p>
                </div>

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

        function check_password(){
            password = document.getElementById("pw").value

            var upperLetter = /[A-Z]/
            var lowerletter = /[a-z]/
            var digit = /[0-9]/
    
            
            if(password.length >= 9 && upperLetter.test(password) && lowerletter.test(password) && digit.test(password)){
                console.log("Password is legit");
            }else{
                console.log("use different password");
            }            
        }

        function hashing(){
            check_password()
            console.log(password);
            let hash = 0

            for (let i = 0; i < password.length; i++){
                const charCode = password.charCodeAt(i)
                hash = ((hash<<5)-hash) + charCode
                hash = hash & hash
            }
            console.log(hash);
            return hash
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

        function sending_data(){
            check_for_username()
            const hashpassword = hashing()
            save_data()

            window.location.replace("../index.html")
        }
    </script>
</body>
</html>