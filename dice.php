<?php

$dice = array(
    "1の目"    => 1,
    "2の目"    => 2,
    "3の目"    => 3,
    "4の目"    => 4,
    "5の目"    => 5,
    "6の目"    => 6
);

$result = rand(1, 6);

echo array_search($result, $dice);