<?php
class Layout {
    public $pdo;
    public function __construct($db) {
        $this -> pdo = $db -> pdo;
    }
    public function header() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register Writer</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
    <?php
    }

    public function form() {
        ?>
        <h2> Register Writer </h2>
    <form action="" method="POST">
        <!-- <label for="writer_id">Writer ID:</label>
        <input type="text" name="writer_id" required autocomplete="off"><br><br> -->
        <!-- This input is not required since writer id is auto incremented -->

        <label for="writer_name">Writer Name:</label>
        <input type="text" name="writer_name" required autocomplete="off"><br><br>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required autocomplete="off"><br><br>

        <label for="contact">Contact:</label>
        <input type="text" name="contact" required autocomplete="off"><br><br>

        <input type="submit" name="submit" value="Register">
        <input type="reset" value="Clear">
    </form>
    
        <?php
    }

    public function view_writers() {
        ?>
        <table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>FullName</th>
    <th>Email</th>
    <th>Phone</th>
</tr>

<?php 


$stmt = $this -> pdo->query("SELECT * FROM writers");
$result = $stmt->fetchAll();
if($result)
{
    foreach($result as $row)
    {
        ?>
        <tr>
            <td><?= $row['writer_id']; ?></td>
            <td><?= $row['writer_name']; ?></td>
            <td><?= $row['email_address']; ?></td>
            <td><?= $row['contacts']; ?></td>
        </tr>
        <?php
    } 
}

 else {
    echo "No record found";

}
?>

</table>
<?php
    }

    public function footer() {
        ?>
        </body>
        </html>
        <?php
    }

}