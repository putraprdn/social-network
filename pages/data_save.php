<?php
if (defined("ALLOWED") === false) {
    die();
}


$data = [
    'entitas' => $_POST['entitas'],
    'name1' => $_POST['name1'],
    'relasi' => $_POST['relasi'],
    'name2' => $_POST['name2'],
];

if($data['relasi'] == 'is_follow')
{
    $entitas2 = 'PERSON';
}
else if ($data['relasi'] == 'is_like')
{
    $entitas2 = 'MINAT';
}


$results = $client->run("Create (:".$data['entitas']."{name:'".$data['name1']."'})-[:".$data['relasi']."]->(:".$entitas2."{name:'".$data['name2']."'})");
redirect('?page=menu_1');
// print_r($var);
// create (a { name: "foo" })-[:HELLO]->(b {name : "bar"}),
//        (c {name: "Baz"})-[:GOODBYE]->(d {name:"Quux"});


