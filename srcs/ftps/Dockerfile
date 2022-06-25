FROM alpine:3.12
RUN apk update
RUN apk add --no-cache telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community vsftpd openssl
RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes -subj "/C=RU/ST=Moscow/L=Moscow/O=21 School/OU=fdarrin/CN=localhost" -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
RUN adduser -D admin && echo "admin:admin" | chpasswd
COPY start.sh ./
ENTRYPOINT ["sh", "start.sh"]
EXPOSE 20 21 37000