<?php
/*
Set the ip to be the ip of your DVR/Camera
Set login credentials as well
get url is the string to retrieve the config
set url is to set the config
*/
$ip = "";
$geturl = "http://{$ip}/cgi-bin/configManager.cgi?action=getConfig&name=NTP";
$user = '';
$pass = '';
$timeZone = "TimeZone=";
/*timeZone is your time Zone and is in the format TimeZone= it expects a 2 digit number from here
Range is [0-32].
0: "GMT+00:00"
1: "GMT+01:00"
2: "GMT+02:00"
3: "GMT+03:00"
4: "GMT+03:30"
5: "GMT+04:00"
6: "GMT+04:30"
7: "GMT+05:00"
8: "GMT+05:30"
9: "GMT+05:45"
10: "GMT+06:00"
11: "GMT+06:30"
12: "GMT+07:00"
13: "GMT+08:00"
14: "GMT+09:00"
15: "GMT+09:30"
16: "GMT+10:00"
17: "GMT+11:00"
18: "GMT+12:00"
19: "GMT+13:00"
20: "GMT-01:00"
21: "GMT-02:00"
22: "GMT-03:00"
23: "GMT-03:30"
24: "GMT-04:00"
25: "GMT-05:00"
26: "GMT-06:00"
27: "GMT-07:00"
28: "GMT-08:00"
29: "GMT-09:00"
30: "GMT-10:00"
31: "GMT-11:00"
32: "GMT-12:00" 
*/
$seturl = "http://{$ip}/cgi-bin/configManager.cgi?action=setConfig&NTP.{$timeZone}";

?>