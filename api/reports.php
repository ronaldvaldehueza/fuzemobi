<?php

//This is just an example of our reporting api
include_once "restServerClass.php";


//register the class wrapper for using as a JSON service
$rest = new restServerClass();
$rest->addServiceClass(new WebReports());
$rest->handle();


final class WebReports
{

    public static function getVersion()
    {
        return "1.0";
    }

    public static function IOT_GetReport()
    {
        $response = '
        {
            "status": true,
            "message": {
                "result": [
                    {
                        "date": "2020-11-01 00:00:41",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:01:31",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:02:22",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:03:12",
                        "imsi": "999990000000220",
                        "data [MB]": "0.14",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:04:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.16",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:05:38",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:06:30",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:07:20",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:09:08",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:10:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:11:00",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:12:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:12:30",
                        "imsi": "999990000000701",
                        "data [MB]": "0.04",
                        "iccid": "99999900000000007017",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:13:00",
                        "imsi": "999990000000220",
                        "data [MB]": "0.14",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:13:50",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:14:42",
                        "imsi": "999990000000220",
                        "data [MB]": "0.14",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:16:17",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:16:29",
                        "imsi": "999990000000701",
                        "data [MB]": "82.92",
                        "iccid": "99999900000000007017",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:17:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:17:59",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:18:50",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:19:40",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:20:24",
                        "imsi": "999990000000220",
                        "data [MB]": "0.14",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:21:15",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:21:51",
                        "imsi": "999990000000711",
                        "data [MB]": "0.58",
                        "iccid": "99999900000000007116",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:22:10",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:23:10",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:23:42",
                        "imsi": "999990000000705",
                        "data [MB]": "0.32",
                        "iccid": "99999900000000007058",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:24:00",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:24:49",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:25:45",
                        "imsi": "999990000000220",
                        "data [MB]": "0.14",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:26:34",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:27:26",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:28:16",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:29:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.09",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:30:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:31:10",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:32:00",
                        "imsi": "999990000000220",
                        "data [MB]": "0.09",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:32:51",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:33:41",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:35:01",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:35:43",
                        "imsi": "999990000000711",
                        "data [MB]": "0.27",
                        "iccid": "99999900000000007116",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:35:52",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:36:43",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:37:34",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:38:15",
                        "imsi": "999990000000220",
                        "data [MB]": "0.08",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:39:08",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:40:00",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:40:50",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:41:42",
                        "imsi": "999990000000220",
                        "data [MB]": "0.09",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:42:25",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:43:17",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:44:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:44:59",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:45:07",
                        "imsi": "999990000000711",
                        "data [MB]": "6.81",
                        "iccid": "99999900000000007116",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:45:51",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:46:41",
                        "imsi": "999990000000220",
                        "data [MB]": "0.16",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:48:19",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:49:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:50:00",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:50:52",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:51:47",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:52:38",
                        "imsi": "999990000000220",
                        "data [MB]": "0.09",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:53:28",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:54:19",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:55:08",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:56:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:57:08",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:58:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 00:59:01",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:00:05",
                        "imsi": "999990000000220",
                        "data [MB]": "0.18",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:00:08",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:01:00",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:01:47",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:01:54",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:02:40",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:02:46",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:03:32",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:03:36",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:04:09",
                        "imsi": "999990000000705",
                        "data [MB]": "0.14",
                        "iccid": "99999900000000007058",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:04:23",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:04:27",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:05:16",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:05:19",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:06:07",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:06:10",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:06:59",
                        "imsi": "999990000000220",
                        "data [MB]": "0.13",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:07:01",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:07:50",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:07:53",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:08:43",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:08:44",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:10:03",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:10:10",
                        "imsi": "999990000000220",
                        "data [MB]": "0.14",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:10:58",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:11:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:11:49",
                        "imsi": "999990000000220",
                        "data [MB]": "0.12",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:12:08",
                        "imsi": "999990000000220",
                        "data [MB]": "0.10",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:12:43",
                        "imsi": "999990000000220",
                        "data [MB]": "0.09",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    },
                    {
                        "date": "2020-11-01 01:13:09",
                        "imsi": "999990000000220",
                        "data [MB]": "0.11",
                        "iccid": "99999900000000002208",
                        "carrier": "customer_name_LTE"
                    }
                ],
                "summary": {
                    "data [MB]": 55225.27
                },
                "total": 2416,
                "start": 0,
                "length": "100"
            }
        }
        ';
        $response = json_decode($response);
        return $response->message;
    }

    public static function IOT_GetReportColumns()
    {
        $response = '
        {
            "status": true,
            "message": [
                "date",
                "imsi",
                "iccid",
                "data [MB]",
                "carrier"
            ]
        }
        ';
        $response = json_decode($response);
        return $response->message;
    }


    public static function IOT_GetReportsList()
    {
        $response = '
        {
            "status": true,
            "message": [
                "Data Usage by Network",
                "Data Managment by IMSI",
                "Invoice Detail - Data",
                "Invoice Detail - SMS",
                "SIM List",
                "Administrator Logging Report"
            ]
        }        
        ';
        $response = json_decode($response);
        return $response->message;
    }

    public static function IOT_GetCustomerList()
    {
        $response = '
        {
            "status": true,
            "message": [
                {
                    "customer": "Administrator"
                },
                {
                    "customer": "customer_name"
                }
            ]
        }        
        ';
        $response = json_decode($response);
        return $response->message;
    }

    public static function IOT_GetUsagePeriodList()
    {
        $response = '
        {
            "status": true,
            "message": [
                {
                    "period": "NOV 2020"
                },
                {
                    "period": "OCT 2020"
                },
                {
                    "period": "SEP 2020"
                },
                {
                    "period": "AUG 2020"
                },
                {
                    "period": "JUL 2020"
                },
                {
                    "period": "JUN 2020"
                },
                {
                    "period": "MAY 2020"
                },
                {
                    "period": "APR 2020"
                },
                {
                    "period": "MAR 2020"
                }
            ]
        }
        ';
        $response = json_decode($response);
        return $response;
    }

}
