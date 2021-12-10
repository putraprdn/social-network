<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<p style="font-size: 20px; border-bottom:1px solid black; width:fit-content" class="m-3"> Menampilkan minat dan nama akun yang menyukainya</p>
<table class="table table-striped table-valign-middle">
    <thead class="thead-dark">
        <tr>
            <th width="5%">No.</th>
            <th width = "15%">Nama Minat</th>
            <th>Daftar Peminat</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        // $results = $client->run('match (n:PERSON)-[r]->(m:MINAT) return m.name, count(n) as c order by m.name');
        $results = $client->run('match (n:PERSON)-[r]->(m:MINAT) return m.name, collect(n.name) as score order by m.name');
        foreach ($results as $result) { ?>
        <?php
            $var = $result->get('score');
            // $t = json_decode(json_encode($var), true);
            $s  = object_to_array($var);
            $no++;
            echo
            "<tr>
                      <td>" . $no . "</td>
                      <td>" . $result->get('m.name') . "</td>
                      <td>" . implode(", ",$s) . "</td>
                    </tr> ";
        }
        ?>

    </tbody>
</table>