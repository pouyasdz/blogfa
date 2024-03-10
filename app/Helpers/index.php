<?php 

function getRandomDigist($digits = 6){
   return rand(pow(10, $digits-1), pow(10, $digits)-1);
}
