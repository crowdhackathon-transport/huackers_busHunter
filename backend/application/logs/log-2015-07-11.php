<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2015-07-11 00:00:25 --> Config Class Initialized
INFO - 2015-07-11 00:00:25 --> Hooks Class Initialized
DEBUG - 2015-07-11 00:00:25 --> UTF-8 Support Enabled
INFO - 2015-07-11 00:00:25 --> Utf8 Class Initialized
INFO - 2015-07-11 00:00:25 --> URI Class Initialized
INFO - 2015-07-11 00:00:25 --> Router Class Initialized
INFO - 2015-07-11 00:00:25 --> Output Class Initialized
INFO - 2015-07-11 00:00:25 --> Security Class Initialized
DEBUG - 2015-07-11 00:00:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 00:00:25 --> Input Class Initialized
INFO - 2015-07-11 00:00:25 --> Language Class Initialized
INFO - 2015-07-11 00:00:25 --> Loader Class Initialized
INFO - 2015-07-11 00:00:25 --> Helper loaded: url_helper
INFO - 2015-07-11 00:00:25 --> Helper loaded: directions_helper
INFO - 2015-07-11 00:00:25 --> Database Driver Class Initialized
INFO - 2015-07-11 00:00:25 --> Model Class Initialized
INFO - 2015-07-11 00:00:25 --> Model Class Initialized
INFO - 2015-07-11 00:00:25 --> Model Class Initialized
INFO - 2015-07-11 00:00:25 --> Controller Class Initialized
DEBUG - 2015-07-11 00:00:25 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 00:00:25 --> Helper loaded: inflector_helper
ERROR - 2015-07-11 00:00:25 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-11 00:00:25 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-11 00:00:25 --> Array
INFO - 2015-07-11 00:00:25 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-11 00:00:25 --> 
INFO - 2015-07-11 00:00:25 --> insert 7 2
INFO - 2015-07-11 00:08:44 --> Config Class Initialized
INFO - 2015-07-11 00:08:44 --> Hooks Class Initialized
DEBUG - 2015-07-11 00:08:44 --> UTF-8 Support Enabled
INFO - 2015-07-11 00:08:44 --> Utf8 Class Initialized
INFO - 2015-07-11 00:08:44 --> URI Class Initialized
INFO - 2015-07-11 00:08:44 --> Router Class Initialized
INFO - 2015-07-11 00:08:44 --> Output Class Initialized
INFO - 2015-07-11 00:08:44 --> Security Class Initialized
DEBUG - 2015-07-11 00:08:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 00:08:44 --> Input Class Initialized
INFO - 2015-07-11 00:08:44 --> Language Class Initialized
INFO - 2015-07-11 00:08:44 --> Loader Class Initialized
INFO - 2015-07-11 00:08:44 --> Helper loaded: url_helper
INFO - 2015-07-11 00:08:44 --> Helper loaded: directions_helper
INFO - 2015-07-11 00:08:44 --> Database Driver Class Initialized
INFO - 2015-07-11 00:08:44 --> Model Class Initialized
INFO - 2015-07-11 00:08:44 --> Model Class Initialized
INFO - 2015-07-11 00:08:44 --> Model Class Initialized
INFO - 2015-07-11 00:08:44 --> Controller Class Initialized
DEBUG - 2015-07-11 00:08:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 00:08:44 --> Helper loaded: inflector_helper
INFO - 2015-07-11 00:08:44 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-11 00:08:44 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-11 00:08:44 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-11 00:08:44 --> Config Class Initialized
INFO - 2015-07-11 00:08:44 --> Hooks Class Initialized
DEBUG - 2015-07-11 00:08:44 --> UTF-8 Support Enabled
INFO - 2015-07-11 00:08:44 --> Utf8 Class Initialized
INFO - 2015-07-11 00:08:44 --> URI Class Initialized
INFO - 2015-07-11 00:08:44 --> Router Class Initialized
INFO - 2015-07-11 00:08:44 --> Output Class Initialized
INFO - 2015-07-11 00:08:44 --> Security Class Initialized
DEBUG - 2015-07-11 00:08:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 00:08:44 --> Input Class Initialized
INFO - 2015-07-11 00:08:44 --> Language Class Initialized
INFO - 2015-07-11 00:08:44 --> Loader Class Initialized
INFO - 2015-07-11 00:08:44 --> Helper loaded: url_helper
INFO - 2015-07-11 00:08:44 --> Helper loaded: directions_helper
INFO - 2015-07-11 00:08:44 --> Database Driver Class Initialized
INFO - 2015-07-11 00:08:44 --> Model Class Initialized
INFO - 2015-07-11 00:08:44 --> Model Class Initialized
INFO - 2015-07-11 00:08:44 --> Model Class Initialized
INFO - 2015-07-11 00:08:44 --> Controller Class Initialized
DEBUG - 2015-07-11 00:08:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 00:08:44 --> Helper loaded: inflector_helper
INFO - 2015-07-11 00:08:52 --> Config Class Initialized
INFO - 2015-07-11 00:08:52 --> Hooks Class Initialized
DEBUG - 2015-07-11 00:08:52 --> UTF-8 Support Enabled
INFO - 2015-07-11 00:08:52 --> Utf8 Class Initialized
INFO - 2015-07-11 00:08:52 --> URI Class Initialized
INFO - 2015-07-11 00:08:52 --> Router Class Initialized
INFO - 2015-07-11 00:08:52 --> Output Class Initialized
INFO - 2015-07-11 00:08:52 --> Security Class Initialized
DEBUG - 2015-07-11 00:08:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 00:08:52 --> Input Class Initialized
INFO - 2015-07-11 00:08:52 --> Language Class Initialized
INFO - 2015-07-11 00:08:52 --> Loader Class Initialized
INFO - 2015-07-11 00:08:52 --> Helper loaded: url_helper
INFO - 2015-07-11 00:08:52 --> Helper loaded: directions_helper
INFO - 2015-07-11 00:08:52 --> Database Driver Class Initialized
INFO - 2015-07-11 00:08:52 --> Model Class Initialized
INFO - 2015-07-11 00:08:52 --> Model Class Initialized
INFO - 2015-07-11 00:08:52 --> Model Class Initialized
INFO - 2015-07-11 00:08:52 --> Controller Class Initialized
DEBUG - 2015-07-11 00:08:52 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 00:08:52 --> Helper loaded: inflector_helper
ERROR - 2015-07-11 00:08:52 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-11 00:08:52 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-11 00:08:52 --> Array
INFO - 2015-07-11 00:08:52 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-11 00:08:52 --> 
INFO - 2015-07-11 00:08:52 --> Config Class Initialized
INFO - 2015-07-11 00:08:52 --> Hooks Class Initialized
DEBUG - 2015-07-11 00:08:52 --> UTF-8 Support Enabled
INFO - 2015-07-11 00:08:52 --> Utf8 Class Initialized
INFO - 2015-07-11 00:08:52 --> insert 7 2
INFO - 2015-07-11 00:08:52 --> URI Class Initialized
INFO - 2015-07-11 00:08:52 --> Router Class Initialized
INFO - 2015-07-11 00:08:52 --> Output Class Initialized
INFO - 2015-07-11 00:08:52 --> Security Class Initialized
DEBUG - 2015-07-11 00:08:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 00:08:52 --> Input Class Initialized
INFO - 2015-07-11 00:08:52 --> Language Class Initialized
INFO - 2015-07-11 00:08:52 --> Loader Class Initialized
INFO - 2015-07-11 00:08:52 --> Helper loaded: url_helper
INFO - 2015-07-11 00:08:52 --> Helper loaded: directions_helper
INFO - 2015-07-11 00:08:52 --> Database Driver Class Initialized
INFO - 2015-07-11 00:08:52 --> Model Class Initialized
INFO - 2015-07-11 00:08:52 --> Model Class Initialized
INFO - 2015-07-11 00:08:52 --> Model Class Initialized
INFO - 2015-07-11 00:08:52 --> Controller Class Initialized
DEBUG - 2015-07-11 00:08:52 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 00:08:52 --> Helper loaded: inflector_helper
ERROR - 2015-07-11 00:08:52 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-11 00:08:52 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-11 00:08:52 --> Array
INFO - 2015-07-11 00:08:52 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-11 00:08:52 --> 23
INFO - 2015-07-11 00:08:52 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-11 00:08:52', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-11 00:08:52 --> update 7 2
INFO - 2015-07-11 11:54:01 --> Config Class Initialized
INFO - 2015-07-11 11:54:01 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:01 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:01 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:01 --> URI Class Initialized
INFO - 2015-07-11 11:54:01 --> Router Class Initialized
INFO - 2015-07-11 11:54:01 --> Output Class Initialized
INFO - 2015-07-11 11:54:01 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:01 --> Input Class Initialized
INFO - 2015-07-11 11:54:01 --> Language Class Initialized
INFO - 2015-07-11 11:54:01 --> Loader Class Initialized
INFO - 2015-07-11 11:54:01 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:01 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:01 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:01 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:01 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:01 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9619559)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7042317)) + SIN(RADIANS(37.9619559)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-11 11:54:01 --> Config Class Initialized
INFO - 2015-07-11 11:54:01 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:01 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:01 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:01 --> URI Class Initialized
INFO - 2015-07-11 11:54:01 --> Router Class Initialized
INFO - 2015-07-11 11:54:01 --> Output Class Initialized
INFO - 2015-07-11 11:54:01 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:01 --> Input Class Initialized
INFO - 2015-07-11 11:54:01 --> Language Class Initialized
INFO - 2015-07-11 11:54:01 --> Loader Class Initialized
INFO - 2015-07-11 11:54:01 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:01 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:01 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:01 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:01 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:01 --> Config Class Initialized
INFO - 2015-07-11 11:54:01 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:01 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:01 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:01 --> URI Class Initialized
INFO - 2015-07-11 11:54:01 --> Router Class Initialized
INFO - 2015-07-11 11:54:01 --> Output Class Initialized
INFO - 2015-07-11 11:54:01 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:01 --> Input Class Initialized
INFO - 2015-07-11 11:54:01 --> Language Class Initialized
INFO - 2015-07-11 11:54:01 --> Loader Class Initialized
INFO - 2015-07-11 11:54:01 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:01 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:01 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Model Class Initialized
INFO - 2015-07-11 11:54:01 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:01 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:01 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:12 --> Config Class Initialized
INFO - 2015-07-11 11:54:12 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:12 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:12 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:12 --> URI Class Initialized
INFO - 2015-07-11 11:54:12 --> Router Class Initialized
INFO - 2015-07-11 11:54:12 --> Output Class Initialized
INFO - 2015-07-11 11:54:12 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:12 --> Input Class Initialized
INFO - 2015-07-11 11:54:12 --> Language Class Initialized
INFO - 2015-07-11 11:54:12 --> Loader Class Initialized
INFO - 2015-07-11 11:54:12 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:12 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:12 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:12 --> Model Class Initialized
INFO - 2015-07-11 11:54:12 --> Model Class Initialized
INFO - 2015-07-11 11:54:12 --> Model Class Initialized
INFO - 2015-07-11 11:54:12 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:12 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:12 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:12 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='500' and bus_stops.waypoint='1'
INFO - 2015-07-11 11:54:12 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='500' and bus_stops.waypoint='2'
INFO - 2015-07-11 11:54:12 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='500' and bus_stops.waypoint='3'
INFO - 2015-07-11 11:54:12 --> Config Class Initialized
INFO - 2015-07-11 11:54:12 --> Hooks Class Initialized
ERROR - 2015-07-11 11:54:12 --> Severity: Notice --> Trying to get property of non-object /var/www/html/trans/application/controllers/api/Routes.php 162
DEBUG - 2015-07-11 11:54:12 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:12 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:12 --> URI Class Initialized
INFO - 2015-07-11 11:54:12 --> Router Class Initialized
INFO - 2015-07-11 11:54:12 --> Output Class Initialized
INFO - 2015-07-11 11:54:12 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:12 --> Input Class Initialized
INFO - 2015-07-11 11:54:12 --> Language Class Initialized
INFO - 2015-07-11 11:54:12 --> Loader Class Initialized
INFO - 2015-07-11 11:54:12 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:12 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:12 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:12 --> Model Class Initialized
INFO - 2015-07-11 11:54:12 --> Model Class Initialized
INFO - 2015-07-11 11:54:12 --> Model Class Initialized
INFO - 2015-07-11 11:54:12 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:12 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:12 --> Helper loaded: inflector_helper
ERROR - 2015-07-11 11:54:12 --> Severity: Warning --> file_get_contents(https://maps.googleapis.com/maps/api/directions/json?origin=37.945805,23.641300&amp;destination=&amp;sensor=false&amp;waypoints=37.944710,23.645916): failed to open stream: HTTP request failed! HTTP/1.0 400 Bad Request
 /var/www/html/trans/application/helpers/directions_helper.php 14
ERROR - 2015-07-11 11:54:12 --> Severity: Notice --> Trying to get property of non-object /var/www/html/trans/application/helpers/directions_helper.php 17
ERROR - 2015-07-11 11:54:12 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/trans/application/helpers/directions_helper.php 17
ERROR - 2015-07-11 11:54:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/trans/system/core/Exceptions.php:272) /var/www/html/trans/application/libraries/REST_Controller.php 507
ERROR - 2015-07-11 11:54:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/trans/system/core/Exceptions.php:272) /var/www/html/trans/system/core/Common.php 569
ERROR - 2015-07-11 11:54:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/trans/system/core/Exceptions.php:272) /var/www/html/trans/application/libraries/REST_Controller.php 530
INFO - 2015-07-11 11:54:31 --> Config Class Initialized
INFO - 2015-07-11 11:54:31 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:31 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:31 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:31 --> URI Class Initialized
INFO - 2015-07-11 11:54:31 --> Router Class Initialized
INFO - 2015-07-11 11:54:31 --> Output Class Initialized
INFO - 2015-07-11 11:54:31 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:31 --> Input Class Initialized
INFO - 2015-07-11 11:54:31 --> Language Class Initialized
INFO - 2015-07-11 11:54:31 --> Loader Class Initialized
INFO - 2015-07-11 11:54:31 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:31 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:31 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:31 --> Model Class Initialized
INFO - 2015-07-11 11:54:31 --> Model Class Initialized
INFO - 2015-07-11 11:54:31 --> Model Class Initialized
INFO - 2015-07-11 11:54:31 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:31 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:31 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:31 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9620688)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7041544)) + SIN(RADIANS(37.9620688)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-11 11:54:32 --> Config Class Initialized
INFO - 2015-07-11 11:54:32 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:32 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:32 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:32 --> URI Class Initialized
INFO - 2015-07-11 11:54:32 --> Router Class Initialized
INFO - 2015-07-11 11:54:32 --> Output Class Initialized
INFO - 2015-07-11 11:54:32 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:32 --> Input Class Initialized
INFO - 2015-07-11 11:54:32 --> Language Class Initialized
INFO - 2015-07-11 11:54:32 --> Loader Class Initialized
INFO - 2015-07-11 11:54:32 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:32 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:32 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:32 --> Model Class Initialized
INFO - 2015-07-11 11:54:32 --> Model Class Initialized
INFO - 2015-07-11 11:54:32 --> Model Class Initialized
INFO - 2015-07-11 11:54:32 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:32 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:32 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:32 --> Config Class Initialized
INFO - 2015-07-11 11:54:32 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:32 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:32 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:32 --> URI Class Initialized
INFO - 2015-07-11 11:54:32 --> Router Class Initialized
INFO - 2015-07-11 11:54:32 --> Output Class Initialized
INFO - 2015-07-11 11:54:32 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:32 --> Input Class Initialized
INFO - 2015-07-11 11:54:32 --> Language Class Initialized
INFO - 2015-07-11 11:54:32 --> Loader Class Initialized
INFO - 2015-07-11 11:54:32 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:32 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:32 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:32 --> Model Class Initialized
INFO - 2015-07-11 11:54:32 --> Model Class Initialized
INFO - 2015-07-11 11:54:32 --> Model Class Initialized
INFO - 2015-07-11 11:54:32 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:32 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:32 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:45 --> Config Class Initialized
INFO - 2015-07-11 11:54:45 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:45 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:45 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:45 --> URI Class Initialized
INFO - 2015-07-11 11:54:45 --> Router Class Initialized
INFO - 2015-07-11 11:54:45 --> Output Class Initialized
INFO - 2015-07-11 11:54:45 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:45 --> Input Class Initialized
INFO - 2015-07-11 11:54:45 --> Language Class Initialized
INFO - 2015-07-11 11:54:45 --> Loader Class Initialized
INFO - 2015-07-11 11:54:45 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:45 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:45 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:45 --> Model Class Initialized
INFO - 2015-07-11 11:54:45 --> Model Class Initialized
INFO - 2015-07-11 11:54:45 --> Model Class Initialized
INFO - 2015-07-11 11:54:45 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:45 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:45 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:45 --> Config Class Initialized
INFO - 2015-07-11 11:54:45 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:54:45 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:54:45 --> Utf8 Class Initialized
INFO - 2015-07-11 11:54:45 --> URI Class Initialized
INFO - 2015-07-11 11:54:45 --> Router Class Initialized
INFO - 2015-07-11 11:54:45 --> Output Class Initialized
INFO - 2015-07-11 11:54:45 --> Security Class Initialized
DEBUG - 2015-07-11 11:54:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:54:45 --> Input Class Initialized
INFO - 2015-07-11 11:54:45 --> Language Class Initialized
INFO - 2015-07-11 11:54:45 --> Loader Class Initialized
INFO - 2015-07-11 11:54:45 --> Helper loaded: url_helper
INFO - 2015-07-11 11:54:45 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:54:45 --> Database Driver Class Initialized
INFO - 2015-07-11 11:54:45 --> Model Class Initialized
INFO - 2015-07-11 11:54:45 --> Model Class Initialized
INFO - 2015-07-11 11:54:45 --> Model Class Initialized
INFO - 2015-07-11 11:54:45 --> Controller Class Initialized
DEBUG - 2015-07-11 11:54:45 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:54:45 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:54:45 --> SELECT *
FROM `bus_lines`
INFO - 2015-07-11 11:54:45 --> SELECT   line_id, direction_flag, line_name_el, line_name_en, (
                    6371 * ACOS(COS(RADIANS(37.9620845)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7041175)) + SIN(RADIANS(37.9620845)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops, line_stops, bus_lines
            where bus_stops.s_id = line_stops.stop_id and line_stops.line_id = bus_lines._id
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-11 11:57:50 --> Config Class Initialized
INFO - 2015-07-11 11:57:50 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:57:50 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:57:50 --> Utf8 Class Initialized
INFO - 2015-07-11 11:57:50 --> URI Class Initialized
INFO - 2015-07-11 11:57:50 --> Router Class Initialized
INFO - 2015-07-11 11:57:50 --> Output Class Initialized
INFO - 2015-07-11 11:57:50 --> Security Class Initialized
DEBUG - 2015-07-11 11:57:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:57:50 --> Input Class Initialized
INFO - 2015-07-11 11:57:50 --> Language Class Initialized
INFO - 2015-07-11 11:57:50 --> Loader Class Initialized
INFO - 2015-07-11 11:57:50 --> Helper loaded: url_helper
INFO - 2015-07-11 11:57:50 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:57:50 --> Database Driver Class Initialized
INFO - 2015-07-11 11:57:50 --> Model Class Initialized
INFO - 2015-07-11 11:57:50 --> Model Class Initialized
INFO - 2015-07-11 11:57:50 --> Model Class Initialized
INFO - 2015-07-11 11:57:50 --> Controller Class Initialized
DEBUG - 2015-07-11 11:57:50 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:57:50 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:57:51 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.963776)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7036167)) + SIN(RADIANS(37.963776)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-11 11:57:51 --> Config Class Initialized
INFO - 2015-07-11 11:57:51 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:57:51 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:57:51 --> Utf8 Class Initialized
INFO - 2015-07-11 11:57:51 --> URI Class Initialized
INFO - 2015-07-11 11:57:51 --> Router Class Initialized
INFO - 2015-07-11 11:57:51 --> Output Class Initialized
INFO - 2015-07-11 11:57:51 --> Security Class Initialized
DEBUG - 2015-07-11 11:57:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:57:51 --> Input Class Initialized
INFO - 2015-07-11 11:57:51 --> Language Class Initialized
INFO - 2015-07-11 11:57:51 --> Loader Class Initialized
INFO - 2015-07-11 11:57:51 --> Helper loaded: url_helper
INFO - 2015-07-11 11:57:51 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:57:51 --> Database Driver Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Controller Class Initialized
DEBUG - 2015-07-11 11:57:51 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:57:51 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:57:51 --> Config Class Initialized
INFO - 2015-07-11 11:57:51 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:57:51 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:57:51 --> Utf8 Class Initialized
INFO - 2015-07-11 11:57:51 --> URI Class Initialized
INFO - 2015-07-11 11:57:51 --> Router Class Initialized
INFO - 2015-07-11 11:57:51 --> Output Class Initialized
INFO - 2015-07-11 11:57:51 --> Security Class Initialized
DEBUG - 2015-07-11 11:57:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:57:51 --> Input Class Initialized
INFO - 2015-07-11 11:57:51 --> Language Class Initialized
INFO - 2015-07-11 11:57:51 --> Loader Class Initialized
INFO - 2015-07-11 11:57:51 --> Helper loaded: url_helper
INFO - 2015-07-11 11:57:51 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:57:51 --> Database Driver Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Controller Class Initialized
DEBUG - 2015-07-11 11:57:51 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:57:51 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:57:51 --> Config Class Initialized
INFO - 2015-07-11 11:57:51 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:57:51 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:57:51 --> Utf8 Class Initialized
INFO - 2015-07-11 11:57:51 --> URI Class Initialized
INFO - 2015-07-11 11:57:51 --> Router Class Initialized
INFO - 2015-07-11 11:57:51 --> Output Class Initialized
INFO - 2015-07-11 11:57:51 --> Security Class Initialized
DEBUG - 2015-07-11 11:57:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:57:51 --> Input Class Initialized
INFO - 2015-07-11 11:57:51 --> Language Class Initialized
INFO - 2015-07-11 11:57:51 --> Loader Class Initialized
INFO - 2015-07-11 11:57:51 --> Helper loaded: url_helper
INFO - 2015-07-11 11:57:51 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:57:51 --> Database Driver Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Model Class Initialized
INFO - 2015-07-11 11:57:51 --> Controller Class Initialized
DEBUG - 2015-07-11 11:57:51 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:57:51 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:57:52 --> Config Class Initialized
INFO - 2015-07-11 11:57:52 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:57:52 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:57:52 --> Utf8 Class Initialized
INFO - 2015-07-11 11:57:52 --> URI Class Initialized
INFO - 2015-07-11 11:57:52 --> Router Class Initialized
INFO - 2015-07-11 11:57:52 --> Output Class Initialized
INFO - 2015-07-11 11:57:52 --> Security Class Initialized
DEBUG - 2015-07-11 11:57:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:57:52 --> Input Class Initialized
INFO - 2015-07-11 11:57:52 --> Language Class Initialized
INFO - 2015-07-11 11:57:52 --> Loader Class Initialized
INFO - 2015-07-11 11:57:52 --> Helper loaded: url_helper
INFO - 2015-07-11 11:57:52 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:57:52 --> Database Driver Class Initialized
INFO - 2015-07-11 11:57:52 --> Model Class Initialized
INFO - 2015-07-11 11:57:52 --> Model Class Initialized
INFO - 2015-07-11 11:57:52 --> Model Class Initialized
INFO - 2015-07-11 11:57:52 --> Controller Class Initialized
DEBUG - 2015-07-11 11:57:52 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:57:52 --> Helper loaded: inflector_helper
INFO - 2015-07-11 11:57:52 --> Config Class Initialized
INFO - 2015-07-11 11:57:52 --> Hooks Class Initialized
DEBUG - 2015-07-11 11:57:52 --> UTF-8 Support Enabled
INFO - 2015-07-11 11:57:52 --> Utf8 Class Initialized
INFO - 2015-07-11 11:57:52 --> URI Class Initialized
INFO - 2015-07-11 11:57:52 --> Router Class Initialized
INFO - 2015-07-11 11:57:52 --> Output Class Initialized
INFO - 2015-07-11 11:57:52 --> Security Class Initialized
DEBUG - 2015-07-11 11:57:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-11 11:57:52 --> Input Class Initialized
INFO - 2015-07-11 11:57:52 --> Language Class Initialized
INFO - 2015-07-11 11:57:52 --> Loader Class Initialized
INFO - 2015-07-11 11:57:52 --> Helper loaded: url_helper
INFO - 2015-07-11 11:57:52 --> Helper loaded: directions_helper
INFO - 2015-07-11 11:57:52 --> Database Driver Class Initialized
INFO - 2015-07-11 11:57:52 --> Model Class Initialized
INFO - 2015-07-11 11:57:52 --> Model Class Initialized
INFO - 2015-07-11 11:57:52 --> Model Class Initialized
INFO - 2015-07-11 11:57:52 --> Controller Class Initialized
DEBUG - 2015-07-11 11:57:52 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-11 11:57:52 --> Helper loaded: inflector_helper
