<?php

/**
 * transform, extract scrabble scores from a legacy system and converts the to a new format.
 * 
 * @param  array $old
 *
 * @return array
 */
function transform (array $old): array
{
    $transformed = [];

    foreach ($old as $points => $letters) {
        foreach ($letters as $letter) {
            $transformed[$letter] = $points;
        }
    }
    return array_change_key_case($transformed);
}