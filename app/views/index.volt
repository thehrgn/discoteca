<!DOCTYPE html>
<html>
    <head>


      {{ javascript_include("js/jquery-3.3.1.js") }}
      {{ javascript_include("js/semantic.min.js") }}
      {{ javascript_include("js/jquery.dataTables.min.js") }}
      {{ javascript_include("js/dataTables.semanticui.min.js") }}
      
      {{ stylesheet_link("css/semantic.css") }}
      {{ stylesheet_link("css/dataTables.semanticui.min.css") }}

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Discoteca</title>
    </head>
    <body>
        <div class="ui container">
            {{ content() }}
        </div>
    </body>
</html>
