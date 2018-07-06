#!/bin/bash
# Ask the user for the IP address to reset
echo Which IP to reset ?
read ip
echo the IP : $ip

#Get the id of all running containers
docker ps | tail -n +2 |awk '{print $1}' >> out.txt
while read line; do
	#Looking of the container with the specific IP address
	if [ ! -z "$( docker inspect $line | grep $ip )" ];
	then
		#Number of container currently running
		declare -i n="$(docker ps | wc -l) -1"
		
		#Stopping the spcific container
		echo Container is stopping
		docker stop $line 
		
		#Removing container
		echo Deleting container
		docker rm $line

		#Deploying container
		echo Recreating container
		docker-compose scale ctf=$n

fi
done < out.txt
rm out.txt
