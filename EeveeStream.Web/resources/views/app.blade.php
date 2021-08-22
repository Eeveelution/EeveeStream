<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><!DOCTYPE html>
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
      <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Eevee!Stream!</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link href=" {{ asset("css/app.css") }} " rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="top-bar">
      <p id="title">eevee!stream!</p>
    </div>

    <div class="navbar">
      <style scoped>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 98%;
          background-color: #f1f1f1;
          background-clip: content-box;
        }

        li a {
          display: block;
          color: white;

          padding-top: 8px;


          padding-bottom: 8px;

          text-decoration: none;
          background-color: #404040;
          text-align: center;
        }

        /* Change the link color on hover */
        li a:hover {
          background-color: #555;
          color: white;
        }

        .navbar #space {
          padding-top: 2vmin;
        }
      </style>

      <ul class="navbar">
        <li class="navbar"><a href="leaderboards">Leaderboards</a></li>
        <li class="navbar"><a href="beatmaps">Beatmaps</a></li>
        <li class="navbar"><a href="download">Download</a></li>
        <li class="navbar"><a href="mapsubmit">Map Submissions</a></li>
        <li class="navbar"><a href="info">Information</a></li>
        <li class="navbar" id="space"></li>

        <li class="navbar"><a href="login">Log In</a></li>
        <li class="navbar"><a href="register">Register</a></li>
      </ul>
    </div>

    <div class="content">
      @yield("content")
    </div>
  </div>
</body>
</html>
