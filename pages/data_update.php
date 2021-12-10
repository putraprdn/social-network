<?php
if (defined("ALLOWED") === false) {
    die();
}


$data = [
    'entitas' => $_POST['entitas'],
    'name1' => $_POST['name1'],
    'property' => $_POST['property'],
    'name2' => $_POST['name2'],
];

// var_dump("Match (n:".$data['entitas']."{name:'".$data['name1']."'}) set n.".$data['property']." = '".$data['name2']."' return true");die;

$results = $client->run("Match (n:".$data['entitas']."{name:'".$data['name1']."'}) set n.".$data['property']." = '".$data['name2']."' return true");
redirect('?page=menu_1');
// print_r($var);
// create (a { name: "foo" })-[:HELLO]->(b {name : "bar"}),
//        (c {name: "Baz"})-[:GOODBYE]->(d {name:"Quux"});


