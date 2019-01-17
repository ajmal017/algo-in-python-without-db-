

from time import sleep
from datetime import datetime ,timedelta
import json



mydict ={}
mydict['name'] ='Guddu Chauhan'
mydict['timestamp'] = str(datetime.now())

with open('./mydict.json','w') as mydictfile:
    json.dump(mydict,mydictfile)
print(mydict)

with open('./mydict.json','r') as mydictfile:
    myd = json.load(mydictfile)

print(myd)

print(type(myd))





