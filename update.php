
<html>
<head>
<title>Update</title>
            <style>
body {
    background-image: url("img/img4.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
        
</style>
</head>
<body background="img/img4.jpg">
<h1 ALign="CENTER">Update Mobile Details</h1>
<form action="update1.php" method="post">
<table border="1"align="center">
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
                <tr>
                <td again="right"><input name="SUBMIT" type="SUBMIT"value="Add"/>&nbsp;<input type="reset" onclick="refresh()"></td>
</tr>

</tbody>
</table>
</form>
</body>
</html>