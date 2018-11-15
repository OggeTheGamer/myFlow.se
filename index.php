<!DOCTYPE html>
<html>
  <head>
    <title>myFlow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="scripts/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css"></link>
    <source src="src-image"></source>
    <source src="src-image/Post-Images"></source>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark fixed-top">
      <a class="navbar-brand" href="#top" data-toggle="tooltip" title="To the top!">
        <img src="src-image/logo.png" alt="logo" style="width:40px;">
      </a>
      <div style="">
        <form class="form-inline" action="">
          <input id="postSearchBar" class="form-control mr-sm-2" data-toggle="tooltip" title="Search for a Date or Title!" type="text" onkeyup="postSearch()" placeholder="Search for a post!">
        </form>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <div class="button-css">
            <a type="button" class="nav-link navbar-button btn-primary" data-toggle="tooltip" title="I DO NOT GO ANYWARE! (-_-)" href="index.php">(-_-)</a>
          </div>
        </li>
        <li class="nav-item">
          <div class="button-css">
            <a type="button" class="nav-link navbar-button btn-primary" data-toggle="tooltip" title="An amazing organisation Im working with :)" href="https://www.brainpoolsweden.com/">Brainpool</a>
          </div>
        </li>
        <li class="nav-item">
          <div class="button-css">
            <a type="button" class="nav-link navbar-button btn-primary" data-toggle="modal" data-target="#FAQModal" href="#FAQModal" >FaQ</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- <li hidden><a href="#"></a></li> -->
    <!--This div is a blogpost-->
    <ul id="blogPosts">
      <li><a style="overflow:auto;"hidden href="#top">top hello</a>
        <div id="top" class="container-fluid mt-2 col-md-12 bg-dark content">
          <span>
            <h1 id="postTitle">Hello!</h1>
            <h3>And Welcome</h3>
            <br>
            <p>This is my bloging/picture/shitposting site<br>So i hope you will enjoy your stay!</p>
          </span>
        </div>
      </li>
      <?php
      $servername = 'localhost:3306';
      $username = '18osfr';
      $password = "Ogge020313";
      $dbname = '18osfr';

      $li = MySQLi_connect("$servername", "$username", "$password", "$dbname") or die ("MySQL: Anslutning misslyckades!");
      $query = "SELECT * FROM `myFlow_DB` ORDER BY `myFlow_DB`.`post_date` DESC";
      $result = mysqli_query($li, $query);

  if($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        //$id=$row['id'];
        $post_title=$row['post_title'];
        $post_date=$row['post_date'];
        $post_content=$row['post_content'];

              echo('<li>
                <div id="top" class="container-fluid mt-2 col-md-12 bg-dark content">
                  <span>
                    <h1 class="postTitle">'.$post_title.'</h1>
                    <h3 class="postDate">'.$post_date.'</h3>
                    <br>
                    '.$post_content.'
                  </span>
                </div>
              </li>');
        }
      }

      ?>

    </ul>
        <!-- Modal -->
    <div class="modal fade" id="FAQModal" tabindex="-1" role="dialog" aria-labelledby="FAQModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="FAQModalLabel">Frequently Asked Questions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <span>I don't really get a lot of questions...</span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <footer>

  </footer>
</html>
