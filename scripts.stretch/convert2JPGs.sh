#!/bin/sh

if  [ "$1" = "" ]
then
	echo -e "
	\e[39m
	Usage:
	------
	To generate the Enlgish jpg's: \e[36m convert2JPGs.sh EN\e[39m
	To generate the German  A6 sheets: \e[36m./generateA6.sh DE\e[39m


	"
	exit 0
fi



echo  "../png/$1/ => ../jpg/$1/"
mkdir --parents ../jpg/$1

find ../png/$1/ -name '*.png' >./jpg_$1.txt

echo liste
cat ./jpg_$1.txt

for f in $(cat ./jpg_$1.txt)
 do
  echo $f
convert -format jpg -background white -quality 50 $(dirname $f)/$(basename $f .png).png ../jpg/$1/$(basename $f .png).jpg
done


