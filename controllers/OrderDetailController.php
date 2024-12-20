<?php
function historyOrder()
{
    $title = 'Đơn hàng đã mua';
    $views = 'order-detail-client';
    $script = 'cart';
    $style = 'cart';
    // Thay bằng listAll();
    $user_id = $_SESSION['user']['id'];
    $orders = listAll_history($user_id);


    require_once PATH_VIEW . 'layouts/master.php';
}
function tb_donhangShowOneClient($id)
{
    $order = showOne('tb_donhang', $id);
    // getData_tb_chitiet_donhang($id)
    $dmsp = listAllDanhMuc();
    if (empty($order)) {
        e404();
    }
    $title = 'Chi tiết đơn hàng: ' . $order['ten_khachhang'];
    $views = 'order-showOne';

    require_once PATH_VIEW . 'layouts/master.php';

}

function tb_donhangUpdateClient($id)
{
    $order = showOne('tb_donhang', $id);

    if (empty($order)) {
        e404();
    }
    $title = 'Danh sách đơn hàng: ' . $order['ten_khachhang'];
    $views = 'order-update';

    if (!empty($_POST)) {
        $data = [
            "trang_thai" => $_POST['trang_thai'] ?? $_POST['trang_thai'],
            "sdt" => $_POST['sdt'] ?? $_POST['sdt']
        ];
        // CHƯA FIX

        
        // Nếu có lỗi sẽ về giao diện
        // $errors = validateorderUpdate($id, $data);
        // if (!empty($errors)) {
        //     $_SESSION['errors'] = $errors;
        // } else {
            update('tb_donhang', $id, $data);

            $_SESSION['success'] = 'Cập nhật thành công!';
        // }

        header('Location: ' . BASE_URL . '?act=order-detail-client&id=' . $id);
        exit();
    }

    require_once PATH_VIEW . 'layouts/master.php';

}