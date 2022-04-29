-> Localhost root
<?php
//phpinfo();

$host = "mysql-server";
$user = "root";
$pass = "password";
$db = "employees";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "MySQL Connected Successfully!\n\n";

    $statement = $conn->prepare("select * from employees limit 10");
    $statement->execute();
    $rows = $statement->fetchAll();
    $html = "<html><table>";
    $html .= "<tr>
        <th>EMP NO</th>
        <th>BIRTH DATE</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>GENDER</th>
        <th>HIRE DATE</th>
    </tr>";
    foreach ($rows as $row){
        $html .= "<tr>
            <td>".$row['emp_no']."</td>
            <td>".$row['birth_date']."</td>
            <td>".$row['first_name']."</td>
            <td>".$row['last_name']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['hire_date']."</td>
        </tr>";
    }
    $html .= "</table></html>";

    echo $html;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}