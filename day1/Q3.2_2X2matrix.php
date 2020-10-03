<?php
    $v=array(array(9,20),array(4,10));
    $s=array(array(18,23),array(1,13));

    echo "Matrix Addition of two arrays <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $v[$i][$j]+$s[$i][$j]."   ";
        }
        echo "<br>";
    }
?>