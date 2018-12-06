<?php 
require_once 'Classes/Database.php';

$db = new Database();

// $stmt = $db->sqlite->prepare('INSERT INTO posts(title, img, content, date) VALUES(:title, :img, :content, :date)');

// $stmt->bindParam(':title', $title);
// $stmt->bindParam(':img', $img);
// $stmt->bindParam(':content', $content);
// $stmt->bindParam(':date', $date);

// $title = 'Заголовок';
// $img = 'https://www.google.ru/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjayt3OrcTeAhVjkosKHcuBBY8QjRx6BAgBEAU&url=http%3A%2F%2Fqnimate.com%2Funderstanding-html-img-tag%2F&psig=AOvVaw0PQ1sA4A61Zyi2BXlmi_t-&ust=1541751382496152';
// $content = 'Контент';
// $date = '8.11.18';

// $stmt->execute();

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>hizhizhiz's blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <style>
      body {
        font-size: 20px;
        color: #212529;
        font-family: 'Lora', 'Times New Roman', serif;
      }

      p {
        line-height: 1.5;
        margin: 30px 0;
      }

      p a {
        text-decoration: underline;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-weight: 800;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      }

      a {
        color: #212529;
        -webkit-transition: all 0.2s;
        transition: all 0.2s;
      }

      a:focus, a:hover {
        color: #0085A1;
      }

      blockquote {
        font-style: italic;
        color: #868e96;
      }

      .section-heading {
        font-size: 36px;
        font-weight: 700;
        margin-top: 60px;
      }

      .caption {
        font-size: 14px;
        font-style: italic;
        display: block;
        margin: 0;
        padding: 10px;
        text-align: center;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
      }

      ::-moz-selection {
        color: #fff;
        background: #0085A1;
        text-shadow: none;
      }

      ::selection {
        color: #fff;
        background: #0085A1;
        text-shadow: none;
      }

      img::-moz-selection {
        color: #fff;
        background: transparent;
      }

      img::selection {
        color: #fff;
        background: transparent;
      }

      img::-moz-selection {
        color: #fff;
        background: transparent;
      }

      #mainNav {
        position: absolute;
        border-bottom: 1px solid #e9ecef;
        background-color: white;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      }

      #mainNav .navbar-brand {
        font-weight: 800;
        color: #343a40;
      }

      #mainNav .navbar-toggler {
        font-size: 12px;
        font-weight: 800;
        padding: 13px;
        text-transform: uppercase;
        color: #343a40;
      }

      #mainNav .navbar-nav > li.nav-item > a {
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
      }

      @media only screen and (min-width: 992px) {
        #mainNav {
          border-bottom: 1px solid transparent;
          background: transparent;
        }
        #mainNav .navbar-brand {
          padding: 10px 20px;
          color: #fff;
        }
        #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
          color: rgba(255, 255, 255, 0.8);
        }
        #mainNav .navbar-nav > li.nav-item > a {
          padding: 10px 20px;
          color: #fff;
        }
        #mainNav .navbar-nav > li.nav-item > a:focus, #mainNav .navbar-nav > li.nav-item > a:hover {
          color: rgba(255, 255, 255, 0.8);
        }
      }

      @media only screen and (min-width: 992px) {
        #mainNav {
          -webkit-transition: background-color 0.2s;
          transition: background-color 0.2s;
          /* Force Hardware Acceleration in WebKit */
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
          -webkit-backface-visibility: hidden;
        }
        #mainNav.is-fixed {
          /* when the user scrolls down, we hide the header right above the viewport */
          position: fixed;
          top: -67px;
          -webkit-transition: -webkit-transform 0.2s;
          transition: -webkit-transform 0.2s;
          transition: transform 0.2s;
          transition: transform 0.2s, -webkit-transform 0.2s;
          border-bottom: 1px solid white;
          background-color: rgba(255, 255, 255, 0.9);
        }
        #mainNav.is-fixed .navbar-brand {
          color: #212529;
        }
        #mainNav.is-fixed .navbar-brand:focus, #mainNav.is-fixed .navbar-brand:hover {
          color: #0085A1;
        }
        #mainNav.is-fixed .navbar-nav > li.nav-item > a {
          color: #212529;
        }
        #mainNav.is-fixed .navbar-nav > li.nav-item > a:focus, #mainNav.is-fixed .navbar-nav > li.nav-item > a:hover {
          color: #0085A1;
        }
        #mainNav.is-visible {
          /* if the user changes the scrolling direction, we show the header */
          -webkit-transform: translate3d(0, 100%, 0);
          transform: translate3d(0, 100%, 0);
        }
      }

      header.masthead {
        margin-bottom: 50px;
        background: no-repeat center center;
        background-color: #868e96;
        background-attachment: scroll;
        position: relative;
        background-size: cover;
      }

      header.masthead .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: #212529;
        opacity: 0.5;
      }

      header.masthead .page-heading,
      header.masthead .post-heading,
      header.masthead .site-heading {
        padding: 200px 0 150px;
        color: white;
      }

      @media only screen and (min-width: 768px) {
        header.masthead .page-heading,
        header.masthead .post-heading,
        header.masthead .site-heading {
          padding: 200px 0;
        }
      }

      header.masthead .page-heading,
      header.masthead .site-heading {
        text-align: center;
      }

      header.masthead .page-heading h1,
      header.masthead .site-heading h1 {
        font-size: 50px;
        margin-top: 0;
      }

      header.masthead .page-heading .subheading,
      header.masthead .site-heading .subheading {
        font-size: 24px;
        font-weight: 300;
        line-height: 1.1;
        display: block;
        margin: 10px 0 0;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      }

      @media only screen and (min-width: 768px) {
        header.masthead .page-heading h1,
        header.masthead .site-heading h1 {
          font-size: 80px;
        }
      }

      header.masthead .post-heading h1 {
        font-size: 35px;
      }

      header.masthead .post-heading .meta,
      header.masthead .post-heading .subheading {
        line-height: 1.1;
        display: block;
      }

      header.masthead .post-heading .subheading {
        font-size: 24px;
        font-weight: 600;
        margin: 10px 0 30px;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      }

      header.masthead .post-heading .meta {
        font-size: 20px;
        font-weight: 300;
        font-style: italic;
        font-family: 'Lora', 'Times New Roman', serif;
      }

      header.masthead .post-heading .meta a {
        color: #fff;
      }

      @media only screen and (min-width: 768px) {
        header.masthead .post-heading h1 {
          font-size: 55px;
        }
        header.masthead .post-heading .subheading {
          font-size: 30px;
        }
      }

      .post-preview > a {
        color: #212529;
      }

      .post-preview > a:focus, .post-preview > a:hover {
        text-decoration: none;
        color: #0085A1;
      }

      .post-preview > a > .post-title {
        font-size: 30px;
        margin-top: 30px;
        margin-bottom: 10px;
      }

      .post-preview > a > .post-subtitle {
        font-weight: 300;
        margin: 0 0 10px;
      }

      .post-preview > .post-meta {
        font-size: 18px;
        font-style: italic;
        margin-top: 0;
        color: #868e96;
      }

      .post-preview > .post-meta > a {
        text-decoration: none;
        color: #212529;
      }

      .post-preview > .post-meta > a:focus, .post-preview > .post-meta > a:hover {
        text-decoration: underline;
        color: #0085A1;
      }

      @media only screen and (min-width: 768px) {
        .post-preview > a > .post-title {
          font-size: 36px;
        }
      }

      .floating-label-form-group {
        font-size: 14px;
        position: relative;
        margin-bottom: 0;
        padding-bottom: 0.5em;
        border-bottom: 1px solid #dee2e6;
      }

      .floating-label-form-group input,
      .floating-label-form-group textarea {
        font-size: 1.5em;
        position: relative;
        z-index: 1;
        padding: 0;
        resize: none;
        border: none;
        border-radius: 0;
        background: none;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        font-family: 'Lora', 'Times New Roman', serif;
      }

      .floating-label-form-group input::-webkit-input-placeholder,
      .floating-label-form-group textarea::-webkit-input-placeholder {
        color: #868e96;
        font-family: 'Lora', 'Times New Roman', serif;
      }

      .floating-label-form-group label {
        font-size: 0.85em;
        line-height: 1.764705882em;
        position: relative;
        z-index: 0;
        top: 2em;
        display: block;
        margin: 0;
        -webkit-transition: top 0.3s ease, opacity 0.3s ease;
        transition: top 0.3s ease, opacity 0.3s ease;
        vertical-align: middle;
        vertical-align: baseline;
        opacity: 0;
      }

      .floating-label-form-group .help-block {
        margin: 15px 0;
      }

      .floating-label-form-group-with-value label {
        top: 0;
        opacity: 1;
      }

      .floating-label-form-group-with-focus label {
        color: #0085A1;
      }

      form .form-group:first-child .floating-label-form-group {
        border-top: 1px solid #dee2e6;
      }

      footer {
        padding: 50px 0 65px;
      }

      footer .list-inline {
        margin: 0;
        padding: 0;
      }

      footer .copyright {
        font-size: 14px;
        margin-bottom: 0;
        text-align: center;
      }

      .btn {
        font-size: 14px;
        font-weight: 800;
        padding: 15px 25px;
        letter-spacing: 1px;
        text-transform: uppercase;
        border-radius: 0;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
      }

      .btn-primary {
        background-color: #0085A1;
        border-color: #0085A1;
      }

      .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
        color: #fff;
        background-color: #00657b !important;
        border-color: #00657b !important;
      }

      .btn-lg {
        font-size: 16px;
        padding: 25px 35px;
      }
    </style>
  </head>

  <body>
    <!-- Navigation -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">hizhizhiz</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>hizhizhiz's</h1>
              <span class="subheading">Simple Blog</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">        
        <?php
        // $res = $db->sqlite->query('SELECT * FROM posts');
        // foreach ($res as $row)
        // {
        //     echo '<div class="row">
        //             <div class="col-lg-8 col-md-10 mx-auto">
        //                 <div class="post-preview">
        //                     <a href="post.html">';
        //                 echo '<h2 class="post-title">'.$row['title'].'</h2>';
        //                 echo '<img src=' . $row['img'] . '>';
        //                 echo '<h3 class="post-subtitle">'.$row['content'].'</h3>';
        //     echo '</a><p class="post-meta">Posted by <a href="#">Admin</a> on '.
        //             $row['date'].'</p></div></div></div> <hr>';
        // } 
        ?>            
        <!-- Pager -->
        <?php  
          $limit = 2;

          if (isset($_GET['page']))
          {
            $page = $_GET['page'];
          } else {
            $page = 1;
          }

          $startFrom = ($page - 1) * $limit;

          $stmt = $db->sqlite->prepare("SELECT * FROM posts ORDER BY title ASC LIMIT $startFrom, $limit");
          $stmt->execute();

          foreach ($stmt as $row)
          {
              echo '<div class="row">
                      <div class="col-lg-8 col-md-10 mx-auto">
                          <div class="post-preview">
                              <a href="post.html">';
                          echo '<h2 class="post-title">'.$row['title'].'</h2>';
                          echo '<img src=' . $row['img'] . '>';
                          echo '<h3 class="post-subtitle">'.$row['content'].'</h3>';
              echo '</a><p class="post-meta">Posted by <a href="#">Admin</a> on '.
                      $row['date'].'</p></div></div></div> <hr>';
          } 
        ?>
        <div class="clearfix">
          <!-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
          <?php  
            $res = $db->sqlite->prepare('SELECT COUNT(id) FROM posts');
            $res->execute();

            var_dump($res);
          ?>
        </div>
    </div>
    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                    <img src="img/git.png" height="50" width="50">
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; hizhizhiz 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
