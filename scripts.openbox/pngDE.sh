#!/bin/bash
find ../cards/DE -name '*.svg' >DE.txt

mkdir -p ../png/DE/

for i in $(cat DE.txt)
 do
  inkscape -z $i -e ../png/DE/$(basename $i .svg).png -D -h 1600
 done

rm DE.txt


