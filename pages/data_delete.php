<?php
if (defined("ALLOWED") === false) {
    die();
}


$results = $client->run("Match (n:PERSON) return n.name as n order by n");
?>

<form action="?page=data_deleted" method="POST">

    <table class="table table-light table-valign-middle">
        <h3 style="font-size: 24px;" class="m-4">Form Hapus Data</h3>
        <thead>
            <tr>
                <th width="3%"></th>
                <th width="3%"></th>
                <th width></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Label</td>
                <td>:</td>
                <td>
                    <select style="width: 18%;" name="entitas" class="form-control" name="role">
                        <Option value="PERSON" >PERSON</Option>
                        <!-- <Option value="PERSON">PERSON</Option>
                        <Option value="MINAT">MINAT</Option> -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <select style="width: 18%;" name="name" class="form-control" name="role">
                        <?php foreach ($results as $result) {
                            echo "<option value=" . $result->get('n') . ">" . $result->get('n') . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Hapus" class="btn btn-danger"></input>
                </td>
            </tr>

        </tbody>
    </table>
</form>