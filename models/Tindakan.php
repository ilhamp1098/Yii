<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $nama_tindakan
 * @property int $tarif_tindakan
 * @property int $id_obat
 * @property int $jumlah
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien','nama_tindakan', 'tarif_tindakan', 'id_obat', 'jumlah'], 'required'],
            [['id_pasien','tarif_tindakan', 'id_obat', 'jumlah'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_tindakan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'id_pasien' => 'Id Pasien',
            'nama_tindakan' => 'Nama Tindakan',
            'tarif_tindakan' => 'Tarif Tindakan',
            'id_obat' => 'Id Obat',
            'jumlah' => 'Jumlah',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
                public function getObat()
    {
        // same as above
        return $this->hasOne(Obat::class, ['id_obat' => 'id_obat']);
    }   
                public function getPasien()
    {
        // same as above
        return $this->hasOne(Pasien::class, ['id_pasien' => 'id_pasien']);
    } 


public function getHarga($id_obat)

        {

            $harga=Obat::model()->find(array(

            'select'=>'harga',

            'condition'=>'id_obat=:id',

            'params'=>array(':id'=>$id_obat),

            ));

            $harga = $harga->harga;

            return $harga;

        }

}
