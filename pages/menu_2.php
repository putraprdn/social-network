<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<table class="table table-striped table-valign-middle">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th>Username</th>
            <th>Following</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        $results = $client->run('Match (n)-[r]->(m:PERSON) return n.name, count(n) as n LIMIT 15');
        foreach ($results as $result) { ?>
        <?php

            $no++;
            echo
            "<tr>
                      <td>" . $no . "</td>
                      <td>" . $result->get('n.name') . "</td>
                      <td>" . $result->get('n') . "</td>
                    </tr> ";
        }
        ?>

    </tbody>
</table>


