FROM alpine:3.12
RUN apk update
RUN apk add --no-cache telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session openrc nginx php-fpm openssl
RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx
WORKDIR /www
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz ./
RUN tar -xvf phpMyAdmin*tar* --strip-components 1
RUN rm -rf ./phpMyAdmin*tar*
COPY config.inc.php ./
RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -subj "/C=RU/ST=Moscow/L=Moscow/O=21 School/OU=fdarrin/CN=localhost" -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt
COPY localhost.conf /etc/nginx/conf.d/default.conf
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
COPY start.sh ./
ENTRYPOINT ["sh", "start.sh"]
EXPOSE 5000