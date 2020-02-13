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
        $arrayNumber = array();

        for ($index = 0; $index < 10000; $index++) {
            array_push($arrayNumber, mt_rand(0,10000));
        };

        function selectSort($array){
            for ($i=0; $i < count($array)-1; $i++){
                $indexMin = $i;
                for ($index = $i+1; $index < count($array); $index++) {
                    if ($array[$indexMin] > $array[$index]) {
                        $indexMin = $index;
                    };
                }

                //swap
                $temp = $array[$i];
                $array[$i] = $array[$indexMin];
                $array[$indexMin] = $temp;
            }

            return $array;
        }

        require "stopwatch.php";

        $stopWatch = new StopWatch();

        echo ($stopWatch->get_startTime());

        $stopWatch->start();

        selectSort($arrayNumber);

        $stopWatch->stop();

        echo "<br/>Times: ".$stopWatch->getElapsedTime()." miliseconds<br/>";
        print_r(selectSort($arrayNumber));
    ?>
</body>
</html>