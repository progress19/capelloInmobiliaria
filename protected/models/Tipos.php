<?php

/**
 * This is the model class for table "tbltipos".
 *
 * The followings are the available columns in table 'tbltipos':
 * @property string $idTipo
 * @property string $nombre
 * @property string $icono
 * @property integer $estado
 */
class Tipos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbltipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, icono, estado', 'required'),
			array('estado', 'numerical', 'integerOnly'=>true),
			array('nombre, icono', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTipo, nombre, icono, estado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTipo' => 'Id Tipo',
			'nombre' => 'Nombre',
			'icono' => 'Icono',
			'estado' => 'Estado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idTipo',$this->idTipo,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('icono',$this->icono,true);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tipos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
