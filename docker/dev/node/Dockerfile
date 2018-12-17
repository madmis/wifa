FROM node:8

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
RUN echo 'PS1="\[\033[36m\]\u\[\033[m\]@\[\033[95;1m\]wifa.client:\[\033[34m\]\w\[\033[m\]\$ "' >> ~/.bashrc
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

RUN apt-get update && apt-get install -y \
    vim \
    wget

RUN npm init -y
RUN npm install --global @vue/cli

COPY ./docker-entrypoint.sh /
RUN chmod +x /docker-entrypoint.sh

RUN mkdir -p /var/www/client
WORKDIR /var/www/client

ENTRYPOINT ["/bin/bash", "/docker-entrypoint.sh"]
