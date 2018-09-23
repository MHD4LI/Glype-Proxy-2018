<!DOCTYPE html>
<html>
<head>
<title><!--[site_name]--></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="stylesheet" type="text/css" href="themes/strap/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<form role="form" action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
<div class="modal fade" id="Mathsoptions" tabindex="-1" role="dialog" aria-labelledby="MathsoptionsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="MathsoptionsLabel">Options</h4>
      </div>
      <div class="modal-body">
        <?php foreach ($toShow as $option) echo '<div class="checkbox"><label data-toggle="tooltip" data-placement="right" title="'.$option['escaped_desc'].'"><input type="checkbox" name="'.$option['name'].'" id="'.$option['name'].'"'.$option['checked'].'> '.$option['title'].'</label></div>'; ?>
      </div>
    </div>
  </div>
</div>
<div class="jumbotron">
	<div class="container">

		<div class="text-danger"><!--[error]--></div>
		<button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#Mathsoptions"><span class="glyphicon glyphicon-wrench"></span></button>
    <img class="img-responsive center-block" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">
		<div class="form-group">
		    <label for="input" class="url">Enter URL</label>
		    <input type="url" name="u" id="input" class="form-control" placeholder="http(s)://" required autofocus>
    <br>
    <div class="text-center">
      <p1>Take your Privacy to the next level</p1>
    </div>
    </div>
	</div>
</div>
<div class="container">
	<p class="text-center"><!--[ad]--></p>
  <!--<img class="img-responsive center-block" width="468" height="60" src="https://www.fosterparentcollege.com/info/FullBanner.jpg">-->
	<p class="hide"> <a href="http://www.glype.com/">0</a></p>
</div>
</form>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
$('#Mathsoptions label').tooltip();
</script>
</body>
</html>
