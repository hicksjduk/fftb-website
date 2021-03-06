#!/usr/bin/python
import sys
import os
from cgi import FieldStorage

html = """
<html>
<body>
<p>{version}<p>
<p>{syspath}<p>
<p>{cwd}<p>
<p>{params}</p>
<p>{dataDir}</p>
</body>
</html>
""" 

parms = FieldStorage()
paramDict = {} 
for k in parms.keys():
    paramDict[k] = parms.getvalue(k)

print ("Content-Type: text/html\n")
print (html.format(version=sys.version, syspath=sys.path, cwd=os.getcwd(), params=paramDict, dataDir=Settings.dataDirectory))

