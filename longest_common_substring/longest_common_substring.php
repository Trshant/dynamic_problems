<?php
$string_1 = 'BABCA';
$string_2 = 'ABCAB';
$string_len_1 = strlen($string_1);
$string_len_2 = strlen($string_2);
$M = $matrix_to_keep_count = [];
$ML = $Maximum_length = 0;
$Index = 0;
for( $i=0 ; $i<$string_len_1 ; $i++ ){
	for( $j=0 ; $j<$string_len_2 ; $j++ ){
		if( $string_1[$i] == $string_2[$j] ){
			if( $i==0 || $j==0){
				$M[$i][$j] = 1;
			} else {
				$M[$i][$j] = $M[$i-1][$j-1] + 1;
			}
		} else {
			$M[$i][$j] = 0;
		}
		if( $M[$i][$j] > $ML ){
			$ML = $M[$i][$j];
			$Index = $i;
		}
	}
}

echo substr( $string_2 , $Index-$ML , $ML ); 
?>

