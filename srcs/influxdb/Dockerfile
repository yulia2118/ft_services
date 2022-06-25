FROM alpine:3.12
RUN apk update
RUN apk add --no-cache telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community influxdb
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
COPY start.sh ./
ENTRYPOINT ["sh", "start.sh"]
EXPOSE 8086