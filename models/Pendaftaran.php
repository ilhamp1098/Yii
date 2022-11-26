<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property int $id_pendaftaran
 * @property string $tgl_pendaftaran
 * @property int $id_pasien
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_pendaftaran', 'id_pasien'], 'required'],
            [['tgl_pendaftaran', 'created_at', 'updated_at'], 'safe'],
            [['id_pasien'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pendaftaran' => 'Id Pendaftaran',
            'tgl_pendaftaran' => 'Tgl Pendaftaran',
            'id_pasien' => 'Id Pasien',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

                    public function getPasien()
    {
        // same as above
        return $this->hasOne(Pasien::class, ['id_pasien' => 'id_pasien']);
    }  
}
