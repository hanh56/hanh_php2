<?php
for ($i= 1; $i <=20; $i++)
{
    if (($i%3==0)AND($i%5==0)){
        echo "Bà Năm nắm tay ông ba". "\n";
    }
    elseif($i%3==0){
        echo "Ông ba". "\n";
    }
    elseif ($i%5==0)
    {
        echo "Bà Năm". "\n";
    }
    else {
        echo $i. "\n";
    }
    

}




?>