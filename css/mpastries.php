<?php
//connecting to the databae in the local server
$conn = mysqli_connect("localhost", "root", "", "mpastriesdb");
if ($conn) {
    //retrieving the data from the form
    $username = $_POST['email'];
    $password = $_POST['password'];

    //creating an insert query to save the data into student table
    $sql = "INSERT INTO customers(username,password) VALUES('$username','$password')";
    //process the query
    $processQuery = mysqli_query($conn, $sql);

    if ($processQuery) {
        echo "user added successfully";
    } else {
        echo "user addition failed";
    }
} else {
    echo "connection to the database failed";
}



//echo"Username :".$username." Password: ".$password;
