<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<p style="font-size: 20px; border-bottom:1px solid black; width:fit-content" class="m-3"> Menampilkan minat yang disukai oleh masing-masing akun</p>
<table class="table table-striped table-valign-middle">
    <thead class="thead-dark">
        <tr>
            <th width="5%">No.</th>
            <th>Username</th>
            <th>Minat yang Disukai</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        $results = $client->run('MATCH (n)-[r]->(m:MINAT) RETURN distinct(n.name) as k, collect(m.name) as score');
        foreach ($results as $result) { ?>
        <?php

            $var = $result->get('score');
            // $t = json_decode(json_encode($var), true);
            $s  = object_to_array($var);
            // echo gettype($s);die;
            // var_dump($s);die;
            $no++;
            echo
            "<tr>
                      <td>" . $no . "</td>
                      <td>" . $result->get('k') . "</td>
                      <td>" . implode(", ",$s). "</td>
                    </tr> ";
        }
        ?>

    </tbody>
</table>