<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function checkStatic(){
        static $x = 0;
        $x++;
        print "unset前:｛$x}";
        unset($x);
        $x=13;
        print "unset後:｛$x}";
    }
    checkStatic();
    checkStatic();
    ?>
</body>
</html>