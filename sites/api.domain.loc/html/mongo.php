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
<h2>Data from MongoDB</h2>
<?php
// Manager Class
$manager = new MongoDB\Driver\Manager("mongodb://mongo:27017");
$filter  = [];
$options = ['sort'=>array('_id'=>-1),'limit'=>3]; # limit -1 from newest to oldest

#constructing the querry
$query = new MongoDB\Driver\Query($filter, $options);

#executing
$cursor = $manager->executeQuery('testing_mongo.test_col', $query);

$html = "<table class='table'>";
$html .= "<tr>
        <th>ID</th>
        <th>NAME</th>
    </tr>";
foreach ($cursor as $document) {
    $html .= "<tr>
            <td>".(string) $document->_id."</td>
            <td>".$document->name."</td>
        </tr>";
    $html .= "</table>";
}
echo $html;
    ?>
</div>
</body>
</html>
