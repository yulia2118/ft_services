FROM alpine:3.12
RUN apk update
RUN apk add --no-cache telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community openrc nginx openssh openssl
RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx
RUN adduser -D admin && echo "admin:admin" | chpasswd
RUN ssh-keygen -A
RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -subj "/C=RU/ST=Moscow/L=Moscow/O=21 School/OU=fdarrin/CN=localhost" -keyout /etc/ssl/private/localhost.key -out /etc/ssl/certs/localhost.crt
COPY localhost.conf /etc/nginx/conf.d/default.conf
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
COPY start.sh ./
ENTRYPOINT ["sh", "start.sh"]
EXPOSE 80 443 22