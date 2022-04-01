<div class="row">
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" data-aos-once="true" class="text-center mb-60">
        <h2>
            LIÊN HỆ VỚI CHÚNG TÔI
        </h2>
    </div>
</div>

<div class="row">
    <?php require_once PATH_TO_MODUL . 'map.php'; ?>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4>Thông tin liên hệ</h4>
                <p>Địa chỉ: K45/12 Đỗ Quang, phường Thanh Khê, Đà Nẵng </p>
                <p>Email: minhdao.161120@gmail.com </p>
                <p>Số điện thoại: +84 386256124</p>
                <h4 class="card-title">Gửi Thắc Mắc Cho Chúng Tôi</h4>
                <div class="row btn-success">
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
                </div>
                <form class="forms-sample" method="post" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="formname">Họ tên của bạn :</label>
                        <input type="text" class="form-control" id="formname" placeholder="Nhập Họ Và Tên" name="inputFullName" required>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-email-input">Email</label>
                                <input type="email" class="form-control" id="formrow-email-input" placeholder="Nhập Email Của Bạn" name="inputEmail" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="formrow-phone-input">Số điện thoại</label>
                                <input type="phone" class="form-control" id="formrow-phone-input" placeholder="Nhập Số Điện Thoại" name="inputPhone" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formtitle">Tiêu đề :</label>
                        <input type="text" class="form-control" id="formtitle" placeholder="Nhập tiêu đề" name="inputTitle" required>
                    </div>

                    <div class="form-group">
                        <label for="formmessage">Nội dung :</label>
                        <textarea id="formmessage" class="form-control" rows="3" name="inputContent" required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-md" name="submit" value="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>