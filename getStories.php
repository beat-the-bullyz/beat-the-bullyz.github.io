<?php
    include 'connection.php';
?>

<?php
    function getAllStories() {
        $stories = "";
        $getAllStories = "SELECT story FROM anti_bullyz_story";
        $result = $conn->query($getAllStories);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $stories = $stories . " " . $row["story"];
            }
            //echo $stories;
        } else {
            //echo "no stories";
        }
        return $stories;
    }            
?>