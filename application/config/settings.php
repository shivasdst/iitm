<?php

define('DEFAULT_JOURNAL', 'sadh');
define('DEFAULT_VOLUME', '025');
define('DEFAULT_ISSUE', '01');
define('DEFAULT_PAGE', '0001-0010');

define('DEFAULT_ALBUM', '0001');
define('DEFAULT_COLLECTION', '0001');
define('PHOTO_FILE_EXT', '.JPG');

// db table names
define('METADATA_TABLE_L1', 'album');
define('METADATA_TABLE_L2', 'photo');
define('METADATA_TABLE_L3', 'userdetails');
define('METADATA_TABLE_L4', 'reset');
define('METADATA_TABLE_L5', 'moderate_details');

// search settings
define('SEARCH_OPERAND', 'AND');

// user settings (login and registration)
define('SALT', 'iitm');
define('REQUIRE_EMAIL_VALIDATION', False);//Set these values to True only
define('REQUIRE_RESET_PASSWORD', False);//if outbound mails can be sent from the server
define('REQUIRE_GIT_TRACKING', False);//if outbound mails can be sent from the server

// mailer settings
// define('SERVICE_EMAIL', 'webadmin@iitm.ac.in');
// define('SERVICE_NAME', 'Indian Institute of Technology Madras');
define('SERVICE_EMAIL', 'shiva@srirangadigital.com');
define('SERVICE_NAME', 'Shivashankar');
define('ADMIN_EMAIL', 'arjun.kashyap@srirangadigital.com');
define('ADMIN_NAME', 'Arjun Kashyap');



?>
