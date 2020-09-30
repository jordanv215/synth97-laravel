
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Synth 97</title>
  </head>
  <body>
    <!-- this will escape quotes so the user cant trigger a script from the url like http://127.0.0.1:8000/playground/?name=%3Cscript%3Ealert(%27?%27);%3C/script%3E -->
    <h1>{{ $name }}</h1>
  </body>
</html>

