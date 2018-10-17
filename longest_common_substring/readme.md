Here is the problem statement, from [here](http://www.techiedelight.com/longest-common-substring-problem/):
> The longest common sub-string problem is the problem of finding the longest string (or strings) that is a sub-string (or are sub-strings) of two strings.  

From looking at this, we can make out that this problem needs to give the sub-string, which is a part of the two main strings, but continuous in form. 
We cannot use the overlapping sub-problems approach here since we will have a series of strings from which we will have to get the longest string. This, while possible and feasible, would be a naive solution.  

Hence we need to consider that the optimal substructure is followed in this solution. How do we do that? We can use a multi-dimensional array to keep track of the length of the string. 

Pseudo code follows:
```
string_len_1 = length of the string_1 
string_len_2 = length of the string_2
M = matrix_to_keep_count = []
ML = Maximum_length = 0
Index = 0
for each element x , position i of the string 1{
	for each element y , position j of the string 2{
		if x == y {
			if( x or y is 0){
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

string_1.substring [ Index - ML , Index ]
```
The space complexity would be m\*n. The time complexity would also be m\*n.  

Do please have a look at the solutions in code:  
[Python](https://github.com/Trshant/dynamic_problems/blob/master/longest_common_substring/longest_common_substring.py)  
[PHP](https://github.com/Trshant/dynamic_problems/blob/master/longest_common_substring/longest_common_substring.php)  
[JavaScript](https://github.com/Trshant/dynamic_problems/blob/master/longest_common_substring/longest_common_substring.js)  


> Written with [StackEdit](https://stackedit.io/).

