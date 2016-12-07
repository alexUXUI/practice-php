<?php

    $scopedVar = 'Im in the closure 😎 ';

    $makeClosure = function() use ($scopedVar)
    {
        echo $scopedVar;
    };

    $makeClosure();

 ?>
