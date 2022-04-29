<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Data from MySQL</h2>
<?php
//phpinfo();
$host = "mysql";
$user = "root";
$pass = "pass";
$db = "mysql";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare("select * from help_category limit 5");
    $statement->execute();
    $rows = $statement->fetchAll();
    /*echo "<pre>";
    print_r($rows);*/
    $html = "<table class='table'>";
    $html .= "<tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PARENT CATEGORY ID</th>
    </tr>";
    foreach ($rows as $row){
        $html .= "<tr>
            <td>".$row['help_category_id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['parent_category_id']."</td>
        </tr>";
    }
    $html .= "</table>";

    echo $html;
} catch(Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
</div>
</body>
</html>
