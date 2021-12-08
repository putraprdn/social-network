<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<table class="table table-striped table-valign-middle">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th>Nama Minat</th>
            <th>Peminat</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        $results = $client->run('match (n:PERSON)-[r]->(m:MINAT) return m.name, count(n) as c LIMIT 15');
        foreach ($results as $result) { ?>
        <?php

            $no++;
            echo
            "<tr>
                      <td>" . $no . "</td>
                      <td>" . $result->get('m.name') . "</td>
                      <td>" . $result->get('c') . "</td>
                    </tr> ";
        }
        ?>

    </tbody>
</table>