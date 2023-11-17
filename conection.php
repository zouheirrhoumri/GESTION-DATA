<?php
$mysqli = mysqli_connect("localhost", "root", "zouhir@", "dataware");

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

$table = "employees";
$result = mysqli_query($mysqli, "SELECT * FROM $table");

if (!$result) {
    die("Query failed: " . mysqli_error($mysqli));
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        // Access individual columns using $row['column_name']
        echo "ID: " . $row['firstname'] . ", Name: " . $row['lastname'] . ", Email: " . $row['email'] . "<br>";
    }

    // Free result set
    mysqli_free_result($result);
}

// Close connection
mysqli_close($mysqli);
?>
