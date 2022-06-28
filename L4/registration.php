<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="lab4.css">
    </head>
    <body>
        <h2 style="text-align: center;">REGISTER ACCOUNT</h2>
        <br/><br/><br/><br/><br/>
        <div style="text-align: center;">                
        <form>
            <table>
                <tr>                    
                    <td><a href="product.html"> 
                        <button type="button">Back</button>
                    </a></td>
                </tr>
                <tr>
                    <td colspan="2"><h4>YOUR PERSONAL DETAILS</h4></td>
                </tr>
                <tr>
                    <td>*First name :</td>
                    <td><input type="text" name="firstname" id="fn" required></td>
                </tr>
                <tr>
                    <td>*Last name :</td>
                    <td><input type="text" name="lastname" id="ln" required></td>
                </tr>
                <tr>
                    <td>*E-Mail :</td>
                    <td><input type="email" name="email" id="email" required></td>
                </tr>
                <tr>
                    <td>*Telephone :</td>
                    <td><input type="number" name="hpno" id="hpno" required></td>
                </tr>
                <tr>
                    <td>Fax :</td>
                    <td><input type="number" name="fax" id="fax"></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td colspan="2"><h4>YOUR ADDRESS</h4></td>
                </tr>
                <tr>
                    <td>*Address :</td>
                    <td><input type="text" name="address" id="address" required></td>
                </tr>
                <tr>
                    <td>*City :</td>
                    <td><input type="text" name="city" id="city" required></td>
                </tr>
                <tr>
                    <td>*Post Code :</td>
                    <td><input type="number" name="postcode" id="postcode" required></td>
                </tr>
                <tr>
                    <td>*Country :</td>
                    <td><input type="country" name="country" id="country" required></td>
                </tr>
                <tr>
                    <td>*Password :</td>
                    <td><input type="password" name="psw" id="psw" required></td>
                </tr>
                <tr>
                    <td>*Re-type Password :</td>
                    <td><input type="password" name="repsw" id="repsw" required ></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input type="submit" value="Submit" onclick="checkpsw()"></td>
                </tr>
            </table>
            <script type="text/JavaScript">
                function checkpsw() {
                    var psw2=window.document.getElementById('psw').value;
                    if(psw2.length>7){
                    if(window.document.getElementById('psw').value==(window.document.getElementById('repsw').value))
                    {
                        alert('Registered Successfully!');
                        window.location.href="home.html";
                    }
                    else
                    {
                        alert('Password not match!');
                        document.getElementById("psw").value="";
                        document.getElementById("repsw").value="";
                    }               
                }
                else
                {
                    alert('Password must be at least 8 characters!');
                        document.getElementById("psw").value="";
                        document.getElementById("repsw").value="";
                }     
                }
            </script>
        </form>
        </div>
    </body>    
</html>