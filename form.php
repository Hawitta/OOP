<?php
    require 'constants.php';
 ?>
 
 <h2> Register Writer </h2>
    <form action="insert.php" method="POST">
        <label for="writer_id">Writer ID:</label>
        <input type="text" name="writer_id" required autocomplete="off"><br><br>

        <label for="writer_name">Writer Name:</label>
        <input type="text" name="writer_name" required autocomplete="off"><br><br>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required autocomplete="off"><br><br>

        <label for="contact">Contact:</label>
        <input type="text" name="contact" required autocomplete="off"><br><br>

        <input type="submit" value="Register">
        <input type="reset" value="Clear">
    </form>

