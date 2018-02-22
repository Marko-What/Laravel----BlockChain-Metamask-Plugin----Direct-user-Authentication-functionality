import re

fdesc = open("/var/log/syslog", "r")

for line in fdesc.readlines():
	#line.strip()
	#print(line)		
	result = re.search("USB", line)
	if result != None:
		result1= str(result)
		print(line)
		
fdesc.close()


