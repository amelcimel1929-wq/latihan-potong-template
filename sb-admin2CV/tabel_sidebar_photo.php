<?php

include "connection.php";

$select_sidebar_photo = mysqli_query(
    $koneksi,
    "SELECT * FROM sidebar_photo ORDER BY id_sidebar_foto DESC");
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

                        <h1 class="h3 mb-0 text-gray-800">
                            sidebar foto
                        </h1>

                    </div>
                    <a href="form_sidebar_photo.php" class="btn btn-info mb-2">
                        Add
                    </a>


                    <!-- Content Start -->

                    <table class="table">
                       <thead>
                           <tr>
                              <th scope="col">Sidebar Photo</th>
                              <th scope="col">Action</th>
                            </tr>
                       </thead>
                       <tbody>
                       <!-- perulangan -->
                              <?php
                              // mysqli_fetch_object menggunakan <?php $tampil->nama;
                              // mysqli_fetch_array menggunakan <?php $tampil['nama'];
                              while ($tampil = mysqli_fetch_object($select_sidebar_photo)):
                              ?>
                              <tr>
                                <td>
                                    <img src="foto/<?php echo
                                    $tampil->sidebar_photo; ?>" alt="" width="100">
                                </td>
                                <td>
                                    <a href="delete_sidebar_photo.php?id_sidebar_foto=<?php echo $tampil->id_sidebar_foto; ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Confirm to delete?')">
                                            DELETE
                                        </a>

                                        <a href="update_form_sidebar_photo.php?id_sidebar_foto=<?php echo $tampil->id_sidebar_foto; ?>"
                                           class="btn btn-success btn-sm">
                                            UPDATE
                                        </a>

                                </td>
                              </tr>
                              <?php endwhile ?>
                        </tbody>
                    </table>

                    <!-- Content End -->

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

    <!-- Scroll to Top Button-->

    <?php include "bottom.php" ?>

</body>
</html>
