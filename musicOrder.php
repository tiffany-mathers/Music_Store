<!DOCTYPE html>
<!-- musicOrder.php -->
<!-- Sep 15, 2016 -->
<html>
    <head>
        <title>Music Store Form</title>
    </head>
    <body bgcolor="#FAFAD2">
        <h1 style="color:DodgerBlue"><center>Welcome to the Music Store Order Form! </center></h1>
        <br>
        <br>
        <center><img src="http://www.mid-east-music.com/imagesdoor/musicstore.jpg" /></center>
        <br>
        <br>
        <p><center><b>We offer the following products:</p>
        <br>
        <br>
        <table cellspacing="30">
            <form name="main" method="post" action="musicPayment.php">
                <?php
                $username = $_POST["username"];
                $email = $_POST["emailadd"];
                $password = $_POST["passwordadd"];

                session_start();
                $_SESSION['appusername'] = $username;
                $_SESSION['appemail'] = $email;
                $_SESSION['apppassword'] = $password;
                ?>
                <tr>
                    <td><b><font color=DodgerBlue>Instrument Title</font></b></td>
                    <td></td>
                    <td><b><font color=DodgerBlue>Price</font></b></td>
                    <td><b><font color=DodgerBlue>Select item for purchase:</font></b></td>
                </tr>	
                <tr>
                    <td>Williams Legato 88-Key Digital Piano</td>
                    <td><img src="http://www.wirerealm.com/wp-content/uploads/2015/01/williams-legato-88-digital-piano.jpg" width="300" /></td>
                    <td align="right">Price: $127.95</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="0">
                    <input type="hidden" name="item[]" id="item" value="Williams Legato Digital Piano"></center>
                <input type="hidden" name="price[]" id="price" value="127.95">			
                </td>
                </tr>
                <tr>
                    <td>Rogue Starter Acoustic Guitar</td>
                    <td><img src="http://kidguitarist.com/wp-content/uploads/2016/02/rogueblue.jpg" width="300" /></td>
                    <td align="right">Price: $75.00</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="1">
                    <input type="hidden" name="item[]" id="item" value="Rogue Starter Acoustic Guitar"></center>
                <input type="hidden" name="price[]" id="price" value="75">
                </td>
                </tr>
                <tr>
                    <td><b><font color=DodgerBlue>Tutorial Title</font></b></td>
                    <td></td>
                    <td><b><font color=DodgerBlue>Price</font></b></td>
                    <td><b><font color=DodgerBlue>Select item for purchase:</font></b></td>
                </tr>
                <tr>
                    <td>Beginner Piano Tutorial</td>
                    <td><img src="http://worldartsme.com/images/boy-playing-piano-clipart-1.jpg" width="300"></td>
                    <td>$15.00</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="2">
                    <input type="hidden" name="item[]" id="item" value="Beginner Piano Tutorial"></center>
                <input type="hidden" name="price[]" id="price" value="15">
                </td>
                </tr>
                <tr>
                    <td>Intermediate Piano Tutorial</td>
                    <td><img src="http://www.clipartbay.com/cliparts/child-playing-piano-clip-art-ggus7yu.jpg" width="300"></td>
                    <td>$25.00</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="3">
                    <input type="hidden" name="item[]" id="item" value="Intermediate Piano Tutorial"></center>
                <input type="hidden" name="price[]" id="price" value="25">		
                </td>
                </tr>
                <tr>
                    <td>Advanced Piano Tutorial</td>
                    <td><img src="http://www.clipartkid.com/images/449/inspired-musician-plays-the-piano-vector-clip-art-on-a-white-ninYyU-clipart.jpg" width="300"></td>
                    <td>$30.00</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="4">
                    <input type="hidden" name="item[]" id="item" value="Advanced Piano Tutorial"></center>
                <input type="hidden" name="price[]" id="price" value="30">		
                </td>
                </tr>
                <tr>
                    <td>Beginning Guitar Tutorial</td>
                    <td><img src="https://thumbs.dreamstime.com/z/guitar-picture-instruments-music-note-39658177.jpg" width="300"></td>
                    <td>$15.00</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="5">
                    <input type="hidden" name="item[]" id="item" value="Beginning Guitar Tutorial"></center>
                <input type="hidden" name="price[]" id="price" value="15">
                </td>
                </tr>
                <tr>
                    <td><b><font color=DodgerBlue>Song Title</font></b></td>
                    <td><b><font color=DodgerBlue>Composer</font></b></td>
                    <td><b><font color=DodgerBlue>Price</font></b></td>
                    <td><b><font color=DodgerBlue>Select item for purchase:</font></b></td>
                </tr>
                <tr>
                    <td>Eine Kleine Nachtmusik</td>
                    <td>Wolfgang Mozart</td>
                    <td>$5.75</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="6">
                    <input type="hidden" name="item[]" id="item" value="Notes Eine Kleine Nachtmusik"></center>
                <input type="hidden" name="price[]" id="price" value="5.75">
                </td>
                </tr>
                <tr>
                    <td>Fur Elise</td>
                    <td>Ludwig van Beethoven</td>
                    <td>$4.00</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="7">
                    <input type="hidden" name="item[]" id="item" value="Notes Fur Elise"></center>
                <input type="hidden" name="price[]" id="price" value="4">	
                </td>
                </tr>
                <tr>
                    <td>The Unforgiven</td>
                    <td>Metallica</td>
                    <td>$15.95</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="8">
                    <input type="hidden" name="item[]" id="item" value="Notes The Unforgiven"></center>
                <input type="hidden" name="price[]" id="price" value="15.95">
                </tr>
                <tr>
                    <td>Sweet Child O'Mine</td>
                    <td>Guns N'Roses</td>
                    <td>$13.50</td>
                    <td><center>
                    <input type="checkbox" name="count[]" id="count" value="9">
                    <input type="hidden" name="item[]" id="item" value="Notes Sweet Child O'Mine"></center>
                <input type="hidden" name="price[]" id="price" value="13.5">
                </td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><input name="btnsubmit" type="submit"
                                                          value="Checkout"></td>
                </tr>
        </table>
        </form>
    </body>
</html>
