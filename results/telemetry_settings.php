<?php

$db_type="mysql"; //Type of db: "mysql", "sqlite" or "postgresql"
$stats_password="skwabena"; //password to login to stats.php. Change this!!!
$enable_id_obfuscation=true; //if set to true, test IDs will be obfuscated to prevent users from guessing URLs of other tests
$redact_ip_addresses=true; //if set to true, IP addresses will be redacted from IP and ISP info fields, as well as the log

// Sqlite3 settings
$Sqlite_db_file = "../../speedtest_telemetry.sql";

// Mysql settings
$MySql_username="u261388230_speedtest";
$MySql_password="Skw@ben@20";
$MySql_hostname="localhost";
$MySql_databasename="u261388230_speedtest";

// Postgresql settings
$PostgreSql_username="USERNAME";
$PostgreSql_password="PASSWORD";
$PostgreSql_hostname="DB_HOSTNAME";
$PostgreSql_databasename="DB_NAME";


//IMPORTANT: DO NOT ADD ANYTHING BELOW THIS PHP CLOSING TAG, NOT EVEN EMPTY LINES!
?>
