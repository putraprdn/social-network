<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<p style="font-size: 20px; border-bottom:1px solid black; width:fit-content" class="m-3"> Menampilkan nama followers</p>
<table class="table table-striped table-valign-middle">
    <thead class="thead-dark">
        <tr>
            <th width="5%">No.</th>
            <th>Username</th>
            <th>Followers</th>
        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($results);die;
        $no = 0;
        $results = $client->run('Match (n:PERSON)-[r]->(m:PERSON) return distinct(m.name) as a, collect(n.name) as score');
        foreach ($results as $result) { ?>
        <?php

            $no++;
            $var = $result->get('score');
            // $t = json_decode(json_encode($var), true);
            $s  = object_to_array($var);
            echo
            "<tr>
                      <td>" . $no . "</td>
                      <td>" . $result->get('a') . "</td>
                      <td>" . implode(", ",$s).  "</td>
                    </tr> ";
        }
        ?>

    </tbody>
</table>