<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "wrk_user".
 *
 * @property integer $id
 * @property string $nama_depan
 * @property string $nama_belakang
 * @property string $email
 * @property string $username
 * @property string $alamat
 * @property string $telp
 * @property string $hp
 * @property integer $jenis_kelamin
 * @property integer $agama
 * @property string $pict
 * @property string $password
 * @property integer $status
 * @property string $last_login
 * @property string $password_hash
 * @property string $auth_key
 * @property string $create_time
 * @property string $update_time
 * @property integer $user_create
 * @property integer $user_update
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrk_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_depan', 'nama_belakang', 'email', 'username', 'alamat', 'telp', 'hp', 'jenis_kelamin', 'agama', 'pict', 'password', 'status', 'last_login', 'password_hash', 'auth_key', 'create_time', 'update_time', 'user_create', 'user_update'], 'required'],
            [['jenis_kelamin', 'agama', 'status', 'user_create', 'user_update'], 'integer'],
            [['last_login', 'create_time', 'update_time'], 'safe'],
            [['nama_depan'], 'string', 'max' => 20],
            [['nama_belakang', 'email', 'username'], 'string', 'max' => 30],
            [['alamat', 'pict', 'password', 'password_hash'], 'string', 'max' => 255],
            [['telp', 'hp'], 'string', 'max' => 15],
            [['auth_key'], 'string', 'max' => 50],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_depan' => 'Nama Depan',
            'nama_belakang' => 'Nama Belakang',
            'email' => 'Email',
            'username' => 'Username',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'hp' => 'Hp',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'pict' => 'Pict',
            'password' => 'Password',
            'status' => 'Status',
            'last_login' => 'Last Login',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'user_create' => 'User Create',
            'user_update' => 'User Update',
        ];
    }

	
	public static function getStatus($key = ''){
		$status = [
			10=> 'Aktif',
			0 => 'Not Aktif',
			];
			
			if ($key !== ''){
				return $status[$key];
			else
				return $status;
}

public static function getAgama($key = ''){
	$agama = [
		1 => 'Islam',
		2 => 'Kristen',
		3 => 'Hindu',
		4 => 'Budha'
	];
	if ($key !== '')
		return $agama[$key];
	else
		return $agama;




	
