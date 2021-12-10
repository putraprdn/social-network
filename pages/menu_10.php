<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<p style="font-size: 20px; border-bottom:1px solid black; width:fit-content" class="m-3"> Menampilkan akun dengan jenis kelamin laki-laki </p>
<table class="table table-striped table-valign-middle">
    <thead class="thead-dark">
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
        $results = $client->run("Match (n:PERSON) where n.jenis_kelamin='Laki-laki' return n.name, n.jenis_kelamin as jk ");
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