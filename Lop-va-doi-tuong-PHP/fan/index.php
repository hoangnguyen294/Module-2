<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require "fan.php";
        $fan1 = new Fan();
        $fan1->setSpeed('FAST');
        $fan1->__set('radius',10);
        $fan1->__set('color','yellow');
        $fan1->__set('on',true);

        $fan2 = new Fan();
        $fan2->setSpeed('MEDIUM');
        $fan2->__set('radius',5);
        $fan2->__set('color','blue');
        $fan2->__set('on',false);

        echo $fan1->toString();
        echo "<br/>";
        echo $fan2->toString();
    ?>
</body>
</html>