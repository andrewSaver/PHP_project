<?php
   // echo date('d'); //day
    //echo date('m'); //month
    //echo date('Y'); //year
    //echo date('l'); //day of the week

    //echo date('Y/m/d');
    //echo date('m/d/Y');

    //echo date('h'); //hour
    //echo date('i'); //minutes
    //echo date('s'); //seconds
    //echo date('a'); //am pm

    // Set time zone

    date_default_timezone_set('America/New_York');
    
    //echo date('h:i:sa');

    /*
        Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1, 1970 00:00:00 GMT) and the time specified.
    */

    //$timestamp = mktime(10, 20, 54, 3, 9, 1972);

    //echo $timestamp;

    //echo date('m/d/Y h:i:sa', $timestamp)

    $timestamp2 = strtotime('7:00pm September 29 2017');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');

    //echo $timestamp2;

    echo date('m/d/Y h:i:sa', $timestamp5);
?>