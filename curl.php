<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
$output =  shell_exec("bash.sh");
echo "<pre>$output</pre>";
?>
</body>
</html>
