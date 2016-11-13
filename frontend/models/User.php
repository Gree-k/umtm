<?php
/**
 * Created by PhpStorm.
 * User: YOBA
 * Date: 13.11.2016
 * Time: 18:44
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }

    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['id_user' => 'id']);
    }

}