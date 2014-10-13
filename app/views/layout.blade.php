<html>
<head>
<title>Tzahi Laravel Site</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

    <body>
      <div class="container">

            <!-- dynamic header -->
            <div class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <div class="navbar-header">

                  <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span> Tzahi Laravel Test</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="/login"><span class="glyphicon glyphicon-star"></span> Login</a></li>
                    <li><a href="/register"><span class="glyphicon glyphicon-plus"></span> Register</a></li>
                    <li><a href="/profile"><span class="glyphicon glyphicon-thumbs-up"></span> Profile</a></li>
                    <li><a href="/add_article"><span class="glyphicon glyphicon-paperclip"></span> Add New Article</a></li>
                    <li><a href="/edit"><span class="glyphicon glyphicon-pencil"></span> Edit User</a></li>
                  </ul>

                </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
            </div>
      </div>
        @yield('content')
    </body>
</html>