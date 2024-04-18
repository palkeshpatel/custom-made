<?php
    function activeClass($para){
        if($para == request()->segment(1)){
            return 'active';
        }
    }

?>
