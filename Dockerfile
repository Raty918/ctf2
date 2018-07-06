FROM debian:wheezy

# Get current
RUN apt-get update -y
RUN apt-get dist-upgrade -y

# Install packages 
RUN apt-get install -y wget
RUN apt-get install -y apache2 php5 php5-mysql vsftpd openssh-server
RUN apt-get install -y netcat 
RUN DEBIAN_FRONTED=noninteractive apt-get install -y mysql-server 
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install vulnerable versions from wayback/snapshot archive
RUN wget http://snapshot.debian.org/archive/debian/20130319T033933Z/pool/main/o/openssl/openssl_1.0.1e-2_amd64.deb -O /tmp/openssl_1.0.1e-2_amd64.deb && \
 dpkg -i /tmp/openssl_1.0.1e-2_amd64.deb

RUN wget http://snapshot.debian.org/archive/debian/20130319T033933Z/pool/main/o/openssl/libssl1.0.0_1.0.1e-2_amd64.deb -O /tmp/libssl1.0.0_1.0.1e-2_amd64.deb && \
 dpkg -i /tmp/libssl1.0.0_1.0.1e-2_amd64.deb

# Setup vulnerable web server and enable SSL based Apache instance
RUN sed -i 's/^NameVirtualHost/#NameVirtualHost/g' /etc/apache2/ports.conf
RUN sed -i 's/^Listen/#Listen/g' /etc/apache2/ports.conf 
RUN a2enmod ssl
RUN a2dissite default
RUN a2ensite default-ssl
RUN sed  '3iDirectoryIndex index.php' /etc/apache2/sites-enabled/default-ssl > /etc/apache2/sites-enabled/default-ssl.2
RUN mv /etc/apache2/sites-enabled/default-ssl.2 /etc/apache2/sites-enabled/default-ssl 

# Setup SSH server
RUN sed -i 's/^Port 22/Port 8888/g' /etc/ssh/sshd_config

# Setup vsftpd server configuration
RUN sed -i 's/^#ftpd_banner=Welcome to blah FTP service./ftpd_banner=Welcome to **COON** and friends FTP service./g' /etc/vsftpd.conf
RUN echo 'anon_root=/var/run/vsftpd/empty' >> /etc/vsftpd.conf
RUN mkdir /var/run/vsftpd && mkdir /var/run/vsftpd/empty && touch /var/run/vsftpd/empty/FLAG.txt

# Change behaviour of cat command in order to be really annoying
RUN echo 'alias cat="grep '[a-zA-Z0-9]' /pet && echo 'WOUAF Wouaffff'"' >> ~/.bashrc
RUN echo 'alias cat="grep '[a-zA-Z0-9]' /pet && echo 'WOUAF Wouaffff'"' >> /etc/profile

# Clean up 
RUN apt-get autoremove
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Expose the port for usage with the docker -P switch
EXPOSE 443
EXPOSE 21
EXPOSE 666
EXPOSE 2222
EXPOSE 6666
EXPOSE 8888

#Ressources with access rights
COPY setup.sh /setup.sh
COPY pet /pet
COPY ./mysql /var/lib/mysql
RUN chown -R mysql:mysql /var/lib/mysql && chmod 755 /var/lib/mysql

COPY ./var/www /var/www
RUN chown 777 /var/www /var/www/upload.php /var/www/uploads

COPY ./ftp /run/vsftpd/empty
COPY ./ssh2/etc/ssh2 /etc/ssh2
COPY ./ssh2/default/ssh2 /etc/default/ssh2
COPY ./ssh2/init.d/ssh2 /etc/init.d/ssh2
COPY ./etc/shadow /etc/shadow
COPY ./etc/passwd /etc/passwd

COPY ./home/timmy /home/timmy
RUN chown -R timmy:1000 /home/timmy

COPY ./netcat /tmp/netcat


# Run Apache 2
ENTRYPOINT ["/setup.sh"]

