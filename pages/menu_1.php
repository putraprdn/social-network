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
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        $results = $client->run('Match (n:PERSON) return n.name, n.jenis_kelamin as jk LIMIT 15');
        foreach ($results as $result) { ?>
        <?php

            $no++;
            echo
            "<tr>
                      <td>" . $no . "</td>
                      <td>" . $result->get('n.name') . "</td>
                      <td>" . $result->get('jk') . "</td>
                    </tr> ";
        }
        ?>

    </tbody>
</table>