<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string|null $notelp
 * @property string|null $tgl_lahir
 * @property string|null $alamat
 * @property int $id_wilayah
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'id_wilayah'], 'required'],
            [['tgl_lahir', 'created_at', 'updated_at'], 'safe'],
            [['alamat'], 'string'],
            [['id_wilayah'], 'integer'],
            [['nama_pasien'], 'string', 'max' => 30],
            [['notelp'], 'string', 'max' => 17],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
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
