<?php
use \Laudis\Neo4j\ClientBuilder;
use \Laudis\Neo4j\Authentication\Authenticate;

$auth = Authenticate::basic('neo4j', 'Qrxm0u9XquxBoWwSFMq90p0eaJmHtXOBImtAC4GQZyQ');
$client = ClientBuilder::create()
            ->withDriver('neo4j', 'neo4j+s://5de02baa.databases.neo4j.io:7687', $auth)
            ->withDefaultDriver('neo4j')
            ->build();