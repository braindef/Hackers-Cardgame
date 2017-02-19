#!/bin/sh


find . -name '*.png' >./jpg.txt

for f in $(cat ./jpg.txt)
 do
  echo $f
  convert -format jpg -quality 50 $(basename $f .png).png $(basename $f .png).jpg
done



