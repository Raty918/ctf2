#!/bin/bash
echo "Initialisation"

echo "Verification de l'existence de l'image"
docker build -t vm_vuln .

echo "lancement des instances CTF"
docker-compose up -d

echo "Combien d'instances voulez-vous lancer ?"
read num
docker-compose scale ctf=$num

echo "Prepapration des conteneurs"
#Get the id of all running containers
docker ps | tail -n +2 |awk '{print $1}' >> out.txt
while read line; do
docker exec $line ./tmp/netcat/sc1.sh &
docker exec $line ./tmp/netcat/sc2.sh &
done < out.txt
rm out.txt

echo "Configuration du parefeu"
iptables -A FORWARD -j ACCEPT

echo "Terminé"
