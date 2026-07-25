<?php

include "connection.php";

$id_sidebar_foto = $_GET['id_sidebar_foto'];

$select_id = mysqli_query(
    $koneksi,
    "SELECT * FROM sidebar_photo
     WHERE id_sidebar_foto = '$id_sidebar_foto'"
);

$id_sidebar_foto = mysqli_fetch_object($select_id);

?>

<?php include "header.php"; ?>

<body id="page-top">

    <div id="wrapper">

        <?php include "sidebar.php"; ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php include "topbar.php"; ?>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        <h1 class="h3 mb-0 text-gray-800">
                            Sidebar Photo
                        </h1>

                    </div>

                    <form
                        action="action_update_sidebar_photo.php"
                        method="post"
                        enctype="multipart/form-data"
                    >

                        <div class="mb-3">

                            <label
                                for="sidebar_photo"
                                class="form-label"
                            >
                                Sidebar Photo
                            </label>

                            <input
                                type="file"
                                class="form-control"
                                id="sidebar_foto"
                                name="sidebar_photo">

                        </div>

                        <input type="hidden" name="id_sidebar_foto"
                        value="<?php echo $id_sidebar_foto->id_sidebar_foto; ?>">

                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>

                    </form>

                </div>

            </div>

            <?php include "footer.php"; ?>

        </div>

    </div>

    <?php include "bottom.php"; ?>

</body>