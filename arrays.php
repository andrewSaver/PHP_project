<?php

    #Array -variable that holds multiple values.
    /*
        -Indexed
        -Associative
        -Multi-dimensional
    */

    //Indexed
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    
    
    //var_dump($cars);
    
    //print_r($cars);
    
    //echo count($cars);
    
    //echo $cars[4];
    
    //echo $ids[1];
    
    //echo $people[1];

    # Associative Arrays

    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);

    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    $people['Jill'] = 42;

    echo $people['Jill'];

    print_r($people);

    var_dump($people);
    
    //echo $ids[44];
    
    //echo $people['Brad'];

    #Multi-dimensional

    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
    );

    echo $cars[1][2];

?>