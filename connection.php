<?php

$user = 'root';
$pass = '';
$db = 'anti_bullyzens_code';

$conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

//$stmt = $conn->prepare("INSERT INTO anti_bullyz_story(story) values(?)");
//$stmt->bind_param("s", $story);

//$story = "my first story";
//$stmt->execute();
//echo "record inserted successfully";

//$sql = "INSERT INTO anti_bullyz_story(story) values(?)";

/*$sql = "CREATE TABLE anti_bullyz_story (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
story VARCHAR(1500) NOT NULL,
created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";*/

/*if ($conn->query($sql) === TRUE) {
    echo "Insert successfully";
} else {
    echo "Error inserting: " . $conn->error;
}*/

?>