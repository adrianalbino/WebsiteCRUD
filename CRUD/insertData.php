<?php
    include "../includes/dbh-inc.php"    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum List Page</title>
</head>
<body>
    <?php

    if(isset($_GET['submit']))
    {
        if(empty($_GET['forumName']) || empty($_GET['forumOwner']) || empty($_GET['forumDescription']))
        {
            header("location:../errorPage.php");
        }
        else
        {
            $forumName = $_GET['forumName'];
            $forumOwner = $_GET['forumOwner'];
            $forumDescription = $_GET['forumDescription'];
            //insert inputted data into database on the localhost
            $sql = "INSERT INTO create_forum (forumName, forumOwner, forumDescription) VALUES ('$forumName', '$forumOwner', '$forumDescription');";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                header("location:../forumListPage.php");
            }
            else
            {
                echo 'Please check your query. Try putting information with as few special characters as possible (e.g. apostrophe).';
            }
        }
    }
    else
    {
        header("location:../uploadPage.php");
    }

    ?>
</body>
</html>