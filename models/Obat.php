<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property int $harga_obat
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'harga_obat'], 'required'],
            [['harga_obat'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_obat'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'harga_obat' => 'Harga Obat',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
 
}
