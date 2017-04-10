#!/bin/bash
find ../cards/EN -name '*.svg' >EN.txt

mkdir -p ../png/EN/

for i in $(cat EN.txt)
 do
  inkscape -z $i -e ../png/EN/$(basename $i .svg).png -D -h 1600
 done

rm EN.txt


