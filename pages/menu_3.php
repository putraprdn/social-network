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
            <th>Jumlah Minat yang Diikuti</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        $results = $client->run('match (n)-[r]->(m:MINAT) return n.name, count(m) as c  LIMIT 15');
        foreach ($results as $result) { ?>
        <?php

            $no++;
            echo
            "<tr>
                      <td>" . $no . "</td>
                      <td>" . $result->get('n.name') . "</td>
                      <td>" . $result->get('c') . "</td>
                    </tr> ";
        }
        ?>

    </tbody>
</table>