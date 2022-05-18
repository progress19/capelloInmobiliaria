<?php

/**
 * This is the model class for table "tblpropiedadesimagenes".
 *
 * The followings are the available columns in table 'tblpropiedadesimagenes':
 * @property string $idImagen
 * @property string $idPropiedad
 * @property string $imagen
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Tblpropiedades $idPropiedad0
 */
class Propiedadesimagenes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblpropiedadesimagenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPropiedad, imagen, estado', 'required'),
			array('estado, orden', 'numerical', 'integerOnly'=>true),
			array('idPropiedad', 'length', 'max'=>20),
			array('imagen', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idImagen, idPropiedad, imagen, estado, orden', 'safe', 'on'=>'search'),
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
			'propiedad' => array(self::BELONGS_TO, 'Propiedades', 'idPropiedad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idImagen' => 'Id Imagen',
			'idPropiedad' => 'Id Propiedad',
			'imagen' => 'Imágen',
			'orden' => 'Orden',
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

		$criteria->compare('idImagen',$this->idImagen,true);
		$criteria->compare('idPropiedad',$this->idPropiedad,true);
		$criteria->compare('imagen',$this->imagen,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('orden',$this->orden);

		$sort=new CSort();
		$sort->defaultOrder='idImagen DESC';

		return new CActiveDataProvider($this, array(
			'sort'=>$sort,
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Propiedadesimagenes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	 public static function getImagenes($idPropiedad) {

  			$imagenes = Propiedadesimagenes::model()->findAllByAttributes(
		  		array(),
		  		$condition = 'idPropiedad = :idPropiedad AND estado = 1 ORDER BY orden',
		  			$params = array(
		    		':idPropiedad' => $idPropiedad,
		    ));

		    return $imagenes;
	}

	public static function getImagen($idPropiedad) {

  				$imagen = Propiedadesimagenes::model()->findAllByAttributes(
		  		array(),
		  		$condition = 'idPropiedad = :idPropiedad AND estado = 1 ORDER BY orden',
		  			$params = array(
		    		':idPropiedad' => $idPropiedad,

		    	),
	  			array(
    				'limit' => 1,
    				'offset' => 15,

				));

  			return $imagen;
	 
	}

	public function onFileUploaded($fullFileName,$userdata) {

		$archivo = substr($fullFileName, 17);

		$model = new Propiedadesimagenes;
		$model->idPropiedad = Yii::app()->user->idPropiedad;;
		$model->imagen = $archivo;
		$model->estado = 1;
		$model->insert();
	}
	
}