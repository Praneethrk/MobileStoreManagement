<html>
    <head>
        <h2 align="center"><B>INSERT PAGE</B></h2>
           <link rel="stylesheet" href="css/style.css">
            <style>
body {
    background-image: url("img/img1.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
        
</style>
    </head>
    <body background="img/img1.jpg">
      <button type="submit" onclick="window.location.href='opt.php'">BACK</button>
       <div class="insert-page">
        <div class="form1">
    <form action="insert1.php" method="post" name="f2">
        <table class="text" border="20" allign="center" cellspacing="20">
            <tbody>
                <tr>
                    <td class="f2_label"><label for="id">Mobile id:</label></td>
                    <td><input id="id" maxlength="10" name="mobileid" type="text" placeholder="enter mobile id" required/></td>
                </tr>
                <tr>
                    <td class="f2_label"><label for="cmp">Mobile company:</label></td>
                    <td><input id="cmp" maxlength="20" name="mobcompany" type="text" placeholder="enter company of mobile" required/></td>
                </tr>
                <tr>
                    <td class="f2_label"><label for="os">Mobile OS:</label></td>
                    <td><input id="os" maxlength="20" name="mobos" type="text" placeholder="enter OS of mobile" required/></td>
                </tr>
                <tr>
                    <td class="f2_label"><label for="ff">Mobile form factor:</label></td>
                    <td><input id="ff" maxlength="20" name="formfactor" type="text" placeholder="enter form factor of mobile" required/></td>
                </tr>
                <tr>
                    <td class="f2_label"><label for="name">Mobile name:</label></td>
                    <td><input id="name" maxlength="30" name="name" type="text" placeholder="enter name of mobile" required/></td>
                </tr>
                <tr>
                    <td class="f2_label"><label for="price">Mobile Price:</label></td>
                    <td><input id="price" maxlength="10" name="price" type="number_format" placeholder="enter the price of mobile" required/></td>
                </tr>

            </tbody>
        </table>
        <br>
        <button type="submit" name="SUBMIT" class="button">Add</button>
        <button type="reset" class="button" onclick="refresh()">Refresh</button> 
    </form>
        </div>
        </div>
    </body>
    
</html>