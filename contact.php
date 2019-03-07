<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



  </head>
  <body>
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>
      <script type="text/javascript">
          $(document).ready(function(){
              $('.menu-toggle').click(function(){
                  $('nav').toggleClass('active')
              })
          })
      </script>

    <header>
      <div id="logo"> <a href="index.html"> <img src="simbalogo2.jpg" alt="Studio Simba"> </a>
      </div>
      <nav>
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li><a href="beats.html">Beats</a></li>
          <li><a href="mix.html">Mixes</a></li>
          <li><a href="https://studiosimbablog.wordpress.com">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="fas fa-bars" aria-hidden="true"></i>
      </div>
    </header>

    <div class="contact">



    </div>


  </body>
</html>
