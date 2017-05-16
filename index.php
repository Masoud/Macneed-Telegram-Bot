<html>
   <head>
      <title>
         MacNeed | Telegram Bot
      </title>
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://lib.arvancloud.com/ar/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://lib.arvancloud.com/ar/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="container topContainer">
         <form action="/postToTelegram.php" method="get">
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                  <label for="basic-url">Your URL form Macneed</label>
                  <div class="input-group">
                     <span class="input-group-addon" id="basic-addon3"><span class="glyphicon glyphicon-paperclip"></span></span>
                     <input name="URL" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                  </div>
            </div>
            <div class="col-md-3"></div>
         </div>
         <div class="row secondRow">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <label class="radio-inline"><input type="radio" name="category" value="app" checked>App Category</label>
                <label class="radio-inline"><input type="radio" name="category" value="learn">Help Category</label>
            </div>
            <div class="col-md-3"></div>
         </div>
         <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-default btn-lg">
                Send To Your Telegram Channel
                </button>
            </div>
            <div class="col-md-3"></div>
         </div>
         </form>
      </div>
   </body>
</html>
