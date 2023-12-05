<?php 

$letters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

$encrypt = array();

if (isset($argv[1])) {
    $shift = $argv[1];

    foreach($letters as $key => $char) {
        $new = $key +$shift;
        if ($new >25) {
            $new = $key - 24;
        }
        $encrypt[] = $letters[$new];
    }
    print_r($encrypt);
}
?>