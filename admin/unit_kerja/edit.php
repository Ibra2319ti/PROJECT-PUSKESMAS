<!DOCTYPE html>
<html lang="en">
<?php include_once('../include/meta.php');
require_once('../dbkoneksi.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('../include/header.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('../include/sidebar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Unit Kerja</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="card col-md-12">
                            <div class="card-body">
                                <form action="" method="post">

                                    <?php
                                    if (isset($_POST['nama'])) {
                                        $nama = $_POST['nama'];

                                        $sql = "UPDATE unit_kerja SET nama = :nama WHERE id = :id";
                                        $stmt = $dbh->prepare($sql);
                                        $stmt->bindParam(':nama', $nama);
                                        $stmt->bindParam(':id', $_POST['id']);
                                        $stmt->execute();
                                        echo '<meta http-equiv="refresh" content="0; url=index.php"><script>alert("Data Sudah Berhasil Diubah")</script>';
                                    }
                                    if (isset($_GET['id'])) {
                                        $sql = "SELECT * FROM unit_kerja WHERE id = :id";
                                        $stmt = $dbh->prepare($sql);
                                        $stmt->bindParam(':id', $_GET['id']);
                                        $stmt->execute();
                                        $data = $stmt->fetch();
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label for="nama">Unit Kerja</label>
                                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" required>
                                    </div>
                                    <button class="btn btn-primary my-2" type="submit">Ubah</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once('../include/footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>