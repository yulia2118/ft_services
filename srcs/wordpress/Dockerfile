FROM alpine:3.12
RUN apk update
RUN apk add --no-cache telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session openrc nginx php-fpm
RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx
WORKDIR /www/
ADD https://wordpress.org/latest.tar.gz ./
RUN tar -xvf latest*tar* --strip-components 1
RUN rm -rf ./latest*tar*
COPY wp-config.php ./
COPY localhost.conf /etc/nginx/conf.d/default.conf
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
COPY start.sh ./
ENTRYPOINT ["sh", "start.sh"]
EXPOSE 5050