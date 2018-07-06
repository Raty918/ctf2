#!/bin/bash
while read entree
do
   if [[ "$entree" == "87df2cd1570fd297de238aeee667fe0a" ]]; then
      echo "What kind of tongue is that !? I can't understand you !"
   elif [[ $entree == "satan" ]]; then
      echo "You finally came ! I knew you were a player !
      I wanted to make phone hoaxes together and there is a specific phone number I wanted to call.
      Unfortunately I noted it somewhere on a paper but I cannot find it ..."
   elif [[ $entree == "goodtime" ]]; then 
      echo "Haha ! You are very smart ! Well it seems like you deserve a reward ! 
      I've saw a little boy, probably a member of this COON & friends superhero league ...
      Anyway ... he left a post-it on his computer screen containing the following message:
      the_iron_maiden_23:116d686f2ceee6a8b2ea00673cce1e6b
      # FLAG #10
      # {I have a friend who calls himself lucifer.}
      # Token #10 : 8dw (You should save this token somewhere)"
   elif [[ $entree == "4-666-666-3-8-444-6-33" ]]; then
      echo "it looks like the number is not assigned.
      Did you dial the right number ? you should look at your keyboard!"
   else
      echo "But nobody came"
   fi
done
