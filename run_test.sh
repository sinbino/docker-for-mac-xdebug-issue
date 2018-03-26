#!/bin/bash

echo -------------------------------- Build Test WITHOUT xdebug --------------------------------
docker build -t issue-without-xdebug -f Dockerfile-without-xdebug .

echo -------------------------------- Build Test WITH xdebug --------------------------------
docker build -t issue-with-xdebug -f Dockerfile-with-xdebug .

echo -------------------------------- Run Test WITHOUT xdebug --------------------------------
docker run -it --rm issue-without-xdebug

echo -------------------------------- Run Test WITH xdebug --------------------------------
docker run -it --rm issue-with-xdebug
