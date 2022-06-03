
def parentisBalance(p):
	bal=0
	res=0
	for i in range(0,len(p)):
		if(p[i]=='('):
			bal+=1
		else:
			bal+=-1
		if(bal==-1):
			res+=1
			bal+=1
	return bal+res

p = input()
print(parentisBalance(p))




def uniqueNumbers(userValues):
	uniqueList = []
	count=0
	for num in userValues:
		if num not in uniqueList:
			uniqueList.append(num)
			count=count+1
	return uniqueList
	
userValues = [int(n) for n in input().split(',')]
res = uniqueNumbers(userValues)
val = ""
for i in res:
    val=val+str(i)+","
print("The number of unique scores are",len(uniqueNumbers(userValues)),"and scores are",val[:-1])



# I had a tea early in the morning.I eat fruits in the evening and I love to play with my bat and tab.I eat bananas for breakfast.



def anagrams(arr,n):
    ms = 0;
    count = {}
    for i in range(n):
        arr[i] = ''.join(sorted(arr[i]))
        if(arr[i] in count):
            count[arr[i]]+=1
        else:
            count[arr[i]]=1
            
        ms = max(ms,count[arr[i]])
    return ms
n = input()
print("Max number of anagrams in a group is",anagrams(n.split(),len(n.split())))














