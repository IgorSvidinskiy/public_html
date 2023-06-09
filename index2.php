<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="bootstrap/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <div class="containerfluid">
        <nav role="navigation" class="navbar navbar-inverse">
            <div class="container">
              <div class="row">
              <div class="navbar-header header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="col-li-12">
                  <h1><a href="index2.html">CinemaMonster</a></h1>
                  <p>Cinema - is our passion</p>
                </div>
              </div>
            </div> 
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
              <ul class="nav nav-pills">
                <li class="active"><a href="index2.html">Main</a></li>
                <li><a href="showb.html">Films</a></li>
                <li><a href="#">Serials</a></li>
                <li><a href="#">Film's rating</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="wrapper">
      <div class="container">
        <div class="col-lg-3" col-lg-pull-9>
          <div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">Search</div></div>
            <div class="panel-body">
              <form role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input type="search" class="form-control input-lg" placeholder="type to search">
                    <div class="input-group-btn">
                      <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search">
                      </i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">Sign In</div></div>
            <div class="panel-body">
              <form role="form" method="post" action="login.php">
                <div class="form-group">
                  <input type="text" id="username" class="form-control input-lg" placeholder="login"></input>
                </div>
                <div class="form-group">
                  <input type="password" id="password" class="form-control input-lg" placeholder="password"></input>
                </div>
                <button type="submit" class="btn btn-warning pull-right">Log In</button>
                <a href="registration.php" class="btn btn-info">Регистрация</a>
              </form>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">News</div></div>
            <div class="panel-body">
              <form role="form">
                <h3 class="text">Today's date</h3>
                <p>We've updated</p>
              </form>
            </div>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">Film's rating</div></div>
            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item list-group-warning">
                  <span class="badge">9.31</span>
                  <a href="showb.html">Black Hawk Down</a>
                </li>
                <li class="list-group-item list-group-warning">
                  <span class="badge">7.5</span>
                  <a href="showb2.html">The matrix</a>
                </li>
                <li class="list-group-item list-group-warning">
                  <span class="badge">7.3</span>
                  <a href="showb3.html">Snowden</a>
                </li>
                <li class="list-group-item list-group-warning">
                  <span class="badge">8.1</span>
                  <a href="showb4.html">Free guy</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-li-9 col-lg-push-3">
            <h2>New Films</h2>
            <hr>
            <div class="row">
              <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                <img src="imgs/black hawk down.jpg" alt="Black Hawk down">
                <div class="film_label">Black Hawk down</div>
              </div>
              <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                <img src="imgs/the matrix.jpg" alt="The matrix">
                <div class="film_label">The matrix</div>
              </div>
              <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                <img src="imgs/Снимок.JPG" alt="Snowden">
                <div class="film_label">Snowden</div>
              </div>
              <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                <img src="imgs/A main hero.jpg" alt="Free guy">
                <div class="film_label">Free guy</div>
              </div>
              </div>
              <div class="margin-8"></div>
              <div class="col-li-9 col-lg-push-3">
                <h2>New Serials</h2>
                <hr>
                <div class="row">
                  <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                    <img src="imgs/818TrulDKmL._AC_SL1500_.jpg" alt="Sopranos">
                    <div class="film_label">Sopranos</div>
                  </div>
                  <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                    <img src="imgs/Без названия.jpg" alt="Alf">
                    <div class="film_label">Alf</div>
                  </div>
                  <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                    <img src="" alt="">
                    <div class="film_label"></div>
                  </div>
                  <div class="films_block col-lg-3 col-md-3 col-ms-3 col-xs-6">
                    <img src="" alt="">
                    <div class="film_label"></div>
                  </div>
                  </div>
                </div>
              <div class="margin-8"></div>
              <a href="#">How was filming "Black Hawk down"?</a>
              <hr>
              <p>
                Sir Ridley Scott is a British film director and film producer.
                Creator of many acclaimed films such as Alien (1979), Blade Runner (1982), G.I. Jane (1997),
                Gladiator (2000), Hannibal (2001), Kingdom of Heaven ( 2005), Gangster (2007), Robin Hood (2010),
                Prometheus (2012), Exodus: Gods and Kings (2014), The Martian (2015), House of Gucci (2021).
                Older brother of director and producer Tony Scott.
                Winner of the Cannes Film Festival Award for Best Debut,
                winner and five-time nominee for the BAFTA award, four-time nominee for awards.
              </p>
              <a href="#" class="btn btn-warning pull-right">Read</a>
              <div class="margin-8 clear"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <footer>
      <div class="container">
        <p class="text-center"><a href="/">About author</a></p>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/assets/js/bootstrap.min.js"></script>
  </body>
</html>