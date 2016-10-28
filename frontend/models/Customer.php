<?php
namespace frontend\models;

use yii\base\Model;

/**
 * Customer
 */
class Customer extends Model
{
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function getAll()
    {
        echo 'Lấy tất cả danh sách khách hàng';
    }
}
