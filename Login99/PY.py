import sys
import random
import hashlib
  
# initializing string
str2hash = sys.argv[1]
  
# encoding GeeksforGeeks using encode()
# then sending to md5()
result = hashlib.md5(str2hash.encode())
  
# printing the equivalent hexadecimal value.
print(result.hexdigest())
