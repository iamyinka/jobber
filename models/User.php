<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\base\Security;

class User extends ActiveRecord implements IdentityInterface
{
    public $password_repeat;
    public static function tableName()
    {
        return '{{%tbl_user}}';
    }


    public function rules()
    {
        # code...
        return [
            [['full_name', 'email', 'username', 'password', 'password_repeat'], 'required'],
            ['email', 'email'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
        ];
    }
    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }


    public function validatePassword($password)
    {
        # code...
        return $this->password === md5($password);
    }

    public function findByUsername($username)
    {
        # code...
        return User::findOne(['username' => $username]);
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function beforeSave($insert)
    {
        # code...
        if (parent::beforeSave($insert)) {
            # code...
            if ($this->isNewRecord) {
                # code...
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            if (isset($this->password)) {
                # code...
                $this->password = md5($this->password);
                return parent::beforeSave($insert);
            }
        }
        return true;
    }

    public function getJob()
    {
        # code...
        return $this->hasMany(Job::className(), ['user_id' => 'id']);
    }
}