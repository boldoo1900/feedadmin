<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


# ===================== USER DEFINED VARIABLES =============================
$SYS_GLOBALS["timezone"] = array("-12.0"=>"(GMT -12:00) Eniwetok, Kwajalein", 
                                 "-11.0"=>"(GMT -11:00) Midway Island, Samoa",
                                 "-10.0"=>"(GMT -10:00) Hawaii",
                                 "-9.0"=>"(GMT -9:00) Alaska",
                                 "-8.0"=>"(GMT -8:00) Pacific Time (US &amp; Canada)",
                                 "-7.0"=>"(GMT -7:00) Mountain Time (US &amp; Canada)",
                                 "-6.0"=>"(GMT -6:00) Central Time (US &amp; Canada), Mexico City",
                                 "-5.0"=>"(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima",
                                 "-4.0"=>"(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz",
                                 "-3.5"=>"(GMT -3:30) Newfoundland",
                                 "-3.0"=>"(GMT -3:00) Brazil, Buenos Aires, Georgetown",
                                 "-2.0"=>"(GMT -2:00) Mid-Atlantic",
                                 "-1.0"=>"(GMT -1:00 hour) Azores, Cape Verde Islands",
                                 "0.0"=>"(GMT) Western Europe Time, London, Lisbon, Casablanca",
                                 "1.0"=>"(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris",
                                 "2.0"=>"(GMT +2:00) Kaliningrad, South Africa",
                                 "3.0"=>"(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg",
                                 "3.5"=>"(GMT +3:30) Tehran",
                                 "4.0"=>"(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi",
                                 "4.5"=>"(GMT +4:30) Kabul",
                                 "5.0"=>"(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent",
                                 "5.5"=>"(GMT +5:30) Bombay, Calcutta, Madras, New Delhi",
                                 "5.75"=>"(GMT +5:45) Kathmandu",
                                 "6.0"=>"(GMT +6:00) Almaty, Dhaka, Colombo",
                                 "7.0"=>"(GMT +7:00) Bangkok, Hanoi, Jakarta",
                                 "8.0"=>"(GMT +8:00) Mongolia, Beijing, Perth, Singapore, Hong Kong",
                                 "9.0"=>"(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk",
                                 "9.5"=>"(GMT +9:30) Adelaide, Darwin",
                                 "10.0"=>"(GMT +10:00) Eastern Australia, Guam, Vladivostok",
                                 "11.0"=>"(GMT +11:00) Magadan, Solomon Islands, New Caledonia",
                                 "12.0"=>"(GMT +12:00)Auckland, Wellington, Fiji, Kamchatkaz");

$SYS_GLOBALS["route_type"] = array(0=>"Streetcar", 1=>"Subway, Metro",
                                   2=>"Rail (long distance travel)", 
                                   3=>"Bus", 4=>"Ferry", 5=>"Cable car");

$SYS_GLOBALS["service"] = array("FULLW"=>"FULLW", "WE"=>"WE");
