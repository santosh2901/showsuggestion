<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>showsuggestion textbox using jQuery and PHP</title>
  <link rel="stylesheet" href="//jquery-ui.css">
  <script src="//jquery-1.10.2.js"></script>
  <script src="//jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#txthint" ).autocomplete({
      source: 'showsuggestion.php'
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="text">Skills: </label>
  <input id="txthint">
</div>
</body>
</html>