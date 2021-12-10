<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<p style="font-size: 20px; border-bottom:1px solid black; width:fit-content" class="m-3"> Menampilkan nama minat dan jumlah peminatnya</p>
<table class="table table-striped table-valign-middle">
    <thead class="thead-dark">
        <tr>
            <th width="5%">No.</th>
            <th>Nama Minat</th>
            <th>Jumlah Peminat</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        $results = $client->run('match (n:PERSON)-[r]->(m:MINAT) return m.name, count(n) as c order by m.name');
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