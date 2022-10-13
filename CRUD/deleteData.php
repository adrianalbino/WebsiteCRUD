
<?php 

require_once("../includes/dbh-inc.php");

if(isset($_GET['Del']))
{
    $ID = $_GET['Del'];
    $sql = "DELETE FROM create_forum WHERE ID = '".$ID."';";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header("location:../forumListPage.php");
    }
    else
    {
        echo 'Please check your query.';
    }
}
else
{
    header("location:../forumListPage.php");
}

?>