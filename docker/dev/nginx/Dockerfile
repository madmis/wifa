FROM nginx:1.15

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
RUN echo 'PS1="\[\033[36m\]\u\[\033[m\]@\[\033[95;1m\]wifa-nginx:\[\033[34m\]\w\[\033[m\]\$ "' >> ~/.bashrc
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
RUN apt-get update && apt-get install -y \
    vim \
    wget \
    apt-utils
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

ADD core.conf /etc/nginx/conf.d/
ADD client.conf /etc/nginx/conf.d/

RUN rm /etc/nginx/conf.d/default.conf
RUN rm /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx/

RUN mkdir -p /var/www/client
RUN mkdir -p /var/www/core

COPY ./docker-entrypoint.sh /
RUN chmod +x /docker-entrypoint.sh

WORKDIR /var/www/client

ENTRYPOINT ["/bin/bash", "/docker-entrypoint.sh"]

