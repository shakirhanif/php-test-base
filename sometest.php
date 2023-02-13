<?php
function inverse($x){
    if(!$x){
        throw new Exception('division by zeroooo');
    };
return 1/$x;
};
try {
    echo inverse(2);
    echo inverse(0);
}catch(Exception $err){
    echo 'Caught error',$err->getMessage();
};

    echo 'hello man';
?>
