<link href="<?= BASE_URL; ?>/assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
<div id="main">
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Update
            </h6>
        </div>
        <div class="card-body">
            <?php
            // Thông báo cập nhật thành công
            if (isset($_SESSION['success'])) :
            ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php
            endif;
            ?>
            <?php
            if (isset($_SESSION['errors'])) :
            ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php
                        foreach ($_SESSION['errors'] as $error) :
                        ?>
                            <li><?= $error ?></li>
                        <?php
                        endforeach;
                        ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php
            endif;
            ?>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="ten_khachhang" value="<?= $order['ten_khachhang'] ?>" placeholder="Enter name" name="ten_khachhang">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="SĐT" class="form-label">SĐT:</label>
                            <input type="text" class="form-control" id="sdt" value="<?= $order['sdt'] ?>" placeholder="Enter pass" name="sdt">
                        </div>
                    </div>
                    <div class="col-md-6">
                   
                        <?php
                        if ($order['trang_thai'] == 0) {
                            echo '
                            <div class="mb-3 mt-3">
                            <label for="type" class="form-label">Trạng thái:</label>
                            <select name="trang_thai" id="trang_thai" class="form-control">
                                <option ' . ($order['trang_thai'] == 0 ? 'selected' : null) .' value="0">Chưa xử lí</option>
                                <option ' . ($order['trang_thai'] == 5 ? 'selected' : null) .' value="5">Hủy đơn hàng</option>
                            </select>
                        </div>
                            ';
                        } 
                        ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= BASE_URL ?>?act=order-detail-client" class="btn btn-danger">Back to list</a>
            </form>
        </div>
    </div>
</div>
</div>

