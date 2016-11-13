<?php
/**
 * Created by PhpStorm.
 * User: YOBA
 * Date: 12.11.2016
 * Time: 15:30
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord
{

    public static function tableName()
    {
        return 'articles';
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

}