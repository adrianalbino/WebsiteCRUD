<!doctype html>
<html lang="en">
  <head>
    
    <?php include "websiteTheme/headerAndLinks.php" ?>

    <style>
        body {
            background-color: black;
            background-image: url(images/error-page-bg.jpeg);
            background-size: cover;
            background-repeat: repeat;
            background-position: center center;
        }
        h1 {
            color: white;
            text-align: center;
            margin-top: 20%;
            margin-bottom: 20%;
            margin-left: auto;
            margin-right: auto;
            font-weight: bold;
        }

        .footer {
            color: white;
            width: 100%;
            text-align: center;
            position: fixed;
            bottom: 0;
        }

        @media only screen and (max-width: 420px) {
            h1{
                margin-top: 30%;
            }
        }
    </style>

    <title>Please fill in the blanks.</title>
  </head>
  <body id="page-top">

    <?php include "websiteTheme/navbar.php" ?>

    <h1>Please fill in the blanks.</h1>


    <div class="footer"><p>Copyright &copy; Communauté de Chant 2022</p></div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
    <script src="js/scripts.js"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
  </body>
</html>