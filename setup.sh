# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    setup.sh                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: fdarrin <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/01/29 15:49:36 by fdarrin           #+#    #+#              #
#    Updated: 2021/03/01 14:51:19 by fdarrin          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

minikube start --vm-driver=virtualbox
eval $(minikube docker-env)
minikube dashboard &
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"
kubectl apply -f srcs/metallb_config.yaml
docker build -t influxdb srcs/influxdb
kubectl apply -f srcs/influxdb/influxdb.yaml
docker build -t mysql srcs/mysql
kubectl apply -f srcs/mysql/mysql.yaml
docker build -t nginx srcs/nginx
kubectl apply -f srcs/nginx/nginx.yaml
docker build -t ftps srcs/ftps
kubectl apply -f srcs/ftps/ftps.yaml
docker build -t wordpress srcs/wordpress
kubectl apply -f srcs/wordpress/wordpress.yaml
docker build -t grafana srcs/grafana
kubectl apply -f srcs/grafana/grafana.yaml
docker build -t phpmyadmin srcs/phpmyadmin
kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml