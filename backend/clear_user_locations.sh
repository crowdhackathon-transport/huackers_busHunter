#!/usr/bin/env bash
#/bin/bash

user="trans"
pass="Tr@n$"
db="trans"
query="DELETE  FROM user_locations WHERE TIMEDIFF( NOW( ) ,  time ) >= '00:01:00'"

echo "$query"

mysql --user=$user --password=$pass --database=$db --execute="$query"

