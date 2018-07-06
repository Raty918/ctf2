#!/bin/bash
# Ask the user for the IP address to reset
echo "Initialisation"

#Get the id of all running containers
docker ps | tail -n +2 |awk '{print $1}' >> out.txt
while read line; do
docker exec $line ./tmp/netcat/sc1.sh &
docker exec $line ./tmp/netcat/sc2.sh &
done < out.txt
rm out.txt
echo "Done"
