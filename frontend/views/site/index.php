<?php

/* @var $this yii\web\View */

$this->title = 'Quản Lý Cầm Đồ';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ứng Dụng Quản Lý Cầm Đồ!</h1>

        <p class="lead">Thiết kế bởi Ân. Thông tin liên hệ: info@zindo.info</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">        
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Danh sách khách hàng</h2>
                    </div>
                    <div class="panel-body">
                        <div class="btn-group pull-right" role="group" aria-label="...">
                          <a role="button" class="btn btn-success" href="<?php echo Yii::$app->homeUrl ?>?r=invoice/new">Thêm</a>
                          <button type="button" class="btn btn-primary">Cập nhật lại danh sách</button>
                          <button type="button" class="btn btn-danger">Xóa</button>
                        </div>
                        <?php
                            $invoices = $model->getAll();
                        ?>
                        TODO:<br>
                        +Lãi ngày -> báo đỏ hằng ngày nếu chưa thanh toán<br>
                        +Lãi tháng -> báo đỏ theo chu kỳ 30 ngày.<br>
                        +Click -> chi tiết<br>
                            - Thao tác trả tiền lãi<br>
                            - Thao tác thanh toán<br>
                        +Chức năng Thêm mới hợp đồng <br>                  
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số tiền vay</th>
                                    <th>Ngày vay</th>
                                    <th>Đồ cầm cố</th>
                                    <th>Lãi (%/tháng)</th>
                                    <th>Lãi (tiền lãi/ngày/triệu)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($invoices as $key => $inv) : ?>
                                <tr>
                                    <th scope="row"><?php echo ($key + 1) ?></th>
                                    <td><?php echo $inv['customer_name'] ?></td>
                                    <td><?php echo number_format($inv['money'], 0, ',', '.');  ?></td>
                                    <td><?php echo date('d/m/Y',$inv['created_date']) ?></td>
                                    <td><?php echo $inv['product_name'] ?></td>
                                    <td><?php echo $inv['rate_value'].'% /tháng' ?></td>
                                    <td><?php echo $model->convertToRatePerDay($inv['money'], $inv['rate_value']) ?></td>
                                </tr>                                
                                <?php endforeach;?>

                            </tbody>
                        </table>
                    </div>
                </div>            
            </div>
        </div>

    </div>
</div>

