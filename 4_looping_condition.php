<?php
for ($i = 1; $i <= 50; $i++) {
   if($i%3==1){
       echo "Foo";
   }if($i%5==1){
    echo "Bar";
   }if($i%3==1&&$i%5==1){
    echo "FooBar";
   }
}
?>