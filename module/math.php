<?php

/**
 * returns the avarage of the numbers passed as a parameter
 * 
 * @param   numbers an array of numbers that will be used to calculate the avarage
 * @return  avarage
 */
function avarage(array $numbers)
{
    return array_sum($numbers) / count($numbers);
}
