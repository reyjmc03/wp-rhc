<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/** calling second database used for search query. the fhl opac database (koha lms) is used for this matter */
$database_name = 'koha_fhl';
$lib_db = new wpdb(DB_USER, DB_PASSWORD, $database_name, DB_HOST); 