<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<?php
$results = $client->run("Match (n:PERSON) return n.name as n order by n");
?>

<form action="?page=data_update" method="POST">

    <table class="table table-light table-valign-middle">
        <h3 style="font-size: 24px;" class="m-4">Form Update Data</h3>
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
                        <Option value="PERSON">PERSON</Option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Akun</td>
                <td>:</td>
                <td>
                    <select style="width: 18%;" name="name1" class="form-control" name="role">
                        <?php foreach ($results as $result) {
                            echo "<option value=" . $result->get('n') . ">" . $result->get('n') . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Relasi</td>
                <td>:</td>
                <td>
                    <select style="width: 18%;" name="property" class="form-control" name="role">
                        <Option value="" disabled="" >Select property</Option>
                        <Option value="name">name</Option>
                        <Option value="jenis_kelamin" selected>jenis_kelamin</Option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>:</td>
                <td>
                    <input type="text" name="name2">
                </td>

            </tr>
            <tr>
                <td>
                    <input type="submit" value="Simpan" class="btn btn-success"></input>
                </td>
            </tr>

        </tbody>
    </table>
</form>