<style>
    .alert-success {
        color: #0f6848;
        background-color: #d2f4e8;
        border-color: #bff0de;
    }

    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .35rem;
    }
</style>
<header>
    <div id="header">

        <div class="header-top">
            <div class="sub-header-top">
                <div class="left-title">
                    <h4>Website designed by Team 6</h4>
                </div>
                <div class="list-header">
                    <ul>
                        <li><a href=""> Trợ Giúp</a></li>
                        <li><a href="">My Account</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <?php
            // Thông báo Xóa thành công
            if (isset($_SESSION['success'])) :
            ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php
            endif;
            ?>
        <div class="sub-nav" id="nav">
           
            <div class="nav">
                <div class="photo-logo">
                    <a href="?act=/"><img src="assets/client/src/img/logo.png" style="cursor: pointer;" alt="" /></a>
                </div>
                <!-- dùng thẻ nav -->
                <nav>
                    <div class="list-menu">
                        <ul>
                            <li>
                                <a href="?act=/" id="home"> Trang chủ
                                </a>
                            </li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="?act=contact">Liên hệ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="list-icon" id="list-icon">
                    <div class="icons search" id="iconSearch">

                        <input type="text" id="input_search" placeholder="New Product..?">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="icons cart">
                        <a href="?act=cart-list"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    <?php
                    if (!isset($_SESSION['user'])) :
                    ?>
                        <div class="icons heart">
                            <a href="?act=login"> <i class='bx bxs-user'></i></a>
                        </div>
                    <?php else : ?>
                        <div class="dropdown">
                            <div class="namngang">
                                <img class="dropbtn" width="40px" height="40px" src="<?= BASE_URL ?>assets/admin/img/undraw_profile.svg">
                                <span><?= $_SESSION['user']['name'] ?></span>
                            </div>
                            <div class="dropdown-content">
                                <?php
                                if ($_SESSION['user']['type'] == 1) :
                                ?>
                                    <a href="<?= BASE_URL_ADMIN ?>">
                                        Vào trang admin
                                    </a>
                                <?php endif; ?>
                                <a class="" href="">
                                    Quản lý tài khoản
                                </a>
                                <a class="" href="?act=order-detail-client">
                                    Quản lý đơn hàng
                                </a>
                                <a class="" href="<?= BASE_URL ?>?act=logout">
                                    Logout
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="toggle">
                        <i class='bx bx-sun'></i>
                    </div>
                </div>
            </div>
        </div>
</header>