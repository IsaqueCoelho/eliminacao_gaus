<?php

    $i = null;
    $j = null;
    $k = null;
    $c = null;
    $vectorResult = array();

    $matrizSize = 0;

    $countVectorAElement = 0;
    $countVectorBElement = 0;
    
    $arrayMatrix = null;

    $arrayVectorA = isset($_POST['vectorA']) ? $_POST['vectorA'] : null;
    $arrayVectorB = isset($_POST['vectorB']) ? $_POST['vectorB'] : null;

    $matrizSize = count($arrayVectorB);

    for($countLin = 1; $countLin <= $matrizSize; $countLin++){

        for($countColl = 1; $countColl <= ($matrizSize + 1); $countColl++){

            if($countColl < ($matrizSize + 1)){
                
                $arrayMatrix[$countLin][$countColl] = $arrayVectorA[$countVectorAElement];
                $countVectorAElement++;
            } else {

                $arrayMatrix[$countLin][$countColl] = $arrayVectorB[$countVectorBElement];
                $countVectorBElement++;
            }
        }
    }

    for($j = 1; $j <= $matrizSize; $j++) {

        for($i = 1; $i <= $matrizSize; $i++) {

            if($i > $j) {
                $c = $arrayMatrix[$i][$j] / $arrayMatrix[$j][$j];

                for($k = 1; $k <= $matrizSize + 1; $k++) {
                    $arrayMatrix[$i][$k] = $arrayMatrix[$i][$k] - $c * $arrayMatrix[$j][$k];
                }
            }
        }
    }

    $vectorResult[$matrizSize] = $arrayMatrix[$matrizSize][$matrizSize + 1] / $arrayMatrix[$matrizSize][$matrizSize];

    for($i = $matrizSize - 1; $i >= 1; $i--) {
        $add = 0;

        for($j = $i + 1; $j <= $matrizSize; $j++) {
            $add = $add + $arrayMatrix[$i][$j] * $vectorResult[$j];
        }

        $vectorResult[$i] = ($arrayMatrix[$i][$matrizSize + 1] - $add) / $arrayMatrix[$i][$i];
    }

    $result = ["success" => true, "result" => $vectorResult, "matrix" => $arrayMatrix, "message" => "Cálculo realizado!"];

    echo json_encode($result);
?>