<style>

*,
*:before,
*:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    background: #ffffff;
<<<<<<< HEAD
    background-image: url('/Portfolio-Management-System/stock.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;

}
    
=======
}

>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
input,
button {
    border: none;
    outline: none;
    background: none;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}

.tip {
    font-size: 20px;
    margin: 40px auto 50px;
    text-align: center;
}

.cont {
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    width: 900px;
    height: 550px;
<<<<<<< HEAD
    margin: 75px auto 120px;
=======
    margin: 0 auto 100px;
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
    background: #fff;
    box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.3), 10px 10px 15px rgba(70, 70, 70, 0.15), inset -10px -10px 15px rgba(255, 255, 255, 0.3), inset 10px 10px 15px rgba(70, 70, 70, 0.15);
}

.form {
<<<<<<< HEAD
    margin-top: 4rem;
=======
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
    position: relative;
    width: 640px;
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    padding: 50px 30px 0;
}

.sub-cont {
    overflow: hidden;
    position: absolute;
    left: 640px;
    top: 0;
    width: 900px;
    height: 100%;
    padding-left: 260px;
<<<<<<< HEAD
    background: #1E90FF;
=======
    background: #fff;
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.cont.s--signup .sub-cont {
    -webkit-transform: translate3d(-640px, 0, 0);
    transform: translate3d(-640px, 0, 0);
<<<<<<< HEAD
    background: white;
=======
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
}

#button1 {
    display: block;
    margin: 0 auto;
    width: 260px;
    height: 36px;
    border-radius: 30px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
}

.img {
    overflow: hidden;
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 260px;
    height: 100%;
    padding-top: 360px;
}

.img:before {
    content: '';
    position: absolute;
    right: 0;
    top: 0;
    width: 900px;
    height: 100%;
    background-image: url("ext.jpg");
    opacity: .8;
    background-size: cover;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
<<<<<<< HEAD
    background: #1E90FF;
=======
    background: rgba(0, 0, 0, 0.6);
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
}

.cont.s--signup .img:before {
    -webkit-transform: translate3d(640px, 0, 0);
    transform: translate3d(640px, 0, 0);
<<<<<<< HEAD
    background:white;
=======
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
}

.img__text {
    z-index: 2;
    position: absolute;
    left: 0;
    top: 50px;
    width: 100%;
    padding: 0 20px;
    text-align: center;
    color: #fff;
    -webkit-transition: -webkit-transform 1.2s ease-in-out;
    transition: -webkit-transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out;
    transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}

.img__text h2 {
    margin-bottom: 10px;
    font-weight: normal;
}

.img__text p {
    font-size: 14px;
    line-height: 1.5;
}

.cont.s--signup .img__text.m--up {
    -webkit-transform: translateX(520px);
    transform: translateX(520px);
}

.img__text.m--in {
    -webkit-transform: translateX(-520px);
    transform: translateX(-520px);
}

.cont.s--signup .img__text.m--in {
    -webkit-transform: translateX(0);
    transform: translateX(0);
}

.img__btn {
    overflow: hidden;
    z-index: 2;
    position: relative;
    width: 100px;
    height: 36px;
    margin: 0 auto;
    background: transparent;
    color: #fff;
    text-transform: uppercase;
    font-size: 15px;
    cursor: pointer;
}

.img__btn:after {
    content: '';
    z-index: 2;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    border: 2px solid #fff;
    border-radius: 30px;
}

.img__btn span {
    position: absolute;
    left: 0;
    top: 0;
    display: -webkit-box;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    width: 100%;
    height: 100%;
    -webkit-transition: -webkit-transform 1.2s;
    transition: -webkit-transform 1.2s;
    transition: transform 1.2s;
    transition: transform 1.2s, -webkit-transform 1.2s;
}

.img__btn span.m--in {
    -webkit-transform: translateY(-72px);
    transform: translateY(-72px);
}

