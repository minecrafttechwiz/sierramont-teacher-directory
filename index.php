<!DOCTYPE html>
<html>
  <head>
  <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
    <link rel="manifest" href="/manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
      setInterval(function() {
        console.log("Good.");
        $.get("codeGen.php");
      }, 5000);
      function getCode() {
        $.get("code.txt", function(data) {
          alert(data);
        });
      }
 
    </script>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <style>
      html {
        background-color: blue;
      }
      select {
        border: 0;
      }
      h2, h1, h3 {
        font-family: Cursive;
        color: gold;
      }
      p {
        font-family: Lobster;
      }
      @media (orientation: portrait) {
  body {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
  }
}
    </style>
  </head>
  <body>
    <img class="loading" src="loading.gif"></img>
    <h1 class="loading">Loading the Sierramont Teacher Directory</h1>
    <p class="loading">Thank you for your patience.</p>
    <button onclick="window.location.href='login.php'" class="done">Admin Log In</button>
    <h1 class="done">Sierramont Teacher Directory</h1>
    <p class="done">Please select a teacher.</p>
    <select id="teachers" onchange="teacherPageLoad()" class="done"></select>
    <div id="display" class="done"></div>
    <h3 class="done">Locations</h3>
    <canvas id="map" width="1000" height="1000" class="done"></canvas>
    <script src="main.js"></script>
  </body>
</html>
