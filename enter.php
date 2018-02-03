<?php include 'database.php'; ?>

<?php
// This is the "prepared statement" version of this file.

if (isset($_POST['country']) && isset($_POST['city'])) {

    // sanitizeMySQL() is a custom function, written below
    $country = sanitizeMySQL($conn, $_POST['country']);
    $city = sanitizeMySQL($conn, $_POST['city']);
    $stay = sanitizeMySQL($conn, $_POST['stay']);
    $eat = sanitizeMySQL($conn, $_POST['eat']);
    $do = sanitizeMySQL($conn, $_POST['do']);


    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO travel (country, city, stay, eat, do)
    VALUES (?, ?, ?, ?, ? )";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'sssss',
        $country,
        $city,
        $stay,
        $eat,
        $do
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
} else {
    echo "Failed to enter!";
} // end of isset if-statement

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
