WIFA
========================

Ports set used for project services: 86**

## Docker configuration
```
docker network create -d bridge --subnet 192.168.0.0/24 --gateway 192.168.0.1 wifa_net
```