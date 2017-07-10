<html>
    <head>
        <title>Logout</title>
    </head>
    <body bgcolor="#FAFAD2">
        <?php
        session_start();
        foreach (array_keys($_SESSION) as $k) {
            unset($_SESSION[$k]);
        }
        ?>
        <p>	
        <h1 style="color:DodgerBlue"><center> You are now logged out! </center></h1>
        <h2 style="color:DodgerBlue"><center> Please come again! </center></h2>
        
        <!-- table for debugging - shows undefined session variables
        <table border='1' align="center">
            <tr>
                <td>Username </td>
                <td>Email </td>
                <td>Password</td>
            </tr>
            <tr>
                <td> <?php //echo $_SESSION['appusername'] ?> </td> 
                <td> <?php //echo $_SESSION['appemail'] ?> </td>
                <td> <?php //echo $_SESSION['apppassword'] ?> </td>
            </tr>
        </table>
        -->
    </body>
</html>
