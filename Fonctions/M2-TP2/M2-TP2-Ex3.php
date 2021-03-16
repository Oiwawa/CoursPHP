<?php

function pgcd($param1, $param2)
{
   do {
       $reste = $param1 % $param2;
       $param1 = $param2;
       $param2 = $reste;
   } while($reste != 0);
   return $param1;
}

echo pgcd(295, 177);

