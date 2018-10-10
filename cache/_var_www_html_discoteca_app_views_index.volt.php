<!DOCTYPE html>
<html>
    <head>


      <?= $this->tag->javascriptInclude('js/jquery-3.3.1.js') ?>
      <?= $this->tag->javascriptInclude('js/semantic.min.js') ?>
      <?= $this->tag->javascriptInclude('js/jquery.dataTables.min.js') ?>
      <?= $this->tag->javascriptInclude('js/dataTables.semanticui.min.js') ?>
      
      <?= $this->tag->stylesheetLink('css/semantic.css') ?>
      <?= $this->tag->stylesheetLink('css/dataTables.semanticui.min.css') ?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Discoteca</title>
    </head>
    <body>
        <div class="ui container">
            <?= $this->getContent() ?>
        </div>
    </body>
</html>
