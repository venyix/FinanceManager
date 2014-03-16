<div id="logo">
    <div id="loginBox">
        <table border="0"
               cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td colspan="2">
                    <span id="loginHeader">
                        Already have an account?
                    </span>
                </td>
            </tr>
            <tr>
                <td width="50%">
                    <form id="loginForm"
                          action="login.php" method="post">
                    <label for="username" id="loginLabel">
                            Username
                    </label>
                </td>
                <td>
                    <input name="username" id="username" type="text" 
                           class="loginInput" />
                    <br />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password" id="loginLabel">
                            Password
                    </label>
                </td>
                <td>
                    <input name="password" id="password" type="password" 
                           class="loginInput" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="login" value="Login" 
                           id="loginSubmit"/>
                </td>
                <td>
                    <input type="submit" name="forgot" 
                           id="loginSubmit" value="Forgot Password?" />
                    </form>	
                </td>
            </tr>
        </table>
    </div>
    <div id="logoutBox">
        <table border="0"
               cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td colspan="2" style="text-align:center;">
                    <span id="loginHeader">
                        Logged in as 
                        <?php
                            if(isset($_SESSION['user']['first_name']) &&
                                    isset($_SESSION['user']['last_name'])) {
                            echo $_SESSION['user']['first_name']
                                . ' ' . $_SESSION['user']['last_name'];
                            }
                        ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td id="logoutForm" colspan="2" style="text-align:center;">
                    <form action="login.php" method="post">
                        <input type="submit" name="logout" 
                               value="Logout" id="logout" />
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
<div id="slogan"></div>