.cont.s--signup .img__btn span.m--in {
    -webkit-transform: translateY(0);
    transform: translateY(0);
}

.cont.s--signup .img__btn span.m--up {
    -webkit-transform: translateY(72px);
    transform: translateY(72px);
}

h2 {
    width: 100%;
    font-size: 26px;
    text-align: center;
}

label {
    display: block;
    width: 260px;
    margin: 25px auto 0;
    text-align: center;
}

label span {
    font-size: 12px;
    color: #cfcfcf;
    text-transform: uppercase;
}

input {
    display: block;
    width: 100%;
    margin-top: 5px;
    padding-bottom: 5px;
    font-size: 16px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
    text-align: center;
}

.forgot-pass {
    margin-top: 15px;
    text-align: center;
    font-size: 12px;
    color: #cfcfcf;
}

.submit {
    margin-top: 40px;
    margin-bottom: 20px;
<<<<<<< HEAD
    background: #1E90FF;
=======
    background: #d4af7a;
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
    text-transform: uppercase;
}

.fb-btn {
    border: 2px solid #d3dae9;
    color: #8fa1c7;
}

.fb-btn span {
    font-weight: bold;
    color: #455a81;
}

.sign-in {
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}

.cont.s--signup .sign-in {
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out;
    -webkit-transition-duration: 1.2s;
    transition-duration: 1.2s;
    -webkit-transform: translate3d(640px, 0, 0);
    transform: translate3d(640px, 0, 0);
}

.sign-up {
    -webkit-transform: translate3d(-900px, 0, 0);
    transform: translate3d(-900px, 0, 0);
}

.cont.s--signup .sign-up {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

</style>
  
<?php
include("connection.php");
?>

<html>
<<<<<<< HEAD
    
<br>
<br>

=======
<br>
<br>
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
    <div class="cont">

        <div class="form sign-in">
            <h2>Welcome</h>
            <form name="form" action="login.php" method="POST" onsubmit="return validateDOB();">
            <label>
                <span>Email</span>
                <input type="email" name="email" id="email"/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" id="password"/>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <br>
            <input type="submit" id="button1" class="submit" name="signin">
            </form>
        </div>

        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
            <form name="form" action="signup.php" method="POST">
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="Name" name="name2" id="name2" required/>
                </label>
                <script>
        function validateDOB() {
            var dobInput = document.getElementById('dob');
            var dobValue = dobInput.value;

            if (dobValue !== "") {
                var today = new Date();
                var enteredDate = new Date(dobValue);
                var age = today.getFullYear() - enteredDate.getFullYear();

                // Check if the birthday has occurred this year
                if (today.getMonth() < enteredDate.getMonth() || (today.getMonth() === enteredDate.getMonth() && today.getDate() < enteredDate.getDate())) {
                    age--;
                }

                if (age < 18) {
                    alert("You must be at least 18 years old.");
                    dobInput.value = ""; // Clear the input field
                    dobInput.focus(); // Set focus back to the input field
                    return false;
                }
            }

            return true;
        }
    </script>
                <label>
                    <span>Date of Birth (YYYY-MM-DD)</span>
                    <input type="text" id="dob" name="dob" pattern="\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])" onchange="validateDOB();" required>
                </label>

                <label>
                    <span>Email</span>
                    <input type="email" name="email2" id="email2" required/>
                </label>
                <label>
                    <span>PAN</span>
                    <input type="text" pattern="[A-Z]{5}\d{4}[A-Z]" name="pan2" id="pan2" required/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="password2" id="password2" required/>
                </label>
                <br>
                <input type="submit" id="button1" class="submit" name="signup" required>
            </form>
                
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
<<<<<<< HEAD

=======
<footer class="container">
        <center><p>&copy; 2023 Portfolio Management System</p>
        <p class="float-center"><a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </center>
        
    </footer>
>>>>>>> 0ea6c9653d7026f9276a0d5f28c07599290dac4d
</html>