<html>
    <head>
        <h2 align="center"><B>CUSTOMER REGISTRATION</B></h2>
           <link rel="stylesheet" href="css/style.css">
            <style>
body {
    background-image: url("img/img2.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
        
</style>
    </head>
    <body background="img/img2.jpg">
      <button type="submit" onclick="window.location.href='home.html'">BACK</button>
       <div class="insert-page">
        <div class="form2">
    <form action="cus1.php" method="post" name="f2">
        <table class="text" border="0" allign="center" cellspacing="20">
            <tbody>
                <tr>
                    <td ><label for="fn">First Name:</label></td>
                    <td><input id="fn" maxlength="10" name="fname" type="text" placeholder="enter first name" required/></td>
                </tr>
                <tr>
                    <td ><label for="ln">Last Name:</label></td>
                    <td><input id="ln" maxlength="20" name="lname" type="text" placeholder="enter last name" required/></td>
                </tr>
                <tr>
                    <td ><label for="em">Email:</label></td>
                    <td><input id="em" maxlength="20" name="email" type="text" placeholder="enter your email" required/></td>
                </tr>
                <tr>
                    <td ><label for="pw">Password:</label></td>
                    <td><input id="pw" maxlength="20" name="password" type="text" placeholder="enter your password" required/></td>
                </tr>
                <tr>
                    <td ><label for="mno">Mobile Number:</label></td>
                    <td><input id="mno" maxlength="30" name="phone" type="number_format" placeholder="enter your mobile number" required/></td>
                </tr>
                <tr>
                    <td><label for="ad">Address:</label></td>
                    <td><input id="ad" maxlength="10" name="address" type="text" placeholder="enter your address" required/></td>
                </tr>
            </tbody>
        </table>
        <button type="button" style="text-align:right padding-right:8%;color:darkblue" onclick="window.location.href='cuslogin.php'">Already Registered? Login</button>
        <br>
        <br>
        <button type="submit" name="SUBMIT" class="button">Register</button>
        <button type="reset" class="button" onclick="refresh()">Refresh</button> 
    </form>
        </div>
        </div>
    </body>
    
</html>