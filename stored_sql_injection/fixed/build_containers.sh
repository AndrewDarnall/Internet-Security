#!/bin/bash

# Container build example
docker build . -t project:stored_sql_website_fixed
docker build ./db -t project:stored_sql_db