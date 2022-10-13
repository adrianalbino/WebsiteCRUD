<?php 

    require_once("../includes/dbh-inc.php");

    if(isset($_GET['update']))
    {
        if(empty($_GET['forumName']) || empty($_GET['forumOwner']) || empty($_GET['forumDescription']) || empty($_GET['ID']))
        {
            header("location:../errorPage.php");
        }
        else
        {
            $ID = $_GET['ID'];
            $forumName = $_GET['forumName'];
            $forumOwner = $_GET['forumOwner'];
            $forumDescription = $_GET['forumDescription'];

            $sql = "UPDATE `create_forum` SET `forumName` = '$forumName', `forumOwner` = '$forumOwner', `forumDescription` = '$forumDescription' WHERE ID=$ID";
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
        header("location:../forumListPage.php");
    }


?>

