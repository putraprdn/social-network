<?php
if (defined("ALLOWED") === false) {
    die();
}
?>

<form action="?page=data_save" method="POST">
    
    <table class="table table-light table-valign-middle">
        <h3 style="font-size: 24px;" class="m-4">Form Tambah Data</h3>
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
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="name1">
                </td>
            </tr>
            <tr>
                <td>Relasi</td>
                <td>:</td>
                <td>
                    <select style="width: 18%;" name="relasi" class="form-control" name="role">
                        <Option value="" disabled="" selected="">Select relasi</Option>
                        <Option value="is_follow">is_follow</Option>
                        <Option value="is_like">is_like</Option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
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