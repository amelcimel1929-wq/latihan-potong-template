<!-- ini adalah langkah ketiga setelah dari file action_insert_portfolio.php -->
<!-- disini adalah langkah untuk menampilkan data dr database ke tampilan versi web  -->
 <!-- pertama tama panggil koneksi database -->
<?php

include "connection.php";
// kedua buat perintah sql/query ke database untuk menampilkan data
$select_portfolio = mysqli_query(
    $koneksi,
    "SELECT * FROM portfolio ORDER BY id_portfolio DESC"
);
// ketiga, buat perulangan di dalam <tbody> di bawah ini

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
                            Portfolio
                        </h1>

                    </div>
                    <!--ke empat, tambahkan tombol tambah untuk mengarahkan ke file form_portfolio.php-->
                    <a href="form_portfolio.php" class="btn btn-info mb-2">
                        Add
                    </a>


                    <!-- Content Start -->

                    <table class="table table-striped table-bordered">

                        <thead>

                            <tr>

                                <th>Title</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>
                            <!-- perulangan -->
                            <?php
                            // mysqli_fetch_object menggunakan <?php $tampil->nama;
                            // mysqli_fetch_array menggunakan <?php $tampil['nama'];
                             while ($tampil = mysqli_fetch_object($select_portfolio)) : ?>

                                <tr>
                                    <th scope="row"><?php echo
                                    $tampil->judul_portfolio; ?></th>
                                    <td>
                                        <img src="foto/<?php echo $tampil->img; ?>"
                                        alt="" width="100">
                                    </td>
                                    <td>
                                        <a href="<?php echo $tampil->link; ?>" target="_blank">
                                            <?php echo $tampil->link; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $tampil->deskripsi; ?>
                                    </td>
                                    <td>
                                        <?php echo $tampil->jenis; ?>
                                    </td>
                                    <td>
                                        <a href="delete_portfolio.php?id_portfolio=<?php echo $tampil->id_portfolio; ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Confirm to delete?')">
                                            DELETE
                                        </a>

                                        <a href="update_form_portfolio.php?id_portfolio=<?php echo $tampil->id_portfolio; ?>"
                                           class="btn btn-success btn-sm">
                                            UPDATE
                                        </a>
                                    </td>
                                </tr>

                            <?php endwhile; ?>

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
