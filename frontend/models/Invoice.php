<?php
namespace frontend\models;

use yii\base\Model;
use yii\db\Query;

/**
 * Rate
 */
class Invoice extends Model
{
    /**
     * Get all rate
     *
     * @return array of all rate
     */
    public function getAll()
    {
		$query = new Query;
		$query->select('invoice.id, customer.name AS customer_name, invoice.money, invoice.created_date, products.name AS product_name, rate.name AS rate_name, invoice.rate_value')
		    ->from('invoice')
            ->innerJoin('customer', 'invoice.customer_id = customer.id')
            ->innerJoin('rate', 'invoice.rate_id = rate.id')
            ->innerJoin('products', 'invoice.product_id = products.id');
		$command = $query->createCommand();
		$rows = $command->queryAll();
		return $rows;
    }

    /**
     * Convert %/month to money/mil/day
     *
     * @return value of money/mil/day
     */
    public function convertToRatePerDay($money, $ratePerMonth){
        $result = ($money * $ratePerMonth) / 100 / 30;
        $result = number_format($result, 0, ',', '.');
        $result .= '/ngày/triệu';
        return $result;
    }
}
