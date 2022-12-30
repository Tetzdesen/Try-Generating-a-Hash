<?php
    function generate_hash($algo, $message){
        $hash = hash($algo, $message);
        return $hash;
    }

?>