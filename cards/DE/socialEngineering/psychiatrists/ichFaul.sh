#!/bin/bash
find . -type f | xargs sed -i  's/Neurotizismus:/Neuroticism:  /g'
find . -type f | xargs sed -i  's/Verträglichkeit:/Agreeableness:  /g'
find . -type f | xargs sed -i  's/Gewissenhaftigkeit:/Conscientiousness: /g'
find . -type f | xargs sed -i  's/Offenheit:/Openness: /g'

#irgendwie pointless
#find . -type f | xargs sed -i  's/Extraversion/Extraversion/g'

find . -type f | xargs sed -i  's/Humanismus:/Humanism:  /g'
find . -type f | xargs sed -i  's/Technischer Background:/Technical Background:  /g'


find . -type f | xargs sed -i  's/Grössenwahn:          /Delusions of grandeur:/g'

find . -type f | xargs sed -i  's/Militärischer Hintergrund:/Military Background:      /g'


find . -type f | xargs sed -i  's/Problem auf Patienten projizieren:/Project Problems to Patients:     /g'

find . -type f | xargs sed -i  's/Selbstwertgefühl:/Self-esteem:     /g'



