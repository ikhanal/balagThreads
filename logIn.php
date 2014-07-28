<div class="dropdown-menu" style="padding:17px;">
                                <form id="formLogin" class="form"> 
                                    <label>Login</label> 
                                    <input name="_csrf" id="token" value="8n2lSRQaoblk450YlBRKzuZPd7FxxZSTOIgDk=" type="hidden">
    							    <input name="username" id="username" placeholder="Username" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Enter your username" required="" type="text">
    							    <input name="password" id="password" placeholder="Password" title="Enter your password" required="" type="password"><br>
    							    <button style="position: relative; left: 0px;" type="button" id="btnLogin" class="btn">Login</button>
    							</form>
                                <form><a class="" href="#" title="Fast and free sign up!" id="btnNewUser" data-toggle="collapse" data-target="#formRegister">New User? Sign-up..</a></form>
                                <form style="height: auto;" id="formRegister" class="form in collapse">
                                    <input name="_csrf" id="token" value="8n2lSRQaoblk450YlBRKzuZPd7FxxZSTOIgDk=" type="hidden">
                                    <input name="email" id="inputEmail" placeholder="Email" required="" type="email">
        						    <input name="username" id="inputUsername" placeholder="Username" pattern="^[a-z,A-Z,0-9,_]{6,15}$" data-valid-min="6" title="Choose a username" required="" type="text"><br>
    							    <input name="password" id="inputpassword" placeholder="Password" required="" type="password"> 
                                    <input name="verify" id="inputVerify" placeholder="Password (again)" required="" type="password"><br>                                  
    							    <button type="button" id="btnRegister" class="btn">Sign Up</button>
    							</form>
                                <a data-toggle="modal" role="button" href="#forgotPasswordModal">Forgot username or password?</a>
                                <a data-toggle="modal" role="button" href="#contactModal"><small>Need help? Contact us</small></a>
</div>