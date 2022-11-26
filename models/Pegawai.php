<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_pegawai
 * @property string $notelp
 * @property string $tgl_lahir
 * @property string $alamat
 * @property int $id_wilayah
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'notelp', 'tgl_lahir', 'alamat', 'id_wilayah'], 'required'],
            [['tgl_lahir', 'created_at', 'updated_at'], 'safe'],
            [['alamat'], 'string'],
            [['id_wilayah'], 'integer'],
            [['nama_pegawai'], 'string', 'max' => 30],
            [['notelp'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'notelp' => 'Notelp',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'id_wilayah' => 'Id Wilayah',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getWilayah()
    {
        // same as above
        return $this->hasOne(Wilayah::class, ['id_wilayah' => 'id_wilayah']);
    }
}
