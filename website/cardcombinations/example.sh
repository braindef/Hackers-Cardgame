#!/bin/bash

find . -type d -maxdepth 1 | grep -v ^.$ >./languages.txt

for l in $(cat ./languages.txt)
do
  ls ../cards/$l
done
