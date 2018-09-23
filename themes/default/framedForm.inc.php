<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'><style type="text/css">
   /* Make room for the mini-form */
   html body { margin-top: 60px; }
   
   /* Reset all styles */
   #include * {
      text-align: left;
      border: 0; padding: 0; margin: 0;
      color: #eee;
      font-weight: normal;
      background: transparent;
      text-decoration: none;
      display: inline;
	  
   }
   #include p {
      margin: 4px 0 0 10px;
      display: block;
   }
   #include b {
      font-weight: bold;
   }
   #include script {
      display:none;
   }
   
   /* Style the mini-form div */
   #include {
      border-top: 3px solid #568AF2;
      border-bottom: 3px solid #568AF2;
      background: #282C34;
      position: absolute;
      top:0; left:0;
      width: 100%;
      height: 50px;
      z-index: 100000;
   }
   
   /* Mini-form elements */
   #include a {
      color: #568AF2;
   }
   #include a:hover {
      color: #568AF2;
   }
   #include .url-input {
      padding: 2px;
      background: #21252B;
      border: 1px solid #568AF2;
	  color: #ffffff;
   }
   #include .url-input:focus {
      background: #fff;
      border: 1px solid #568AF2;
	  color: #000000
	  
   }
   #include .url-button {
      font-weight: bold;
      border-style: outset;
      font-size: 11px;
      line-height: 10px;
	  color: #ffffff;
   }
   
   #include .url-button {
	background-color:transparent;
	border:1px solid #337fed;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:5px 24px;
	text-decoration:none;
}

.fa{
font-size: 20px;
}
</style>
<div id="include">
<?php
// Print form using variables (saves repeatedly opening/closing PHP tags)
// Edit as if normal HTML but escape any dollar signs
echo <<<OUT
   <form action="{$proxy}/includes/process.php?action=update" target="_top" method="post" onsubmit="return updateLocation(this);">

      <p>
         
         <b>URL:</b>
         <input type="text" name="u" size="40" value="{$url}" class="url-input" style="width:50%;" />
         <input type="submit" value="Go" class="url-input url-button" />
        
         <a href="{$proxy}/index.php" target="_top"><i class="fa fa-home"></i></a>
         [<a href="{$proxy}/includes/process.php?action=clear-cookies&return={$return}" target="_top">clear cookies</a>]
         
      </p>
      
      <p>
         <b>Options:</b>
OUT;

// Loop through the options and print with appropriate checkedness
foreach($toShow as $details) { 
   echo <<<OUT
         <input type="checkbox" name="{$details['name']}" id="{$details['name']}"{$details['checked']} />
         <label for="{$details['name']}">{$details['title']}</label>

OUT;
}
?>
      </p>
      
   </form>

</div>

<!--[proxied]-->