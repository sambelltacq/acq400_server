#!/usr/bin/env bash
sudo docker rm $(sudo docker ps -a -q) -f
sudo docker volume prune -f
sudo docker compose up --build


#sudo docker compose build
#sudo docker compose build --no-cache
#sudo docker compose up