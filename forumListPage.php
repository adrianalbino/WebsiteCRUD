<?php
    include "includes/dbh-inc.php"    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "websiteTheme/headerAndLinks.php" ?>

    <style>
        body {
            background-color: black;
            background-image: url(assets/img/black.pn.png);
            repeat: cover;
        }

        .title {
            color: white;
            text-align: center;
            margin-top: 10%;
        }

        a {
            color: white;
            text-decoration: underline;
        }

        .edit:hover {
            color: green;
        }

        .delete:hover {
            color: red;
        }

        .table {
            margin-top: 3%;
            margin-left: auto;
            margin-right: auto;
            width: 90%;
        }

        .createbtn {
            background-color: #fbf8f80a;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            height: 100px;
            opacity: 0.9;
            margin: 5% auto;
            font-size: 20px;
        }

        button:hover {
            opacity:1;
            background-color: white;
            color: black;
        }

        @media only screen and (max-width: 420px) {
            .title {
                display: block;
                position: -webkit-sticky;
                position: sticky;
            }

            .createbtn {
                width: 100%;
                margin: auto;
                position: -webkit-sticky;
                position: sticky;
            }

            footer {
                position: -webkit-sticky;
                position: sticky;
            }

            .container {
                overflow: auto;
            }
        }
    </style>
    <title>Forum List Page</title>
</head>
<body>

    <?php include "websiteTheme/navbar.php" ?>

    <h1 class="title">List of All Forums</h1>

    <div class="container">

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Forum ID</th>
                    <th scope="col">Forum Name</th>
                    <th scope="col">Forum Owner</th>
                    <th scope="col">Forum Description</th>
                    <th scope="col">Forum Creation Date & Time</th>
                    <th scope="col">Forum Modification Date & Time</th>
                    <th scope="col">Edit/Update Forum</th>
                    <th scope="col">Delete Forum</th>
                </tr>
            </thead>

        <?php

            //display data from the mysql database onto the webpage
            $sql = "SELECT * FROM create_forum;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                /*
                echo "<table border='1'>\n";
                while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["forumName"]. "</td><td>" . $row["forumOwner"]. "</td><td>" . $row["forumDescription"]. "</td><td>" . $row["Created"]. "</td><td>" . $row["Modified"]. "</td></tr>";
                }
                */

                while($row = mysqli_fetch_assoc($result)) {
        ?>

            <tbody> 
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['forumName'] ?></td>
                    <td><?php echo $row['forumOwner'] ?></td>
                    <td><?php echo $row['forumDescription'] ?></td>
                    <td><?php echo $row['Created'] ?></td>
                    <td><?php echo $row['Modified'] ?></td>
                    <td><a class="edit" href="editDataPage.php?GetID=<?php echo $row['ID'] ?>">Edit</a></td>
                    <td><a class="delete" href="CRUD/deleteData.php?Del=<?php echo $row['ID'] ?>">Delete</a></td>
                </tr>
            </tbody>

        <?php
                }
            } else {
                echo "0 results";
            }
                
            mysqli_close($conn);
        ?>

        </table>

    </div>

    <form action="uploadPage.php" method="post">
        <button type="submit" class="createbtn">Create a forum</button>
    </form>

    <?php include "websiteTheme/footerAndScript.php" ?>

</body>
</html>