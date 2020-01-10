<?php
function inverse($i) {
    if (!$i) {
        throw new Exception('Division by zero.');
    }
    return 1/$i;
}

try {
    echo 10/inverse(1-1);
}

catch (Exception $e) {
    echo 'Exeption caught !';
}

finally {
    echo "Done!";
}
?>