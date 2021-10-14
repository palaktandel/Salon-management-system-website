
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <style>
            body{
                background-image: url('Salon_project/login2.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                
            }
            table{
                border-color: crimson;
                background-color: rgb(252, 212, 245);
                padding: 50px 40px;
                border-radius: 1cm;
                margin-left: 10%;
                margin-right: 20%;
                margin-top: -3.5%;
                
            }
            tr,td{
                padding: 12px;
                border-color: aqua;
                font-size: 20;
                
            }
            div{
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                
            }
            #login{
                margin-left: 132%;
                margin-top: 40%;
                padding: 10px 20px;
                border-radius: 1cm;
                background-color: black;
                color: beige;
                font-size: 20;
                font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            #signup{
                margin-left: -1%;
                padding: 10px 20px;
                border-radius: 1cm;
                background-color: black;
                color: beige;
                font-size: 20;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }
            .w3-lobster {
                font-family: "Lobster", serif;

            }
            hr{
                border-color: black;
                margin-left: 15px;
                margin-right: 15px;
                border-width: 3px;
                
            }
            input[type=text], input[type=email], input[type=password] {
                width: 100%;
                padding: 2px 12px;
                
                display: inline-block;
                border: 2px solid bold ;
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=text]:focus {
                background-color: rgb(247, 191, 214);
            }
            input[type=email]:focus {
                background-color: rgb(247, 191, 214);
            }
            input[type=password]:focus {
                background-color: rgb(247, 191, 214);
            }
        </style>
    </head>
    <body>
        <div class="w3-container w3-lobster">
            <p class="w3-xxxlarge" style="color:black; margin-left: 7%; margin-right: 50%; margin-top: 1.5%; margin-bottom : 2%; ">Welcome to Beauty Blossom !! </p>
            
        </div><br><br>
        <div>
            <table >
                    <tr>
                    
                        <form action="login_db_connect.php" method="POST">
                        
                        <td>
                            <label id="username">Username :</label>
                        </td>
                        <td>
                            <input type="text" id="username" name="username" required>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            <label id="email">Email ID :</label>
                        </td>
                        <td>
                            <input type="email" id="email" name="email" required>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            <label id="pwd">Password : </label>
                        </td>
                        <td>
                            <input type="password" id="pwd" name="password" required maxlength="12" minlength="6">
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <center>
                        <td>
                            <input type="submit" name="submit" id="login" value="LOG IN" ></center>
                            
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                            <hr ></center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center>
                                Don't have an account?<br><br>
                            <a href="signup.html" id="signup">SIGN UP</a>
                            </center>
                        </td>
                    </tr>
                        </form>
                    
               
               
            </table>
        </div>

    </body>
</html>

