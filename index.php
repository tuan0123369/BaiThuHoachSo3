<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Directory Contents</title>
  <link rel="stylesheet" href=".style.css">
  <script src=".sorttable.js"></script>
</head>

<body>


<?php
$directory = ".";

  if ($opendirectory = opendir($directory)){
    while (($file = readdir($opendirectory)) !== false){

	if (is_dir($file))
{
	echo "<h1><a href='$file'>$file</a>" . "<br>";
}
}

}

?>
  
</body>

</html>
