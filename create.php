<!doctype html>
<html lang="en">
<head>
  <title>Assignment 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="images/title_logo.png" type="image" sizes="16x16">
</head>
<body>

<?php include "db.php" ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-logo" href="scp-002.html"><img src="images/logo1.jpg" alt="LOGO" height="50" width="55"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>

        <?php foreach($record as $pgcontent): ?>
        <li>
<a href="index.php?page=<?php echo $pgcontent['pg']; ?>"><?php echo $pgcontent['title']; ?></a>
        </li>
        <?php endforeach; ?>
        <a class="btn btn-info" style="margin-top:6px" href="create.php" role="button">Create New Record</a>
      </ul>
      </div>
  </div>
</nav>


<div class='container-fluid text-center'>    
  <div class='row content'>
    <div class='col-sm-2 sidenav'>
      <a class='button' style='background-color:#5fd1ab;'>Polytechnic Info</a>
      <br><br>
      <div id='div1' style='width:auto;height:auto;display:none;'>
        <i class='fa fa-graduation-cap'></i> Toi Ohomai Institute of Technology
      </div>
      <br>
      <div id='div2' style='width:auto;height:auto;display:none;'>
        <i class='fa fa-envelope'></i> info@toiohomai.ac.nz
      </div>
      <br>
      <div id='div3' style='width:auto;height:auto;display:none;'>
        <i class='fa fa-phone'></i> 0800 86 46 46
      </div>
        </div>



<div class = 'col-sm-8 text-left'>

<h1>Enter Page Information</h1>
<form class="form-group" method="post" action="db.php">
        <label>Page Name</label>
        <input type="text" class="form-control" name="pg" placeholder="Enter Page Name" required>
        <br>

        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
        <br>

        <label>Class</label>
        <input type="text" class="form-control" name="class" placeholder="Enter SCP Class" required>
        <br>

        <label>Image</label>
        <input type="text" class="form-control" name="image" placeholder="Enter Image Address">
        <br>

        <label>Containment Information</label>
        <textarea type="text" class="form-control" name="containment" rows="10" placeholder="Enter containment information" required></textarea>
        <br>

        <label>Description</label>
        <textarea type="text" class="form-control" name="description" rows="10" placeholder="Enter description information" required></textarea>
        <br><br>

        <h2>Additional Information</h2>
        <br>

        <label>Heading 1</label>
        <input type="text" class="form-control" name="h1" placeholder="Enter first heading">
        <br>
        <label>Paragraph 1</label>
        <textarea type="text" class="form-control" name="p1" rows="10" placeholder="Enter first paragraph"></textarea>
        <br>

        <label>Heading 2</label>
        <input type="text" class="form-control" name="h2" placeholder="Enter second heading">
        <br>
        <label>Paragraph 2</label>
        <textarea type="text" class="form-control" name="p2" rows="10" placeholder="Enter second paragraph"></textarea>
        <br>

        <label>Heading 3</label>
        <input type="text" class="form-control" name="h3" placeholder="Enter third heading">
        <br>
        <label>Paragraph 3</label>
        <textarea type="text" class="form-control" name="p3" rows="10" placeholder="Enter third paragraph"></textarea>
        <br>

        <label>Heading 4</label>
        <input type="text" class="form-control" name="h4" placeholder="Enter fourth heading">
        <br>
        <label>Paragraph 4</label>
        <textarea type="text" class="form-control" name="p4" rows="10" placeholder="Enter fourth paragraph"></textarea>
        <br>
        
        <input type="submit" class="btn btn-success" name="submit" value="Submit New Record">
        </form>
        <hr>
</div>

<footer class='site-footer'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-4 col-sm-6 col-xs-12'>
        <p class='copyright-text'>Copyright &copy; 2020 All Rights Reserved
        </p>
      </div>

      <div class='col-md-8 col-sm-6 col-xs-12'>
        <ul class='social-icons'>
          <li><a class='google' href='https://www.google.co.nz/search?ei=P9tKX6_sLpfAz7sPnbSN4Ac&q=scp+foundation&oq=scp+fou&gs_lcp=CgZwc3ktYWIQARgAMgcIABCxAxBDMgQIABBDMgQIABBDMgQIABBDMgIIADICCAAyAggAMgIIADICCAAyAggAOgQIABBHOgoIABCxAxCDARBDOgoILhCxAxCDARBDOgQILhBDUPagCljwpApgya0KaABwAXgAgAGkAYgBggWSAQMwLjSYAQCgAQGqAQdnd3Mtd2l6wAEB&sclient=psy-ab&safe=active&ssui=on'><i class='fa fa-google'></i></a></li>
          <li><a class='pinterest' href='https://www.pinterest.nz/SUNAKO666/scp-foundation/'><i class='fa fa-pinterest'></i></a></li>
          <li><a class='instagram' href='https://www.instagram.com/scpfoundationofficial/?hl=en'><i class='fa fa-instagram'></i></a></li>
          <li><a class='youtube-play' href='https://www.youtube.com/results?search_query=scp+foundation+explained'><i class='fa fa-youtube-play'></i></a></li> 
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src='js/script.js'></script>

</body>
</html>