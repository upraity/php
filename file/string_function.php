<!-- Q6. Wap to print all the string library function.-->

<?php
$string = "SabkaCode";

echo "1. String Length: " . strlen($string) . "<br>";

echo "2. Convert to Lowercase: " . strtolower($string) . "<br>";

echo "3. Convert to Uppercase: " . strtoupper($string) . "<br>";

echo "4. String Concatenation: " . $string . " - Concatenated Text<br>";

echo "5. Substring: " . substr($string, 5) . "<br>";

echo "6. String Replace: " . str_replace("SabkaCode", "Dj", $string) . "<br>";

echo "7. String Reverse: " . strrev($string) . "<br>";

echo "8. String Trim: " . trim("    Dj    ") . "<br>";

echo "9. String Shuffle: " . str_shuffle($string) . "<br>";

echo "10. String Word Count: " . str_word_count($string) . " words<br>";

echo "11. String Position (Case-sensitive): " . strpos($string, "Code") . "<br>";

echo "12. String Position (Case-insensitive): " . stripos($string, "code") . "<br>";
?>
