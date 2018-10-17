string_1 = 'ABABCDD'
string_2 = 'BABCA'
string_len_1 = string_1.length 
string_len_2 = string_2.length
M = matrix_to_keep_count = []
ML = Maximum_length = 0
Index = 0
i = j = -1
for(i=0;i<string_len_1;i++){
	M.push([])
	M[i] = []
	for( j=0;j<string_len_2;j++ ){
		M[i].push(0)
		if( string_1[i] == string_2[j] ){
			if( i == 0 || j == 0){
				M[i][j] = 1
			} else {
				M[i][j] = M[i-1][j-1] + 1
			}
		} else {
			M[i][j] = 0
		}
		
		if( M[i][j] > ML ){
			ML = M[i][j]
			Index = i
		}
	}
}

console.log( Index , ML , string_1.substring( Index - ML + 1 , Index + 1 ) )
