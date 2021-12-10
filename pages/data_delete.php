<?php
if (defined("ALLOWED") === false) {
    die();
}


$data = [
    'entitas' => $_POST['entitas'],
    'name' => $_POST['name'],
];


$results = $client->run("Match (n:".$data['entitas']."{name:'".$data['name']."'}) detach delete n");
redirect('?page=menu_1');
// var_dump("Match (n:".$data['entitas']."{name:'".$data['name']."'}) detach delete n");

// print_r($var);
// create (a { name: "foo" })-[:HELLO]->(b {name : "bar"}),
//        (c {name: "Baz"})-[:GOODBYE]->(d {name:"Quux"});


