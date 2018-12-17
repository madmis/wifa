FROM madmis/php7.2:latest

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
RUN echo 'PS1="\[\033[36m\]\u\[\033[m\]@\[\033[95;1m\]wifa.core:\[\033[34m\]\w\[\033[m\]\$ "' >> ~/.bashrc
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

RUN apt-get update && apt-get install -y acl

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
COPY app.conf /usr/local/etc/php/php.ini
COPY pool.app.conf /usr/local/etc/php-fpm.d/
COPY supervisord.conf /etc/supervisor/supervisord.conf
COPY supervisord.conf /etc/supervisor/supervisord.conf
COPY composer/auth.json /root/.composer/auth.json
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN chown -R www-data:www-data /var/www

COPY ./docker-entrypoint.sh /
RUN chmod +x /docker-entrypoint.sh

WORKDIR /var/www

ENTRYPOINT ["/bin/bash", "/docker-entrypoint.sh"]
