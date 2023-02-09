FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx openssl

EXPOSE 443

# nginx SSL
RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
        -out /etc/ssl/certs/nginx.crt \
        -keyout /etc/ssl/private/nginx.key \
        -subj "/C=NL/ST=Amsterdam/L=Amsterdam/O=Codam/CN=mgroen/"

RUN mkdir -p /run/nginx
COPY conf/nginx.conf /etc/nginx/conf.d/default.conf

ENTRYPOINT ["nginx", "-g", "daemon off;"]