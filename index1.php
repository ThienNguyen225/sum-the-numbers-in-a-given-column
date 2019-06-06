<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $column = $_POST["inputValue"];
    $array = array(
        [1, 1, 2, 3, 5],
        [3, 5, 1, 0, 8],
        [3, 5, 6, 1, 2],
        [3, 8, 3, 9, 1],
        [2, 4, 5, 0, 3],
        [3, 2, 3, 9, 10]
    );

    function sumColumnInArray($column, $array)
    {
        $sum = 0;
        for ($index = 0; $index < count($array); $index++) {
            for ($key = 0; $key < count($array[$index]); $key++) {
                if ($key == $column) {
                    $sum += $array[$index][$key];
                }
            }
        }
        return $sum;
    }

    echo "Sum of element in Column " . $column . " is " . sumColumnInArray($column, $array);
//    $inputNumber = $_POST['inputValue'];
//    $array = array(
//        [1, 1, 2, 3, 5],
//        [3, 5, 1, 0, 8],
//        [3, 5, 6, 1, 2],
//        [3, 8, 3, 9, 1],
//        [2, 4, 5, 0, 3],
//        [3, 2, 3, 9, 10]
//    );
//    function sumColumnInArray($column, $array){
//        $sum = 0;
//        for ($i = 0; $i < count($array); $i++){
//            for ($j = 0; $j < count($array[$i]); $j++){
//                if ($j == $column){
//                    $sum += $array[$i][$j];
//                }
//            }
//        }
//        return $sum;
//    }
//    echo "Sum of element in Column ".$inputNumber." is ".sumColumnInArray($inputNumber, $array);

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Tính tổng các số ở một cột xác định</title>
    <style>
        form {
            margin-left: 35%;
        }

        h2 {
            margin-left: 30%;
            color: blue
        }

        .display {
            width: 335px;
            height: 120px;
            margin: 0;
            padding: 10px;
            border: 2px #dd33dd solid;
        }

        input[type=submit] {
            margin-left: 10%;
            width: 70%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Calculation</h2>
        <fieldset>
            Enter the column number:
            <input type="number" name="inputValue" placeholder="Enter Column">
            <br>Display
            <input type="submit" value="Sum">
        </fieldset>
    </div>
</form>
</body>
</html>
