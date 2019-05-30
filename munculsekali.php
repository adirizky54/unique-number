<?php 
    function munculSekali($input){
        $data = str_split($input, 1);
        $output = []; 

        foreach ($data as $key => $value) { 
            if(substr_count($input, $value) == 1){ 
                array_push($output, $value); 
            } 
        } 

        return $output;
    }
    echo json_encode(munculSekali("76523752"));
?>
