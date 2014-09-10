<?php
//include './bootstrapResources.php';
?>
<?php
include './dbConnection.php';
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "Select * from signup where USERNAME = '$username' and PASSWORD= '$password'";
    $result = mysql_query($sql);
    $count = mysql_num_rows($result);
    if ($count == 1) {
        $_SESSION['username'] = $username;
        header("Location:index.php");
    }
}
?>
<?php ?>
<div class="dropdown-menu" style="padding:17px;">
    <form id="formLogin" class="form" name="formLogin" action="logIn.php" method="POST"> 
        <label>Login</label><br>
        <input name="_csrf" id="token" value="8n2lSRQaoblk450YlBRKzuZPd7FxxZSTOIgDk=" type="hidden">
        <input name="username" id="username" placeholder="Username" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Enter your username" required="" type="text"><br><br>
        <input name="password" id="password" placeholder="Password" title="Enter your password" required type="password"><br><br>
        <button style="position: relative; left: 0px;" type="submit" id="btnLogin" name="submit" class="btn">Login</button>
    </form>
    <a data-toggle="modal" role="button" href="#forgotPasswordModal">Forgot username or password?</a><br>
    <!-- to collapse the div using accordion -->
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">

                <a class="" href="#" title="Fast and free sign up!" id="btnNewUser" data-toggle="collapse" data-target="#formRegister">New User? Sign-up..</a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <form style="height: auto;" id="formRegister" name="formRegister" class="form in collapse" action="signup_submission.php" method="POST">
                        <input name="_csrf" id="token" value="8n2lSRQaoblk450YlBRKzuZPd7FxxZSTOIgDk=" type="hidden">
                        <input name="email" id="inputEmail" placeholder="Email" required="" type="email"><br><br>
                        <input name="username" id="inputUsername" placeholder="Username" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Choose a username" required="" type="text"><br><br>
                        <input name="password" id="inputpassword" placeholder="Password" required="" type="password"> <br><br>
                        <input name="verify" id="inputVerify" placeholder="Password (again)" required="" type="password"><br><br>                                  
                        <button type="submit" id="btnRegister" name="submit" class="btn">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>