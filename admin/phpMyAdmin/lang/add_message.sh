#!/bin/bash
#
# Shell script that adds a message to all message files (Lem9)
#
# Example:  add_message.sh '$strNewMessage' 'new message contents'
#
for file in *.inc.php3
do
        echo $file " "
        grep -v '?>' ${file} > ${file}.new
        echo "$1=\""  $2  '";  //to translate' >> ${file}.new
        echo "?>" >> ${file}.new
        rm $file
        mv ${file}.new $file
done
echo " "
echo "This script also added the new message to english.inc.php3"
