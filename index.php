<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:codegraphsdb.database.windows.net,1433; Database = submissionDicodingCRUD", "codegraphs", "CUMI12panggang");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "codegraphs@codegraphsdb", "pwd" => "CUMI12panggang", "Database" => "submissionDicodingCRUD", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:codegraphsdb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submission Dicoding 1</title>
</head>
<body>
    
</body>
</html>