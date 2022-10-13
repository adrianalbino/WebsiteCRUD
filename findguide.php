<!doctype html>
<html lang="en">
  <head>

<?php include "websiteTheme/headerAndLinks.php" ?>
<style>

     body {
            background-image: url(images/findguide.jpg);
        }
        .guides{
            float: left;
            width: 60%;
            color: white;
            margin-top: 8%;
            border-top: 5px solid rgb(117, 116, 116);
            padding: 30px;
            text-align: center;
            border-right: 5px solid rgb(117, 116, 116);
            flex-wrap:wrap;
        }
        .join{
            float: right;
            width: 40%;
            color: white;
            margin-top: 8%;
            border-top: 5px solid rgb(117, 116, 116);
          
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-content: space-around;
            gap: 20px;
        }
        .join div h1{
            border: 1px solid white;
            padding: 20px;
            border-radius: 25px 50px;
            margin-left: 10px;
            margin-right:10px;
            text-align: center;
            justify-content: center;
        }
        .groupings{
            border: 1px solid white;
            padding: 20px;
            border-radius: 25px 50px;
            margin-left: 10px;
            margin-right:10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            
        }
        .groupings img{
            width: 25%;
            height: auto;
        }
        .groupings div ul li{
            margin-top: 10px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            align-content: center;
            padding: 20px;
            gap: 40px;
            list-style: none;
            text-decoration: none;
        }
        .groupings div ul li a{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            text-decoration: none;
            text-align: center;
            width: 15%;
            text-decoration: none;
        }
        .groupings div ul li button:hover{
            align-items: center;
            text-decoration: none;
            cursor:pointer;
            color: aliceblue;
            background-color: rgb(24, 23, 23);
            border: white; 
        }
        div.video{
        border: 1px solid #ccc;
        height: auto;
        width: 260px ;
        padding: 10px;
        }
        .videogallery{
        display: flex;
        flex-wrap: wrap;
        margin-left: 3%;
        padding: 30px;
        }
        /* For mobile phones: */
        [class*="col-"] {
        width: 100%;
        }
        .footer{
           position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 40px;
        }
        @media only screen and (min-width: 600px) {
            /* For tablets: */
            .col-s-1 {width: 8.33%;}
            .col-s-2 {width: 16.66%;}
            .col-s-3 {width: 25%;}
            .col-s-4 {width: 33.33%;}
            .col-s-5 {width: 41.66%;}
            .col-s-6 {width: 50%;}
            .col-s-7 {width: 58.33%;}
            .col-s-8 {width: 66.66%;}
            .col-s-9 {width: 75%;}
            .col-s-10 {width: 83.33%;}
            .col-s-11 {width: 91.66%;}
            .col-s-12 {width: 100%;}

            
            }
            @media only screen and (min-width: 760px) {
            /* For desktop: */
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}
            }

      
        
</style>
<title>Guides</title>
</head>
<body id="page-top">
    <?php include "websiteTheme/navbar.php" ?>

    <div class="mainbod">
        <div class="col-8 col-s-12 guides">
            <h2>Choose a Guide</h2>
        <div class="videogallery">     
<div class="video">
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 1
        </p>
</div>


<div class="video">       
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 2
        </p>
</div>

<div class="video">
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 3
        </p>
</div>
<div class="video">
 <a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 5
        </p>
</div>
<div class="video">
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 6
        </p>
</div>
<div class="video">
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 7
        </p>
</div>
<div class="video">
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 8
        </p>
</div>
<div class="video">
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 9
        </p>
</div>
<div class="video">
<a target="_blank" href="images/profile2-icon.png">
              <img src="images/profile2-icon.png" alt="no image detected">
            </a>
        <p>
        <br>
         <u><a href="errorPage.php"><button>Learn More</button></a></u><br> Guide 10
        </p>
</div>
</div>
         </div>

         <div class="col-4 col-s-12 join">

                <div>
                    <h1>Communauté de Chants Groups</h1>
                </div>
         <div class="groupings">
                
                <h2>Communities and people</h2>
                <div>
                    <ul>
                        <li> <img src="images/profile2-icon.png" alt="profile icon">
                        <p>Group share 1</p>
                       <a href="errorPage.php"><button>Join</button></a>
                        </li>
                        <li>
                        <img src="images/profile2-icon.png" alt="profile icon">
                        <p>Group Share 2</p>
                       <a href="errorPage.php"><button>Join</button></a>
                        </li>
                        <li>
                        <img src="images/profile2-icon.png" alt="profile icon">
                        <p>Group Share 3</p>
                       <a href="errorPage.php"><button>Join</button></a>
                        </li>
                    </ul>
                </div>
             </div>

        </div>
    </div> 
    <div class="footer"><?php include "websiteTheme/footerAndScript.php" ?></div>
</body>

</html>
   
