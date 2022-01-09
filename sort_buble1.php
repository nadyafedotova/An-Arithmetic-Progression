
<?php
/**
     * 
     * @param array $data
     */
    function sorter(array $data)
    {
        $count_elements = count($data); 
        $iterations = $count_elements - 1;

        for ($i=0; $i < $count_elements; $i++) {
            $changes = false;
            for ($j=0; $j < $iterations; $j++) {
                if ($data[$j] > $data[($j + 1)]) {
                    $changes = true;
                    list($data[$j], $data[($j + 1)]) = array($data[($j + 1)], $data[$j]);
                }
            }
    
            $iterations--;
            if (!$changes) {
                var_dump('+='.$changes);
                var_dump($data);
            }
        }        
        var_dump($data);
    }

    $data = [1,9,8,7,5,4,2,3,6,0];
    sorter($data);
