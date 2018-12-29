<?php

/**
 * detectAnagrams will return a array containing all unique strings in $candidates
 * that are anagrams of the string $word.
 *
 * @param  string $word
 * @param  array $candidates
 *
 * @return array
 */
function detectAnagrams(string $word, array $candidates): array
{
    $candidates = array_unique($candidates);
    return array_values(array_filter($candidates, function ($candidate) use ($word) {
        return isAnagramOf($word, $candidate);
    } ));
}

/**
 * isAnagramOf is a helper function used in the detectAnagram function.
 * Returns true if $wordOne is an anagram of $wordTwo.
 *
 * @param  string $wordOne
 * @param  string $wordTwo
 *
 * @return bool
 */
function isAnagramOf(string $wordOne, $wordTwo): bool
{
    $wordOne = mb_strtolower($wordOne);
    $wordTwo = mb_strtolower($wordTwo);

    if ($wordOne === $wordTwo) {
        return false;
    }

    $wordOne = preg_split('//u', $wordOne, null, PREG_SPLIT_NO_EMPTY);
    $wordTwo = preg_split('//u', $wordTwo, null, PREG_SPLIT_NO_EMPTY);

    sort($wordOne);
    sort($wordTwo);
    return  implode($wordOne) === implode($wordTwo);
}