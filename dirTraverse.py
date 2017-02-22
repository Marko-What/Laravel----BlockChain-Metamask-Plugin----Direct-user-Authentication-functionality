import os, glob

user=raw_input("type the folder want to examine: ")

def DeepTraverse():
	global TravDir
	for item in os.listdir("/%s"%(TravDir)):
		if os.path.isdir(os.path.join("/%s"%(TravDir), item)):
			print "---------------"+ item + " --it is a DIRECTORY \n"
			#TravDir +="/"+item
			RecursiveTraverse()
		elif os.path.isfile(os.path.join("/%s"%(TravDir), item)):
			print "---------------"+item + "--it is a FILE \n"
		else:
			print "---------------unknown \n"
				

	

def RecursiveTraverse():
	global TravDir
	for item in os.listdir("/%s"%(TravDir)):
		if os.path.isdir(os.path.join("/%s"%(TravDir), item)):
			print "---------------"+ item + " --it is a DIRECTORY \n"
			#TravDir +="/"+item
			#DeepTraverse()
		elif os.path.isfile(os.path.join("/%s"%(TravDir), item)):
			print "---------------"+item + "--it is a FILE \n"
		else:
			print "---------------unknown \n"
		
		
	

			
for obj in os.listdir("/%s"%(user)):
	
	if os.path.isdir(os.path.join("/%s"%(user), obj)):
		print obj + "--it is a DIRECTORY \n"
		TravDir = user+"/"+obj		
		RecursiveTraverse()	
		
	elif os.path.isfile(os.path.join("/%s"%(user), obj)):
		print obj + "--it is a FILE \n"

	else:
		print "unknown"
