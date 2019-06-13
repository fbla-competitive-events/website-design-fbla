<?php include "../header.php"; ?>
    <div class="container">
<?php
session_start();
if(isset($_SESSION['user'])){
?>
        <h1>Welcome <?php echo $_SESSION['user']['first'] ?>!</h1>
<?php
}else{
?>
        <h1>Bready Crumbs</h1>
        <div class="col-6">
            <h2>What?</h2>
            <p>What are Bready Crumbs? That's what we call members of the Bready Member Club. The Bready Member Club is open to anyone who registers for an account. Upon registration, we will provide you a Crumb Card which you can use at our location rack up Crumb Points and unlock special discounts! By being a member, you can also opt in to receive weekly offers and coupons in your email. Sign up now! It's quick, easy, and free!</p>
        </div>
        <script>
            $(function(){
                $("#datepicker").datepicker({
                    yearRange:"-100:+0",
                    changeYear:true,
                    changeMonth:true,
                    minDate:"-100Y",
                    maxDate:"+0",
                    format:"yyyy-mm-dd"
                });
            });
        </script>
        <div class="col-6">
            <h2>Accounts</h2>
            <p>Manage your Bready Crumb account or register for one here.</p>
            <div class="selector button col-6" onclick="$('#signin').slideToggle()">Sign In</div>
            <div class="selector button col-6" onclick="$('#signup').slideToggle()">Sign Up</div>
            <div></div>
            <div class="form-container hidden" id="signin">
            <form action="account.php" method="POST">
                <h2 title="This may be your username, phone, email or account number">ID</h2><input type="text" name="login-id" required><br><br>
                <h2>Password</h2><input type="password" name="login-pass" required><br><br>
                <input type="submit" class="button" value="Login"><br><br>
            </form> 
            </div>
            <div class="form-container hidden" id="signup">
            <form action="register.php" method="POST">
                <h2>First Name</h2><input type="text" name="fn" required><br><br>
                <h2>Last Name</h2><input type="text" name="ln" required><br><br>
                <h2>Username</h2><input type="text" name="user" required><br><br>
                <h2>E-mail</h2><input type="email" name="email" required><br><br>
                <h2>Phone Number</h2><input type="phone" name="pn" required><br><br>
                <h2>Date of Birth</h2><input type="text" name="dob" id="datepicker" required><br><br>
                <h2>Mailing Address</h2><input type="text" name="addr" required><br><br>
                <h2>Create a Password</h2><input id="pass" name="pass1" type="password" required><br><br>
                <h2>Confirm Password</h2><input id="pass_confirm" name="pass2" type="password" required><br><br>
                <input type="submit" class="button" value="Register">
            </form>
            <script language='javascript' type='text/javascript'>
                function check(input) {
                    if (input.value != document.getElementById('pass_confirm').value) {
                        input.setCustomValidity('Passwords must match.');
                    } else {
                        // input is valid -- reset the error message
                        input.setCustomValidity('');
                    }
                }
                
                $("#pass").keyup(function(){
                    check(document.getElementById('pass'));
                });
                $("#pass_confirm").keyup(function(){
                    check(document.getElementById('pass'));
                });
            </script>
            </div>
        </div>
<?php
}
echo "</div>";
include "../footer.php"; ?>
