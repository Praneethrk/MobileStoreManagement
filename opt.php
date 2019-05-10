<html>

<head>
    <h1 align="center">
        <B>ADMIN PAGE</B>
    </h1>


    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url("img/img6.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #logout {
            float: right;
            background-color: #000045;
            border: none;
            color: white;
            padding: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            width: 10%;
            margin: 4px 2px;
            position: ;
            border-radius: 12px;

        }

        #logout:hover {

            background: #000066;
        }

    </style>
</head>


<body background="img/img6.jpg">
    <button type="submit" class="back" onclick="window.location.href='login.php'">BACK</button>
    <button type="submit" id="logout" onclick="window.location.href='logout.php'">Logout</button><br><br>
    <button type="submit" class="bton" onclick="window.location.href='insert.php'">ADD MOBILE</button><br><br>
    <button type="submit" class="bton" onclick="window.location.href='delete.php'">UPDATE / DELETE MOBILE</button><br><br>
    <button type="submit" class="bton" onclick="window.location.href='pay.html'">PAYMENT</button>
</body>

</html>
