#!/bin/bash

mkfifo /tmp/backpipe2
while true
do
  sleep 1
  nc -z 172.18.0.2 666
  RESULT=$?
  if [ $RESULT -eq 1 ];
  then
    nc -l -p 666 < /tmp/backpipe2 | /tmp/netcat/script666.sh > /tmp/backpipe2
  fi
done

