<!doctype html>
<html lang="en">
  <head>

    <?php include "websiteTheme/headerAndLinks.php" ?>

    <style>
        * {box-sizing: border-box}

                
        .about_team {
            width: 50%;
            float: left;
            color: white;
            margin-top: 10%;
            
            padding: 30px;
        }
        
        .about_team p {
            padding-top: 10px;
            text-indent: 3em;
            text-align: justify;
        }

        .about_team div {
            width: 50%;
            float: left;
            padding: 10px;
            text-align: center;
        }

        .about_team img {
            width: 50%;
            margin-bottom: 20px;
        }

        .faq {
            width: 50%;
            float: left;
            color: white;
            margin-top: 10%;
            
            padding: 30px;
        }

        .faq h1 {
            padding-bottom: 20px;
        }

        .faq p {
            padding-top: 10px;
            text-indent: 3em;
            text-align: justify;
        }

        .adrian {
            width: 200px;
            border-radius: 50%;
            border: 3px green solid;
        }
        .nene {
            width: 200px;
            border-radius: 50%;
            border: 3px purple solid;
        }

        .neil {
            width: 200px;
            border-radius: 50%;
            border: 3px solid yellow;
        }
        .joshua {
            width: 200px;
            border-radius: 50%;
            border: 3px solid blue;
        }

        @media only screen and (max-width: 420px) {
            .about_team {
                width: 95%;
                margin: auto;
                margin-top: 30%;
                float: none;
                border-top: none;
                border-right: none;
            }

            .about_team div {
                width: 100%;
            }

            .faq {
                width: 95%;
                margin: auto;
                margin-top: 5%;
                float: none;
                border-top: none;
            }
        }
    </style>

    <title>About Us Page</title>
  </head>
  <body id="page-top">

        <?php include "websiteTheme/navbar.php" ?>

        <div class="about_team">
            <h1>About</h1>
            <p>Communauté de Chant is a website dedicated to giving tips and tutorials to passionate individuals who aspire to become better musicians. The average cost for Singing Lessons ranges from ₱2,500 to - ₱5,000 per session and not everyone has the privilege to pay for classes therefore, Communauté de Chant could act as their steppingstone for improvement whilst being free and open for everyone. Communauté de Chant ‘s content is provided by its own community, meaning that any users could upload and give their own exposition if they choose to share their knowledge. Otherwise, the users who just want to learn from fellow musicians have the option to pick which area of their voices they want to enhance. After choosing, they will be redirected to the tips and guides, (it may be in a video or text format) regarding their selected choice. In this community, we want to grow together and learn with each other to achieve betterment. People could also follow other users if ever they like their contents or with the intent of creating an acquaintance.</p>
            <h1>Team</h1>
            <p>This website was conceptualized and founded by Neil Christian Sagun, together with Ernest Joseph Curativo, Adrian Joseph Albino, and Joshua Rodriguez, who are all Computer Science students at the University of San Carlos.</p>
            <div>
                <img class="neil" src="images/neil-team.JPG" alt="profile icon">
                <h6>Sagun, Neil Christian</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio minima beatae assumenda ullam earum reprehenderit nemo vero aut quam eveniet?</p>
            </div>
            <div>
                <img class="adrian" src="images/adrian-team.JPG" alt="profile icon">
                <h6>Albino, Adrian Joseph</h6>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga sit molestiae totam, voluptatem optio ratione ipsum assumenda quia architecto maxime.</p>
            </div>
            <div>
                <img class="nene" src="images/nene-team.png" alt="Nene's icon">
                <h6>Curativo, Ernest Joseph S.</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis consequatur reiciendis quaerat magni? Quis fugit enim explicabo quisquam magni quidem!</p>
            </div>
            <div>
                <img class="joshua" src="images/joshua-team.jpg" alt="profile icon">
                <h6>Rodriguez, Joshua</h6>
                <p>USC student web Ddeveloper currently studying about database and php</p>
            </div>
        </div>

        <div class="faq">
            <h1>Frequently Asked Questions (FAQ)</h1>
            <h4>Question 1</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, nihil. Temporibus laudantium perspiciatis tenetur quibusdam cupiditate? Modi quam optio tempore sint ducimus praesentium temporibus? Nemo minima odio soluta sit hic saepe voluptates quae, rem nam veniam exercitationem temporibus pariatur reprehenderit.</p>
            <h4>Question 2</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aperiam veritatis sed numquam sit nobis distinctio culpa nesciunt minus, eius, repudiandae voluptas autem soluta totam praesentium vero aut asperiores neque quod velit illo. Explicabo incidunt assumenda dolores. Dolore, rem blanditiis?</p>
            <h4>Question 3</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quidem omnis suscipit cumque veritatis architecto. Enim similique obcaecati exercitationem fuga, reiciendis dolorem magni adipisci voluptatibus laborum alias dignissimos? Vel aliquid modi iste? Sit quaerat tenetur quasi, incidunt cum facilis est.</p>
            <h4>Question 4</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quidem ab perspiciatis error beatae amet culpa sunt, id, officiis laudantium itaque impedit dolores minus facere iusto velit nemo odit repudiandae! Eaque nulla ipsa culpa id quae nemo, voluptatum iure minus.</p>
            <h4>Question 5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate officiis excepturi omnis aut, laboriosam accusamus minus. Quo eligendi ab, ullam cupiditate excepturi eius sequi debitis voluptate minima in vero. Natus doloribus magni porro ut vero dolore nobis, cum fuga cumque.</p>
            <h4>Question 6</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores explicabo incidunt temporibus ullam laudantium tempore illum similique exercitationem iusto dignissimos consectetur officiis vel voluptate, hic quia ut sequi sit non itaque ipsam! Quaerat exercitationem inventore, vitae animi quam odio qui?</p>
        </div>
    
        <?php include "websiteTheme/footerAndScript.php" ?>
        
  </body>
</html>