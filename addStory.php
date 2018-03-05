<?php
    include 'connection.php';
?>

<?php
    session_start();
    $story = htmlspecialchars($_POST['story']);
    echo $story;
    $stmt = $conn->prepare("INSERT INTO anti_bullyz_story(story) values(?)");
    $stmt->bind_param("s", $story);
    $stories = "";

    if($stmt->execute()) {
        //echo "records inserted";
    } else {
        //echo "failed to insert";
    }

    header("Location: http://localhost/beat-the-bullyz/index.php");
    exit();
    $stmt->close();
?>