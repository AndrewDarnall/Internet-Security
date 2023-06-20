#!/bin/bash

docker build . -t project:regular_sql_website_fixed
docker build ./db -t project:regular_sql_db