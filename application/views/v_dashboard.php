<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to RumahWeb</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">

</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <!-- <th scope="col">Tanggal Lahir</th> -->
                <th scope="col">E-mail</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $this->session->userdata('fullname'); ?></th>
                <td><?= $this->session->userdata('umur'); ?></td>
                <!-- <td><?= $this->session->userdata('tanggal_lahir'); ?></td> -->
                <td><?= $this->session->userdata('username'); ?></td>
                <td><?= $this->session->userdata('password'); ?></td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Update
                    </button>

                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalHapus">
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">FUllname</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('fullname'); ?>" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <label for="">Umur</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('umur'); ?>" readonly aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('username'); ?>" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('password'); ?>" aria-label=".form-control-sm example">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalHapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="">FUllname</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('fullname'); ?>" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <label for="">Umur</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('umur'); ?>" readonly aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('username'); ?>" aria-label=".form-control-sm example">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input class="form-control form-control-sm" type="text" value="<?= $this->session->userdata('password'); ?>" aria-label=".form-control-sm example">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <?php
                    echo date('h:i:s') . "<br>";

                    //sleep for 3 seconds
                    sleep(3);

                    //start again
                    echo date('h:i:s');
                    ?>

                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <a type="button" href="<?= base_url() ?>index.php/welcome/logout" class="btn btn-danger">Logout</a>
    <script src="<?= base_url() . 'assets/js//bootstrap.bundle.min.js' ?>"></script>
</body>

</html>