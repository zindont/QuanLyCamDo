<?php

/* @var $this yii\web\View */

$this->title = 'Quản Lý Lãi Suất - Quản Lý Cầm Đồ';
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
                        <h2 class="panel-title">Danh sách các loại lãi suất</h2>
                    </div>
                    <div class="panel-body">           
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên lãi suất</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $rates = $model->getAll();
                                foreach ($rates as $key => $rate) : ?>
                                <tr>
                                    <th scope="row"><?= $rate['id'] ?></th>
                                    <td><?= $rate['name'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>            
            </div>
        </div>

    </div>
</div>
