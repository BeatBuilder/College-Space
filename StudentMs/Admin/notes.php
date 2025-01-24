<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <a class="navbar-brand">Notes</a>
    </div>
  </nav>
  <div class="col-md-3"></div>
  <div class="col-md-6 well">
    <h3 class="text-primary">Upload File</h3>
    <hr style="border-top:1px dottec #ccc;">
    <form class="form-inline" method="POST" action="upload.php" enctype="multipart/form-data">
      <input class="form-control" type="file" name="upload"/>
      <button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
    </form>
    <br /><br />
    
<li class="nav-item"> <a class="nav-link" href="downloads-notes.php">Download</a></li>


  </div>
</body>
</html>