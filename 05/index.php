<?php
/*
 5. Sukurkite forma, kuri leistų pridėti failą ir vėliau jį išsaugotų serveryje su formoje nurodytu failo pavadinimu (name). (3 balai)
*/

//    File forma: 
//    Name: [laboras.txt]
//    File: [browse]
?>


<html>
    <head>
        <title>form to File</title>
    </head>

    <body>

        <form action="/action_page.php">
            <label for="fname">File name:</label>
            <input type="text" name="fname" value=""><br>
            <label>Last name:</label>
            <input type="file" name="file" value="browse"><br><br>
            <input type="submit" value="Upload">
        </form> 

    </body>
</html>