#!/bin/bash
find . -type f -name '*.svg' | xargs sed -i  's/neuroticism/neuroticismo/g'
find . -type f -name '*.svg' | xargs sed -i  's/Extraversion/extroversión/g'
find . -type f -name '*.svg' | xargs sed -i  's/agreeableness/agradabilidad /g'
find . -type f -name '*.svg' | xargs sed -i  's/conscientiousness/conscientización/g'
find . -type f -name '*.svg' | xargs sed -i  's/openness/apertura/g'


find . -type f -name '*.svg' | xargs sed -i  's/Nächstenliebe/Humanismo/g'
find . -type f -name '*.svg' | xargs sed -i  's/Humanismus/Humanismo/g'
find . -type f -name '*.svg' | xargs sed -i  's/Brief Profile/Perfil breve/g'

find . -type f -name '*.svg' | xargs sed -i  's/Technischer Background:/Antecedentes técnicos/g'


find . -type f -name '*.svg' | xargs sed -i  's/Grössenwahn/Delirio de grandeza/g'

find . -type f -name '*.svg' | xargs sed -i  's/Militärischer Hintergrund/Antecedentes militares/g'


find . -type f -name '*.svg' | xargs sed -i  's/Problem auf Patienten projizieren/Proyección de problemas en pacientes/g'

find . -type f -name '*.svg' | xargs sed -i  's/Selbstwertgefühl/Amor propio/g'

