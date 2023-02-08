<?php

$tuitionFee = 20000;

$commission = ( $tuitionFee >= 20000 ) ? $tuitionFee * 0.25 : (  ( $tuitionFee >= 10000 && $tuitionFee < 20000 ) ? $tuitionFee * 0.2 : (  ( $tuitionFee >= 7000 && $tuitionFee < 10000 ) ? $tuitionFee * 0.15 : (  ( $tuitionFee < 7000 ) ? "The data is Invalid" : null ) ) );

echo $commission;
