#!/bin/bash

echo "

usage ./generateDeck.sh DE
      ./generateDeck.sh EN

     "

     if  [ "$1" = "" ]
     then
	     echo -e "
	     \e[39m


	     "
	     exit 0
     fi


mkdir $1

for f in $(cat liste.txt)
 do
  echo $f
  cp ../../../jpg/$1/$f .
 done

