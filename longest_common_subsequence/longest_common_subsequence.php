<?php

function lcs_length($sub1,$sub2,$len_sub1,$len_sub2){
        if( $len_sub1 == 0 or $len_sub2 == 0 ){
                return 0;
        }
        if( $sub1[$len_sub1-1] == $sub2[$len_sub2-1] ){
                return lcs_length( $sub1 , $sub2 , $len_sub1-1 , $len_sub2-1  ) + 1;
        }
        return max( lcs_length($sub1, $sub2, $len_sub1-1 , $len_sub2 ) , lcs_length( $sub1 , $sub2 , $len_sub1 , $len_sub2-1  ) );
}

function main($seq1,$seq2){
        $max_len = lcs_length( $seq1 , $seq2 , strlen($seq1) , strlen($seq2) );
        print($max_len);
}


main( 'ABCBDAB' , 'BDCABA' );


?>
