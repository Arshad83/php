<?php

try {
    // Report on all types of errors
    mysqli_report(MYSQLI_REPORT_ALL);

    // Open a new connection to the MySQL server
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'sakila');

    // Perform a query on the database
    $result = $mysqli->query('SELECT * FROM customer WHERE email LIKE "MARIA.MILLER@sakilacustomer.org"');

    // Return the current row of a result set as an object
    $customer = $result->fetch_object();
var_dump($customer);

    // Close opened database connection
    $mysqli->close();

    // Output customer info
    echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;
} catch (mysqli_sql_exception $e) {
    // Output error and exit upon exception
    echo $e->getMessage(), PHP_EOL;
    exit;
}

try {
    // Report on all types of errors
    mysqli_report(MYSQLI_REPORT_ALL);

    // Open a new connection to the MySQL server
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'sakila');

    $customerIdGt = 100;
    $storeId = 2;
    $email = "MARIA.MILLER@sakilacustomer.org";

    // Prepare an SQL statement for execution
    $statement = $mysqli->prepare('SELECT * FROM customer WHERE email LIKE ?');

    // Binds variables to a prepared statement as parameters
    $statement->bind_param('s', $email);

    // Execute a prepared query
    $statement->execute();

    // Gets a result set from a prepared statement
    $result = $statement->get_result();
    //var_dump($result);
    // Close a prepared statement
    $statement->close();

    // Fetch object from row/entry in result set
    $customer = $result->fetch_object();
    var_dump($customer);
        // Output customer info
        echo $customer->first_name, ' ', $customer->last_name, PHP_EOL;


    

    // Close database connection
    $mysqli->close();
} catch (mysqli_sql_exception $e) {
    // Output error and exit upon exception
    echo $e->getMessage();
    exit;
}




try {
    $conn = new PDO(
        "mysql:host=127.0.0.1;dbname=sakila", 'root', '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $result = $conn->query('SELECT * FROM customer WHERE email LIKE "MARIA.MILLER@sakilacustomer.org"');
    $customers = $result->fetch(PDO::FETCH_OBJ);
var_dump($customers);
   // foreach ($customers as $customer) {
        echo $customers->first_name, ' ', $customers->last_name, PHP_EOL;
    //}
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}