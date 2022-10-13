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
            border-top: 5px white solid;
            border-right: 5px white solid;
	    border-bottom: 5px white solid;
  	
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

        .text-white-50 {
            margin-bottom: 5%;
        }

        input {
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
            width: 25%;
            height: 50px;
            margin-top: 5%;
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
            border-top: 5px white solid;
	    
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
                border-right: none;
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

	 <!-- Projects-->
        <section class="projects-section bg-black" id="projects">
                  
                                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/guysing.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h1 class="text-white-50" >Create Forum</h1>
            <form action="CRUD/insertData.php" method="GET">
                <div>
                    <h6>Avoid apostrophes or special characters as much as possible.</h6>
                    <div>
                        <h6 class="text-white mb-4">Forum Owner: </h6> 
                        <input type="text" name="forumOwner" placeholder="Enter forum owner's name">
                    </div>
                    <br>
                    <div>
                        <h6 class="text-white mb-4">Forum Name: </h6>
                        <input type="text" name="forumName" placeholder="Enter forum name">
                    </div>
                    <br>
                    <div>
                        <h6 class="text-white mb-4">Forum Description: </h6>
			
                        <textarea name="forumDescription" placeholder="Enter forum description"></textarea>
			<button class="submit-btn" type="submit" name="submit">Create</button>
                    </div>										
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		</div>

    
    
    
  
    <?php include "websiteTheme/footer.php" ?>
    
  </body>
</html>