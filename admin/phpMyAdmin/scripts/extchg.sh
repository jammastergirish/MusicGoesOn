#!/bin/sh

# $Id: extchg.sh,v 1.1 2001/08/08 16:25:10 swix Exp $ 

# original php3->phtml converter by Pavel Piankov <pashah@spb.sitek.net>
# modified by Tobias Ratschiller to allow any file extension
# part of the phpMyAdmin distribution <http://phpwizard.net/phpMyAdmin>

# 2001-07-07, lem9@users.sourceforge.net:
# - supports sub-directories
# - no more bak directory

if [ $# != 2 ]
then
  echo "Usage: extchg.sh <extension to change from> <extension to change to>"
  echo ""
  echo "Example: extchg.sh php3 php"
  exit
fi

for i in `find . -name "*.$1"`
	 do 
	 echo $i
	 sed -e 's/\.'$1'/\.'$2'/g' $i > `ls $i|sed -e 's/'$1'/'$2'/g'`
	 rm $i
	done;

