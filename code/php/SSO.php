<html>

    <title>ACME</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../CSS/StyleSheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Makes Page Responsive -->
    <!-- Navbar -->
    <div class="loginnav">
        <a href="SSO.php">
             <img src="../../assets/ACMElogo.png" alt="ACMElogo" style="width:167;height:138">
        </a>
    </div>
    
    <body>
        <!-- login form -->
        <div class="login" style=center>
            <h2>Sign In</h2>
            <form action="profile.php">
                <label><b>Username</b></label><br>
                <input class="fmt" type="text" placeholder="Enter Username" name="username" required><br>
                <br>
                <label><b>Password</b></label><br>
                <input class="fmt" type="password" placeholder="Enter Password" name="password" required><br>
                <br>
                <input type="checkbox" checked="checked"><font size=2>Remember me</font>
                <br>
                <br>
                <a href=""><font size=2>Forgot your password?</font></a> <br> <br>
                <button type="submit">Sign In</button>
                <br>
                <br>
                <hr noshade>
                <br>
                <font size=2>Not an employee? <a href="Search.php">Sign in as guest.</a></font>
            </form>
        </div>  
    </body>
</html>

<style>
    a:link {
        color: #0080ff;
        text-decoration: none;
    }
    
    a:hover {
        color: #f44336;
        transition: 0.4s;
    }
</style>
