<?php
for ($i = 1; $i <= 50; $i++) {
   if($i%7==0){
       echo "Foo";
   }elseif($i%5==0){
    echo "Bar";
   }elseif($i%3==0&&$i%5==0){
    echo "FooBar";
   }
}
?>