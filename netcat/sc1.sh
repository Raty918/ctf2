#!/bin/bash

mkfifo /tmp/backpipe1
while true
do
  sleep 1
  nc -z 172.18.0.2 6666
  RESULT=$?
  if [ $RESULT -eq 1 ];
  then
    nc -l -p 6666 < /tmp/backpipe1 | /tmp/netcat/script6666.sh > /tmp/backpipe1
  fi
done

