<?php

include "connection.php";

$id_portfolio = $_GET['id_portfolio'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM portfolio 
     WHERE id_portfolio = '$id_portfolio'"
);

$portfolio = mysqli_fetch_object($query);

?>

<?php include "header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "topbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-gray-800">
                            Portfolio
                        </h1>

                    </div>

                    <!-- Content Start -->

                    <form 
                        action="action_update_portfolio.php" 
                        method="POST">

                        <!-- ID PORTFOLIO -->
                        <input 
                            type="hidden" 
                            name="id_portfolio"
                            value="<?php echo $portfolio->id_portfolio; ?>">
                        <div class="mb-3">
                            <label 
                            for="judul_portfolio" class="form-label">
                             Title
                            </label>
                            <input type="text" class="form-control" 
                            id="judul_portfolio" name="judul_portfolio"
                            value="<?php echo $portfolio->judul_portfolio; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">
                             Image
                            </label>
                            <input type="text" class="form-control" 
                            id="img" name="img"
                            value="<?php echo $portfolio->img; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">
                             Link
                            </label>
                            <input type="text" class="form-control" 
                            id="link" name="link"
                            value="<?php echo $portfolio->link; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">
                                Description
                            </label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="10">
                            <?php echo $portfolio->deskripsi; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">
                             Type
                            </label>
                            <input type="text" class="form-control" id="jenis" name="jenis"
                            value="<?php echo $portfolio->jenis; ?>">
                        </div>


                        <button 
                            type="submit" 
                            class="btn btn-primary">
                            Submit
                        </button>

                    </form>

                    <!-- Content End -->

                </div>

            </div>

            <!-- Footer -->
            <?php include "footer.php" ?>

        </div>

    </div>

    <!-- Scroll to Top Button -->
    <?php include "bottom.php" ?>

</body>

</html>