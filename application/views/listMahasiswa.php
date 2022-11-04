<div class="container-fluid">
    <h1>Daftar Nama Mahasiswa</h1>
    <button type="submit" class="btn btn-primary mb-3 mt-3">Tambah Mahasiswa</button>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nrp</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach ($mahasiswa as $mhs) { ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $mhs['nama'] ?></td>
                    <td><?php echo $mhs['nrp'] ?></td>
                    <td><?php echo $mhs['email'] ?></td>
                    <td><?php echo $mhs['jurusan'] ?></td>
                    <td>
                        <button type="submit" class="btn btn-primary">Edit</button> &nbsp;
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>