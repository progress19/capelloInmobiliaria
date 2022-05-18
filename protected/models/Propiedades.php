<?php

/**
 * This is the model class for table "tblpropiedades".
 *
 * The followings are the available columns in table 'tblpropiedades':
 * @property string $idPropiedad
 * @property string $idTipo
 * @property string $idCondicion
 * @property string $idLocalidad
 * @property string $titulo
 * @property string $precio
 * @property string $destacada
 * @property string $map
 * @property string $direccion
 * @property string $descripcion
 * @property integer $superficie
 * @property string $habitaciones
 * @property integer $baños
 * @property string $cochera
 * @property string $piscina
 * @property string $calefaccion
 * @property string $escolar
 * @property integer $plantas
 * @property string $telefono
 * @property string $luz
 * @property string $gas
 * @property string $agua
 * @property string $cloaca
 * @property string $internet
 * @property string $tvcable
 * @property string $aire
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Tbltipos $idTipo0
 * @property Tblcondiciones $idCondicion0
 * @property Tblpropiedadesimagenes[] $tblpropiedadesimagenes
 */
class Propiedades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tblpropiedades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idTipo, idCondicion, idLocalidad, titulo, precio, map, descripcion, estado', 'required'),
			array('superficie, baños, plantas, estado, orden', 'numerical', 'integerOnly'=>true),
			array('idTipo, idCondicion, idLocalidad', 'length', 'max'=>20),
			array('titulo', 'length', 'max'=>200),
			array('precio', 'length', 'max'=>50),
			array('destacada, cochera, piscina, calefaccion, escolar, telefono, luz, gas, agua, cloaca, internet, tvcable, aire', 'length', 'max'=>2),
			array('map', 'length', 'max'=>300),
			array('direccion', 'length', 'max'=>150),
			array('habitaciones', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPropiedad, idTipo, idCondicion, idLocalidad, titulo, precio, destacada, map, direccion, descripcion, superficie, habitaciones, baños, cochera, piscina, calefaccion, escolar, plantas, telefono, luz, gas, agua, cloaca, internet, tvcable, aire, estado', 'safe', 'on'=>'search'),
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
			'tipo' => array(self::BELONGS_TO, 'Tipos', 'idTipo'),
			'condicion' => array(self::BELONGS_TO, 'Condiciones', 'idCondicion'),
			'localidad' => array(self::BELONGS_TO, 'Localidades', 'idLocalidad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPropiedad' => 'Id',
			'idTipo' => 'Id Tipo',
			'idCondicion' => 'Condición',
			'idLocalidad' => 'Id Localidad',
			'titulo' => 'Titulo',
			'precio' => 'Precio',
			'destacada' => 'Destacada',
			'map' => 'Google Mapa',
			'direccion' => 'Dirección',
			'descripcion' => 'Descripción',
			'superficie' => 'Superficie (mt2)',
			'habitaciones' => 'Habitaciones',
			'baños' => 'Baños',
			'cochera' => 'Cochera',
			'piscina' => 'Piscina',
			'calefaccion' => 'Calefacción',
			'escolar' => 'Zona Escolar',
			'plantas' => 'Plantas',
			'telefono' => 'Teléfono',
			'luz' => 'Luz',
			'gas' => 'Gas',
			'agua' => 'Agua',
			'cloaca' => 'Cloaca',
			'internet' => 'Internet',
			'tvcable' => 'Tv Cable',
			'aire' => 'Aire Acondicionado',
			'estado' => 'Estado',
			'orden' => 'Orden',
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
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idPropiedad',$this->idPropiedad,true);
		$criteria->compare('idTipo',$this->idTipo,true);
		$criteria->compare('idCondicion',$this->idCondicion,true);
		$criteria->compare('idLocalidad',$this->idLocalidad,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('destacada',$this->destacada,true);
		$criteria->compare('map',$this->map,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('superficie',$this->superficie);
		$criteria->compare('habitaciones',$this->habitaciones,true);
		$criteria->compare('baños',$this->baños);
		$criteria->compare('cochera',$this->cochera,true);
		$criteria->compare('piscina',$this->piscina,true);
		$criteria->compare('calefaccion',$this->calefaccion,true);
		$criteria->compare('escolar',$this->escolar,true);
		$criteria->compare('plantas',$this->plantas);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('luz',$this->luz,true);
		$criteria->compare('gas',$this->gas,true);
		$criteria->compare('agua',$this->agua,true);
		$criteria->compare('cloaca',$this->cloaca,true);
		$criteria->compare('internet',$this->internet,true);
		$criteria->compare('tvcable',$this->tvcable,true);
		$criteria->compare('aire',$this->aire,true);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('orden',$this->orden);


		$sort=new CSort();
		$sort->defaultOrder='idPropiedad DESC';

		return new CActiveDataProvider($this, array(
			'sort'=>$sort,
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Propiedades the static model class
	 */
	public static function model($className=__CLASS__)	{
		return parent::model($className);
	}

	/*
	public static function getPropiedadesTodas()  {
        $propiedades = Propiedades::model()->findAllByAttributes(array('estado'=>1));
        return $propiedades; 
    }
    */

    public static function getPropiedadesTodas()  {
        $propiedades = Propiedades::model()->findAllByAttributes(
        	array(),
        	$condition = 'estado = 1 ORDER BY orden'

        );
        return $propiedades; 
    }

    public static function getPropiedades($idTipo,$idCondicion,$idLocalidad) {
		
		// V V filtro condicion
		// V F filtro tipo y condicion
		// F V filtro localidad y condicion
		// F F filtro tipo condicion localidad 
    	
    	// V V filtro condicion

    	if ($idTipo == 0 AND $idLocalidad == 0) {
  			$propiedades = Propiedades::model()->findAllByAttributes(
		  		array(),
		  		$condition = 'idCondicion = :idCondicion AND estado = 1 ORDER BY orden',
		  		$params = array(
		    		':idCondicion' => $idCondicion,
		    		)
		  		);
    	}

    	// V F filtro localidad y condicion

    	if ($idTipo == 0 AND $idLocalidad != 0) {
  			$propiedades = Propiedades::model()->findAllByAttributes(
		  		array(),
		  		$condition = 'idCondicion = :idCondicion AND idLocalidad = :idLocalidad AND estado = 1 ORDER BY orden',
		  			$params = array(
		    		':idCondicion' => $idCondicion,
		    		':idLocalidad' => $idLocalidad,
		    ));
    	}

    	// F V filtro tipo y condicion

    	if ($idTipo != 0 AND $idLocalidad == 0) {
  			$propiedades = Propiedades::model()->findAllByAttributes(
		  		array(),
		  		$condition = 'idCondicion = :idCondicion AND idTipo = :idTipo AND estado = 1 ORDER BY orden',
		  			$params = array(
		    		':idCondicion' => $idCondicion,
		    		':idTipo' => $idTipo,
		    ));
    	}

    	// F F filtro tipo condicion localidad 
    	
    	if ($idTipo != 0 AND $idLocalidad != 0) {
  			$propiedades = Propiedades::model()->findAllByAttributes(
		  		array(),
		  		$condition = 'idCondicion = :idCondicion AND idTipo = :idTipo AND idLocalidad = :idLocalidad AND estado = 1 ORDER BY orden',
		  			$params = array(
		    		':idTipo' => $idTipo,
		    		':idCondicion' => $idCondicion,
		    		':idLocalidad' => $idLocalidad,
		    ));
    	}

		return $propiedades; 
		
	}

	public static function getDestacadas()	{

		$destacadas = Propiedades::model()->findAllByAttributes(
        array(),
        $condition = 'destacada = "on" AND estado = 1 ORDER BY orden');

		return $destacadas; 
	}

	public static function getPropiedada($id)	{

		$propiedad = Propiedades::model()->findAllByAttributes(
        array(),
        $condition = 'idPropiedad = :id AND estado = 1 ORDER BY orden',
        $params = array(
		    	':id' => $id,
		    ));

		return $propiedad; 
	}

	public static function getPropiedad($id)	{

		$propiedad = Propiedades::model()->findByPk($id);

		return $propiedad; 
	}

}

