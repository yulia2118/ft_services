FROM alpine:3.12
RUN apk update
RUN apk add --no-cache telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community mariadb mariadb-client mysql-client
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
COPY start.sh ./
COPY wp-dump.sql ./
COPY db_init.sh ./
RUN chmod +x db_init.sh
ENTRYPOINT ["sh", "start.sh"]
EXPOSE 3306