<html>

<!-- demo of a jquery autocomplete widget using a php json data source -->

<head>
  <!-- (1) include the jquery css and javascript we need (load them from google urls) -->
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

  <!-- (2) define two jquery functions we need (default input focus, and autocomplete) -->
  <script>
  // (a) put default input focus on the state field
  $(document).ready(function(){
    $('#state').focus();
  });

  // (b) jquery ajax autocomplete implementation
  $(document).ready(function() {
    // tell the autocomplete function to get its data from our php script
    $('#state').autocomplete({
      source: "/upandaway/response.php"
    });
  });
  </script>
</head>

<!-- (3) very basic html body for our example -->
<body>
<label for="state">State:</label>
<input id="state" name="state" />
</body>

</html>