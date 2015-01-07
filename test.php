<?php
// get each word line by line.
$fileArray = file($argv[1]);
$index = 0;
$linecount = 0;

foreach($fileArray as $line){
	// does not compare previous items since its not neccessary.
	for($i = $index + 1; $i < count($fileArray); $i++){
		if(isAnagram($line, $fileArray[$i])){
			// we are not comaring the item to itself
			echo $line . " is an anagram of " . $fileArray[$i];
		}
	}
	++$index;
}


// compares the two inputs and outputs true/false if the two are anagrams.
function isAnagram($word_one, $word_two){
	
	// take the first word and convert into an array
	$array1 = str_split($word_one);
	$array2 = str_split($word_two);

	// sort the arrays
	sort($array1);
	sort($array2);

	// compare the sorted arrays.
	if($array1 === $array2)
		return true;
	return false;
}




?>