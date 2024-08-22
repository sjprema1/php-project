<?php 

function createTbl(){
    $hostname = "localhost";
    $username = "premas3";
    $password = "6789065";
    $databasename = "io_db";
    $conn = new mysqli($hostname,$username,$password,$databasename);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    $conn->query($sql);
    $conn->close();
}

function fetchData(){
    $hostname = "localhost";
    $username = "premas3";
    $password = "6789065";
    $databasename = "io_db";
    $conn = new mysqli($hostname,$username,$password,$databasename);

    if($conn->connect_error){
        die("connection failed").$conn->connect_error;

    }
    $stmt = $conn->prepare("select * from MyGuests where firstname= ? and lastname = ? order by id desc");
    $stmt->bind_param('s','rahul');
    $stmt->bind_param('s','mathew');
    $stmt->execute();
    echo $stmt->num_rows;
    $result = $stmt->get_result();
    if(!$result){
        die("mysql_error");
    }
    while($row = $result->fetch_assoc()){
        echo $row['firstname'];
    }


}
?>