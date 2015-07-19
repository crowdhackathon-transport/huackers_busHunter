<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2015-07-15 17:46:14 --> Config Class Initialized
INFO - 2015-07-15 17:46:14 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:46:14 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:46:14 --> Utf8 Class Initialized
INFO - 2015-07-15 17:46:14 --> URI Class Initialized
INFO - 2015-07-15 17:46:14 --> Router Class Initialized
INFO - 2015-07-15 17:46:14 --> Output Class Initialized
INFO - 2015-07-15 17:46:14 --> Security Class Initialized
DEBUG - 2015-07-15 17:46:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:46:14 --> Input Class Initialized
INFO - 2015-07-15 17:46:14 --> Language Class Initialized
INFO - 2015-07-15 17:46:14 --> Loader Class Initialized
INFO - 2015-07-15 17:46:14 --> Helper loaded: url_helper
INFO - 2015-07-15 17:46:14 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:46:14 --> Database Driver Class Initialized
INFO - 2015-07-15 17:46:14 --> Model Class Initialized
INFO - 2015-07-15 17:46:14 --> Model Class Initialized
INFO - 2015-07-15 17:46:14 --> Model Class Initialized
INFO - 2015-07-15 17:46:14 --> Controller Class Initialized
DEBUG - 2015-07-15 17:46:14 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:46:14 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 17:46:14 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 17:46:14 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 17:46:14 --> Array
INFO - 2015-07-15 17:46:15 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 17:46:15 --> 
INFO - 2015-07-15 17:46:15 --> insert 7 2
INFO - 2015-07-15 17:52:33 --> Config Class Initialized
INFO - 2015-07-15 17:52:33 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:52:33 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:52:33 --> Utf8 Class Initialized
INFO - 2015-07-15 17:52:33 --> URI Class Initialized
INFO - 2015-07-15 17:52:33 --> Router Class Initialized
INFO - 2015-07-15 17:52:33 --> Output Class Initialized
INFO - 2015-07-15 17:52:33 --> Security Class Initialized
DEBUG - 2015-07-15 17:52:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:52:33 --> Input Class Initialized
INFO - 2015-07-15 17:52:33 --> Language Class Initialized
INFO - 2015-07-15 17:52:33 --> Loader Class Initialized
INFO - 2015-07-15 17:52:33 --> Helper loaded: url_helper
INFO - 2015-07-15 17:52:33 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:52:33 --> Database Driver Class Initialized
INFO - 2015-07-15 17:52:33 --> Model Class Initialized
INFO - 2015-07-15 17:52:33 --> Model Class Initialized
INFO - 2015-07-15 17:52:33 --> Model Class Initialized
INFO - 2015-07-15 17:52:33 --> Controller Class Initialized
DEBUG - 2015-07-15 17:52:33 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:52:33 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:52:33 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 17:52:38 --> Config Class Initialized
INFO - 2015-07-15 17:52:38 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:52:38 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:52:38 --> Utf8 Class Initialized
INFO - 2015-07-15 17:52:38 --> URI Class Initialized
INFO - 2015-07-15 17:52:38 --> Router Class Initialized
INFO - 2015-07-15 17:52:38 --> Output Class Initialized
INFO - 2015-07-15 17:52:38 --> Security Class Initialized
DEBUG - 2015-07-15 17:52:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:52:38 --> Input Class Initialized
INFO - 2015-07-15 17:52:38 --> Language Class Initialized
INFO - 2015-07-15 17:52:38 --> Loader Class Initialized
INFO - 2015-07-15 17:52:38 --> Helper loaded: url_helper
INFO - 2015-07-15 17:52:38 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:52:38 --> Database Driver Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Controller Class Initialized
DEBUG - 2015-07-15 17:52:38 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:52:38 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:52:38 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9620057)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.700846700000003)) + SIN(RADIANS(37.9620057)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-15 17:52:38 --> Config Class Initialized
INFO - 2015-07-15 17:52:38 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:52:38 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:52:38 --> Utf8 Class Initialized
INFO - 2015-07-15 17:52:38 --> URI Class Initialized
INFO - 2015-07-15 17:52:38 --> Router Class Initialized
INFO - 2015-07-15 17:52:38 --> Output Class Initialized
INFO - 2015-07-15 17:52:38 --> Security Class Initialized
DEBUG - 2015-07-15 17:52:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:52:38 --> Input Class Initialized
INFO - 2015-07-15 17:52:38 --> Language Class Initialized
INFO - 2015-07-15 17:52:38 --> Loader Class Initialized
INFO - 2015-07-15 17:52:38 --> Helper loaded: url_helper
INFO - 2015-07-15 17:52:38 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:52:38 --> Database Driver Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Controller Class Initialized
DEBUG - 2015-07-15 17:52:38 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:52:38 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:52:38 --> Config Class Initialized
INFO - 2015-07-15 17:52:38 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:52:38 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:52:38 --> Utf8 Class Initialized
INFO - 2015-07-15 17:52:38 --> URI Class Initialized
INFO - 2015-07-15 17:52:38 --> Router Class Initialized
INFO - 2015-07-15 17:52:38 --> Output Class Initialized
INFO - 2015-07-15 17:52:38 --> Security Class Initialized
DEBUG - 2015-07-15 17:52:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:52:38 --> Input Class Initialized
INFO - 2015-07-15 17:52:38 --> Language Class Initialized
INFO - 2015-07-15 17:52:38 --> Loader Class Initialized
INFO - 2015-07-15 17:52:38 --> Helper loaded: url_helper
INFO - 2015-07-15 17:52:38 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:52:38 --> Database Driver Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Model Class Initialized
INFO - 2015-07-15 17:52:38 --> Controller Class Initialized
DEBUG - 2015-07-15 17:52:38 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:52:38 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:52:44 --> Config Class Initialized
INFO - 2015-07-15 17:52:44 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:52:44 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:52:44 --> Utf8 Class Initialized
INFO - 2015-07-15 17:52:44 --> URI Class Initialized
INFO - 2015-07-15 17:52:44 --> Router Class Initialized
INFO - 2015-07-15 17:52:44 --> Output Class Initialized
INFO - 2015-07-15 17:52:44 --> Security Class Initialized
DEBUG - 2015-07-15 17:52:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:52:44 --> Input Class Initialized
INFO - 2015-07-15 17:52:44 --> Language Class Initialized
INFO - 2015-07-15 17:52:44 --> Config Class Initialized
INFO - 2015-07-15 17:52:44 --> Loader Class Initialized
INFO - 2015-07-15 17:52:44 --> Hooks Class Initialized
INFO - 2015-07-15 17:52:44 --> Helper loaded: url_helper
INFO - 2015-07-15 17:52:44 --> Helper loaded: directions_helper
DEBUG - 2015-07-15 17:52:44 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:52:44 --> Utf8 Class Initialized
INFO - 2015-07-15 17:52:44 --> Database Driver Class Initialized
INFO - 2015-07-15 17:52:44 --> URI Class Initialized
INFO - 2015-07-15 17:52:44 --> Router Class Initialized
INFO - 2015-07-15 17:52:44 --> Output Class Initialized
INFO - 2015-07-15 17:52:44 --> Security Class Initialized
DEBUG - 2015-07-15 17:52:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:52:44 --> Input Class Initialized
INFO - 2015-07-15 17:52:44 --> Language Class Initialized
INFO - 2015-07-15 17:52:44 --> Loader Class Initialized
INFO - 2015-07-15 17:52:44 --> Helper loaded: url_helper
INFO - 2015-07-15 17:52:44 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:52:44 --> Model Class Initialized
INFO - 2015-07-15 17:52:44 --> Model Class Initialized
INFO - 2015-07-15 17:52:44 --> Database Driver Class Initialized
INFO - 2015-07-15 17:52:44 --> Model Class Initialized
INFO - 2015-07-15 17:52:44 --> Controller Class Initialized
DEBUG - 2015-07-15 17:52:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:52:44 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:52:44 --> Model Class Initialized
INFO - 2015-07-15 17:52:44 --> Model Class Initialized
INFO - 2015-07-15 17:52:44 --> Model Class Initialized
INFO - 2015-07-15 17:52:44 --> Controller Class Initialized
DEBUG - 2015-07-15 17:52:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:52:44 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:52:44 --> SELECT *
FROM `bus_lines`
INFO - 2015-07-15 17:52:44 --> SELECT   line_id, direction_flag, line_name_el, line_name_en, (
                    6371 * ACOS(COS(RADIANS(37.9620004)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7008527)) + SIN(RADIANS(37.9620004)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops, line_stops, bus_lines
            where bus_stops.s_id = line_stops.stop_id and line_stops.line_id = bus_lines._id
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-15 17:53:08 --> Config Class Initialized
INFO - 2015-07-15 17:53:08 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:53:08 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:53:08 --> Utf8 Class Initialized
INFO - 2015-07-15 17:53:08 --> Config Class Initialized
INFO - 2015-07-15 17:53:08 --> Hooks Class Initialized
INFO - 2015-07-15 17:53:08 --> URI Class Initialized
DEBUG - 2015-07-15 17:53:08 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:53:08 --> Utf8 Class Initialized
INFO - 2015-07-15 17:53:08 --> Router Class Initialized
INFO - 2015-07-15 17:53:08 --> URI Class Initialized
INFO - 2015-07-15 17:53:08 --> Output Class Initialized
INFO - 2015-07-15 17:53:08 --> Security Class Initialized
INFO - 2015-07-15 17:53:08 --> Router Class Initialized
DEBUG - 2015-07-15 17:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:53:08 --> Input Class Initialized
INFO - 2015-07-15 17:53:08 --> Language Class Initialized
INFO - 2015-07-15 17:53:08 --> Output Class Initialized
INFO - 2015-07-15 17:53:08 --> Loader Class Initialized
INFO - 2015-07-15 17:53:08 --> Security Class Initialized
INFO - 2015-07-15 17:53:08 --> Helper loaded: url_helper
DEBUG - 2015-07-15 17:53:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:53:08 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:53:08 --> Input Class Initialized
INFO - 2015-07-15 17:53:08 --> Language Class Initialized
INFO - 2015-07-15 17:53:08 --> Database Driver Class Initialized
INFO - 2015-07-15 17:53:08 --> Loader Class Initialized
INFO - 2015-07-15 17:53:08 --> Helper loaded: url_helper
INFO - 2015-07-15 17:53:08 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:53:08 --> Database Driver Class Initialized
INFO - 2015-07-15 17:53:08 --> Model Class Initialized
INFO - 2015-07-15 17:53:08 --> Model Class Initialized
INFO - 2015-07-15 17:53:08 --> Model Class Initialized
INFO - 2015-07-15 17:53:08 --> Controller Class Initialized
DEBUG - 2015-07-15 17:53:08 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:53:08 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:53:08 --> Model Class Initialized
INFO - 2015-07-15 17:53:08 --> Model Class Initialized
INFO - 2015-07-15 17:53:08 --> Model Class Initialized
INFO - 2015-07-15 17:53:08 --> Controller Class Initialized
DEBUG - 2015-07-15 17:53:08 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:53:08 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:53:08 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 17:53:08 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 17:53:08 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 17:53:57 --> Config Class Initialized
INFO - 2015-07-15 17:53:57 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:53:57 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:53:57 --> Utf8 Class Initialized
INFO - 2015-07-15 17:53:57 --> URI Class Initialized
INFO - 2015-07-15 17:53:57 --> Router Class Initialized
INFO - 2015-07-15 17:53:57 --> Output Class Initialized
INFO - 2015-07-15 17:53:57 --> Security Class Initialized
DEBUG - 2015-07-15 17:53:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:53:57 --> Input Class Initialized
INFO - 2015-07-15 17:53:57 --> Language Class Initialized
INFO - 2015-07-15 17:53:57 --> Loader Class Initialized
INFO - 2015-07-15 17:53:57 --> Helper loaded: url_helper
INFO - 2015-07-15 17:53:57 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:53:57 --> Database Driver Class Initialized
INFO - 2015-07-15 17:53:57 --> Model Class Initialized
INFO - 2015-07-15 17:53:57 --> Model Class Initialized
INFO - 2015-07-15 17:53:57 --> Model Class Initialized
INFO - 2015-07-15 17:53:57 --> Controller Class Initialized
DEBUG - 2015-07-15 17:53:57 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:53:57 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:53:57 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 17:54:01 --> Config Class Initialized
INFO - 2015-07-15 17:54:01 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:54:01 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:54:01 --> Utf8 Class Initialized
INFO - 2015-07-15 17:54:01 --> URI Class Initialized
INFO - 2015-07-15 17:54:01 --> Router Class Initialized
INFO - 2015-07-15 17:54:01 --> Output Class Initialized
INFO - 2015-07-15 17:54:01 --> Security Class Initialized
DEBUG - 2015-07-15 17:54:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:54:01 --> Input Class Initialized
INFO - 2015-07-15 17:54:01 --> Language Class Initialized
INFO - 2015-07-15 17:54:01 --> Loader Class Initialized
INFO - 2015-07-15 17:54:01 --> Helper loaded: url_helper
INFO - 2015-07-15 17:54:01 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:54:01 --> Database Driver Class Initialized
INFO - 2015-07-15 17:54:01 --> Model Class Initialized
INFO - 2015-07-15 17:54:01 --> Model Class Initialized
INFO - 2015-07-15 17:54:01 --> Model Class Initialized
INFO - 2015-07-15 17:54:01 --> Controller Class Initialized
DEBUG - 2015-07-15 17:54:01 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:54:01 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:54:01 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 17:54:05 --> Config Class Initialized
INFO - 2015-07-15 17:54:05 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:54:05 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:54:05 --> Utf8 Class Initialized
INFO - 2015-07-15 17:54:05 --> URI Class Initialized
INFO - 2015-07-15 17:54:05 --> Router Class Initialized
INFO - 2015-07-15 17:54:05 --> Output Class Initialized
INFO - 2015-07-15 17:54:05 --> Security Class Initialized
DEBUG - 2015-07-15 17:54:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:54:05 --> Input Class Initialized
INFO - 2015-07-15 17:54:05 --> Language Class Initialized
INFO - 2015-07-15 17:54:05 --> Loader Class Initialized
INFO - 2015-07-15 17:54:05 --> Helper loaded: url_helper
INFO - 2015-07-15 17:54:05 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:54:05 --> Database Driver Class Initialized
INFO - 2015-07-15 17:54:05 --> Model Class Initialized
INFO - 2015-07-15 17:54:05 --> Model Class Initialized
INFO - 2015-07-15 17:54:05 --> Model Class Initialized
INFO - 2015-07-15 17:54:05 --> Controller Class Initialized
DEBUG - 2015-07-15 17:54:05 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:54:05 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:54:05 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 17:54:22 --> Config Class Initialized
INFO - 2015-07-15 17:54:22 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:54:22 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:54:22 --> Utf8 Class Initialized
INFO - 2015-07-15 17:54:22 --> URI Class Initialized
INFO - 2015-07-15 17:54:22 --> Router Class Initialized
INFO - 2015-07-15 17:54:22 --> Output Class Initialized
INFO - 2015-07-15 17:54:22 --> Security Class Initialized
DEBUG - 2015-07-15 17:54:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:54:22 --> Input Class Initialized
INFO - 2015-07-15 17:54:22 --> Language Class Initialized
INFO - 2015-07-15 17:54:22 --> Loader Class Initialized
INFO - 2015-07-15 17:54:22 --> Helper loaded: url_helper
INFO - 2015-07-15 17:54:22 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:54:22 --> Database Driver Class Initialized
INFO - 2015-07-15 17:54:22 --> Model Class Initialized
INFO - 2015-07-15 17:54:22 --> Model Class Initialized
INFO - 2015-07-15 17:54:22 --> Model Class Initialized
INFO - 2015-07-15 17:54:22 --> Controller Class Initialized
DEBUG - 2015-07-15 17:54:22 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:54:22 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 17:54:22 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 17:54:22 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 17:54:22 --> Array
INFO - 2015-07-15 17:54:22 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 17:54:22 --> 
INFO - 2015-07-15 17:54:22 --> insert 7 2
INFO - 2015-07-15 17:56:20 --> Config Class Initialized
INFO - 2015-07-15 17:56:20 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:56:20 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:56:20 --> Utf8 Class Initialized
INFO - 2015-07-15 17:56:20 --> URI Class Initialized
INFO - 2015-07-15 17:56:20 --> Router Class Initialized
INFO - 2015-07-15 17:56:20 --> Output Class Initialized
INFO - 2015-07-15 17:56:20 --> Security Class Initialized
DEBUG - 2015-07-15 17:56:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:56:20 --> Input Class Initialized
INFO - 2015-07-15 17:56:20 --> Language Class Initialized
INFO - 2015-07-15 17:56:20 --> Loader Class Initialized
INFO - 2015-07-15 17:56:20 --> Helper loaded: url_helper
INFO - 2015-07-15 17:56:20 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:56:20 --> Database Driver Class Initialized
INFO - 2015-07-15 17:56:20 --> Model Class Initialized
INFO - 2015-07-15 17:56:20 --> Model Class Initialized
INFO - 2015-07-15 17:56:20 --> Model Class Initialized
INFO - 2015-07-15 17:56:20 --> Controller Class Initialized
DEBUG - 2015-07-15 17:56:20 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:56:20 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 17:56:20 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 17:56:20 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 17:56:20 --> Array
INFO - 2015-07-15 17:56:20 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 17:56:20 --> 
INFO - 2015-07-15 17:56:20 --> insert 7 2
INFO - 2015-07-15 17:56:26 --> Config Class Initialized
INFO - 2015-07-15 17:56:26 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:56:26 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:56:26 --> Utf8 Class Initialized
INFO - 2015-07-15 17:56:26 --> URI Class Initialized
INFO - 2015-07-15 17:56:26 --> Router Class Initialized
INFO - 2015-07-15 17:56:26 --> Output Class Initialized
INFO - 2015-07-15 17:56:26 --> Security Class Initialized
DEBUG - 2015-07-15 17:56:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:56:26 --> Input Class Initialized
INFO - 2015-07-15 17:56:26 --> Language Class Initialized
INFO - 2015-07-15 17:56:26 --> Loader Class Initialized
INFO - 2015-07-15 17:56:26 --> Helper loaded: url_helper
INFO - 2015-07-15 17:56:26 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:56:26 --> Database Driver Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Controller Class Initialized
DEBUG - 2015-07-15 17:56:26 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:56:26 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:56:26 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.962016999999996)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7008074)) + SIN(RADIANS(37.962016999999996)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-15 17:56:26 --> Config Class Initialized
INFO - 2015-07-15 17:56:26 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:56:26 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:56:26 --> Utf8 Class Initialized
INFO - 2015-07-15 17:56:26 --> URI Class Initialized
INFO - 2015-07-15 17:56:26 --> Config Class Initialized
INFO - 2015-07-15 17:56:26 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:56:26 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:56:26 --> Utf8 Class Initialized
INFO - 2015-07-15 17:56:26 --> Router Class Initialized
INFO - 2015-07-15 17:56:26 --> URI Class Initialized
INFO - 2015-07-15 17:56:26 --> Output Class Initialized
INFO - 2015-07-15 17:56:26 --> Router Class Initialized
INFO - 2015-07-15 17:56:26 --> Security Class Initialized
INFO - 2015-07-15 17:56:26 --> Output Class Initialized
DEBUG - 2015-07-15 17:56:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:56:26 --> Input Class Initialized
INFO - 2015-07-15 17:56:26 --> Security Class Initialized
INFO - 2015-07-15 17:56:26 --> Language Class Initialized
DEBUG - 2015-07-15 17:56:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:56:26 --> Input Class Initialized
INFO - 2015-07-15 17:56:26 --> Language Class Initialized
INFO - 2015-07-15 17:56:26 --> Loader Class Initialized
INFO - 2015-07-15 17:56:26 --> Helper loaded: url_helper
INFO - 2015-07-15 17:56:26 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:56:26 --> Loader Class Initialized
INFO - 2015-07-15 17:56:26 --> Helper loaded: url_helper
INFO - 2015-07-15 17:56:26 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:56:26 --> Database Driver Class Initialized
INFO - 2015-07-15 17:56:26 --> Database Driver Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
INFO - 2015-07-15 17:56:26 --> Controller Class Initialized
INFO - 2015-07-15 17:56:26 --> Model Class Initialized
DEBUG - 2015-07-15 17:56:26 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:56:26 --> Controller Class Initialized
INFO - 2015-07-15 17:56:26 --> Helper loaded: inflector_helper
DEBUG - 2015-07-15 17:56:26 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:56:26 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:57:47 --> Config Class Initialized
INFO - 2015-07-15 17:57:47 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:57:47 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:57:47 --> Utf8 Class Initialized
INFO - 2015-07-15 17:57:47 --> URI Class Initialized
INFO - 2015-07-15 17:57:47 --> Router Class Initialized
INFO - 2015-07-15 17:57:47 --> Output Class Initialized
INFO - 2015-07-15 17:57:47 --> Security Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:57:47 --> Input Class Initialized
INFO - 2015-07-15 17:57:47 --> Language Class Initialized
INFO - 2015-07-15 17:57:47 --> Loader Class Initialized
INFO - 2015-07-15 17:57:47 --> Helper loaded: url_helper
INFO - 2015-07-15 17:57:47 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:57:47 --> Database Driver Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Controller Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:57:47 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:57:47 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 17:57:47 --> Config Class Initialized
INFO - 2015-07-15 17:57:47 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:57:47 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:57:47 --> Utf8 Class Initialized
INFO - 2015-07-15 17:57:47 --> URI Class Initialized
INFO - 2015-07-15 17:57:47 --> Router Class Initialized
INFO - 2015-07-15 17:57:47 --> Output Class Initialized
INFO - 2015-07-15 17:57:47 --> Security Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:57:47 --> Input Class Initialized
INFO - 2015-07-15 17:57:47 --> Language Class Initialized
INFO - 2015-07-15 17:57:47 --> Loader Class Initialized
INFO - 2015-07-15 17:57:47 --> Helper loaded: url_helper
INFO - 2015-07-15 17:57:47 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:57:47 --> Database Driver Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Controller Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:57:47 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:57:47 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9620562)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.700834999999998)) + SIN(RADIANS(37.9620562)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-15 17:57:47 --> Config Class Initialized
INFO - 2015-07-15 17:57:47 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:57:47 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:57:47 --> Utf8 Class Initialized
INFO - 2015-07-15 17:57:47 --> URI Class Initialized
INFO - 2015-07-15 17:57:47 --> Router Class Initialized
INFO - 2015-07-15 17:57:47 --> Output Class Initialized
INFO - 2015-07-15 17:57:47 --> Security Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:57:47 --> Input Class Initialized
INFO - 2015-07-15 17:57:47 --> Language Class Initialized
INFO - 2015-07-15 17:57:47 --> Loader Class Initialized
INFO - 2015-07-15 17:57:47 --> Helper loaded: url_helper
INFO - 2015-07-15 17:57:47 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:57:47 --> Config Class Initialized
INFO - 2015-07-15 17:57:47 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:57:47 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:57:47 --> Utf8 Class Initialized
INFO - 2015-07-15 17:57:47 --> Database Driver Class Initialized
INFO - 2015-07-15 17:57:47 --> URI Class Initialized
INFO - 2015-07-15 17:57:47 --> Router Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Output Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Security Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:57:47 --> Input Class Initialized
INFO - 2015-07-15 17:57:47 --> Controller Class Initialized
INFO - 2015-07-15 17:57:47 --> Language Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:57:47 --> Loader Class Initialized
INFO - 2015-07-15 17:57:47 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:57:47 --> Helper loaded: url_helper
INFO - 2015-07-15 17:57:47 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:57:47 --> Database Driver Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Model Class Initialized
INFO - 2015-07-15 17:57:47 --> Controller Class Initialized
DEBUG - 2015-07-15 17:57:47 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:57:47 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:58:07 --> Config Class Initialized
INFO - 2015-07-15 17:58:07 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:58:07 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:58:07 --> Utf8 Class Initialized
INFO - 2015-07-15 17:58:07 --> Config Class Initialized
INFO - 2015-07-15 17:58:07 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:58:07 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:58:07 --> Utf8 Class Initialized
INFO - 2015-07-15 17:58:07 --> URI Class Initialized
INFO - 2015-07-15 17:58:07 --> URI Class Initialized
INFO - 2015-07-15 17:58:07 --> Router Class Initialized
INFO - 2015-07-15 17:58:07 --> Router Class Initialized
INFO - 2015-07-15 17:58:07 --> Output Class Initialized
INFO - 2015-07-15 17:58:07 --> Output Class Initialized
INFO - 2015-07-15 17:58:07 --> Security Class Initialized
DEBUG - 2015-07-15 17:58:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:58:07 --> Input Class Initialized
INFO - 2015-07-15 17:58:07 --> Language Class Initialized
INFO - 2015-07-15 17:58:07 --> Security Class Initialized
INFO - 2015-07-15 17:58:07 --> Loader Class Initialized
INFO - 2015-07-15 17:58:07 --> Helper loaded: url_helper
DEBUG - 2015-07-15 17:58:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:58:07 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:58:07 --> Input Class Initialized
INFO - 2015-07-15 17:58:07 --> Language Class Initialized
INFO - 2015-07-15 17:58:07 --> Database Driver Class Initialized
INFO - 2015-07-15 17:58:07 --> Loader Class Initialized
INFO - 2015-07-15 17:58:07 --> Model Class Initialized
INFO - 2015-07-15 17:58:07 --> Model Class Initialized
INFO - 2015-07-15 17:58:07 --> Model Class Initialized
INFO - 2015-07-15 17:58:07 --> Controller Class Initialized
INFO - 2015-07-15 17:58:07 --> Helper loaded: url_helper
DEBUG - 2015-07-15 17:58:07 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:58:07 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:58:07 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:58:07 --> SELECT *
FROM `bus_lines`
INFO - 2015-07-15 17:58:07 --> Database Driver Class Initialized
INFO - 2015-07-15 17:58:07 --> Model Class Initialized
INFO - 2015-07-15 17:58:07 --> Model Class Initialized
INFO - 2015-07-15 17:58:07 --> Model Class Initialized
INFO - 2015-07-15 17:58:07 --> Controller Class Initialized
DEBUG - 2015-07-15 17:58:07 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:58:07 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:58:07 --> SELECT   line_id, direction_flag, line_name_el, line_name_en, (
                    6371 * ACOS(COS(RADIANS(37.9620375)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7008466)) + SIN(RADIANS(37.9620375)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops, line_stops, bus_lines
            where bus_stops.s_id = line_stops.stop_id and line_stops.line_id = bus_lines._id
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-15 17:58:14 --> Config Class Initialized
INFO - 2015-07-15 17:58:14 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:58:14 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:58:14 --> Utf8 Class Initialized
INFO - 2015-07-15 17:58:14 --> Config Class Initialized
INFO - 2015-07-15 17:58:14 --> Hooks Class Initialized
INFO - 2015-07-15 17:58:14 --> URI Class Initialized
DEBUG - 2015-07-15 17:58:14 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:58:14 --> Utf8 Class Initialized
INFO - 2015-07-15 17:58:14 --> URI Class Initialized
INFO - 2015-07-15 17:58:14 --> Router Class Initialized
INFO - 2015-07-15 17:58:14 --> Router Class Initialized
INFO - 2015-07-15 17:58:14 --> Output Class Initialized
INFO - 2015-07-15 17:58:14 --> Output Class Initialized
INFO - 2015-07-15 17:58:14 --> Security Class Initialized
INFO - 2015-07-15 17:58:14 --> Security Class Initialized
DEBUG - 2015-07-15 17:58:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:58:14 --> Input Class Initialized
INFO - 2015-07-15 17:58:14 --> Language Class Initialized
DEBUG - 2015-07-15 17:58:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:58:14 --> Input Class Initialized
INFO - 2015-07-15 17:58:14 --> Loader Class Initialized
INFO - 2015-07-15 17:58:14 --> Language Class Initialized
INFO - 2015-07-15 17:58:14 --> Helper loaded: url_helper
INFO - 2015-07-15 17:58:14 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:58:14 --> Loader Class Initialized
INFO - 2015-07-15 17:58:14 --> Database Driver Class Initialized
INFO - 2015-07-15 17:58:14 --> Helper loaded: url_helper
INFO - 2015-07-15 17:58:14 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:58:14 --> Model Class Initialized
INFO - 2015-07-15 17:58:14 --> Model Class Initialized
INFO - 2015-07-15 17:58:14 --> Model Class Initialized
INFO - 2015-07-15 17:58:14 --> Controller Class Initialized
DEBUG - 2015-07-15 17:58:14 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:58:14 --> Database Driver Class Initialized
INFO - 2015-07-15 17:58:14 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:58:14 --> Model Class Initialized
INFO - 2015-07-15 17:58:14 --> Model Class Initialized
INFO - 2015-07-15 17:58:14 --> Model Class Initialized
INFO - 2015-07-15 17:58:14 --> Controller Class Initialized
DEBUG - 2015-07-15 17:58:14 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:58:14 --> Helper loaded: inflector_helper
INFO - 2015-07-15 17:58:14 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 17:58:14 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 17:58:14 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 17:59:39 --> Config Class Initialized
INFO - 2015-07-15 17:59:39 --> Hooks Class Initialized
DEBUG - 2015-07-15 17:59:39 --> UTF-8 Support Enabled
INFO - 2015-07-15 17:59:39 --> Utf8 Class Initialized
INFO - 2015-07-15 17:59:39 --> URI Class Initialized
INFO - 2015-07-15 17:59:39 --> Router Class Initialized
INFO - 2015-07-15 17:59:39 --> Output Class Initialized
INFO - 2015-07-15 17:59:39 --> Security Class Initialized
DEBUG - 2015-07-15 17:59:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 17:59:39 --> Input Class Initialized
INFO - 2015-07-15 17:59:39 --> Language Class Initialized
INFO - 2015-07-15 17:59:39 --> Loader Class Initialized
INFO - 2015-07-15 17:59:39 --> Helper loaded: url_helper
INFO - 2015-07-15 17:59:39 --> Helper loaded: directions_helper
INFO - 2015-07-15 17:59:39 --> Database Driver Class Initialized
INFO - 2015-07-15 17:59:39 --> Model Class Initialized
INFO - 2015-07-15 17:59:39 --> Model Class Initialized
INFO - 2015-07-15 17:59:39 --> Model Class Initialized
INFO - 2015-07-15 17:59:39 --> Controller Class Initialized
DEBUG - 2015-07-15 17:59:39 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 17:59:39 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 17:59:39 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 17:59:39 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 17:59:39 --> Array
INFO - 2015-07-15 17:59:39 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 17:59:39 --> 
INFO - 2015-07-15 17:59:39 --> insert 7 2
INFO - 2015-07-15 18:00:22 --> Config Class Initialized
INFO - 2015-07-15 18:00:22 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:00:22 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:00:22 --> Utf8 Class Initialized
INFO - 2015-07-15 18:00:22 --> URI Class Initialized
INFO - 2015-07-15 18:00:22 --> Router Class Initialized
INFO - 2015-07-15 18:00:22 --> Output Class Initialized
INFO - 2015-07-15 18:00:22 --> Security Class Initialized
DEBUG - 2015-07-15 18:00:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:00:22 --> Input Class Initialized
INFO - 2015-07-15 18:00:22 --> Language Class Initialized
INFO - 2015-07-15 18:00:22 --> Loader Class Initialized
INFO - 2015-07-15 18:00:22 --> Helper loaded: url_helper
INFO - 2015-07-15 18:00:22 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:00:22 --> Database Driver Class Initialized
INFO - 2015-07-15 18:00:22 --> Model Class Initialized
INFO - 2015-07-15 18:00:22 --> Model Class Initialized
INFO - 2015-07-15 18:00:22 --> Model Class Initialized
INFO - 2015-07-15 18:00:22 --> Controller Class Initialized
DEBUG - 2015-07-15 18:00:22 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:00:22 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:00:22 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:00:22 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:00:22 --> Array
INFO - 2015-07-15 18:00:22 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:00:22 --> 27
INFO - 2015-07-15 18:00:22 --> UPDATE `user_locations` SET `lat` = '37.9620402', `lon` = '23.700861099999997', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:00:22', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:00:22 --> update 7 2
INFO - 2015-07-15 18:01:38 --> Config Class Initialized
INFO - 2015-07-15 18:01:38 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:01:38 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:01:38 --> Utf8 Class Initialized
INFO - 2015-07-15 18:01:38 --> URI Class Initialized
INFO - 2015-07-15 18:01:38 --> Router Class Initialized
INFO - 2015-07-15 18:01:38 --> Output Class Initialized
INFO - 2015-07-15 18:01:38 --> Security Class Initialized
DEBUG - 2015-07-15 18:01:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:01:38 --> Input Class Initialized
INFO - 2015-07-15 18:01:38 --> Language Class Initialized
INFO - 2015-07-15 18:01:38 --> Loader Class Initialized
INFO - 2015-07-15 18:01:38 --> Helper loaded: url_helper
INFO - 2015-07-15 18:01:38 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:01:38 --> Database Driver Class Initialized
INFO - 2015-07-15 18:01:38 --> Model Class Initialized
INFO - 2015-07-15 18:01:38 --> Model Class Initialized
INFO - 2015-07-15 18:01:38 --> Model Class Initialized
INFO - 2015-07-15 18:01:38 --> Controller Class Initialized
DEBUG - 2015-07-15 18:01:38 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:01:38 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:01:38 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 18:01:43 --> Config Class Initialized
INFO - 2015-07-15 18:01:43 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:01:43 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:01:43 --> Utf8 Class Initialized
INFO - 2015-07-15 18:01:43 --> URI Class Initialized
INFO - 2015-07-15 18:01:43 --> Router Class Initialized
INFO - 2015-07-15 18:01:43 --> Output Class Initialized
INFO - 2015-07-15 18:01:43 --> Security Class Initialized
DEBUG - 2015-07-15 18:01:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:01:43 --> Input Class Initialized
INFO - 2015-07-15 18:01:43 --> Language Class Initialized
INFO - 2015-07-15 18:01:43 --> Loader Class Initialized
INFO - 2015-07-15 18:01:43 --> Helper loaded: url_helper
INFO - 2015-07-15 18:01:43 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:01:43 --> Database Driver Class Initialized
INFO - 2015-07-15 18:01:43 --> Model Class Initialized
INFO - 2015-07-15 18:01:43 --> Model Class Initialized
INFO - 2015-07-15 18:01:43 --> Model Class Initialized
INFO - 2015-07-15 18:01:43 --> Controller Class Initialized
DEBUG - 2015-07-15 18:01:43 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:01:43 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:01:43 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:01:43 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:01:43 --> Array
INFO - 2015-07-15 18:01:43 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:01:43 --> 27
INFO - 2015-07-15 18:01:43 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:01:43', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:01:43 --> update 7 2
INFO - 2015-07-15 18:01:48 --> Config Class Initialized
INFO - 2015-07-15 18:01:48 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:01:48 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:01:48 --> Utf8 Class Initialized
INFO - 2015-07-15 18:01:48 --> URI Class Initialized
INFO - 2015-07-15 18:01:48 --> Router Class Initialized
INFO - 2015-07-15 18:01:48 --> Output Class Initialized
INFO - 2015-07-15 18:01:48 --> Security Class Initialized
DEBUG - 2015-07-15 18:01:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:01:48 --> Input Class Initialized
INFO - 2015-07-15 18:01:48 --> Language Class Initialized
INFO - 2015-07-15 18:01:48 --> Loader Class Initialized
INFO - 2015-07-15 18:01:48 --> Helper loaded: url_helper
INFO - 2015-07-15 18:01:48 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:01:48 --> Database Driver Class Initialized
INFO - 2015-07-15 18:01:48 --> Model Class Initialized
INFO - 2015-07-15 18:01:48 --> Model Class Initialized
INFO - 2015-07-15 18:01:48 --> Model Class Initialized
INFO - 2015-07-15 18:01:48 --> Controller Class Initialized
DEBUG - 2015-07-15 18:01:48 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:01:48 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:01:48 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 18:03:53 --> Config Class Initialized
INFO - 2015-07-15 18:03:53 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:03:53 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:03:53 --> Utf8 Class Initialized
INFO - 2015-07-15 18:03:53 --> Config Class Initialized
INFO - 2015-07-15 18:03:53 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:03:54 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:03:54 --> Utf8 Class Initialized
INFO - 2015-07-15 18:03:54 --> URI Class Initialized
INFO - 2015-07-15 18:03:54 --> Router Class Initialized
INFO - 2015-07-15 18:03:54 --> URI Class Initialized
INFO - 2015-07-15 18:03:54 --> Output Class Initialized
INFO - 2015-07-15 18:03:54 --> Router Class Initialized
INFO - 2015-07-15 18:03:54 --> Security Class Initialized
DEBUG - 2015-07-15 18:03:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:03:54 --> Output Class Initialized
INFO - 2015-07-15 18:03:54 --> Input Class Initialized
INFO - 2015-07-15 18:03:54 --> Security Class Initialized
INFO - 2015-07-15 18:03:54 --> Language Class Initialized
DEBUG - 2015-07-15 18:03:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:03:54 --> Loader Class Initialized
INFO - 2015-07-15 18:03:54 --> Input Class Initialized
INFO - 2015-07-15 18:03:54 --> Helper loaded: url_helper
INFO - 2015-07-15 18:03:54 --> Language Class Initialized
INFO - 2015-07-15 18:03:54 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:03:54 --> Loader Class Initialized
INFO - 2015-07-15 18:03:54 --> Database Driver Class Initialized
INFO - 2015-07-15 18:03:54 --> Helper loaded: url_helper
INFO - 2015-07-15 18:03:54 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:03:54 --> Model Class Initialized
INFO - 2015-07-15 18:03:54 --> Model Class Initialized
INFO - 2015-07-15 18:03:54 --> Model Class Initialized
INFO - 2015-07-15 18:03:54 --> Controller Class Initialized
DEBUG - 2015-07-15 18:03:54 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:03:54 --> Database Driver Class Initialized
INFO - 2015-07-15 18:03:54 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:03:54 --> Model Class Initialized
INFO - 2015-07-15 18:03:54 --> Model Class Initialized
INFO - 2015-07-15 18:03:54 --> Model Class Initialized
INFO - 2015-07-15 18:03:54 --> Controller Class Initialized
INFO - 2015-07-15 18:03:54 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
DEBUG - 2015-07-15 18:03:54 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:03:54 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:03:54 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:03:54 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:03:58 --> Config Class Initialized
INFO - 2015-07-15 18:03:58 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:03:58 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:03:58 --> Utf8 Class Initialized
INFO - 2015-07-15 18:03:58 --> URI Class Initialized
INFO - 2015-07-15 18:03:58 --> Router Class Initialized
INFO - 2015-07-15 18:03:58 --> Output Class Initialized
INFO - 2015-07-15 18:03:58 --> Security Class Initialized
DEBUG - 2015-07-15 18:03:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:03:58 --> Input Class Initialized
INFO - 2015-07-15 18:03:58 --> Language Class Initialized
INFO - 2015-07-15 18:03:58 --> Loader Class Initialized
INFO - 2015-07-15 18:03:58 --> Helper loaded: url_helper
INFO - 2015-07-15 18:03:58 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:03:58 --> Database Driver Class Initialized
INFO - 2015-07-15 18:03:58 --> Model Class Initialized
INFO - 2015-07-15 18:03:58 --> Model Class Initialized
INFO - 2015-07-15 18:03:58 --> Model Class Initialized
INFO - 2015-07-15 18:03:58 --> Controller Class Initialized
DEBUG - 2015-07-15 18:03:58 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:03:58 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:03:58 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:03:58 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:03:58 --> Array
INFO - 2015-07-15 18:03:58 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:03:58 --> 
INFO - 2015-07-15 18:03:58 --> insert 7 2
INFO - 2015-07-15 18:04:20 --> Config Class Initialized
INFO - 2015-07-15 18:04:20 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:04:20 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:04:20 --> Utf8 Class Initialized
INFO - 2015-07-15 18:04:20 --> URI Class Initialized
INFO - 2015-07-15 18:04:20 --> Router Class Initialized
INFO - 2015-07-15 18:04:20 --> Output Class Initialized
INFO - 2015-07-15 18:04:20 --> Security Class Initialized
DEBUG - 2015-07-15 18:04:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:04:20 --> Input Class Initialized
INFO - 2015-07-15 18:04:20 --> Language Class Initialized
INFO - 2015-07-15 18:04:20 --> Loader Class Initialized
INFO - 2015-07-15 18:04:20 --> Helper loaded: url_helper
INFO - 2015-07-15 18:04:20 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:04:20 --> Database Driver Class Initialized
INFO - 2015-07-15 18:04:20 --> Model Class Initialized
INFO - 2015-07-15 18:04:20 --> Model Class Initialized
INFO - 2015-07-15 18:04:20 --> Model Class Initialized
INFO - 2015-07-15 18:04:20 --> Controller Class Initialized
DEBUG - 2015-07-15 18:04:20 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:04:20 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:04:20 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:04:20 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:04:20 --> Array
INFO - 2015-07-15 18:04:20 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:04:20 --> 28
INFO - 2015-07-15 18:04:20 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:04:20', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:04:20 --> update 7 2
INFO - 2015-07-15 18:06:15 --> Config Class Initialized
INFO - 2015-07-15 18:06:15 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:06:15 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:06:15 --> Utf8 Class Initialized
INFO - 2015-07-15 18:06:15 --> URI Class Initialized
INFO - 2015-07-15 18:06:15 --> Config Class Initialized
INFO - 2015-07-15 18:06:15 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:06:15 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:06:15 --> Utf8 Class Initialized
INFO - 2015-07-15 18:06:15 --> Router Class Initialized
INFO - 2015-07-15 18:06:15 --> URI Class Initialized
INFO - 2015-07-15 18:06:15 --> Router Class Initialized
INFO - 2015-07-15 18:06:15 --> Output Class Initialized
INFO - 2015-07-15 18:06:15 --> Output Class Initialized
INFO - 2015-07-15 18:06:15 --> Security Class Initialized
INFO - 2015-07-15 18:06:15 --> Security Class Initialized
DEBUG - 2015-07-15 18:06:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:06:15 --> Input Class Initialized
INFO - 2015-07-15 18:06:15 --> Language Class Initialized
DEBUG - 2015-07-15 18:06:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:06:15 --> Loader Class Initialized
INFO - 2015-07-15 18:06:15 --> Input Class Initialized
INFO - 2015-07-15 18:06:15 --> Helper loaded: url_helper
INFO - 2015-07-15 18:06:15 --> Language Class Initialized
INFO - 2015-07-15 18:06:15 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:06:15 --> Loader Class Initialized
INFO - 2015-07-15 18:06:15 --> Database Driver Class Initialized
INFO - 2015-07-15 18:06:15 --> Helper loaded: url_helper
INFO - 2015-07-15 18:06:15 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:06:15 --> Model Class Initialized
INFO - 2015-07-15 18:06:15 --> Model Class Initialized
INFO - 2015-07-15 18:06:15 --> Model Class Initialized
INFO - 2015-07-15 18:06:15 --> Database Driver Class Initialized
INFO - 2015-07-15 18:06:15 --> Controller Class Initialized
DEBUG - 2015-07-15 18:06:15 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:06:15 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:06:15 --> Model Class Initialized
INFO - 2015-07-15 18:06:15 --> Model Class Initialized
INFO - 2015-07-15 18:06:15 --> Model Class Initialized
INFO - 2015-07-15 18:06:15 --> Controller Class Initialized
DEBUG - 2015-07-15 18:06:15 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:06:15 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:06:15 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:06:15 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:06:15 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:06:23 --> Config Class Initialized
INFO - 2015-07-15 18:06:23 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:06:23 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:06:23 --> Utf8 Class Initialized
INFO - 2015-07-15 18:06:23 --> URI Class Initialized
INFO - 2015-07-15 18:06:23 --> Router Class Initialized
INFO - 2015-07-15 18:06:23 --> Output Class Initialized
INFO - 2015-07-15 18:06:23 --> Security Class Initialized
DEBUG - 2015-07-15 18:06:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:06:23 --> Input Class Initialized
INFO - 2015-07-15 18:06:23 --> Language Class Initialized
INFO - 2015-07-15 18:06:23 --> Loader Class Initialized
INFO - 2015-07-15 18:06:23 --> Helper loaded: url_helper
INFO - 2015-07-15 18:06:23 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:06:23 --> Database Driver Class Initialized
INFO - 2015-07-15 18:06:23 --> Model Class Initialized
INFO - 2015-07-15 18:06:23 --> Model Class Initialized
INFO - 2015-07-15 18:06:23 --> Model Class Initialized
INFO - 2015-07-15 18:06:23 --> Controller Class Initialized
DEBUG - 2015-07-15 18:06:23 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:06:23 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:06:23 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:06:23 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:06:23 --> Array
INFO - 2015-07-15 18:06:23 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:06:23 --> 
INFO - 2015-07-15 18:06:23 --> insert 7 2
INFO - 2015-07-15 18:07:12 --> Config Class Initialized
INFO - 2015-07-15 18:07:12 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:07:12 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:07:12 --> Utf8 Class Initialized
INFO - 2015-07-15 18:07:12 --> Config Class Initialized
INFO - 2015-07-15 18:07:12 --> Hooks Class Initialized
INFO - 2015-07-15 18:07:12 --> URI Class Initialized
DEBUG - 2015-07-15 18:07:12 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:07:12 --> Utf8 Class Initialized
INFO - 2015-07-15 18:07:12 --> Router Class Initialized
INFO - 2015-07-15 18:07:12 --> URI Class Initialized
INFO - 2015-07-15 18:07:12 --> Output Class Initialized
INFO - 2015-07-15 18:07:12 --> Router Class Initialized
INFO - 2015-07-15 18:07:12 --> Security Class Initialized
DEBUG - 2015-07-15 18:07:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:07:12 --> Input Class Initialized
INFO - 2015-07-15 18:07:12 --> Output Class Initialized
INFO - 2015-07-15 18:07:12 --> Language Class Initialized
INFO - 2015-07-15 18:07:12 --> Security Class Initialized
INFO - 2015-07-15 18:07:12 --> Loader Class Initialized
DEBUG - 2015-07-15 18:07:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:07:12 --> Helper loaded: url_helper
INFO - 2015-07-15 18:07:12 --> Input Class Initialized
INFO - 2015-07-15 18:07:12 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:07:12 --> Language Class Initialized
INFO - 2015-07-15 18:07:12 --> Database Driver Class Initialized
INFO - 2015-07-15 18:07:12 --> Loader Class Initialized
INFO - 2015-07-15 18:07:12 --> Helper loaded: url_helper
INFO - 2015-07-15 18:07:12 --> Model Class Initialized
INFO - 2015-07-15 18:07:12 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:07:12 --> Model Class Initialized
INFO - 2015-07-15 18:07:12 --> Model Class Initialized
INFO - 2015-07-15 18:07:12 --> Controller Class Initialized
DEBUG - 2015-07-15 18:07:12 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:07:12 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:07:12 --> Database Driver Class Initialized
INFO - 2015-07-15 18:07:12 --> Model Class Initialized
INFO - 2015-07-15 18:07:12 --> Model Class Initialized
INFO - 2015-07-15 18:07:12 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:07:12 --> Model Class Initialized
INFO - 2015-07-15 18:07:12 --> Controller Class Initialized
INFO - 2015-07-15 18:07:12 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:07:12 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
DEBUG - 2015-07-15 18:07:12 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:07:12 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:07:16 --> Config Class Initialized
INFO - 2015-07-15 18:07:16 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:07:16 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:07:16 --> Utf8 Class Initialized
INFO - 2015-07-15 18:07:16 --> URI Class Initialized
INFO - 2015-07-15 18:07:16 --> Router Class Initialized
INFO - 2015-07-15 18:07:16 --> Output Class Initialized
INFO - 2015-07-15 18:07:16 --> Security Class Initialized
DEBUG - 2015-07-15 18:07:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:07:16 --> Input Class Initialized
INFO - 2015-07-15 18:07:16 --> Language Class Initialized
INFO - 2015-07-15 18:07:16 --> Loader Class Initialized
INFO - 2015-07-15 18:07:16 --> Helper loaded: url_helper
INFO - 2015-07-15 18:07:16 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:07:16 --> Database Driver Class Initialized
INFO - 2015-07-15 18:07:16 --> Model Class Initialized
INFO - 2015-07-15 18:07:16 --> Model Class Initialized
INFO - 2015-07-15 18:07:16 --> Model Class Initialized
INFO - 2015-07-15 18:07:16 --> Controller Class Initialized
DEBUG - 2015-07-15 18:07:16 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:07:16 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:07:44 --> Config Class Initialized
INFO - 2015-07-15 18:07:44 --> Hooks Class Initialized
INFO - 2015-07-15 18:07:44 --> Config Class Initialized
INFO - 2015-07-15 18:07:44 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:07:44 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:07:44 --> Utf8 Class Initialized
DEBUG - 2015-07-15 18:07:44 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:07:44 --> URI Class Initialized
INFO - 2015-07-15 18:07:44 --> Utf8 Class Initialized
INFO - 2015-07-15 18:07:44 --> Router Class Initialized
INFO - 2015-07-15 18:07:44 --> Output Class Initialized
INFO - 2015-07-15 18:07:44 --> URI Class Initialized
INFO - 2015-07-15 18:07:44 --> Router Class Initialized
INFO - 2015-07-15 18:07:44 --> Security Class Initialized
DEBUG - 2015-07-15 18:07:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:07:44 --> Input Class Initialized
INFO - 2015-07-15 18:07:44 --> Language Class Initialized
INFO - 2015-07-15 18:07:44 --> Loader Class Initialized
INFO - 2015-07-15 18:07:44 --> Helper loaded: url_helper
INFO - 2015-07-15 18:07:44 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:07:44 --> Output Class Initialized
INFO - 2015-07-15 18:07:44 --> Database Driver Class Initialized
INFO - 2015-07-15 18:07:44 --> Security Class Initialized
INFO - 2015-07-15 18:07:44 --> Model Class Initialized
DEBUG - 2015-07-15 18:07:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:07:44 --> Model Class Initialized
INFO - 2015-07-15 18:07:44 --> Model Class Initialized
INFO - 2015-07-15 18:07:44 --> Controller Class Initialized
INFO - 2015-07-15 18:07:44 --> Input Class Initialized
DEBUG - 2015-07-15 18:07:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:07:44 --> Language Class Initialized
INFO - 2015-07-15 18:07:44 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:07:44 --> Loader Class Initialized
INFO - 2015-07-15 18:07:44 --> Helper loaded: url_helper
INFO - 2015-07-15 18:07:44 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:07:44 --> Database Driver Class Initialized
INFO - 2015-07-15 18:07:44 --> Model Class Initialized
INFO - 2015-07-15 18:07:44 --> Model Class Initialized
INFO - 2015-07-15 18:07:44 --> Model Class Initialized
INFO - 2015-07-15 18:07:44 --> Controller Class Initialized
DEBUG - 2015-07-15 18:07:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:07:44 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:07:44 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:07:44 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:07:44 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:07:47 --> Config Class Initialized
INFO - 2015-07-15 18:07:47 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:07:47 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:07:47 --> Utf8 Class Initialized
INFO - 2015-07-15 18:07:47 --> URI Class Initialized
INFO - 2015-07-15 18:07:47 --> Router Class Initialized
INFO - 2015-07-15 18:07:47 --> Output Class Initialized
INFO - 2015-07-15 18:07:47 --> Security Class Initialized
DEBUG - 2015-07-15 18:07:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:07:47 --> Input Class Initialized
INFO - 2015-07-15 18:07:47 --> Language Class Initialized
INFO - 2015-07-15 18:07:47 --> Loader Class Initialized
INFO - 2015-07-15 18:07:47 --> Helper loaded: url_helper
INFO - 2015-07-15 18:07:47 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:07:47 --> Database Driver Class Initialized
INFO - 2015-07-15 18:07:47 --> Model Class Initialized
INFO - 2015-07-15 18:07:47 --> Model Class Initialized
INFO - 2015-07-15 18:07:47 --> Model Class Initialized
INFO - 2015-07-15 18:07:47 --> Controller Class Initialized
DEBUG - 2015-07-15 18:07:47 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:07:47 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:07:47 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:07:47 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:07:47 --> Array
INFO - 2015-07-15 18:07:47 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:07:47 --> 29
INFO - 2015-07-15 18:07:47 --> UPDATE `user_locations` SET `lat` = '37.9619658', `lon` = '23.7008513', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:07:47', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:07:47 --> update 7 2
INFO - 2015-07-15 18:12:42 --> Config Class Initialized
INFO - 2015-07-15 18:12:42 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:12:42 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:12:42 --> Utf8 Class Initialized
INFO - 2015-07-15 18:12:42 --> URI Class Initialized
INFO - 2015-07-15 18:12:42 --> Router Class Initialized
INFO - 2015-07-15 18:12:42 --> Output Class Initialized
INFO - 2015-07-15 18:12:42 --> Security Class Initialized
DEBUG - 2015-07-15 18:12:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:12:42 --> Input Class Initialized
INFO - 2015-07-15 18:12:42 --> Language Class Initialized
INFO - 2015-07-15 18:12:42 --> Loader Class Initialized
INFO - 2015-07-15 18:12:42 --> Helper loaded: url_helper
INFO - 2015-07-15 18:12:42 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:12:42 --> Config Class Initialized
INFO - 2015-07-15 18:12:42 --> Hooks Class Initialized
INFO - 2015-07-15 18:12:42 --> Database Driver Class Initialized
DEBUG - 2015-07-15 18:12:42 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:12:42 --> Utf8 Class Initialized
INFO - 2015-07-15 18:12:42 --> URI Class Initialized
INFO - 2015-07-15 18:12:42 --> Model Class Initialized
INFO - 2015-07-15 18:12:42 --> Router Class Initialized
INFO - 2015-07-15 18:12:42 --> Model Class Initialized
INFO - 2015-07-15 18:12:42 --> Model Class Initialized
INFO - 2015-07-15 18:12:42 --> Output Class Initialized
INFO - 2015-07-15 18:12:42 --> Controller Class Initialized
INFO - 2015-07-15 18:12:42 --> Security Class Initialized
DEBUG - 2015-07-15 18:12:42 --> Config file loaded: /var/www/html/trans/application/config/rest.php
DEBUG - 2015-07-15 18:12:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:12:42 --> Input Class Initialized
INFO - 2015-07-15 18:12:42 --> Language Class Initialized
INFO - 2015-07-15 18:12:42 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:12:42 --> Loader Class Initialized
INFO - 2015-07-15 18:12:42 --> Helper loaded: url_helper
INFO - 2015-07-15 18:12:42 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:12:42 --> Database Driver Class Initialized
INFO - 2015-07-15 18:12:42 --> Model Class Initialized
INFO - 2015-07-15 18:12:42 --> Model Class Initialized
INFO - 2015-07-15 18:12:42 --> Model Class Initialized
INFO - 2015-07-15 18:12:42 --> Controller Class Initialized
DEBUG - 2015-07-15 18:12:42 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:12:42 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:12:42 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:12:42 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:12:42 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:12:46 --> Config Class Initialized
INFO - 2015-07-15 18:12:46 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:12:46 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:12:46 --> Utf8 Class Initialized
INFO - 2015-07-15 18:12:46 --> URI Class Initialized
INFO - 2015-07-15 18:12:46 --> Router Class Initialized
INFO - 2015-07-15 18:12:46 --> Output Class Initialized
INFO - 2015-07-15 18:12:46 --> Security Class Initialized
DEBUG - 2015-07-15 18:12:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:12:46 --> Input Class Initialized
INFO - 2015-07-15 18:12:46 --> Language Class Initialized
INFO - 2015-07-15 18:12:46 --> Loader Class Initialized
INFO - 2015-07-15 18:12:46 --> Helper loaded: url_helper
INFO - 2015-07-15 18:12:46 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:12:46 --> Database Driver Class Initialized
INFO - 2015-07-15 18:12:46 --> Model Class Initialized
INFO - 2015-07-15 18:12:46 --> Model Class Initialized
INFO - 2015-07-15 18:12:46 --> Model Class Initialized
INFO - 2015-07-15 18:12:46 --> Controller Class Initialized
DEBUG - 2015-07-15 18:12:46 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:12:46 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:12:46 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:12:46 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:12:46 --> Array
INFO - 2015-07-15 18:12:46 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:12:46 --> 
INFO - 2015-07-15 18:12:46 --> insert 7 2
INFO - 2015-07-15 18:13:41 --> Config Class Initialized
INFO - 2015-07-15 18:13:41 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:13:41 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:13:41 --> Utf8 Class Initialized
INFO - 2015-07-15 18:13:41 --> URI Class Initialized
INFO - 2015-07-15 18:13:41 --> Router Class Initialized
INFO - 2015-07-15 18:13:41 --> Output Class Initialized
INFO - 2015-07-15 18:13:41 --> Security Class Initialized
DEBUG - 2015-07-15 18:13:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:13:41 --> Input Class Initialized
INFO - 2015-07-15 18:13:41 --> Language Class Initialized
INFO - 2015-07-15 18:13:41 --> Loader Class Initialized
INFO - 2015-07-15 18:13:41 --> Helper loaded: url_helper
INFO - 2015-07-15 18:13:41 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:13:41 --> Database Driver Class Initialized
INFO - 2015-07-15 18:13:41 --> Model Class Initialized
INFO - 2015-07-15 18:13:41 --> Model Class Initialized
INFO - 2015-07-15 18:13:41 --> Model Class Initialized
INFO - 2015-07-15 18:13:41 --> Controller Class Initialized
DEBUG - 2015-07-15 18:13:41 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:13:41 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:13:41 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:13:41 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:13:41 --> Array
INFO - 2015-07-15 18:13:41 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:13:41 --> 30
INFO - 2015-07-15 18:13:41 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:13:41', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:13:41 --> update 7 2
INFO - 2015-07-15 18:16:29 --> Config Class Initialized
INFO - 2015-07-15 18:16:29 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:16:29 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:16:29 --> Utf8 Class Initialized
INFO - 2015-07-15 18:16:29 --> URI Class Initialized
INFO - 2015-07-15 18:16:29 --> Router Class Initialized
INFO - 2015-07-15 18:16:29 --> Output Class Initialized
INFO - 2015-07-15 18:16:29 --> Config Class Initialized
INFO - 2015-07-15 18:16:29 --> Hooks Class Initialized
INFO - 2015-07-15 18:16:29 --> Security Class Initialized
DEBUG - 2015-07-15 18:16:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:16:29 --> Input Class Initialized
INFO - 2015-07-15 18:16:29 --> Language Class Initialized
DEBUG - 2015-07-15 18:16:29 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:16:29 --> Loader Class Initialized
INFO - 2015-07-15 18:16:29 --> Utf8 Class Initialized
INFO - 2015-07-15 18:16:29 --> Helper loaded: url_helper
INFO - 2015-07-15 18:16:29 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:16:29 --> URI Class Initialized
INFO - 2015-07-15 18:16:29 --> Database Driver Class Initialized
INFO - 2015-07-15 18:16:29 --> Router Class Initialized
INFO - 2015-07-15 18:16:29 --> Output Class Initialized
INFO - 2015-07-15 18:16:29 --> Security Class Initialized
DEBUG - 2015-07-15 18:16:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:16:29 --> Model Class Initialized
INFO - 2015-07-15 18:16:29 --> Model Class Initialized
INFO - 2015-07-15 18:16:29 --> Model Class Initialized
INFO - 2015-07-15 18:16:29 --> Controller Class Initialized
DEBUG - 2015-07-15 18:16:29 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:16:29 --> Input Class Initialized
INFO - 2015-07-15 18:16:29 --> Language Class Initialized
INFO - 2015-07-15 18:16:29 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:16:29 --> Loader Class Initialized
INFO - 2015-07-15 18:16:29 --> Helper loaded: url_helper
INFO - 2015-07-15 18:16:29 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:16:29 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:16:29 --> Database Driver Class Initialized
INFO - 2015-07-15 18:16:29 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:16:29 --> Model Class Initialized
INFO - 2015-07-15 18:16:29 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:16:29 --> Model Class Initialized
INFO - 2015-07-15 18:16:29 --> Model Class Initialized
INFO - 2015-07-15 18:16:29 --> Controller Class Initialized
DEBUG - 2015-07-15 18:16:29 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:16:29 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:16:43 --> Config Class Initialized
INFO - 2015-07-15 18:16:43 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:16:43 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:16:43 --> Utf8 Class Initialized
INFO - 2015-07-15 18:16:43 --> URI Class Initialized
INFO - 2015-07-15 18:16:43 --> Router Class Initialized
INFO - 2015-07-15 18:16:43 --> Output Class Initialized
INFO - 2015-07-15 18:16:43 --> Security Class Initialized
DEBUG - 2015-07-15 18:16:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:16:43 --> Input Class Initialized
INFO - 2015-07-15 18:16:43 --> Language Class Initialized
INFO - 2015-07-15 18:16:43 --> Loader Class Initialized
INFO - 2015-07-15 18:16:43 --> Helper loaded: url_helper
INFO - 2015-07-15 18:16:43 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:16:43 --> Database Driver Class Initialized
INFO - 2015-07-15 18:16:43 --> Model Class Initialized
INFO - 2015-07-15 18:16:43 --> Model Class Initialized
INFO - 2015-07-15 18:16:43 --> Model Class Initialized
INFO - 2015-07-15 18:16:43 --> Controller Class Initialized
DEBUG - 2015-07-15 18:16:43 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:16:43 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:16:43 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:16:43 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:16:43 --> Array
INFO - 2015-07-15 18:16:43 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:16:43 --> 
INFO - 2015-07-15 18:16:43 --> insert 7 2
INFO - 2015-07-15 18:17:29 --> Config Class Initialized
INFO - 2015-07-15 18:17:29 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:17:29 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:17:29 --> Utf8 Class Initialized
INFO - 2015-07-15 18:17:29 --> URI Class Initialized
INFO - 2015-07-15 18:17:29 --> Router Class Initialized
INFO - 2015-07-15 18:17:29 --> Output Class Initialized
INFO - 2015-07-15 18:17:29 --> Security Class Initialized
DEBUG - 2015-07-15 18:17:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:17:29 --> Input Class Initialized
INFO - 2015-07-15 18:17:29 --> Language Class Initialized
INFO - 2015-07-15 18:17:29 --> Loader Class Initialized
INFO - 2015-07-15 18:17:29 --> Helper loaded: url_helper
INFO - 2015-07-15 18:17:29 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:17:29 --> Database Driver Class Initialized
INFO - 2015-07-15 18:17:29 --> Model Class Initialized
INFO - 2015-07-15 18:17:29 --> Model Class Initialized
INFO - 2015-07-15 18:17:29 --> Model Class Initialized
INFO - 2015-07-15 18:17:29 --> Controller Class Initialized
DEBUG - 2015-07-15 18:17:29 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:17:29 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:17:29 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 18:17:36 --> Config Class Initialized
INFO - 2015-07-15 18:17:36 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:17:36 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:17:36 --> Utf8 Class Initialized
INFO - 2015-07-15 18:17:36 --> URI Class Initialized
INFO - 2015-07-15 18:17:36 --> Router Class Initialized
INFO - 2015-07-15 18:17:36 --> Output Class Initialized
INFO - 2015-07-15 18:17:36 --> Security Class Initialized
DEBUG - 2015-07-15 18:17:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:17:36 --> Input Class Initialized
INFO - 2015-07-15 18:17:36 --> Language Class Initialized
INFO - 2015-07-15 18:17:36 --> Loader Class Initialized
INFO - 2015-07-15 18:17:36 --> Helper loaded: url_helper
INFO - 2015-07-15 18:17:36 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:17:36 --> Database Driver Class Initialized
INFO - 2015-07-15 18:17:36 --> Model Class Initialized
INFO - 2015-07-15 18:17:36 --> Model Class Initialized
INFO - 2015-07-15 18:17:36 --> Model Class Initialized
INFO - 2015-07-15 18:17:36 --> Controller Class Initialized
DEBUG - 2015-07-15 18:17:36 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:17:36 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:17:36 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:17:36 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:17:36 --> Array
INFO - 2015-07-15 18:17:36 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:17:36 --> 31
INFO - 2015-07-15 18:17:36 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:17:36', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:17:36 --> update 7 2
INFO - 2015-07-15 18:17:44 --> Config Class Initialized
INFO - 2015-07-15 18:17:44 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:17:44 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:17:44 --> Utf8 Class Initialized
INFO - 2015-07-15 18:17:44 --> URI Class Initialized
INFO - 2015-07-15 18:17:44 --> Router Class Initialized
INFO - 2015-07-15 18:17:44 --> Output Class Initialized
INFO - 2015-07-15 18:17:44 --> Security Class Initialized
DEBUG - 2015-07-15 18:17:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:17:44 --> Input Class Initialized
INFO - 2015-07-15 18:17:44 --> Language Class Initialized
INFO - 2015-07-15 18:17:44 --> Loader Class Initialized
INFO - 2015-07-15 18:17:44 --> Helper loaded: url_helper
INFO - 2015-07-15 18:17:44 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:17:44 --> Database Driver Class Initialized
INFO - 2015-07-15 18:17:44 --> Model Class Initialized
INFO - 2015-07-15 18:17:44 --> Model Class Initialized
INFO - 2015-07-15 18:17:44 --> Model Class Initialized
INFO - 2015-07-15 18:17:44 --> Controller Class Initialized
DEBUG - 2015-07-15 18:17:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:17:44 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:17:44 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 18:17:53 --> Config Class Initialized
INFO - 2015-07-15 18:17:53 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:17:53 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:17:53 --> Utf8 Class Initialized
INFO - 2015-07-15 18:17:53 --> URI Class Initialized
INFO - 2015-07-15 18:17:53 --> Router Class Initialized
INFO - 2015-07-15 18:17:53 --> Output Class Initialized
INFO - 2015-07-15 18:17:53 --> Security Class Initialized
DEBUG - 2015-07-15 18:17:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:17:53 --> Input Class Initialized
INFO - 2015-07-15 18:17:53 --> Language Class Initialized
INFO - 2015-07-15 18:17:53 --> Loader Class Initialized
INFO - 2015-07-15 18:17:53 --> Helper loaded: url_helper
INFO - 2015-07-15 18:17:53 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:17:53 --> Database Driver Class Initialized
INFO - 2015-07-15 18:17:53 --> Model Class Initialized
INFO - 2015-07-15 18:17:53 --> Model Class Initialized
INFO - 2015-07-15 18:17:53 --> Model Class Initialized
INFO - 2015-07-15 18:17:53 --> Controller Class Initialized
DEBUG - 2015-07-15 18:17:53 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:17:53 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:17:53 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:17:53 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:17:53 --> Array
INFO - 2015-07-15 18:17:53 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:17:53 --> 31
INFO - 2015-07-15 18:17:53 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:17:53', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:17:53 --> update 7 2
INFO - 2015-07-15 18:17:59 --> Config Class Initialized
INFO - 2015-07-15 18:17:59 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:17:59 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:17:59 --> Utf8 Class Initialized
INFO - 2015-07-15 18:17:59 --> URI Class Initialized
INFO - 2015-07-15 18:17:59 --> Router Class Initialized
INFO - 2015-07-15 18:17:59 --> Output Class Initialized
INFO - 2015-07-15 18:17:59 --> Security Class Initialized
DEBUG - 2015-07-15 18:17:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:17:59 --> Input Class Initialized
INFO - 2015-07-15 18:17:59 --> Language Class Initialized
INFO - 2015-07-15 18:17:59 --> Loader Class Initialized
INFO - 2015-07-15 18:17:59 --> Helper loaded: url_helper
INFO - 2015-07-15 18:17:59 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:17:59 --> Database Driver Class Initialized
INFO - 2015-07-15 18:17:59 --> Model Class Initialized
INFO - 2015-07-15 18:17:59 --> Model Class Initialized
INFO - 2015-07-15 18:17:59 --> Model Class Initialized
INFO - 2015-07-15 18:17:59 --> Controller Class Initialized
DEBUG - 2015-07-15 18:17:59 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:17:59 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:17:59 --> mele25@hotmail.com is a valid email address
INFO - 2015-07-15 18:18:10 --> Config Class Initialized
INFO - 2015-07-15 18:18:10 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:18:10 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:18:10 --> Utf8 Class Initialized
INFO - 2015-07-15 18:18:10 --> URI Class Initialized
INFO - 2015-07-15 18:18:10 --> Router Class Initialized
INFO - 2015-07-15 18:18:10 --> Output Class Initialized
INFO - 2015-07-15 18:18:10 --> Security Class Initialized
DEBUG - 2015-07-15 18:18:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:18:10 --> Input Class Initialized
INFO - 2015-07-15 18:18:10 --> Language Class Initialized
INFO - 2015-07-15 18:18:10 --> Loader Class Initialized
INFO - 2015-07-15 18:18:10 --> Helper loaded: url_helper
INFO - 2015-07-15 18:18:10 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:18:10 --> Database Driver Class Initialized
INFO - 2015-07-15 18:18:10 --> Model Class Initialized
INFO - 2015-07-15 18:18:10 --> Model Class Initialized
INFO - 2015-07-15 18:18:10 --> Model Class Initialized
INFO - 2015-07-15 18:18:10 --> Controller Class Initialized
DEBUG - 2015-07-15 18:18:10 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:18:10 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:18:10 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:18:10 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:18:10 --> Array
INFO - 2015-07-15 18:18:10 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:18:10 --> 31
INFO - 2015-07-15 18:18:10 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:18:10', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:18:10 --> update 7 2
INFO - 2015-07-15 18:20:49 --> Config Class Initialized
INFO - 2015-07-15 18:20:49 --> Hooks Class Initialized
INFO - 2015-07-15 18:20:49 --> Config Class Initialized
INFO - 2015-07-15 18:20:49 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:20:49 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:20:49 --> Utf8 Class Initialized
DEBUG - 2015-07-15 18:20:49 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:20:49 --> Utf8 Class Initialized
INFO - 2015-07-15 18:20:49 --> URI Class Initialized
INFO - 2015-07-15 18:20:49 --> URI Class Initialized
INFO - 2015-07-15 18:20:49 --> Router Class Initialized
INFO - 2015-07-15 18:20:49 --> Router Class Initialized
INFO - 2015-07-15 18:20:49 --> Output Class Initialized
INFO - 2015-07-15 18:20:49 --> Output Class Initialized
INFO - 2015-07-15 18:20:49 --> Security Class Initialized
INFO - 2015-07-15 18:20:49 --> Security Class Initialized
DEBUG - 2015-07-15 18:20:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-07-15 18:20:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:20:49 --> Input Class Initialized
INFO - 2015-07-15 18:20:49 --> Language Class Initialized
INFO - 2015-07-15 18:20:49 --> Input Class Initialized
INFO - 2015-07-15 18:20:49 --> Language Class Initialized
INFO - 2015-07-15 18:20:49 --> Loader Class Initialized
INFO - 2015-07-15 18:20:49 --> Helper loaded: url_helper
INFO - 2015-07-15 18:20:49 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:20:49 --> Loader Class Initialized
INFO - 2015-07-15 18:20:49 --> Helper loaded: url_helper
INFO - 2015-07-15 18:20:49 --> Database Driver Class Initialized
INFO - 2015-07-15 18:20:49 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:20:49 --> Model Class Initialized
INFO - 2015-07-15 18:20:49 --> Model Class Initialized
INFO - 2015-07-15 18:20:49 --> Model Class Initialized
INFO - 2015-07-15 18:20:49 --> Controller Class Initialized
DEBUG - 2015-07-15 18:20:49 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:20:49 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:20:49 --> Database Driver Class Initialized
INFO - 2015-07-15 18:20:49 --> Model Class Initialized
INFO - 2015-07-15 18:20:49 --> Model Class Initialized
INFO - 2015-07-15 18:20:49 --> Model Class Initialized
INFO - 2015-07-15 18:20:49 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:20:49 --> Controller Class Initialized
INFO - 2015-07-15 18:20:49 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:20:49 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
DEBUG - 2015-07-15 18:20:49 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:20:49 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:20:51 --> Config Class Initialized
INFO - 2015-07-15 18:20:51 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:20:51 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:20:51 --> Utf8 Class Initialized
INFO - 2015-07-15 18:20:51 --> URI Class Initialized
INFO - 2015-07-15 18:20:51 --> Router Class Initialized
INFO - 2015-07-15 18:20:51 --> Output Class Initialized
INFO - 2015-07-15 18:20:51 --> Security Class Initialized
DEBUG - 2015-07-15 18:20:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:20:51 --> Input Class Initialized
INFO - 2015-07-15 18:20:51 --> Language Class Initialized
INFO - 2015-07-15 18:20:51 --> Loader Class Initialized
INFO - 2015-07-15 18:20:51 --> Helper loaded: url_helper
INFO - 2015-07-15 18:20:51 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:20:51 --> Database Driver Class Initialized
INFO - 2015-07-15 18:20:51 --> Model Class Initialized
INFO - 2015-07-15 18:20:51 --> Model Class Initialized
INFO - 2015-07-15 18:20:51 --> Model Class Initialized
INFO - 2015-07-15 18:20:51 --> Controller Class Initialized
DEBUG - 2015-07-15 18:20:51 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:20:51 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:20:51 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:20:51 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:20:51 --> Array
INFO - 2015-07-15 18:20:51 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:20:51 --> 
INFO - 2015-07-15 18:20:51 --> insert 7 2
INFO - 2015-07-15 18:22:02 --> Config Class Initialized
INFO - 2015-07-15 18:22:02 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:22:02 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:22:02 --> Utf8 Class Initialized
INFO - 2015-07-15 18:22:02 --> URI Class Initialized
INFO - 2015-07-15 18:22:02 --> Router Class Initialized
INFO - 2015-07-15 18:22:02 --> Output Class Initialized
INFO - 2015-07-15 18:22:02 --> Security Class Initialized
DEBUG - 2015-07-15 18:22:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:22:02 --> Input Class Initialized
INFO - 2015-07-15 18:22:02 --> Language Class Initialized
INFO - 2015-07-15 18:22:02 --> Loader Class Initialized
INFO - 2015-07-15 18:22:02 --> Helper loaded: url_helper
INFO - 2015-07-15 18:22:02 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:22:02 --> Database Driver Class Initialized
INFO - 2015-07-15 18:22:02 --> Model Class Initialized
INFO - 2015-07-15 18:22:02 --> Model Class Initialized
INFO - 2015-07-15 18:22:02 --> Model Class Initialized
INFO - 2015-07-15 18:22:02 --> Controller Class Initialized
DEBUG - 2015-07-15 18:22:02 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:22:02 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:22:02 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:22:02 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:22:02 --> Array
INFO - 2015-07-15 18:22:02 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:22:02 --> 
INFO - 2015-07-15 18:22:02 --> insert 7 2
INFO - 2015-07-15 18:22:10 --> Config Class Initialized
INFO - 2015-07-15 18:22:10 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:22:10 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:22:10 --> Utf8 Class Initialized
INFO - 2015-07-15 18:22:10 --> URI Class Initialized
INFO - 2015-07-15 18:22:10 --> Router Class Initialized
INFO - 2015-07-15 18:22:10 --> Output Class Initialized
INFO - 2015-07-15 18:22:10 --> Security Class Initialized
DEBUG - 2015-07-15 18:22:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:22:10 --> Input Class Initialized
INFO - 2015-07-15 18:22:10 --> Language Class Initialized
INFO - 2015-07-15 18:22:10 --> Loader Class Initialized
INFO - 2015-07-15 18:22:10 --> Helper loaded: url_helper
INFO - 2015-07-15 18:22:10 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:22:10 --> Database Driver Class Initialized
INFO - 2015-07-15 18:22:10 --> Model Class Initialized
INFO - 2015-07-15 18:22:10 --> Model Class Initialized
INFO - 2015-07-15 18:22:10 --> Model Class Initialized
INFO - 2015-07-15 18:22:10 --> Controller Class Initialized
DEBUG - 2015-07-15 18:22:10 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:22:10 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:22:10 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:22:10 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:22:10 --> Array
INFO - 2015-07-15 18:22:10 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:22:10 --> 33
INFO - 2015-07-15 18:22:10 --> UPDATE `user_locations` SET `lat` = '37.962114199999995', `lon` = '23.7009191', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:22:10', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:22:10 --> update 7 2
INFO - 2015-07-15 18:26:47 --> Config Class Initialized
INFO - 2015-07-15 18:26:47 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:26:47 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:26:47 --> Utf8 Class Initialized
INFO - 2015-07-15 18:26:47 --> URI Class Initialized
INFO - 2015-07-15 18:26:47 --> Router Class Initialized
INFO - 2015-07-15 18:26:47 --> Output Class Initialized
INFO - 2015-07-15 18:26:47 --> Security Class Initialized
DEBUG - 2015-07-15 18:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:26:47 --> Input Class Initialized
INFO - 2015-07-15 18:26:47 --> Language Class Initialized
INFO - 2015-07-15 18:26:47 --> Loader Class Initialized
INFO - 2015-07-15 18:26:47 --> Helper loaded: url_helper
INFO - 2015-07-15 18:26:47 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:26:47 --> Database Driver Class Initialized
INFO - 2015-07-15 18:26:47 --> Model Class Initialized
INFO - 2015-07-15 18:26:47 --> Model Class Initialized
INFO - 2015-07-15 18:26:47 --> Model Class Initialized
INFO - 2015-07-15 18:26:47 --> Controller Class Initialized
DEBUG - 2015-07-15 18:26:47 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:26:47 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:26:47 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:26:47 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:26:47 --> Array
INFO - 2015-07-15 18:26:47 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:26:47 --> 
INFO - 2015-07-15 18:26:47 --> insert 7 2
INFO - 2015-07-15 18:27:04 --> Config Class Initialized
INFO - 2015-07-15 18:27:04 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:27:04 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:27:04 --> Utf8 Class Initialized
INFO - 2015-07-15 18:27:04 --> URI Class Initialized
INFO - 2015-07-15 18:27:04 --> Router Class Initialized
INFO - 2015-07-15 18:27:04 --> Output Class Initialized
INFO - 2015-07-15 18:27:04 --> Security Class Initialized
DEBUG - 2015-07-15 18:27:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:27:04 --> Input Class Initialized
INFO - 2015-07-15 18:27:04 --> Language Class Initialized
INFO - 2015-07-15 18:27:04 --> Loader Class Initialized
INFO - 2015-07-15 18:27:04 --> Helper loaded: url_helper
INFO - 2015-07-15 18:27:04 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:27:04 --> Database Driver Class Initialized
INFO - 2015-07-15 18:27:04 --> Model Class Initialized
INFO - 2015-07-15 18:27:04 --> Model Class Initialized
INFO - 2015-07-15 18:27:04 --> Model Class Initialized
INFO - 2015-07-15 18:27:04 --> Controller Class Initialized
DEBUG - 2015-07-15 18:27:04 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:27:04 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:27:04 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:27:04 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:27:04 --> Array
INFO - 2015-07-15 18:27:04 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:27:04 --> 34
INFO - 2015-07-15 18:27:04 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:27:04', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:27:04 --> update 7 2
INFO - 2015-07-15 18:29:54 --> Config Class Initialized
INFO - 2015-07-15 18:29:54 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:29:54 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:29:54 --> Utf8 Class Initialized
INFO - 2015-07-15 18:29:54 --> URI Class Initialized
INFO - 2015-07-15 18:29:54 --> Router Class Initialized
INFO - 2015-07-15 18:29:54 --> Output Class Initialized
INFO - 2015-07-15 18:29:54 --> Security Class Initialized
DEBUG - 2015-07-15 18:29:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:29:54 --> Input Class Initialized
INFO - 2015-07-15 18:29:54 --> Language Class Initialized
INFO - 2015-07-15 18:29:54 --> Loader Class Initialized
INFO - 2015-07-15 18:29:54 --> Helper loaded: url_helper
INFO - 2015-07-15 18:29:54 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:29:54 --> Database Driver Class Initialized
INFO - 2015-07-15 18:29:54 --> Model Class Initialized
INFO - 2015-07-15 18:29:54 --> Model Class Initialized
INFO - 2015-07-15 18:29:54 --> Model Class Initialized
INFO - 2015-07-15 18:29:54 --> Controller Class Initialized
DEBUG - 2015-07-15 18:29:54 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:29:54 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:29:54 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:29:54 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:29:54 --> Array
INFO - 2015-07-15 18:29:54 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:29:54 --> 
INFO - 2015-07-15 18:29:54 --> insert 7 2
INFO - 2015-07-15 18:30:42 --> Config Class Initialized
INFO - 2015-07-15 18:30:42 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:30:42 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:30:42 --> Utf8 Class Initialized
INFO - 2015-07-15 18:30:42 --> URI Class Initialized
INFO - 2015-07-15 18:30:42 --> Config Class Initialized
INFO - 2015-07-15 18:30:42 --> Hooks Class Initialized
INFO - 2015-07-15 18:30:42 --> Router Class Initialized
DEBUG - 2015-07-15 18:30:42 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:30:42 --> Utf8 Class Initialized
INFO - 2015-07-15 18:30:42 --> Output Class Initialized
INFO - 2015-07-15 18:30:42 --> URI Class Initialized
INFO - 2015-07-15 18:30:42 --> Security Class Initialized
DEBUG - 2015-07-15 18:30:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:30:42 --> Router Class Initialized
INFO - 2015-07-15 18:30:42 --> Input Class Initialized
INFO - 2015-07-15 18:30:42 --> Language Class Initialized
INFO - 2015-07-15 18:30:42 --> Output Class Initialized
INFO - 2015-07-15 18:30:42 --> Loader Class Initialized
INFO - 2015-07-15 18:30:42 --> Security Class Initialized
INFO - 2015-07-15 18:30:42 --> Helper loaded: url_helper
INFO - 2015-07-15 18:30:42 --> Helper loaded: directions_helper
DEBUG - 2015-07-15 18:30:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:30:42 --> Input Class Initialized
INFO - 2015-07-15 18:30:42 --> Language Class Initialized
INFO - 2015-07-15 18:30:42 --> Database Driver Class Initialized
INFO - 2015-07-15 18:30:42 --> Loader Class Initialized
INFO - 2015-07-15 18:30:42 --> Helper loaded: url_helper
INFO - 2015-07-15 18:30:42 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:30:42 --> Database Driver Class Initialized
INFO - 2015-07-15 18:30:42 --> Model Class Initialized
INFO - 2015-07-15 18:30:42 --> Model Class Initialized
INFO - 2015-07-15 18:30:42 --> Model Class Initialized
INFO - 2015-07-15 18:30:42 --> Controller Class Initialized
DEBUG - 2015-07-15 18:30:42 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:30:42 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:30:42 --> Model Class Initialized
INFO - 2015-07-15 18:30:42 --> Model Class Initialized
INFO - 2015-07-15 18:30:42 --> Model Class Initialized
INFO - 2015-07-15 18:30:42 --> Controller Class Initialized
DEBUG - 2015-07-15 18:30:42 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:30:42 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:30:42 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:30:42 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:30:42 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:30:44 --> Config Class Initialized
INFO - 2015-07-15 18:30:44 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:30:44 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:30:44 --> Utf8 Class Initialized
INFO - 2015-07-15 18:30:44 --> URI Class Initialized
INFO - 2015-07-15 18:30:44 --> Router Class Initialized
INFO - 2015-07-15 18:30:44 --> Output Class Initialized
INFO - 2015-07-15 18:30:44 --> Security Class Initialized
DEBUG - 2015-07-15 18:30:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:30:44 --> Input Class Initialized
INFO - 2015-07-15 18:30:44 --> Language Class Initialized
INFO - 2015-07-15 18:30:44 --> Loader Class Initialized
INFO - 2015-07-15 18:30:44 --> Helper loaded: url_helper
INFO - 2015-07-15 18:30:44 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:30:44 --> Database Driver Class Initialized
INFO - 2015-07-15 18:30:44 --> Model Class Initialized
INFO - 2015-07-15 18:30:44 --> Model Class Initialized
INFO - 2015-07-15 18:30:44 --> Model Class Initialized
INFO - 2015-07-15 18:30:44 --> Controller Class Initialized
DEBUG - 2015-07-15 18:30:44 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:30:44 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:30:44 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:30:44 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:30:44 --> Array
INFO - 2015-07-15 18:30:44 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:30:44 --> 35
INFO - 2015-07-15 18:30:44 --> UPDATE `user_locations` SET `lat` = '37.9619718', `lon` = '23.700895799999998', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:30:44', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:30:44 --> update 7 2
INFO - 2015-07-15 18:34:18 --> Config Class Initialized
INFO - 2015-07-15 18:34:18 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:34:18 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:34:18 --> Utf8 Class Initialized
INFO - 2015-07-15 18:34:18 --> URI Class Initialized
INFO - 2015-07-15 18:34:18 --> Config Class Initialized
INFO - 2015-07-15 18:34:18 --> Router Class Initialized
INFO - 2015-07-15 18:34:18 --> Hooks Class Initialized
INFO - 2015-07-15 18:34:18 --> Output Class Initialized
DEBUG - 2015-07-15 18:34:18 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:34:18 --> Utf8 Class Initialized
INFO - 2015-07-15 18:34:18 --> Security Class Initialized
DEBUG - 2015-07-15 18:34:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:34:18 --> URI Class Initialized
INFO - 2015-07-15 18:34:18 --> Input Class Initialized
INFO - 2015-07-15 18:34:18 --> Language Class Initialized
INFO - 2015-07-15 18:34:18 --> Router Class Initialized
INFO - 2015-07-15 18:34:18 --> Output Class Initialized
INFO - 2015-07-15 18:34:18 --> Loader Class Initialized
INFO - 2015-07-15 18:34:18 --> Security Class Initialized
INFO - 2015-07-15 18:34:18 --> Helper loaded: url_helper
INFO - 2015-07-15 18:34:18 --> Helper loaded: directions_helper
DEBUG - 2015-07-15 18:34:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:34:18 --> Input Class Initialized
INFO - 2015-07-15 18:34:18 --> Database Driver Class Initialized
INFO - 2015-07-15 18:34:18 --> Language Class Initialized
INFO - 2015-07-15 18:34:18 --> Model Class Initialized
INFO - 2015-07-15 18:34:18 --> Loader Class Initialized
INFO - 2015-07-15 18:34:18 --> Model Class Initialized
INFO - 2015-07-15 18:34:18 --> Model Class Initialized
INFO - 2015-07-15 18:34:18 --> Controller Class Initialized
DEBUG - 2015-07-15 18:34:18 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:34:18 --> Helper loaded: url_helper
INFO - 2015-07-15 18:34:18 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:34:18 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:34:18 --> Database Driver Class Initialized
INFO - 2015-07-15 18:34:18 --> Model Class Initialized
INFO - 2015-07-15 18:34:18 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:34:18 --> Model Class Initialized
INFO - 2015-07-15 18:34:18 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:34:18 --> Model Class Initialized
INFO - 2015-07-15 18:34:18 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:34:18 --> Controller Class Initialized
DEBUG - 2015-07-15 18:34:18 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:34:18 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:34:27 --> Config Class Initialized
INFO - 2015-07-15 18:34:27 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:34:27 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:34:27 --> Utf8 Class Initialized
INFO - 2015-07-15 18:34:27 --> URI Class Initialized
INFO - 2015-07-15 18:34:27 --> Router Class Initialized
INFO - 2015-07-15 18:34:27 --> Output Class Initialized
INFO - 2015-07-15 18:34:27 --> Security Class Initialized
DEBUG - 2015-07-15 18:34:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:34:27 --> Input Class Initialized
INFO - 2015-07-15 18:34:27 --> Language Class Initialized
INFO - 2015-07-15 18:34:27 --> Loader Class Initialized
INFO - 2015-07-15 18:34:27 --> Helper loaded: url_helper
INFO - 2015-07-15 18:34:27 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:34:27 --> Database Driver Class Initialized
INFO - 2015-07-15 18:34:27 --> Model Class Initialized
INFO - 2015-07-15 18:34:27 --> Model Class Initialized
INFO - 2015-07-15 18:34:27 --> Model Class Initialized
INFO - 2015-07-15 18:34:27 --> Controller Class Initialized
DEBUG - 2015-07-15 18:34:27 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:34:27 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:34:27 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:34:27 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:34:27 --> Array
INFO - 2015-07-15 18:34:27 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:34:27 --> 
INFO - 2015-07-15 18:34:27 --> insert 7 2
INFO - 2015-07-15 18:39:33 --> Config Class Initialized
INFO - 2015-07-15 18:39:33 --> Hooks Class Initialized
INFO - 2015-07-15 18:39:33 --> Config Class Initialized
INFO - 2015-07-15 18:39:33 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:39:33 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:39:33 --> Utf8 Class Initialized
DEBUG - 2015-07-15 18:39:33 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:39:33 --> Utf8 Class Initialized
INFO - 2015-07-15 18:39:33 --> URI Class Initialized
INFO - 2015-07-15 18:39:33 --> URI Class Initialized
INFO - 2015-07-15 18:39:33 --> Router Class Initialized
INFO - 2015-07-15 18:39:33 --> Router Class Initialized
INFO - 2015-07-15 18:39:33 --> Output Class Initialized
INFO - 2015-07-15 18:39:33 --> Output Class Initialized
INFO - 2015-07-15 18:39:33 --> Security Class Initialized
INFO - 2015-07-15 18:39:33 --> Security Class Initialized
DEBUG - 2015-07-15 18:39:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-07-15 18:39:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:39:33 --> Input Class Initialized
INFO - 2015-07-15 18:39:33 --> Input Class Initialized
INFO - 2015-07-15 18:39:33 --> Language Class Initialized
INFO - 2015-07-15 18:39:33 --> Language Class Initialized
INFO - 2015-07-15 18:39:33 --> Loader Class Initialized
INFO - 2015-07-15 18:39:33 --> Loader Class Initialized
INFO - 2015-07-15 18:39:33 --> Helper loaded: url_helper
INFO - 2015-07-15 18:39:33 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:39:33 --> Helper loaded: url_helper
INFO - 2015-07-15 18:39:33 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:39:33 --> Database Driver Class Initialized
INFO - 2015-07-15 18:39:33 --> Model Class Initialized
INFO - 2015-07-15 18:39:33 --> Model Class Initialized
INFO - 2015-07-15 18:39:33 --> Database Driver Class Initialized
INFO - 2015-07-15 18:39:33 --> Model Class Initialized
INFO - 2015-07-15 18:39:33 --> Controller Class Initialized
DEBUG - 2015-07-15 18:39:33 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:39:33 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:39:33 --> Model Class Initialized
INFO - 2015-07-15 18:39:33 --> Model Class Initialized
INFO - 2015-07-15 18:39:33 --> Model Class Initialized
INFO - 2015-07-15 18:39:33 --> Controller Class Initialized
DEBUG - 2015-07-15 18:39:33 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:39:33 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:39:33 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:39:33 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:39:33 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:39:37 --> Config Class Initialized
INFO - 2015-07-15 18:39:37 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:39:37 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:39:37 --> Utf8 Class Initialized
INFO - 2015-07-15 18:39:37 --> URI Class Initialized
INFO - 2015-07-15 18:39:37 --> Router Class Initialized
INFO - 2015-07-15 18:39:37 --> Output Class Initialized
INFO - 2015-07-15 18:39:37 --> Security Class Initialized
DEBUG - 2015-07-15 18:39:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:39:37 --> Input Class Initialized
INFO - 2015-07-15 18:39:37 --> Language Class Initialized
INFO - 2015-07-15 18:39:37 --> Loader Class Initialized
INFO - 2015-07-15 18:39:37 --> Helper loaded: url_helper
INFO - 2015-07-15 18:39:37 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:39:37 --> Database Driver Class Initialized
INFO - 2015-07-15 18:39:37 --> Model Class Initialized
INFO - 2015-07-15 18:39:37 --> Model Class Initialized
INFO - 2015-07-15 18:39:37 --> Model Class Initialized
INFO - 2015-07-15 18:39:37 --> Controller Class Initialized
DEBUG - 2015-07-15 18:39:37 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:39:37 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:39:37 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:39:37 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:39:37 --> Array
INFO - 2015-07-15 18:39:37 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:39:37 --> 
INFO - 2015-07-15 18:39:37 --> insert 7 2
INFO - 2015-07-15 18:41:15 --> Config Class Initialized
INFO - 2015-07-15 18:41:15 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:41:15 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:41:15 --> Utf8 Class Initialized
INFO - 2015-07-15 18:41:15 --> URI Class Initialized
INFO - 2015-07-15 18:41:15 --> Router Class Initialized
INFO - 2015-07-15 18:41:15 --> Output Class Initialized
INFO - 2015-07-15 18:41:15 --> Security Class Initialized
DEBUG - 2015-07-15 18:41:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:41:15 --> Input Class Initialized
INFO - 2015-07-15 18:41:15 --> Language Class Initialized
INFO - 2015-07-15 18:41:15 --> Loader Class Initialized
INFO - 2015-07-15 18:41:15 --> Helper loaded: url_helper
INFO - 2015-07-15 18:41:15 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:41:15 --> Database Driver Class Initialized
INFO - 2015-07-15 18:41:15 --> Model Class Initialized
INFO - 2015-07-15 18:41:15 --> Model Class Initialized
INFO - 2015-07-15 18:41:15 --> Model Class Initialized
INFO - 2015-07-15 18:41:15 --> Controller Class Initialized
DEBUG - 2015-07-15 18:41:15 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:41:15 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:41:15 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:41:15 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:41:15 --> Array
INFO - 2015-07-15 18:41:15 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:41:15 --> 
INFO - 2015-07-15 18:41:15 --> insert 7 2
INFO - 2015-07-15 18:44:05 --> Config Class Initialized
INFO - 2015-07-15 18:44:05 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:44:05 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:44:05 --> Utf8 Class Initialized
INFO - 2015-07-15 18:44:05 --> Config Class Initialized
INFO - 2015-07-15 18:44:05 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:44:05 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:44:05 --> Utf8 Class Initialized
INFO - 2015-07-15 18:44:05 --> URI Class Initialized
INFO - 2015-07-15 18:44:05 --> Router Class Initialized
INFO - 2015-07-15 18:44:05 --> Output Class Initialized
INFO - 2015-07-15 18:44:05 --> Security Class Initialized
DEBUG - 2015-07-15 18:44:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:44:05 --> URI Class Initialized
INFO - 2015-07-15 18:44:05 --> Input Class Initialized
INFO - 2015-07-15 18:44:05 --> Language Class Initialized
INFO - 2015-07-15 18:44:05 --> Router Class Initialized
INFO - 2015-07-15 18:44:05 --> Output Class Initialized
INFO - 2015-07-15 18:44:05 --> Security Class Initialized
INFO - 2015-07-15 18:44:05 --> Loader Class Initialized
DEBUG - 2015-07-15 18:44:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:44:05 --> Input Class Initialized
INFO - 2015-07-15 18:44:05 --> Language Class Initialized
INFO - 2015-07-15 18:44:05 --> Helper loaded: url_helper
INFO - 2015-07-15 18:44:05 --> Loader Class Initialized
INFO - 2015-07-15 18:44:05 --> Helper loaded: url_helper
INFO - 2015-07-15 18:44:05 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:44:05 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:44:05 --> Database Driver Class Initialized
INFO - 2015-07-15 18:44:05 --> Database Driver Class Initialized
INFO - 2015-07-15 18:44:05 --> Model Class Initialized
INFO - 2015-07-15 18:44:05 --> Model Class Initialized
INFO - 2015-07-15 18:44:05 --> Model Class Initialized
INFO - 2015-07-15 18:44:05 --> Controller Class Initialized
DEBUG - 2015-07-15 18:44:05 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:44:05 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:44:05 --> Model Class Initialized
INFO - 2015-07-15 18:44:05 --> Model Class Initialized
INFO - 2015-07-15 18:44:05 --> Model Class Initialized
INFO - 2015-07-15 18:44:05 --> Controller Class Initialized
DEBUG - 2015-07-15 18:44:05 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:44:05 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:44:05 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:44:05 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:44:05 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:44:09 --> Config Class Initialized
INFO - 2015-07-15 18:44:09 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:44:09 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:44:09 --> Utf8 Class Initialized
INFO - 2015-07-15 18:44:09 --> URI Class Initialized
INFO - 2015-07-15 18:44:09 --> Router Class Initialized
INFO - 2015-07-15 18:44:09 --> Output Class Initialized
INFO - 2015-07-15 18:44:09 --> Security Class Initialized
DEBUG - 2015-07-15 18:44:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:44:09 --> Input Class Initialized
INFO - 2015-07-15 18:44:09 --> Language Class Initialized
INFO - 2015-07-15 18:44:09 --> Loader Class Initialized
INFO - 2015-07-15 18:44:09 --> Helper loaded: url_helper
INFO - 2015-07-15 18:44:09 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:44:09 --> Database Driver Class Initialized
INFO - 2015-07-15 18:44:09 --> Model Class Initialized
INFO - 2015-07-15 18:44:09 --> Model Class Initialized
INFO - 2015-07-15 18:44:09 --> Model Class Initialized
INFO - 2015-07-15 18:44:09 --> Controller Class Initialized
DEBUG - 2015-07-15 18:44:09 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:44:09 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:44:09 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:44:09 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:44:09 --> Array
INFO - 2015-07-15 18:44:09 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:44:09 --> 
INFO - 2015-07-15 18:44:09 --> insert 7 2
INFO - 2015-07-15 18:47:32 --> Config Class Initialized
INFO - 2015-07-15 18:47:32 --> Hooks Class Initialized
INFO - 2015-07-15 18:47:32 --> Config Class Initialized
INFO - 2015-07-15 18:47:32 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:47:32 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:47:32 --> Utf8 Class Initialized
DEBUG - 2015-07-15 18:47:32 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:47:32 --> Utf8 Class Initialized
INFO - 2015-07-15 18:47:32 --> URI Class Initialized
INFO - 2015-07-15 18:47:32 --> Router Class Initialized
INFO - 2015-07-15 18:47:32 --> URI Class Initialized
INFO - 2015-07-15 18:47:32 --> Output Class Initialized
INFO - 2015-07-15 18:47:32 --> Router Class Initialized
INFO - 2015-07-15 18:47:32 --> Security Class Initialized
DEBUG - 2015-07-15 18:47:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:47:32 --> Input Class Initialized
INFO - 2015-07-15 18:47:32 --> Output Class Initialized
INFO - 2015-07-15 18:47:32 --> Language Class Initialized
INFO - 2015-07-15 18:47:32 --> Security Class Initialized
INFO - 2015-07-15 18:47:32 --> Loader Class Initialized
DEBUG - 2015-07-15 18:47:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:47:32 --> Input Class Initialized
INFO - 2015-07-15 18:47:32 --> Helper loaded: url_helper
INFO - 2015-07-15 18:47:32 --> Language Class Initialized
INFO - 2015-07-15 18:47:32 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:47:32 --> Loader Class Initialized
INFO - 2015-07-15 18:47:32 --> Database Driver Class Initialized
INFO - 2015-07-15 18:47:32 --> Helper loaded: url_helper
INFO - 2015-07-15 18:47:32 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:47:32 --> Model Class Initialized
INFO - 2015-07-15 18:47:32 --> Model Class Initialized
INFO - 2015-07-15 18:47:32 --> Model Class Initialized
INFO - 2015-07-15 18:47:32 --> Controller Class Initialized
INFO - 2015-07-15 18:47:32 --> Database Driver Class Initialized
DEBUG - 2015-07-15 18:47:32 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:47:32 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:47:32 --> Model Class Initialized
INFO - 2015-07-15 18:47:32 --> Model Class Initialized
INFO - 2015-07-15 18:47:32 --> Model Class Initialized
INFO - 2015-07-15 18:47:32 --> Controller Class Initialized
DEBUG - 2015-07-15 18:47:32 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:47:32 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:47:32 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:47:32 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:47:32 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:47:39 --> Config Class Initialized
INFO - 2015-07-15 18:47:39 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:47:39 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:47:39 --> Utf8 Class Initialized
INFO - 2015-07-15 18:47:39 --> URI Class Initialized
INFO - 2015-07-15 18:47:39 --> Router Class Initialized
INFO - 2015-07-15 18:47:39 --> Output Class Initialized
INFO - 2015-07-15 18:47:39 --> Security Class Initialized
DEBUG - 2015-07-15 18:47:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:47:39 --> Input Class Initialized
INFO - 2015-07-15 18:47:39 --> Language Class Initialized
INFO - 2015-07-15 18:47:39 --> Loader Class Initialized
INFO - 2015-07-15 18:47:39 --> Helper loaded: url_helper
INFO - 2015-07-15 18:47:39 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:47:39 --> Database Driver Class Initialized
INFO - 2015-07-15 18:47:39 --> Model Class Initialized
INFO - 2015-07-15 18:47:39 --> Model Class Initialized
INFO - 2015-07-15 18:47:39 --> Model Class Initialized
INFO - 2015-07-15 18:47:39 --> Controller Class Initialized
DEBUG - 2015-07-15 18:47:39 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:47:39 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:47:39 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:47:39 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:47:39 --> Array
INFO - 2015-07-15 18:47:39 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:47:39 --> 
INFO - 2015-07-15 18:47:39 --> insert 7 2
INFO - 2015-07-15 18:47:40 --> Config Class Initialized
INFO - 2015-07-15 18:47:40 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:47:40 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:47:40 --> Utf8 Class Initialized
INFO - 2015-07-15 18:47:40 --> URI Class Initialized
INFO - 2015-07-15 18:47:40 --> Router Class Initialized
INFO - 2015-07-15 18:47:40 --> Output Class Initialized
INFO - 2015-07-15 18:47:40 --> Security Class Initialized
DEBUG - 2015-07-15 18:47:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:47:40 --> Input Class Initialized
INFO - 2015-07-15 18:47:40 --> Config Class Initialized
INFO - 2015-07-15 18:47:40 --> Hooks Class Initialized
INFO - 2015-07-15 18:47:40 --> Language Class Initialized
DEBUG - 2015-07-15 18:47:40 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:47:40 --> Utf8 Class Initialized
INFO - 2015-07-15 18:47:40 --> Loader Class Initialized
INFO - 2015-07-15 18:47:40 --> URI Class Initialized
INFO - 2015-07-15 18:47:40 --> Helper loaded: url_helper
INFO - 2015-07-15 18:47:40 --> Router Class Initialized
INFO - 2015-07-15 18:47:40 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:47:40 --> Output Class Initialized
INFO - 2015-07-15 18:47:40 --> Security Class Initialized
INFO - 2015-07-15 18:47:40 --> Database Driver Class Initialized
DEBUG - 2015-07-15 18:47:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:47:40 --> Input Class Initialized
INFO - 2015-07-15 18:47:40 --> Language Class Initialized
INFO - 2015-07-15 18:47:40 --> Model Class Initialized
INFO - 2015-07-15 18:47:40 --> Model Class Initialized
INFO - 2015-07-15 18:47:40 --> Model Class Initialized
INFO - 2015-07-15 18:47:40 --> Controller Class Initialized
INFO - 2015-07-15 18:47:40 --> Loader Class Initialized
DEBUG - 2015-07-15 18:47:40 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:47:40 --> Helper loaded: url_helper
INFO - 2015-07-15 18:47:40 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:47:40 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:47:40 --> Database Driver Class Initialized
INFO - 2015-07-15 18:47:40 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:47:40 --> Model Class Initialized
INFO - 2015-07-15 18:47:40 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:47:40 --> Model Class Initialized
INFO - 2015-07-15 18:47:40 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:47:40 --> Model Class Initialized
INFO - 2015-07-15 18:47:40 --> Controller Class Initialized
DEBUG - 2015-07-15 18:47:40 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:47:40 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:47:41 --> Config Class Initialized
INFO - 2015-07-15 18:47:41 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:47:41 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:47:41 --> Utf8 Class Initialized
INFO - 2015-07-15 18:47:41 --> URI Class Initialized
INFO - 2015-07-15 18:47:41 --> Router Class Initialized
INFO - 2015-07-15 18:47:41 --> Output Class Initialized
INFO - 2015-07-15 18:47:41 --> Security Class Initialized
DEBUG - 2015-07-15 18:47:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:47:41 --> Input Class Initialized
INFO - 2015-07-15 18:47:41 --> Language Class Initialized
INFO - 2015-07-15 18:47:41 --> Loader Class Initialized
INFO - 2015-07-15 18:47:41 --> Helper loaded: url_helper
INFO - 2015-07-15 18:47:41 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:47:41 --> Database Driver Class Initialized
INFO - 2015-07-15 18:47:41 --> Model Class Initialized
INFO - 2015-07-15 18:47:41 --> Model Class Initialized
INFO - 2015-07-15 18:47:41 --> Model Class Initialized
INFO - 2015-07-15 18:47:41 --> Controller Class Initialized
DEBUG - 2015-07-15 18:47:41 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:47:41 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:47:41 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:47:41 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:47:41 --> Array
INFO - 2015-07-15 18:47:41 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:47:41 --> 40
INFO - 2015-07-15 18:47:41 --> UPDATE `user_locations` SET `lat` = '37.961945799999995', `lon` = '23.700896099999998', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 18:47:41', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:47:41 --> update 7 2
INFO - 2015-07-15 18:49:03 --> Config Class Initialized
INFO - 2015-07-15 18:49:03 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:49:03 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:49:03 --> Utf8 Class Initialized
INFO - 2015-07-15 18:49:03 --> Config Class Initialized
INFO - 2015-07-15 18:49:03 --> Hooks Class Initialized
INFO - 2015-07-15 18:49:03 --> URI Class Initialized
DEBUG - 2015-07-15 18:49:03 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:49:03 --> Router Class Initialized
INFO - 2015-07-15 18:49:03 --> Utf8 Class Initialized
INFO - 2015-07-15 18:49:03 --> Output Class Initialized
INFO - 2015-07-15 18:49:03 --> URI Class Initialized
INFO - 2015-07-15 18:49:03 --> Security Class Initialized
INFO - 2015-07-15 18:49:03 --> Router Class Initialized
DEBUG - 2015-07-15 18:49:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:49:03 --> Input Class Initialized
INFO - 2015-07-15 18:49:03 --> Output Class Initialized
INFO - 2015-07-15 18:49:03 --> Language Class Initialized
INFO - 2015-07-15 18:49:03 --> Security Class Initialized
DEBUG - 2015-07-15 18:49:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:49:03 --> Loader Class Initialized
INFO - 2015-07-15 18:49:03 --> Input Class Initialized
INFO - 2015-07-15 18:49:03 --> Helper loaded: url_helper
INFO - 2015-07-15 18:49:03 --> Language Class Initialized
INFO - 2015-07-15 18:49:03 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:49:03 --> Loader Class Initialized
INFO - 2015-07-15 18:49:03 --> Database Driver Class Initialized
INFO - 2015-07-15 18:49:03 --> Helper loaded: url_helper
INFO - 2015-07-15 18:49:03 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:49:03 --> Model Class Initialized
INFO - 2015-07-15 18:49:04 --> Model Class Initialized
INFO - 2015-07-15 18:49:04 --> Model Class Initialized
INFO - 2015-07-15 18:49:04 --> Controller Class Initialized
DEBUG - 2015-07-15 18:49:04 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:49:04 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:49:04 --> Database Driver Class Initialized
INFO - 2015-07-15 18:49:04 --> Model Class Initialized
INFO - 2015-07-15 18:49:04 --> Model Class Initialized
INFO - 2015-07-15 18:49:04 --> Model Class Initialized
INFO - 2015-07-15 18:49:04 --> Controller Class Initialized
DEBUG - 2015-07-15 18:49:04 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:49:04 --> Helper loaded: inflector_helper
INFO - 2015-07-15 18:49:04 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 18:49:04 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 18:49:04 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 18:49:05 --> Config Class Initialized
INFO - 2015-07-15 18:49:05 --> Hooks Class Initialized
DEBUG - 2015-07-15 18:49:05 --> UTF-8 Support Enabled
INFO - 2015-07-15 18:49:05 --> Utf8 Class Initialized
INFO - 2015-07-15 18:49:05 --> URI Class Initialized
INFO - 2015-07-15 18:49:05 --> Router Class Initialized
INFO - 2015-07-15 18:49:05 --> Output Class Initialized
INFO - 2015-07-15 18:49:05 --> Security Class Initialized
DEBUG - 2015-07-15 18:49:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 18:49:05 --> Input Class Initialized
INFO - 2015-07-15 18:49:05 --> Language Class Initialized
INFO - 2015-07-15 18:49:05 --> Loader Class Initialized
INFO - 2015-07-15 18:49:05 --> Helper loaded: url_helper
INFO - 2015-07-15 18:49:05 --> Helper loaded: directions_helper
INFO - 2015-07-15 18:49:05 --> Database Driver Class Initialized
INFO - 2015-07-15 18:49:05 --> Model Class Initialized
INFO - 2015-07-15 18:49:05 --> Model Class Initialized
INFO - 2015-07-15 18:49:05 --> Model Class Initialized
INFO - 2015-07-15 18:49:05 --> Controller Class Initialized
DEBUG - 2015-07-15 18:49:05 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 18:49:05 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 18:49:05 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 18:49:05 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 18:49:05 --> Array
INFO - 2015-07-15 18:49:05 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 18:49:05 --> 
INFO - 2015-07-15 18:49:05 --> insert 7 2
INFO - 2015-07-15 19:03:11 --> Config Class Initialized
INFO - 2015-07-15 19:03:11 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:03:11 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:03:11 --> Utf8 Class Initialized
INFO - 2015-07-15 19:03:11 --> URI Class Initialized
INFO - 2015-07-15 19:03:11 --> Router Class Initialized
INFO - 2015-07-15 19:03:11 --> Output Class Initialized
INFO - 2015-07-15 19:03:11 --> Security Class Initialized
DEBUG - 2015-07-15 19:03:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:03:11 --> Input Class Initialized
INFO - 2015-07-15 19:03:11 --> Language Class Initialized
INFO - 2015-07-15 19:03:11 --> Loader Class Initialized
INFO - 2015-07-15 19:03:11 --> Helper loaded: url_helper
INFO - 2015-07-15 19:03:11 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:03:11 --> Database Driver Class Initialized
INFO - 2015-07-15 19:03:11 --> Model Class Initialized
INFO - 2015-07-15 19:03:11 --> Model Class Initialized
INFO - 2015-07-15 19:03:11 --> Model Class Initialized
INFO - 2015-07-15 19:03:11 --> Controller Class Initialized
DEBUG - 2015-07-15 19:03:11 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:03:11 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:03:11 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 19:03:11 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 19:03:11 --> Array
INFO - 2015-07-15 19:03:11 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:03:11 --> 
INFO - 2015-07-15 19:03:11 --> insert 7 2
INFO - 2015-07-15 19:04:33 --> Config Class Initialized
INFO - 2015-07-15 19:04:33 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:04:33 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:04:33 --> Utf8 Class Initialized
INFO - 2015-07-15 19:04:33 --> URI Class Initialized
INFO - 2015-07-15 19:04:33 --> Router Class Initialized
INFO - 2015-07-15 19:04:33 --> Output Class Initialized
INFO - 2015-07-15 19:04:33 --> Security Class Initialized
DEBUG - 2015-07-15 19:04:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:04:33 --> Input Class Initialized
INFO - 2015-07-15 19:04:33 --> Language Class Initialized
INFO - 2015-07-15 19:04:33 --> Loader Class Initialized
INFO - 2015-07-15 19:04:33 --> Helper loaded: url_helper
INFO - 2015-07-15 19:04:33 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:04:33 --> Database Driver Class Initialized
INFO - 2015-07-15 19:04:33 --> Model Class Initialized
INFO - 2015-07-15 19:04:33 --> Model Class Initialized
INFO - 2015-07-15 19:04:33 --> Model Class Initialized
INFO - 2015-07-15 19:04:33 --> Controller Class Initialized
DEBUG - 2015-07-15 19:04:33 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:04:33 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:04:33 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 19:04:33 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 19:04:33 --> Array
INFO - 2015-07-15 19:04:33 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:04:33 --> 42
INFO - 2015-07-15 19:04:33 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 19:04:33', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:04:33 --> update 7 2
INFO - 2015-07-15 19:06:33 --> Config Class Initialized
INFO - 2015-07-15 19:06:33 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:06:33 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:06:33 --> Utf8 Class Initialized
INFO - 2015-07-15 19:06:33 --> URI Class Initialized
INFO - 2015-07-15 19:06:33 --> Router Class Initialized
INFO - 2015-07-15 19:06:33 --> Output Class Initialized
INFO - 2015-07-15 19:06:33 --> Security Class Initialized
DEBUG - 2015-07-15 19:06:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:06:33 --> Input Class Initialized
INFO - 2015-07-15 19:06:33 --> Language Class Initialized
INFO - 2015-07-15 19:06:33 --> Loader Class Initialized
INFO - 2015-07-15 19:06:33 --> Helper loaded: url_helper
INFO - 2015-07-15 19:06:33 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:06:33 --> Database Driver Class Initialized
INFO - 2015-07-15 19:06:33 --> Model Class Initialized
INFO - 2015-07-15 19:06:33 --> Model Class Initialized
INFO - 2015-07-15 19:06:33 --> Model Class Initialized
INFO - 2015-07-15 19:06:33 --> Controller Class Initialized
DEBUG - 2015-07-15 19:06:33 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:06:33 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:06:33 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 19:06:33 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 19:06:33 --> Array
INFO - 2015-07-15 19:06:33 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:06:33 --> 
INFO - 2015-07-15 19:06:33 --> insert 7 2
INFO - 2015-07-15 19:06:51 --> Config Class Initialized
INFO - 2015-07-15 19:06:51 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:06:51 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:06:51 --> Utf8 Class Initialized
INFO - 2015-07-15 19:06:51 --> URI Class Initialized
INFO - 2015-07-15 19:06:51 --> Router Class Initialized
INFO - 2015-07-15 19:06:51 --> Output Class Initialized
INFO - 2015-07-15 19:06:51 --> Security Class Initialized
DEBUG - 2015-07-15 19:06:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:06:51 --> Input Class Initialized
INFO - 2015-07-15 19:06:51 --> Language Class Initialized
INFO - 2015-07-15 19:06:51 --> Loader Class Initialized
INFO - 2015-07-15 19:06:51 --> Helper loaded: url_helper
INFO - 2015-07-15 19:06:51 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:06:51 --> Database Driver Class Initialized
INFO - 2015-07-15 19:06:51 --> Model Class Initialized
INFO - 2015-07-15 19:06:51 --> Model Class Initialized
INFO - 2015-07-15 19:06:51 --> Model Class Initialized
INFO - 2015-07-15 19:06:51 --> Controller Class Initialized
DEBUG - 2015-07-15 19:06:51 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:06:51 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:06:51 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-15 19:06:51 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-15 19:06:51 --> Array
INFO - 2015-07-15 19:06:51 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:06:51 --> 43
INFO - 2015-07-15 19:06:51 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 19:06:51', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:06:51 --> update 7 2
INFO - 2015-07-15 19:10:31 --> Config Class Initialized
INFO - 2015-07-15 19:10:31 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:10:31 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:10:31 --> Utf8 Class Initialized
INFO - 2015-07-15 19:10:31 --> URI Class Initialized
INFO - 2015-07-15 19:10:31 --> Router Class Initialized
INFO - 2015-07-15 19:10:31 --> Output Class Initialized
INFO - 2015-07-15 19:10:31 --> Security Class Initialized
DEBUG - 2015-07-15 19:10:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:10:31 --> Input Class Initialized
INFO - 2015-07-15 19:10:31 --> Language Class Initialized
INFO - 2015-07-15 19:10:31 --> Loader Class Initialized
INFO - 2015-07-15 19:10:31 --> Helper loaded: url_helper
INFO - 2015-07-15 19:10:31 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:10:31 --> Database Driver Class Initialized
INFO - 2015-07-15 19:10:31 --> Model Class Initialized
INFO - 2015-07-15 19:10:31 --> Model Class Initialized
INFO - 2015-07-15 19:10:31 --> Model Class Initialized
INFO - 2015-07-15 19:10:31 --> Controller Class Initialized
DEBUG - 2015-07-15 19:10:31 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:10:31 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:10:31 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
INFO - 2015-07-15 19:10:31 --> routis
INFO - 2015-07-15 19:10:31 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:10:31 --> 
INFO - 2015-07-15 19:10:31 --> insert 7 2
INFO - 2015-07-15 19:11:06 --> Config Class Initialized
INFO - 2015-07-15 19:11:06 --> Config Class Initialized
INFO - 2015-07-15 19:11:06 --> Hooks Class Initialized
INFO - 2015-07-15 19:11:06 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:11:06 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:11:06 --> Utf8 Class Initialized
DEBUG - 2015-07-15 19:11:06 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:11:06 --> URI Class Initialized
INFO - 2015-07-15 19:11:06 --> Utf8 Class Initialized
INFO - 2015-07-15 19:11:06 --> Router Class Initialized
INFO - 2015-07-15 19:11:06 --> Output Class Initialized
INFO - 2015-07-15 19:11:06 --> URI Class Initialized
INFO - 2015-07-15 19:11:06 --> Security Class Initialized
DEBUG - 2015-07-15 19:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:11:06 --> Input Class Initialized
INFO - 2015-07-15 19:11:06 --> Router Class Initialized
INFO - 2015-07-15 19:11:06 --> Language Class Initialized
INFO - 2015-07-15 19:11:06 --> Loader Class Initialized
INFO - 2015-07-15 19:11:06 --> Helper loaded: url_helper
INFO - 2015-07-15 19:11:06 --> Output Class Initialized
INFO - 2015-07-15 19:11:06 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:11:06 --> Security Class Initialized
INFO - 2015-07-15 19:11:06 --> Database Driver Class Initialized
DEBUG - 2015-07-15 19:11:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:11:06 --> Input Class Initialized
INFO - 2015-07-15 19:11:06 --> Model Class Initialized
INFO - 2015-07-15 19:11:06 --> Language Class Initialized
INFO - 2015-07-15 19:11:06 --> Model Class Initialized
INFO - 2015-07-15 19:11:06 --> Model Class Initialized
INFO - 2015-07-15 19:11:06 --> Controller Class Initialized
DEBUG - 2015-07-15 19:11:06 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:11:06 --> Helper loaded: inflector_helper
INFO - 2015-07-15 19:11:06 --> Loader Class Initialized
INFO - 2015-07-15 19:11:06 --> Helper loaded: url_helper
INFO - 2015-07-15 19:11:06 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:11:06 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 19:11:06 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 19:11:06 --> Database Driver Class Initialized
INFO - 2015-07-15 19:11:06 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 19:11:06 --> Model Class Initialized
INFO - 2015-07-15 19:11:06 --> Model Class Initialized
INFO - 2015-07-15 19:11:06 --> Model Class Initialized
INFO - 2015-07-15 19:11:06 --> Controller Class Initialized
DEBUG - 2015-07-15 19:11:06 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:11:06 --> Helper loaded: inflector_helper
INFO - 2015-07-15 19:11:08 --> Config Class Initialized
INFO - 2015-07-15 19:11:08 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:11:08 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:11:08 --> Utf8 Class Initialized
INFO - 2015-07-15 19:11:08 --> URI Class Initialized
INFO - 2015-07-15 19:11:08 --> Router Class Initialized
INFO - 2015-07-15 19:11:08 --> Output Class Initialized
INFO - 2015-07-15 19:11:08 --> Security Class Initialized
DEBUG - 2015-07-15 19:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:11:08 --> Input Class Initialized
INFO - 2015-07-15 19:11:08 --> Language Class Initialized
INFO - 2015-07-15 19:11:08 --> Loader Class Initialized
INFO - 2015-07-15 19:11:08 --> Helper loaded: url_helper
INFO - 2015-07-15 19:11:08 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:11:08 --> Database Driver Class Initialized
INFO - 2015-07-15 19:11:08 --> Model Class Initialized
INFO - 2015-07-15 19:11:08 --> Model Class Initialized
INFO - 2015-07-15 19:11:08 --> Model Class Initialized
INFO - 2015-07-15 19:11:08 --> Controller Class Initialized
DEBUG - 2015-07-15 19:11:08 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:11:08 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:11:08 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
INFO - 2015-07-15 19:11:08 --> routis
INFO - 2015-07-15 19:11:08 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:11:08 --> 44
INFO - 2015-07-15 19:11:08 --> UPDATE `user_locations` SET `lat` = '37.962098399999995', `lon` = '23.7008652', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 19:11:08', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:11:08 --> update 7 2
INFO - 2015-07-15 19:12:50 --> Config Class Initialized
INFO - 2015-07-15 19:12:50 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:12:50 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:12:50 --> Utf8 Class Initialized
INFO - 2015-07-15 19:12:50 --> URI Class Initialized
INFO - 2015-07-15 19:12:50 --> Router Class Initialized
INFO - 2015-07-15 19:12:50 --> Output Class Initialized
INFO - 2015-07-15 19:12:50 --> Security Class Initialized
DEBUG - 2015-07-15 19:12:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:12:50 --> Input Class Initialized
INFO - 2015-07-15 19:12:50 --> Language Class Initialized
INFO - 2015-07-15 19:12:50 --> Loader Class Initialized
INFO - 2015-07-15 19:12:50 --> Helper loaded: url_helper
INFO - 2015-07-15 19:12:50 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:12:50 --> Database Driver Class Initialized
INFO - 2015-07-15 19:12:50 --> Model Class Initialized
INFO - 2015-07-15 19:12:50 --> Model Class Initialized
INFO - 2015-07-15 19:12:50 --> Model Class Initialized
INFO - 2015-07-15 19:12:50 --> Controller Class Initialized
DEBUG - 2015-07-15 19:12:50 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:12:50 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:12:50 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
INFO - 2015-07-15 19:12:50 --> routis
INFO - 2015-07-15 19:12:50 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:12:50 --> 44
INFO - 2015-07-15 19:12:50 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 19:12:50', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:12:50 --> update 7 2
INFO - 2015-07-15 19:12:50 --> Location Saved
INFO - 2015-07-15 19:13:03 --> Config Class Initialized
INFO - 2015-07-15 19:13:03 --> Hooks Class Initialized
INFO - 2015-07-15 19:13:03 --> Config Class Initialized
INFO - 2015-07-15 19:13:03 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:13:03 --> UTF-8 Support Enabled
DEBUG - 2015-07-15 19:13:03 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:13:03 --> Utf8 Class Initialized
INFO - 2015-07-15 19:13:03 --> Utf8 Class Initialized
INFO - 2015-07-15 19:13:03 --> URI Class Initialized
INFO - 2015-07-15 19:13:03 --> Router Class Initialized
INFO - 2015-07-15 19:13:03 --> URI Class Initialized
INFO - 2015-07-15 19:13:03 --> Output Class Initialized
INFO - 2015-07-15 19:13:03 --> Security Class Initialized
DEBUG - 2015-07-15 19:13:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:13:03 --> Input Class Initialized
INFO - 2015-07-15 19:13:03 --> Router Class Initialized
INFO - 2015-07-15 19:13:03 --> Language Class Initialized
INFO - 2015-07-15 19:13:03 --> Loader Class Initialized
INFO - 2015-07-15 19:13:03 --> Output Class Initialized
INFO - 2015-07-15 19:13:03 --> Helper loaded: url_helper
INFO - 2015-07-15 19:13:03 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:13:03 --> Security Class Initialized
INFO - 2015-07-15 19:13:03 --> Database Driver Class Initialized
DEBUG - 2015-07-15 19:13:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:13:03 --> Input Class Initialized
INFO - 2015-07-15 19:13:03 --> Model Class Initialized
INFO - 2015-07-15 19:13:03 --> Model Class Initialized
INFO - 2015-07-15 19:13:03 --> Language Class Initialized
INFO - 2015-07-15 19:13:03 --> Model Class Initialized
INFO - 2015-07-15 19:13:03 --> Controller Class Initialized
DEBUG - 2015-07-15 19:13:03 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:13:03 --> Helper loaded: inflector_helper
INFO - 2015-07-15 19:13:03 --> Loader Class Initialized
INFO - 2015-07-15 19:13:03 --> Helper loaded: url_helper
INFO - 2015-07-15 19:13:03 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:13:03 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 19:13:03 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 19:13:03 --> Database Driver Class Initialized
INFO - 2015-07-15 19:13:03 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 19:13:03 --> Model Class Initialized
INFO - 2015-07-15 19:13:03 --> Model Class Initialized
INFO - 2015-07-15 19:13:03 --> Model Class Initialized
INFO - 2015-07-15 19:13:03 --> Controller Class Initialized
DEBUG - 2015-07-15 19:13:03 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:13:03 --> Helper loaded: inflector_helper
INFO - 2015-07-15 19:13:04 --> Config Class Initialized
INFO - 2015-07-15 19:13:04 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:13:04 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:13:04 --> Utf8 Class Initialized
INFO - 2015-07-15 19:13:04 --> URI Class Initialized
INFO - 2015-07-15 19:13:04 --> Router Class Initialized
INFO - 2015-07-15 19:13:04 --> Output Class Initialized
INFO - 2015-07-15 19:13:04 --> Security Class Initialized
DEBUG - 2015-07-15 19:13:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:13:04 --> Input Class Initialized
INFO - 2015-07-15 19:13:04 --> Language Class Initialized
INFO - 2015-07-15 19:13:04 --> Loader Class Initialized
INFO - 2015-07-15 19:13:04 --> Helper loaded: url_helper
INFO - 2015-07-15 19:13:04 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:13:04 --> Database Driver Class Initialized
INFO - 2015-07-15 19:13:04 --> Model Class Initialized
INFO - 2015-07-15 19:13:04 --> Model Class Initialized
INFO - 2015-07-15 19:13:04 --> Model Class Initialized
INFO - 2015-07-15 19:13:04 --> Controller Class Initialized
DEBUG - 2015-07-15 19:13:04 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:13:04 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:13:04 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
INFO - 2015-07-15 19:13:04 --> routis
INFO - 2015-07-15 19:13:04 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:13:04 --> 44
INFO - 2015-07-15 19:13:04 --> UPDATE `user_locations` SET `lat` = '37.9620709', `lon` = '23.7008634', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 19:13:04', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:13:04 --> update 7 2
INFO - 2015-07-15 19:13:04 --> Location Saved
INFO - 2015-07-15 19:13:59 --> Config Class Initialized
INFO - 2015-07-15 19:13:59 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:13:59 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:13:59 --> Utf8 Class Initialized
INFO - 2015-07-15 19:13:59 --> URI Class Initialized
INFO - 2015-07-15 19:13:59 --> Router Class Initialized
INFO - 2015-07-15 19:13:59 --> Output Class Initialized
INFO - 2015-07-15 19:13:59 --> Security Class Initialized
DEBUG - 2015-07-15 19:13:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:13:59 --> Input Class Initialized
INFO - 2015-07-15 19:13:59 --> Language Class Initialized
INFO - 2015-07-15 19:13:59 --> Loader Class Initialized
INFO - 2015-07-15 19:13:59 --> Helper loaded: url_helper
INFO - 2015-07-15 19:13:59 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:13:59 --> Database Driver Class Initialized
INFO - 2015-07-15 19:13:59 --> Model Class Initialized
INFO - 2015-07-15 19:13:59 --> Model Class Initialized
INFO - 2015-07-15 19:13:59 --> Model Class Initialized
INFO - 2015-07-15 19:13:59 --> Controller Class Initialized
DEBUG - 2015-07-15 19:13:59 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:13:59 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:13:59 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
INFO - 2015-07-15 19:13:59 --> routis
INFO - 2015-07-15 19:13:59 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:13:59 --> 44
INFO - 2015-07-15 19:13:59 --> UPDATE `user_locations` SET `lat` = '12', `lon` = '13', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 19:13:59', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:13:59 --> update 7 2
INFO - 2015-07-15 19:14:04 --> Config Class Initialized
INFO - 2015-07-15 19:14:04 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:14:04 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:14:04 --> Utf8 Class Initialized
INFO - 2015-07-15 19:14:04 --> URI Class Initialized
INFO - 2015-07-15 19:14:04 --> Router Class Initialized
INFO - 2015-07-15 19:14:04 --> Output Class Initialized
INFO - 2015-07-15 19:14:04 --> Config Class Initialized
INFO - 2015-07-15 19:14:04 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:14:04 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:14:04 --> Utf8 Class Initialized
INFO - 2015-07-15 19:14:04 --> Security Class Initialized
INFO - 2015-07-15 19:14:04 --> URI Class Initialized
DEBUG - 2015-07-15 19:14:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:14:04 --> Input Class Initialized
INFO - 2015-07-15 19:14:04 --> Language Class Initialized
INFO - 2015-07-15 19:14:04 --> Router Class Initialized
INFO - 2015-07-15 19:14:04 --> Loader Class Initialized
INFO - 2015-07-15 19:14:04 --> Output Class Initialized
INFO - 2015-07-15 19:14:04 --> Helper loaded: url_helper
INFO - 2015-07-15 19:14:04 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:14:04 --> Security Class Initialized
DEBUG - 2015-07-15 19:14:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:14:04 --> Input Class Initialized
INFO - 2015-07-15 19:14:04 --> Database Driver Class Initialized
INFO - 2015-07-15 19:14:04 --> Language Class Initialized
INFO - 2015-07-15 19:14:04 --> Loader Class Initialized
INFO - 2015-07-15 19:14:04 --> Model Class Initialized
INFO - 2015-07-15 19:14:04 --> Helper loaded: url_helper
INFO - 2015-07-15 19:14:04 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:14:04 --> Model Class Initialized
INFO - 2015-07-15 19:14:04 --> Model Class Initialized
INFO - 2015-07-15 19:14:04 --> Controller Class Initialized
INFO - 2015-07-15 19:14:04 --> Database Driver Class Initialized
DEBUG - 2015-07-15 19:14:04 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:14:04 --> Helper loaded: inflector_helper
INFO - 2015-07-15 19:14:04 --> Model Class Initialized
INFO - 2015-07-15 19:14:04 --> Model Class Initialized
INFO - 2015-07-15 19:14:04 --> Model Class Initialized
INFO - 2015-07-15 19:14:04 --> Controller Class Initialized
DEBUG - 2015-07-15 19:14:04 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:14:04 --> Helper loaded: inflector_helper
INFO - 2015-07-15 19:14:04 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='1'
INFO - 2015-07-15 19:14:04 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='2'
INFO - 2015-07-15 19:14:04 --> select CONCAT_WS(',',bus_stops.lat, bus_stops.lon) as point
                from bus_stops, line_stops, bus_lines
                where bus_stops.s_id=line_stops.stop_id  and line_stops.direction_flag = 1 and line_stops.line_id=bus_lines._id and bus_lines._id='2' and bus_stops.waypoint='3'
INFO - 2015-07-15 19:14:05 --> Config Class Initialized
INFO - 2015-07-15 19:14:05 --> Hooks Class Initialized
DEBUG - 2015-07-15 19:14:05 --> UTF-8 Support Enabled
INFO - 2015-07-15 19:14:05 --> Utf8 Class Initialized
INFO - 2015-07-15 19:14:05 --> URI Class Initialized
INFO - 2015-07-15 19:14:05 --> Router Class Initialized
INFO - 2015-07-15 19:14:05 --> Output Class Initialized
INFO - 2015-07-15 19:14:05 --> Security Class Initialized
DEBUG - 2015-07-15 19:14:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-15 19:14:05 --> Input Class Initialized
INFO - 2015-07-15 19:14:05 --> Language Class Initialized
INFO - 2015-07-15 19:14:05 --> Loader Class Initialized
INFO - 2015-07-15 19:14:05 --> Helper loaded: url_helper
INFO - 2015-07-15 19:14:05 --> Helper loaded: directions_helper
INFO - 2015-07-15 19:14:05 --> Database Driver Class Initialized
INFO - 2015-07-15 19:14:05 --> Model Class Initialized
INFO - 2015-07-15 19:14:05 --> Model Class Initialized
INFO - 2015-07-15 19:14:05 --> Model Class Initialized
INFO - 2015-07-15 19:14:05 --> Controller Class Initialized
DEBUG - 2015-07-15 19:14:05 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-15 19:14:05 --> Helper loaded: inflector_helper
ERROR - 2015-07-15 19:14:05 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
INFO - 2015-07-15 19:14:05 --> routis
INFO - 2015-07-15 19:14:05 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:14:05 --> 44
INFO - 2015-07-15 19:14:05 --> UPDATE `user_locations` SET `lat` = '37.9619171', `lon` = '23.700930099999997', `userid` = '7', `routeid` = '2', `time` = '2015-07-15 19:14:05', `direction` = '1'
WHERE `userid` = '7'
AND `routeid` = '2'
INFO - 2015-07-15 19:14:05 --> update 7 2
