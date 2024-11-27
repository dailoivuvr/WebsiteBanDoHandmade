<style>
    .product {
        display: grid;
        grid-template-columns: 0.5fr 5fr;
        /* Cột nhỏ chiếm 1 phần, cột lớn chiếm 3 phần */
        grid-gap: 10px;
        /* Khoảng cách giữa các cột */
        margin-top: 5px;
    }

    

    .add-to-cart-btn {
        background-color: #507DC7;
        /* Màu nền */
        border: none;
        /* Không có viền */
        color: white;
        /* Màu chữ */
        padding: 10px 20px;
        /* Kích thước nút */
        text-align: center;
        /* Căn giữa nội dung */
        text-decoration: none;
        /* Bỏ gạch chân */
        display: inline-block;
        /* Hiển thị là một khối inline */
        font-size: 16px;
        /* Kích thước chữ */
        cursor: pointer;
        /* Con trỏ chỉ vị trí có thể nhấp vào */
        border-radius: 5px;
        /* Bo tròn các góc */
    }

    .add-to-cart-btn:hover {
        background-color: #45a049;
        /* Màu nền khi di chuột qua */
    }

    .name-item-image-product {
        display: block;
        text-align: center;
    }
</style>
<div class="slider">

    <div class="title-slider">
        <div class="text-animation">
            <h5>Painting Collection 2024</h5>
            <h3>NEW ARRIVALS</h3>
            <button>SHOP NOW</button>
        </div>
    </div>

</div>
<!-- Background -->
<div class="background">
    <img src="assets/client/src/img/slide1.png" alt="">
</div>


<div id="content">

    <div data-aos="fade-up" class="content-text-img">
        <div class="content-img">
            <img id="image1" src="assets/client/src/img/ads1.png" alt="">
        </div>
        <div class="text-content">
            <div class="text-content-1">
                <h2>NẾN THƠM</h2>
                <p>Mới 2024</p>
            </div>
            <div class="content-text-2">
                <h3>Mua ngay</h3>
                <span></span>
            </div>
        </div>
    </div>


    <div data-aos="fade-left" class="content-text-img">
        <div class="content-img">
            <img id="image1" src="assets/client/src/img/ads2.png" alt="">
        </div>
        <div class="text-content">
            <div class="text-content-1">
                <h2>VÒNG TAY</h2>
                <p>Mới 2024</p>
            </div>
            <div class="content-text-2">
                <h3>Mua Ngay</h3>
                <span></span>
            </div>
        </div>
    </div>


    <div data-aos="fade-up" class="content-text-img">
        <div class="content-img">
            <img id="image1" src="assets/client/src/img/ads3.png" alt="">
        </div>
        <div class="text-content">
            <div class="text-content-1">
                <h2>THỦ CÔNG</h2>
                <p>Mới 2024</p>
            </div>
            <div class="content-text-2">
                <h3>Mua ngay</h3>
                <span></span>
            </div>
        </div>
    </div>
    <h1 style="margin-top: 80px; margin-bottom: 20px">Product Overview</h1>
</div>

<div class="product">
    <div class="text-product">

        <div class="menu-filter-product">
            <div class="menu-product">

                <h2>Bộ lọc</h2>
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="category">Danh mục:</label>
                        <select class="col-6 col-sm-8" name="id_danhmuc">
                            <option value="">Tất cả</option>
                            <?php foreach ($catelogues as $catelogue) : ?>
                                <option value="<?= $catelogue['id'] ?>"><?= $catelogue['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-6 col-sm-8">
                        <label for="name">Tên sản phẩm:</labsel>
                            <input type="text" class="col-6 col-sm-8" name="sanpham_name">
                    </div>
                    <div class="col-6 col-sm-8">
                        <label for="gia_ban">Giá thấp nhất:</label>
                        <input type="number" class="col-6 col-sm-8" name="gia_ban_min">
                    </div>
                    <div class="col-6 col-sm-8">
                        <label for="gia_ban">Giá cao nhất:</label>
                        <input type="number" class="col-6 col-sm-8" name="gia_ban_max">
                    </div>
                    <button type="submit" name="search" class="btn btn-primary mt-3">Áp dụng</button>
                </form>


            </div>

        </div>
    </div>
    <div style="margin-top: 0px;" class="image-product">
        <?php foreach ($products as $product) : ?>
            <div class="item-image-product" data-aos="fade-up">
                <div class="test">
                    <img src="<?= BASE_URL . $product['img_thumbnail'] ?>" alt="" width="100%" height="210px">
                </div>
                <p><a href="<?= BASE_URL . '?act=product-detail&id=' . $product['id'] ?>">Xem chi tiết</a></p>
                <div class="name-item-image-product">
                    <div class="price-name-item-image-product">
                        <p><?= $product['name'] ?></p>
                        <p><?= $product['gia_ban'] ?>USD</p>
                        <p><a class="add-to-cart-btn" href="<?= BASE_URL . '?act=cart-add&id_sanpham=' . $product['id'] . '&so_luong=1' ?>">Thêm giỏ hàng</a></p>
                    </div>
                    <div class="heart-name-item-image-product">
                        <i id="bxs" onclick="addHeart()" class='bx bxs-heart'></i>
                    </div>

                </div>

            </div>
        <?php endforeach;
        ?>
    </div>
</div>

</div>