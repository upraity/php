<!-- Q17. Wap to multiply two matrix.-->
<?php
    function multiplyMatrices($matrix1, $matrix2) {
        $result = array();
        
        if (count($matrix1[0]) != count($matrix2)) {
            return "Cannot multiply this matrix.";
        }

        $rows1 = count($matrix1);
        $cols1 = count($matrix1[0]);
        $cols2 = count($matrix2[0]);

        for ($i = 0; $i < $rows1; $i++) {
            for ($j = 0; $j < $cols2; $j++) {
                $result[$i][$j] = 0;
            }
        }

        for ($i = 0; $i < $rows1; $i++) {
            for ($j = 0; $j < $cols2; $j++) {
                for ($k = 0; $k < $cols1; $k++) {
                    $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }

        return $result;
    }

    // Sample matrices
    $matrix1 = array(
        array(1, 2),
        array(3, 0),
    );

    $matrix2 = array(
        array(2, 3),
        array(1, 1),
    );

    $result = multiplyMatrices($matrix1, $matrix2);

    if (is_array($result)) {
        echo "Result of matrix multiplication:<br>";
        foreach ($result as $row) {
            echo implode(" ", $row) . "<br>";
        }
    } else {
        echo $result; // Display error message
    }
?>
