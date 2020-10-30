<pre>
<?php
    $n = array(array(2,3),
               array(5,1),
               array(9,4));
    
    $n[1][0] = $n[2][1];
    print_r($n);

?>
</pre>