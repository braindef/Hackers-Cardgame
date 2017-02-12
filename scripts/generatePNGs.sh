#!/bin/bash

clear

if  [ "$1" = "" ]
then
echo -e "
\e[39m
Usage:
------
To generate the Enlgish PNGs sheets: \e[36m./generatePNGs.sh EN\e[39m
To generate the German  PNGs sheets: \e[36m./generatePNGs.sh DE\e[39m


"
exit 0
fi


clear

inkscape &
sleep 4

find ../cards/$1 -name "*.svg" >./PNGs.txt

counter=0

for i in $(cat ./PNGs.txt)
  do
  let counter=counter+1
  /usr/bin/inkscape $i &
  sleep 8
  xdotool key Ctrl+Alt+a
  sleep 3
  xdotool key Ctrl+Shift+e
  sleep 0.6
  xdotool key Alt+s
  sleep 0.3
  xdotool key Alt+w
  sleep 1
  xdotool type "1000"
  #xdotool click 1 if key-shortcuts do not work you can also use mouse commands
  xdotool key Tab Tab Tab
  sleep 1
  #xdotool key Ctrl+a
  #xdotool key Tab  Tab Tab Tab Tab Tab Tab Tab Tab Tab Tab Tab Tab
  #sleep 2
  pngpath=$(dirname $(pwd))/png
  figlet $pngpath
  #xdotool key Alt+b
  sleep 0.3
  xdotool key Delete  
  xdotool type "$pngpath/$1/$(basename $i .svg)"
  sleep 0.2
  #echo xdotool type $(basename $i .svg)
  sleep 
  echo xdotool type '.png'
  sleep 0.3
  xdotool key KP_Enter
  sleep 3
  xdotool key Ctrl+w
  sleep 1
  xdotool key Alt+F4
  sleep 2
  xdotool key Alt+w
done



