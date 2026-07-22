<?php

include "connection.php";

$select_portfolio = mysqli_query(
    $koneksi,
    "SELECT * FROM portfolio ORDER BY id_portfolio DESC"
);

if (!$select_portfolio) {
    die("Query error: " . mysqli_error($koneksi));
}

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

                            <?php while ($tampil = mysqli_fetch_object($select_portfolio)) : ?>

                                <tr>

                                    <td>
                                        <?php echo $tampil->judul_portfolio; ?>
                                    </td>

                                    <td>
                                        <?php echo $tampil->img; ?>
                                    </td>

                                    <td>
                                        <?php echo $tampil->link; ?>
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