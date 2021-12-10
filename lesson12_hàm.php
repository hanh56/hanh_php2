<?php
function say_hello () {
    echo "Hello World". "\n";
};
say_hello ();
say_hello ();
say_hello ();
?>



<?php
$say_hello1 = function () {
    echo "Hello World1". "\n";

};

$say_hello1();
?>



<?php
function say_hello3 ($greeting) {
    echo $greeting. "\n";
};
say_hello3 ("Good afternoon");
say_hello3 ("What'up?");


function call($x){
    echo ($x *4);
};
call (6);
?>


<?php
function h($a, $b, $c){
    return (($a +$b + $c)/3);
};
echo $result = h(9,4,2);

?>
