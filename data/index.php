<!doctype html>
<html>
<head> 
    <title>Testing PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<?php
    for($i = 0; $i < 10; $i++)
    {
        echo "test PHP <strong>#" . $i . "</strong>";
        echo "<br>";
    }
    
?>
</body>
</html>