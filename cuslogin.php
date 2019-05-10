<html>

<head>
    <h1 align="center">
        <B>CUSTOMER LOGIN</B>
    </h1>
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

<body background="img/img9.jpg">
    <button type="submit" onclick="window.location.href='home.html'">BACK</button>
    <div class="login-page">
        <div class="form">
            <form name="f1" method="post" action="cuslogin1.php" class="forms">

                <table class="text" border="0" allign="center" cellspacing="25">
                    <tr>
                        <td class="f1_label">
                            <B>Emailid:</B>
                        </td>
                        <td><input type="text" name="email" placeholder="enter Email-id" value="" required="required" />
                        </td>
                    </tr>
                    <tr>
                        <td class="f1_label">
                            <B>Password:</B>
                        </td>
                        <td><input type="password" name="mypassword" placeholder="enter password" value="" required="required" />
                        </td>
                    </tr>
                </table>
                <button type="button" style="text-align:right padding-right:8%;color:darkblue" onclick="window.location.href='cus.php'">New User? Signup</button>
                <br>
                <br>
                <button type="submit" class="button" name="submit">Login</button>


            </form>
        </div>
    </div>
</body>

</html>
