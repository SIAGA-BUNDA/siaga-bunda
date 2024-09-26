<?php
// Oracle database connection details
$host = "localhost";      // Oracle server hostname or IP
$port = "1521";           // Default Oracle port
$sid = "xe";            // Oracle SID
$username = "SYSTEM"; // Your Oracle username
$password = "12345"; // Your Oracle password

// Connection string (TNS)
$tns = "
(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = $host)(PORT = $port))
    (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SID = $sid)
    )
)";

// Establish connection using oci_connect
$conn = oci_connect($username, $password, $tns);

// Check if the connection was successful
if (!$conn) {
    $e = oci_error();
    echo "Connection failed: " . $e['message'];
    exit;
}

echo "Connected to Oracle DB sukses cuyy!";



// Perform a query (example)
$query = "select first_name, salary from employees where salary >
(select salary from employees where first_name = 'Jonathon')";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// Fetch rows and display data
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) 
    {
        echo "<br>";
    foreach ($row as $item) {
        
        echo ($item !== null ? htmlentities($item, ENT_QUOTES) : "NULL") . " ";
    }
    echo "<br>";
}

// Close the connection
?>
