<?php
  // Default language
  $lang = "en";
  // Retrieve language by GET in url (index.php?lang=xx where xx = choosen language)
  if(isset($_GET['lang'])){ 
    $lang = $_GET['lang']; 
  } 
  require_once("lang/lang.".$lang.".php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Boris Tronquoy - Self-Taught</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dist/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/animate.css">
    <link href="dist/css/hover.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
  	<header>
      <div class="container">
          <!-- logo & nav link -->
    		<div class="row">
    					<div class="col-3"><div class="logo-text"><i class="fa fa-code logo-magic fa-2x fa-fw" aria-hidden="true"></i> </div></div>
                <div class="col-6 menu animated rubberBand">
                  <a data-scroll href="#skills" class="hvr-float hvr-underline-from-center"><?php echo $language["SKILLS"]; ?></a> |
                  <a data-scroll href="#projects" class="hvr-float hvr-underline-from-center"><?php echo $language["PROJECTS"]; ?></a> |
                  <a data-scroll href="#contact" class="hvr-float hvr-underline-from-center"><?php echo $language["CONTACT"]; ?></a>
                </div>
              <div class="col-3 menu">
                  <a href="index.php?lang=en"><img src="dist/imgs/en.png"></a>
                  <a href="index.php?lang=fr"><img src="dist/imgs/fr.png"></a>
                  <a target="_blank" href="https://github.com/btronquo" class="hvr-bounce-in"><i class="fa fa-github fa-2x fa-fw animated flip" aria-hidden="true"></i></a>
                  <a href="mailto:b.tronquoy@gmail.com" class="hvr-bounce-in"><i class="fa fa-envelope-o fa-2x fa-fw animated flip" aria-hidden="true"></i></a>
              </div>
    			</div>
          <!-- ./ logo & nav link -->
          <!-- Header Prez title -->
          <div class="row header-info">
            <div class="col-6 offset-3">
              <h3 class="animated fadeIn"><?php echo $language["HEADERTITLE"]; ?></h3>
              <h1 class="animated fadeIn">Boris Tronquoy</h1>
              <h3 class="animated bounce"><?php echo $language["HEADERUNDER"]; ?></h3><span class="badge badge-pill badge-primary"><?php echo $language["HEADERMINI"]; ?></span>
            </div>
          </div>
          <!-- ./ Header Prez title -->
  	    </div> <!-- ./ container -->
  	</header>

    <div class="mouse-icon hidden-xs">
    <div class="scroll"></div>
    </div>

    <section id="section2">
    <span id="skills"></span>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-2">
            <hr class="line">
            <h1><?php echo $language["SECTION2_SKILLS"]; ?></h1>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
          <img class="rounded img-thumbnail" src="http://via.placeholder.com/250x250/1C1D2E">
          <div class = "caption">
            <h3><?php echo $language["SECTION2_POST_WEBDEV"]; ?></h3>
            <p>
            <span class="badge badge-pill badge-primary">NodeJS</span>
            <span class="badge badge-pill badge-primary">PHP 5+</span>
            <span class="badge badge-pill badge-primary">MySQL</span>
            <span class="badge badge-pill badge-primary">MongoDB</span>
            </p>
          </div>
          </div>
          <div class="col-md-4">
          <img class="rounded img-thumbnail" src="http://via.placeholder.com/250x250/1C1D2E">
          <div class = "caption">
            <h3><?php echo $language["SECTION2_POST_SOFT"]; ?></h3>
            <p>
            <span class="badge badge-pill badge-success">Centos7</span>
            <span class="badge badge-pill badge-success">Unbuntu</span>
            <span class="badge badge-pill badge-success">Android</span>
            <span class="badge badge-pill badge-success">MongoDB</span>
            </p>
          </div>
          </div>
          <div class="col-md-4">
            <img class="rounded img-thumbnail" src="http://via.placeholder.com/250x250/1C1D2E">
            <div class = "caption">
              <h3><?php echo $language["SECTION2_POST_TOOLS"]; ?></h3>
              <p>
              <span class="badge badge-pill badge-default">Github</span>
              <span class="badge badge-pill badge-default">Sublime Text</span>
              <span class="badge badge-pill badge-default">Terminal</span>
              <span class="badge badge-pill badge-default">Google(:P)</span>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
          <hr>
            <h2 class="text-center"><?php echo $language["SECTION2_MINITITLE"]; ?></h2>

          </div>
          <div class="col-md-4">
            <h6><b>WebSide</b></h6>
              Create Bootstrap Website<br>
              Create  NodeJS WebApp<br>
              Use Database such as MySQL / MongoDB<br>
          </div>
          <div class="col-md-4">
             <h6><b>WebSide</b></h6>
              Create Bootstrap Website<br>
              Create  NodeJS WebApp<br>
              Use Database such as MySQL / MongoDB<br>
          </div>
          <div class="col-md-4">
            <h6><b>WebSide</b></h6>
              Create Bootstrap Website<br>
              Create  NodeJS WebApp<br>
              Use Database such as MySQL / MongoDB<br>
          </div>
        </div>
      </div>
        <!-- ./ row -->
      <!-- ./container -->
      </div>
    </section>




   <section id="section3">
    <span id="contact"></span>
      <div class="container">
        <div class="row">
          <div class="col-8 offset-2">
          <hr class="line">
            <h1><?php echo $language["SECTION3_TITLE"]; ?></h1>
            <p><?php echo $language["SECTION3_STITLE"]; ?></p>
            <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label"><?php echo $language["SECTION3_FORM_EMAIL"]; ?></label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="<?php echo $language["SECTION3_FORM_EMAIL_PH"]; ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label"><?php echo $language["SECTION3_FORM_SUBJECT"]; ?></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" placeholder="<?php echo $language["SECTION3_FORM_SUBJECT_PH"]; ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                <label for="exampleTextarea" class="col-sm-2 col-form-label"><?php echo $language["SECTION3_FORM_MESSAGE"]; ?></label>
                <div class="col-sm-10">
                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="<?php echo $language["SECTION3_FORM_MESSAGE_PH"]; ?>" required></textarea>
                </div>
              </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
          <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo $language["SECTION3_FORM_SEND"]; ?></button>
                  </div>
                </div>
              </form>
          </div>
        <!-- ./ row -->
        </div>

        <div class="col-12">
        <hr>
          <p class="copyright"><?php echo $language["COPYRIGHT"]; ?></p>
        </div>

      <!-- ./container -->
      </div>
    </section>





    <script src="dist/js/smooth-scroll.js"></script>
    <script> smoothScroll.init(); </script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
