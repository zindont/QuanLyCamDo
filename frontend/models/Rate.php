<?php
namespace frontend\models;

use yii\base\Model;
use yii\db\Query;

/**
 * Rate
 */
class Rate extends Model
{
    /**
     * Get all rate
     *
     * @return array of all rate
     */
    public function getAll()
    {
		$query = new Query;
		$query->select('*')
		    ->from('rate');
		$command = $query->createCommand();
		$rows = $command->queryAll();
		return $rows;
    }
}
