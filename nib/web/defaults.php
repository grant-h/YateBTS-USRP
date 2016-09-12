<?php
/**
 * defaults.php
 * This file is part of the Yate-BTS Project http://www.yatebts.com
 *
 * Copyright (C) 2014 Null Team
 *
 * This software is distributed under multiple licenses;
 * see the COPYING file in the main directory for licensing
 * information for this specific distribution.
 *
 * This use of this software may be subject to additional restrictions.
 * See the LEGAL file in the main directory for details.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

$copyright = '
// Generated by YateBTS NIB WebGUI
// Please don\'t edit manually

/**
 * subscribers.js
 * Configure subscribers individually or set regular expression to accept imsis
 *
 * This file is part of the Yate-BTS Project http://www.yatebts.com
 *
 * Copyright (C) 2014 Null Team
 *
 * This software is distributed under multiple licenses;
 * see the COPYING file in the main directory for licensing
 * information for this specific distribution.
 *
 * This use of this software may be subject to additional restrictions.
 * See the LEGAL file in the main directory for details.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

';

$subscribers_prefix = $copyright.'// Note! Subscribers are accepted by either matching the IMSI against a configured regular expression 
// or by individually configuring each acceptable IMSI

var subscribers = {';

$subscribers_suffix = '};

// Note! If a regular expression is used, 2G/3G authentication cannot be used. 
// To use 2G/3G authentication, please set subscribers individually.
//var regexp = /^001/;';

$regexp_prefix = $copyright.'/*
// Note! Subscribers are accepted by either matching the IMSI against a configured regular expression 
// or by individually configuring each acceptable IMSI

var subscribers = {
"001990010001014":
{
    "msisdn":"074434", // oficial phone number
    "active":1,
    "ki":"00112233445566778899aabbccddeeff",
    "op":"00000000000000000000000000000000",
    "imsi_type":"3G",
    "short_number":"" //short number to be called by other yatebts-nib users
},
"001990010001015":
{
    "msisdn":"074434", // oficial phone number
    "active":1,
    "ki":"00112233445566778899aabbccddeeff",
    "op":"",
    "imsi_type":"2G",
    "short_number":"" //short number to be called by other yatebts-nib users
}
};
*/

// Note! If a regular expression is used, 2G/3G authentication cannot be used. 
// To use 2G/3G authentication, please set subscribers individually.
var regexp = ';

$regexp_suffix = ";";


$global_comment = ";!!! NOTE !!!
;This file is used when YateBTS is in NIB (Network in a box) mode
;File generated by the YateBTS NIB interface \n";

$country_code_comment = "; Your Country code (where YateBTS is installed)
;Ex: 1 for US, 44 for UK
;country_code= \n";

$regexp_comment = ";Subscribers are accepted by either matching the IMSI against this configured 
;regular expression or by setting subscribers individually
;Note! If a regular expression is used, 2G/3G authentication cannot be used.
;Ex: regexp=^001
;regexp= \n";

$subscriber_comment = ";you have to put subscriber IMSI as a category and the subscriber parameters 
;as keys \n";

$subscriber_example =
";[001990010001014]
;Oficial phone number. Should include configured country code
;Ex: msisdn=10744341111

;Whether this subscriber is allowed to use the service
;Allowed values: on, off
;Ex: active=off

;Card secrety. Set or generated when SIMs are written
;Ex:ki=00112233445566778899aabbccddeeff

;Operator secret. 
;Allowed values: empty for 2G IMSIs, 00000000000000000000000000000000 for 3G IMSIs.
;Ex: op=00000000000000000000000000000000

;SIM type
;Allowed values: 2G, 3G
;Ex: imsi_type=3G

;Short number subscribers can use to dial each other. Can be empty or not set
;Ex:short_number=111";

$dirs = array("/etc/yate/", "/usr/local/etc/yate/");
foreach ($dirs as $pos_dir) {
	if (is_dir($pos_dir)) 
		$yate_conf_dir = $pos_dir;
	if (is_readable($pos_dir) && is_writable($pos_dir))
		break;
}
if (!isset($yate_conf_dir)) 
	print ("Couldn't detect installed yate. Please install yate first before trying to use the NIB WebGui.");

$yate_ip = "127.0.0.1";

$default_ip = "tcp://".$yate_ip;
$default_port = '5038';

$proj_title = "Yatebts NIB";
# the file used by PySim to write the SIM credentials 
$pysim_csv = $yate_conf_dir . "sim_data.csv";
# type of card SIM used by PySIM. Types allowed: fakemagicsim, supersim, magicsim, grcardsim, sysmosim-gr1, sysmosim-gr1, sysmoSIM-GR2, sysmoUSIM-GR1 or try auto 
$sim_type = "sysmoSIM-GR2";
?>
