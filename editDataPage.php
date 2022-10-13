<?php 

require_once("includes/dbh-inc.php");
$ID = $_GET['GetID']; //this is the ID from the Edit link on forumListPage.php
$sql = "SELECT * from create_forum where ID='".$ID."';"; // "sql code'" -> php code -> "sql code'"
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result))
{
    $ID = $row['ID'];
    $forumName = $row['forumName'];
    $forumOwner = $row['forumOwner'];
    $forumDescription = $row['forumDescription'];
    $forumCreated = $row['Created'];
    $forumModified = $row['Modified'];
}

?>


<!--
$UserID = $_GET['GetID']; //this is the ID from the Edit link on forumListPage.php
$query = "SELECT * from create_forum where ID='".$UserID."'"; // "sql code'" -> php code -> "sql code'"
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
    $ID = $row['ID'];
    $forumName = $row['forumName'];
    $forumOwner = $row['forumOwner'];
    $forumDescription = $row['forumDescription'];
    $forumCreated = $row['Created'];
    $forumModified = $row['Modified'];
}
-->


<!doctype html>
<html lang="en">
  <head>

    <?php include "websiteTheme/headerAndLinks.php" ?>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script> 
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("slow");
                $("#flip_p").fadeOut(function () {
                    $("#flip_p").text(($("#flip_p").text() == 'Click to see your uploads.') ? 'Click to hide your uploads.' : 'Click to see your uploads.').fadeIn();
                })
            })
        });

        $(document).ready(function(){
            $('form input').change(function () {
                $('form p').text(this.files.length + " file(s) selected");
            });
        });
    </script>
    <style>
        * {box-sizing: border-box}

        #panel, #flip {
            width: 30%;
            margin-top: 10%;
            margin-bottom: 5%;
            margin-left: auto;
            margin-right: auto;
            padding: 5px;
            text-align: center;
            background-color: black;
            border: solid 1px #c3c3c3;
            color: white;
        }

        #panel {
            padding: 50px;
            display: none;
        }

        #flip {
            padding: 50px;
        }

        #flip:hover {
            cursor: pointer;
        }

        .videoSection {
            width: 50%;
            float: left;
        }

        .videoContent {
            text-align: center;
            margin: 5%;
        }

        .videoContent h1 {
            font-size: 2rem;
            color: white;
        }

        .fileDiv {
            margin-top: 5%;
            border: 4px dashed rgb(139, 134, 134);
            position: relative;
        }

        .fileUpload {
            text-align: left;
        }

        .fileUpload input {
            width: 100%;
            font-size: 100%;
            outline: none;
            opacity: 0;
        }

        .fileDiv p{
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /*
        .fileDiv input{
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
        }
        */

        .forumInput {
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
        }

        textarea {
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
        }

        .submit-btn{
            margin: 0;
            color: #fff;
            background: black;
            border: none;
            width: 50%;
            height: 50px;
            margin-top: 10%;
            border-radius: 4px;
            border-bottom: 4px solid #6e1c1c;
            transition: all .2s ease;
            outline: none;
        }

        button:hover{
            background: violet;
            color: black;
        }

        button:active{
            border:0;
        }

        .videoSection .submitButton {
            display: block;
        }

        .forumSection {
            width: 50%;
            float: left;
        }

        .videoSection p {
            color: white;
        }

        .forumContent {
            text-align: center;
            margin: 5%;
        }

        .forumContent h1 {
            font-size: 2rem;
            color: white;
        }

        .formDiv {
            margin-top: 5%;
            border: 4px dashed rgb(139, 134, 134);
            text-align: left;
            padding: 5%;
            color: white;
        }

        textarea {
            width: 80%;
        }

        @media only screen and (max-width: 420px) {
            #panel, #flip {
                padding: 30px;
                width: 80%;
                margin-top: 30%;
                margin-left: auto;
                margin-right: auto;
            }

            .videoSection{
                width: 80%;
                margin: auto;
                float: none;
            }

            .forumSection{
                width: 80%;
                margin: auto;
                float: none;
            }

            .submit-btn {
                width: 100%;
            }

            input {
                width: 80%;
            }

            textarea {
                width: auto;
            }
        }
    </style>

    <title>Upload Page</title>
  </head>
  <body id="page-top">
    
    <?php include "websiteTheme/navbar.php" ?>

    <div id="flip"><p id="flip_p">Click to see your uploads.</p></div>
    <div id="panel">No uploads to show at the moment.</div>
    
    <div class="videoSection">
        <div class="videoContent">
            <h1>Upload Video</h1>
            <form action="upload.php" method="POST">
                <div class="fileDiv">
                    <p>Drag your video/file here or click in this area.</p>
                    <div class="fileUpload">
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                        <input type="file" multiple>
                    </div>
                </div>
                <button class="submit-btn" type="submit">Upload</button>
            </form>
        </div>
    </div> 

    <div class="forumSection">
        <div class="forumContent">
            <h1>Edit Forum</h1>
            <form action="CRUD/updateData.php?forumID=<?php echo $ID ?>" method="GET">
                <div class="formDiv">
                <h6>Avoid apostrophes or special characters as much as possible.</h6>
                    <div>
                        <h5>Forum ID: </h5>
                        <input class="forumInput" type="number" name="ID" value="<?php echo $ID ?>" placeholder="Enter forum ID">
                    </div>
                    <div>
                        <h5>Forum Owner: </h5>
                        <input class="forumInput" type="text" name="forumOwner" value="<?php echo $forumOwner ?>" placeholder="Enter forum owner's name">
                    </div>
                    <br>
                    <div>
                        <h5>Forum Name: </h5>
                        <input class="forumInput" type="text" name="forumName" value="<?php echo $forumName ?>" placeholder="Enter forum name">
                    </div>
                    <br>
                    <div>
                        <h5>Forum Description: </h5>
                        <textarea name="forumDescription" value="<?php echo $forumDescription ?>" placeholder="Enter forum description"></textarea>
                    </div>
                </div>
                <div>
                    <button class="submit-btn" type="submit" name="update">Update</button>
                </div>
            </form>
        </div>
    </div> 

    <?php include "websiteTheme/footerAndScript.php" ?>
    
  </body>
</html>
