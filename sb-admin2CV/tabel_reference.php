<?php
include "connection.php";
$select_reference = mysqli_query($koneksi, "SELECT * FROM reference ORDER BY id_reference DESC");
?>

<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Reference</h1>
                    </div>

                    <a href="form_reference.php" class="btn btn-info mb-3">
                        Add Reference
                    </a>

                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Designation</th>
                                <th>Company</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th width="180">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php while($tampil = mysqli_fetch_object($select_reference)){ ?>

                            <tr>

                                <td><?php echo $tampil->nama; ?></td>

                                <td><?php echo $tampil->jabatan; ?></td>

                                <td><?php echo $tampil->perusahaan; ?></td>

                                <td><?php echo $tampil->phone; ?></td>

                                <td><?php echo $tampil->email; ?></td>

                                <td>
                                    <a href="update_form_reference.php?id_reference=<?php echo $tampil->id_reference; ?>"
                                        class="btn btn-success btn-sm">
                                        UPDATE
                                    </a>

                                    <a href="delete_reference.php?id_reference=<?php echo $tampil->id_reference; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Confirm to delete?')">
                                        DELETE
                                    </a>
                                </td>

                            </tr>

                            <?php } ?>

                        </tbody>

                    </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "footer.php" ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php include "bottom.php" ?>