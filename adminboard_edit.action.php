<?php
    $titleError = "";
    $commentError = "";

    $connection = new mysqli('localhost', 'root', '', 'anime');
    
    $id = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $comment = isset($_POST['comment']) ? $_POST['comment'] : null;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['confirmed'])):
            if(empty($_POST['title'])):
                $titleError = "Title is required";
            else:
                $title = $connection->escape_string ($_POST['title']);
            endif;
            if(empty($_POST['comment'])):
                $commentError = "Comment is required";
            else:
                $comment = $connection->escape_string ($_POST['comment']);
            endif;
            if(!empty($_POST['title']) and !empty($_POST['comment'])):
                $query = "update adminboard set title='$title', comment='$comment' where id = $id";
                mysqli_query($connection, $query);
            endif;
        endif;
    }

    $query = "select * from adminboard where id =" . $_GET['id'];"";
    $result = $connection->query($query);
    $pins = $result->fetch_all(MYSQLI_ASSOC);