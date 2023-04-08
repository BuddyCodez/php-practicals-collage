<?php
$vehicle = $_POST['vehicle'];
if($vehicle == "safari" || $vehicle == "nexon" || $vehicle == "tigor" || $vehicle == "tiago" ){
    echo "The Company is Tata Motors.";
} 
else if ($vehicle == "xuv700" || $vehicle == "xuv300" || $vehicle == "bolero"){
    echo "The Company is Mahindra.";
}
else if ( $vehicle == "creta" || $vehicle == "venue" || $vehicle == "verna" || $vehicle == "i20" ){
    echo "The Company is Hyundai.";
}
else if ( $vehicle == "swift" || $vehicle == "baleno" || $vehicle == "alto" || $vehicle == "brezza" ){
    echo "The Company is Maruti Suzuki.";
}
else{
    echo "The Company is not found.";
}
?>
