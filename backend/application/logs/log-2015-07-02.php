<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2015-07-02 12:02:31 --> Config Class Initialized
INFO - 2015-07-02 12:02:31 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:02:31 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:02:31 --> Utf8 Class Initialized
INFO - 2015-07-02 12:02:31 --> URI Class Initialized
INFO - 2015-07-02 12:02:31 --> Router Class Initialized
INFO - 2015-07-02 12:02:31 --> Output Class Initialized
INFO - 2015-07-02 12:02:31 --> Security Class Initialized
DEBUG - 2015-07-02 12:02:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:02:31 --> Input Class Initialized
INFO - 2015-07-02 12:02:31 --> Language Class Initialized
INFO - 2015-07-02 12:02:31 --> Loader Class Initialized
INFO - 2015-07-02 12:02:31 --> Helper loaded: url_helper
INFO - 2015-07-02 12:02:31 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:02:31 --> Database Driver Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Controller Class Initialized
DEBUG - 2015-07-02 12:02:31 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:02:31 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:02:31 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9619716)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7008483)) + SIN(RADIANS(37.9619716)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-02 12:02:31 --> Config Class Initialized
INFO - 2015-07-02 12:02:31 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:02:31 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:02:31 --> Utf8 Class Initialized
INFO - 2015-07-02 12:02:31 --> URI Class Initialized
INFO - 2015-07-02 12:02:31 --> Router Class Initialized
INFO - 2015-07-02 12:02:31 --> Output Class Initialized
INFO - 2015-07-02 12:02:31 --> Security Class Initialized
DEBUG - 2015-07-02 12:02:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:02:31 --> Input Class Initialized
INFO - 2015-07-02 12:02:31 --> Language Class Initialized
INFO - 2015-07-02 12:02:31 --> Loader Class Initialized
INFO - 2015-07-02 12:02:31 --> Helper loaded: url_helper
INFO - 2015-07-02 12:02:31 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:02:31 --> Database Driver Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Controller Class Initialized
DEBUG - 2015-07-02 12:02:31 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:02:31 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:02:31 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450012'
INFO - 2015-07-02 12:02:31 --> Config Class Initialized
INFO - 2015-07-02 12:02:31 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:02:31 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:02:31 --> Utf8 Class Initialized
INFO - 2015-07-02 12:02:31 --> URI Class Initialized
INFO - 2015-07-02 12:02:31 --> Router Class Initialized
INFO - 2015-07-02 12:02:31 --> Output Class Initialized
INFO - 2015-07-02 12:02:31 --> Security Class Initialized
DEBUG - 2015-07-02 12:02:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:02:31 --> Input Class Initialized
INFO - 2015-07-02 12:02:31 --> Language Class Initialized
INFO - 2015-07-02 12:02:31 --> Loader Class Initialized
INFO - 2015-07-02 12:02:31 --> Helper loaded: url_helper
INFO - 2015-07-02 12:02:31 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:02:31 --> Database Driver Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Model Class Initialized
INFO - 2015-07-02 12:02:31 --> Controller Class Initialized
DEBUG - 2015-07-02 12:02:31 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:02:31 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:02:31 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450011'
INFO - 2015-07-02 12:03:35 --> Config Class Initialized
INFO - 2015-07-02 12:03:35 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:03:35 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:03:35 --> Utf8 Class Initialized
INFO - 2015-07-02 12:03:35 --> URI Class Initialized
INFO - 2015-07-02 12:03:35 --> Router Class Initialized
INFO - 2015-07-02 12:03:35 --> Output Class Initialized
INFO - 2015-07-02 12:03:35 --> Security Class Initialized
DEBUG - 2015-07-02 12:03:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:03:35 --> Input Class Initialized
INFO - 2015-07-02 12:03:35 --> Language Class Initialized
INFO - 2015-07-02 12:03:35 --> Loader Class Initialized
INFO - 2015-07-02 12:03:35 --> Helper loaded: url_helper
INFO - 2015-07-02 12:03:35 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:03:35 --> Database Driver Class Initialized
INFO - 2015-07-02 12:03:35 --> Model Class Initialized
INFO - 2015-07-02 12:03:35 --> Model Class Initialized
INFO - 2015-07-02 12:03:35 --> Model Class Initialized
INFO - 2015-07-02 12:03:35 --> Controller Class Initialized
DEBUG - 2015-07-02 12:03:35 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:03:35 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:04:16 --> Config Class Initialized
INFO - 2015-07-02 12:04:16 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:04:16 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:04:16 --> Utf8 Class Initialized
INFO - 2015-07-02 12:04:16 --> URI Class Initialized
INFO - 2015-07-02 12:04:16 --> Router Class Initialized
INFO - 2015-07-02 12:04:16 --> Output Class Initialized
INFO - 2015-07-02 12:04:16 --> Security Class Initialized
DEBUG - 2015-07-02 12:04:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:04:16 --> Input Class Initialized
INFO - 2015-07-02 12:04:16 --> Language Class Initialized
INFO - 2015-07-02 12:04:16 --> Loader Class Initialized
INFO - 2015-07-02 12:04:16 --> Helper loaded: url_helper
INFO - 2015-07-02 12:04:16 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:04:16 --> Database Driver Class Initialized
INFO - 2015-07-02 12:04:16 --> Model Class Initialized
INFO - 2015-07-02 12:04:16 --> Model Class Initialized
INFO - 2015-07-02 12:04:16 --> Model Class Initialized
INFO - 2015-07-02 12:04:16 --> Controller Class Initialized
DEBUG - 2015-07-02 12:04:16 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:04:16 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:04:22 --> Config Class Initialized
INFO - 2015-07-02 12:04:22 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:04:22 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:04:22 --> Utf8 Class Initialized
INFO - 2015-07-02 12:04:22 --> URI Class Initialized
INFO - 2015-07-02 12:04:22 --> Router Class Initialized
INFO - 2015-07-02 12:04:22 --> Output Class Initialized
INFO - 2015-07-02 12:04:22 --> Security Class Initialized
DEBUG - 2015-07-02 12:04:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:04:22 --> Input Class Initialized
INFO - 2015-07-02 12:04:22 --> Language Class Initialized
INFO - 2015-07-02 12:04:22 --> Loader Class Initialized
INFO - 2015-07-02 12:04:22 --> Helper loaded: url_helper
INFO - 2015-07-02 12:04:22 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:04:22 --> Database Driver Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Controller Class Initialized
DEBUG - 2015-07-02 12:04:22 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:04:22 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:04:22 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9620222)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7008719)) + SIN(RADIANS(37.9620222)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-02 12:04:22 --> Config Class Initialized
INFO - 2015-07-02 12:04:22 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:04:22 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:04:22 --> Utf8 Class Initialized
INFO - 2015-07-02 12:04:22 --> URI Class Initialized
INFO - 2015-07-02 12:04:22 --> Router Class Initialized
INFO - 2015-07-02 12:04:22 --> Output Class Initialized
INFO - 2015-07-02 12:04:22 --> Security Class Initialized
DEBUG - 2015-07-02 12:04:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:04:22 --> Input Class Initialized
INFO - 2015-07-02 12:04:22 --> Language Class Initialized
INFO - 2015-07-02 12:04:22 --> Loader Class Initialized
INFO - 2015-07-02 12:04:22 --> Helper loaded: url_helper
INFO - 2015-07-02 12:04:22 --> Config Class Initialized
INFO - 2015-07-02 12:04:22 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:04:22 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:04:22 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:04:22 --> Utf8 Class Initialized
INFO - 2015-07-02 12:04:22 --> Database Driver Class Initialized
INFO - 2015-07-02 12:04:22 --> URI Class Initialized
INFO - 2015-07-02 12:04:22 --> Router Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Output Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Security Class Initialized
INFO - 2015-07-02 12:04:22 --> Controller Class Initialized
DEBUG - 2015-07-02 12:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2015-07-02 12:04:22 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:04:22 --> Input Class Initialized
INFO - 2015-07-02 12:04:22 --> Language Class Initialized
INFO - 2015-07-02 12:04:22 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:04:22 --> Loader Class Initialized
INFO - 2015-07-02 12:04:22 --> Helper loaded: url_helper
INFO - 2015-07-02 12:04:22 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:04:22 --> Database Driver Class Initialized
INFO - 2015-07-02 12:04:22 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450012'
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Model Class Initialized
INFO - 2015-07-02 12:04:22 --> Controller Class Initialized
DEBUG - 2015-07-02 12:04:22 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:04:22 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:04:22 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450011'
INFO - 2015-07-02 12:05:26 --> Config Class Initialized
INFO - 2015-07-02 12:05:26 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:05:26 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:05:26 --> Utf8 Class Initialized
INFO - 2015-07-02 12:05:26 --> URI Class Initialized
INFO - 2015-07-02 12:05:26 --> Router Class Initialized
INFO - 2015-07-02 12:05:26 --> Output Class Initialized
INFO - 2015-07-02 12:05:26 --> Security Class Initialized
DEBUG - 2015-07-02 12:05:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:05:26 --> Input Class Initialized
INFO - 2015-07-02 12:05:26 --> Language Class Initialized
INFO - 2015-07-02 12:05:26 --> Loader Class Initialized
INFO - 2015-07-02 12:05:26 --> Helper loaded: url_helper
INFO - 2015-07-02 12:05:26 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:05:26 --> Database Driver Class Initialized
INFO - 2015-07-02 12:05:26 --> Model Class Initialized
INFO - 2015-07-02 12:05:26 --> Model Class Initialized
INFO - 2015-07-02 12:05:26 --> Model Class Initialized
INFO - 2015-07-02 12:05:26 --> Controller Class Initialized
DEBUG - 2015-07-02 12:05:26 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:05:26 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:05:27 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9620497)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.700860799999997)) + SIN(RADIANS(37.9620497)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-02 12:05:27 --> Config Class Initialized
INFO - 2015-07-02 12:05:27 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:05:27 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:05:27 --> Utf8 Class Initialized
INFO - 2015-07-02 12:05:27 --> Config Class Initialized
INFO - 2015-07-02 12:05:27 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:05:27 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:05:27 --> Utf8 Class Initialized
INFO - 2015-07-02 12:05:27 --> URI Class Initialized
INFO - 2015-07-02 12:05:27 --> URI Class Initialized
INFO - 2015-07-02 12:05:27 --> Router Class Initialized
INFO - 2015-07-02 12:05:27 --> Output Class Initialized
INFO - 2015-07-02 12:05:27 --> Security Class Initialized
DEBUG - 2015-07-02 12:05:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:05:27 --> Input Class Initialized
INFO - 2015-07-02 12:05:27 --> Language Class Initialized
INFO - 2015-07-02 12:05:27 --> Loader Class Initialized
INFO - 2015-07-02 12:05:27 --> Router Class Initialized
INFO - 2015-07-02 12:05:27 --> Helper loaded: url_helper
INFO - 2015-07-02 12:05:27 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:05:27 --> Output Class Initialized
INFO - 2015-07-02 12:05:27 --> Security Class Initialized
INFO - 2015-07-02 12:05:27 --> Database Driver Class Initialized
DEBUG - 2015-07-02 12:05:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:05:27 --> Input Class Initialized
INFO - 2015-07-02 12:05:27 --> Language Class Initialized
INFO - 2015-07-02 12:05:27 --> Loader Class Initialized
INFO - 2015-07-02 12:05:27 --> Helper loaded: url_helper
INFO - 2015-07-02 12:05:27 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:05:27 --> Database Driver Class Initialized
INFO - 2015-07-02 12:05:27 --> Model Class Initialized
INFO - 2015-07-02 12:05:27 --> Model Class Initialized
INFO - 2015-07-02 12:05:27 --> Model Class Initialized
INFO - 2015-07-02 12:05:27 --> Controller Class Initialized
DEBUG - 2015-07-02 12:05:27 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:05:27 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:05:27 --> Model Class Initialized
INFO - 2015-07-02 12:05:27 --> Model Class Initialized
INFO - 2015-07-02 12:05:27 --> Model Class Initialized
INFO - 2015-07-02 12:05:27 --> Controller Class Initialized
DEBUG - 2015-07-02 12:05:27 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:05:27 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:05:27 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450012'
INFO - 2015-07-02 12:05:27 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450011'
INFO - 2015-07-02 12:05:55 --> Config Class Initialized
INFO - 2015-07-02 12:05:55 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:05:55 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:05:55 --> Utf8 Class Initialized
INFO - 2015-07-02 12:05:55 --> URI Class Initialized
INFO - 2015-07-02 12:05:55 --> Router Class Initialized
INFO - 2015-07-02 12:05:55 --> Output Class Initialized
INFO - 2015-07-02 12:05:55 --> Security Class Initialized
DEBUG - 2015-07-02 12:05:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:05:55 --> Input Class Initialized
INFO - 2015-07-02 12:05:55 --> Language Class Initialized
INFO - 2015-07-02 12:05:55 --> Loader Class Initialized
INFO - 2015-07-02 12:05:55 --> Helper loaded: url_helper
INFO - 2015-07-02 12:05:55 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:05:55 --> Database Driver Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Controller Class Initialized
DEBUG - 2015-07-02 12:05:55 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:05:55 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:05:55 --> SELECT  s_id,  name_el, name_en, street_el, street_en, lat, lon, (
                    6371 * ACOS(COS(RADIANS(37.9620222)) * COS(RADIANS(lat)) * COS(RADIANS(lon) - RADIANS(23.7008719)) + SIN(RADIANS(37.9620222)) * SIN(RADIANS(lat)))
                ) AS distance
            FROM bus_stops
            HAVING distance < 0.2
            ORDER BY distance
INFO - 2015-07-02 12:05:55 --> Config Class Initialized
INFO - 2015-07-02 12:05:55 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:05:55 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:05:55 --> Utf8 Class Initialized
INFO - 2015-07-02 12:05:55 --> URI Class Initialized
INFO - 2015-07-02 12:05:55 --> Router Class Initialized
INFO - 2015-07-02 12:05:55 --> Output Class Initialized
INFO - 2015-07-02 12:05:55 --> Config Class Initialized
INFO - 2015-07-02 12:05:55 --> Hooks Class Initialized
INFO - 2015-07-02 12:05:55 --> Security Class Initialized
DEBUG - 2015-07-02 12:05:55 --> UTF-8 Support Enabled
DEBUG - 2015-07-02 12:05:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:05:55 --> Utf8 Class Initialized
INFO - 2015-07-02 12:05:55 --> Input Class Initialized
INFO - 2015-07-02 12:05:55 --> Language Class Initialized
INFO - 2015-07-02 12:05:55 --> URI Class Initialized
INFO - 2015-07-02 12:05:55 --> Loader Class Initialized
INFO - 2015-07-02 12:05:55 --> Router Class Initialized
INFO - 2015-07-02 12:05:55 --> Helper loaded: url_helper
INFO - 2015-07-02 12:05:55 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:05:55 --> Output Class Initialized
INFO - 2015-07-02 12:05:55 --> Security Class Initialized
DEBUG - 2015-07-02 12:05:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:05:55 --> Database Driver Class Initialized
INFO - 2015-07-02 12:05:55 --> Input Class Initialized
INFO - 2015-07-02 12:05:55 --> Language Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Loader Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Helper loaded: url_helper
INFO - 2015-07-02 12:05:55 --> Controller Class Initialized
INFO - 2015-07-02 12:05:55 --> Helper loaded: directions_helper
DEBUG - 2015-07-02 12:05:55 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:05:55 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:05:55 --> Database Driver Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450012'
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Model Class Initialized
INFO - 2015-07-02 12:05:55 --> Controller Class Initialized
DEBUG - 2015-07-02 12:05:55 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:05:55 --> Helper loaded: inflector_helper
INFO - 2015-07-02 12:05:55 --> SELECT `line_stops`.`line_id`, `line_stops`.`direction_flag`, `bus_lines`.`line_name_el`, `bus_lines`.`line_name_en`, `bus_lines`.`is_circular`
FROM `line_stops`
JOIN `bus_lines` ON `line_stops`.`line_id` = `bus_lines`.`_id`
WHERE `stop_id` = '450011'
INFO - 2015-07-02 12:23:18 --> Config Class Initialized
INFO - 2015-07-02 12:23:18 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:23:18 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:23:18 --> Utf8 Class Initialized
INFO - 2015-07-02 12:23:18 --> URI Class Initialized
INFO - 2015-07-02 12:23:18 --> Router Class Initialized
INFO - 2015-07-02 12:23:18 --> Output Class Initialized
INFO - 2015-07-02 12:23:18 --> Security Class Initialized
DEBUG - 2015-07-02 12:23:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:23:18 --> Input Class Initialized
INFO - 2015-07-02 12:23:18 --> Language Class Initialized
INFO - 2015-07-02 12:23:18 --> Loader Class Initialized
INFO - 2015-07-02 12:23:18 --> Helper loaded: url_helper
INFO - 2015-07-02 12:23:18 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:23:18 --> Database Driver Class Initialized
INFO - 2015-07-02 12:23:18 --> Model Class Initialized
INFO - 2015-07-02 12:23:18 --> Model Class Initialized
INFO - 2015-07-02 12:23:18 --> Model Class Initialized
INFO - 2015-07-02 12:23:18 --> Controller Class Initialized
DEBUG - 2015-07-02 12:23:18 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:23:18 --> Helper loaded: inflector_helper
ERROR - 2015-07-02 12:23:18 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
INFO - 2015-07-02 12:23:26 --> Config Class Initialized
INFO - 2015-07-02 12:23:26 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:23:26 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:23:26 --> Utf8 Class Initialized
INFO - 2015-07-02 12:23:26 --> URI Class Initialized
INFO - 2015-07-02 12:23:26 --> Router Class Initialized
INFO - 2015-07-02 12:23:26 --> Output Class Initialized
INFO - 2015-07-02 12:23:26 --> Security Class Initialized
DEBUG - 2015-07-02 12:23:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:23:26 --> Input Class Initialized
INFO - 2015-07-02 12:23:26 --> Language Class Initialized
INFO - 2015-07-02 12:23:26 --> Loader Class Initialized
INFO - 2015-07-02 12:23:26 --> Helper loaded: url_helper
INFO - 2015-07-02 12:23:26 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:23:26 --> Database Driver Class Initialized
INFO - 2015-07-02 12:23:26 --> Model Class Initialized
INFO - 2015-07-02 12:23:26 --> Model Class Initialized
INFO - 2015-07-02 12:23:26 --> Model Class Initialized
INFO - 2015-07-02 12:23:26 --> Controller Class Initialized
DEBUG - 2015-07-02 12:23:26 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:23:26 --> Helper loaded: inflector_helper
ERROR - 2015-07-02 12:23:26 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-02 12:23:26 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-02 12:23:26 --> Array
INFO - 2015-07-02 12:23:26 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '5'
AND `routeid` = '1'
INFO - 2015-07-02 12:23:26 --> 
INFO - 2015-07-02 12:23:26 --> insert 5 1
INFO - 2015-07-02 12:54:43 --> Config Class Initialized
INFO - 2015-07-02 12:54:43 --> Hooks Class Initialized
DEBUG - 2015-07-02 12:54:43 --> UTF-8 Support Enabled
INFO - 2015-07-02 12:54:43 --> Utf8 Class Initialized
INFO - 2015-07-02 12:54:43 --> URI Class Initialized
INFO - 2015-07-02 12:54:43 --> Router Class Initialized
INFO - 2015-07-02 12:54:43 --> Output Class Initialized
INFO - 2015-07-02 12:54:43 --> Security Class Initialized
DEBUG - 2015-07-02 12:54:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 12:54:43 --> Input Class Initialized
INFO - 2015-07-02 12:54:43 --> Language Class Initialized
INFO - 2015-07-02 12:54:43 --> Loader Class Initialized
INFO - 2015-07-02 12:54:43 --> Helper loaded: url_helper
INFO - 2015-07-02 12:54:43 --> Helper loaded: directions_helper
INFO - 2015-07-02 12:54:43 --> Database Driver Class Initialized
INFO - 2015-07-02 12:54:43 --> Model Class Initialized
INFO - 2015-07-02 12:54:43 --> Model Class Initialized
INFO - 2015-07-02 12:54:43 --> Model Class Initialized
INFO - 2015-07-02 12:54:43 --> Controller Class Initialized
DEBUG - 2015-07-02 12:54:43 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 12:54:43 --> Helper loaded: inflector_helper
ERROR - 2015-07-02 12:54:43 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
ERROR - 2015-07-02 12:54:43 --> Severity: Notice --> Array to string conversion /var/www/html/trans/system/core/Log.php 207
INFO - 2015-07-02 12:54:43 --> Array
INFO - 2015-07-02 12:54:43 --> SELECT `id`
FROM `user_locations`
WHERE `userid` = '5'
AND `routeid` = '1'
INFO - 2015-07-02 12:54:43 --> 
INFO - 2015-07-02 12:54:43 --> insert 5 1
INFO - 2015-07-02 19:08:37 --> Config Class Initialized
INFO - 2015-07-02 19:08:37 --> Hooks Class Initialized
DEBUG - 2015-07-02 19:08:37 --> UTF-8 Support Enabled
INFO - 2015-07-02 19:08:37 --> Utf8 Class Initialized
INFO - 2015-07-02 19:08:37 --> URI Class Initialized
INFO - 2015-07-02 19:08:37 --> Router Class Initialized
INFO - 2015-07-02 19:08:37 --> Output Class Initialized
INFO - 2015-07-02 19:08:37 --> Security Class Initialized
DEBUG - 2015-07-02 19:08:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2015-07-02 19:08:37 --> Input Class Initialized
INFO - 2015-07-02 19:08:37 --> Language Class Initialized
INFO - 2015-07-02 19:08:37 --> Loader Class Initialized
INFO - 2015-07-02 19:08:37 --> Helper loaded: url_helper
INFO - 2015-07-02 19:08:37 --> Helper loaded: directions_helper
INFO - 2015-07-02 19:08:37 --> Database Driver Class Initialized
INFO - 2015-07-02 19:08:37 --> Model Class Initialized
INFO - 2015-07-02 19:08:37 --> Model Class Initialized
INFO - 2015-07-02 19:08:37 --> Model Class Initialized
INFO - 2015-07-02 19:08:37 --> Controller Class Initialized
DEBUG - 2015-07-02 19:08:37 --> Config file loaded: /var/www/html/trans/application/config/rest.php
INFO - 2015-07-02 19:08:37 --> Helper loaded: inflector_helper
ERROR - 2015-07-02 19:08:37 --> Severity: Notice --> Undefined index: LAT /var/www/html/trans/system/core/Log.php 171
