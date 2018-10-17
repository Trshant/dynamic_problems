string_1 = 'ABABC'
string_2 = 'BABCA'
string_len_1 = len(string_1) 
string_len_2 = len(string_2)
M = matrix_to_keep_count = []
ML = Maximum_length = 0
Index = 0
i = j = -1
for x in string_1:
	i += 1
	M.append([])
	M[i] = []
	j = -1
	for y in string_2:
		M[i].append(0)
		j += 1
		print( i , j , x , y )
		if x == y :
			if( i == 0 or j == 0):
				M[i][j] = 1
			else:
				M[i][j] = M[i-1][j-1] + 1
		else:
			M[i][j] = 0
		if( M[i][j] > ML ):
			ML = M[i][j]
			Index = i

print( string_2[ Index - ML : Index ] )
