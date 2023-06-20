#!/bin/bash

docker build . -t project:classic_sql_website
docker build ./db -t project:classic_sql_db