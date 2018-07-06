#!/bin/bash

echo "setup script shell"

/etc/init.d/ssh start
/etc/init.d/vsftpd start
/etc/init.d/mysql start
/etc/rc.local


#SSH2
ln -s /usr/sbin/sshd /usr/sbin/sshd2
cp -p /etc/ssh/ssh_host_* /etc/ssh2/
/etc/init.d/ssh2 start

#Clean Database
mysql < /var/lib/mysql/dump.sql

#Apache in foreground
/usr/sbin/apache2ctl -DFOREGROUND

#netcat
#exec ./tmp/netcat/sc.sh &


