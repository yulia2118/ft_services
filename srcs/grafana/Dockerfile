FROM alpine:3.12
RUN apk update
RUN apk add --no-cache telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community --repository=http://dl-cdn.alpinelinux.org/alpine/edge/main libc6-compat
ADD https://dl.grafana.com/oss/release/grafana-7.2.2.linux-amd64.tar.gz ./
RUN tar -xvf grafana*tar* --strip-components 1
RUN rm -rf ./grafana*tar*
COPY grafana.db ./data/
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf
COPY start.sh ./
ENTRYPOINT ["sh", "start.sh"]
EXPOSE 3000