<?php

/* @var $this yii\web\View */

$this->title = 'Thêm mới hợp đồng - Quản Lý Cầm Đồ';
?>
<div class="site-index">

    <div class="page-header">
      <h1>Thêm mới hợp đồng cầm đồ</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-12">        
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Họ tên:</label>
                        <div class="col-sm-10">
                            <select class="js-data-example-ajax" id="customer_id" name="customer_id" placeholder="Enter email">
                                <option value="0" selected="selected">Nhập để tìm hoặc thêm mới</option>
                            </select>                      
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Số tiền vay:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="money" name="money" placeholder="Nhập số tiền">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Ngày vay:</label>
                        <div class='col-sm-10'>
                            <input type='text' class="form-control" id='datetimepicker1' />
                        </div>
                    </div>

                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>           
            </div>
        </div>

    </div>
</div>
