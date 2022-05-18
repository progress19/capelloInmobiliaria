<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
			'coco'=>array(
                'class'=>'CocoAction',
            ),
		);
	}

	public function actionRedimensionar($alto=235)

	{

		Yii::import('application.extensions.image.Image');
		$image = new Image(Yii::app()->basePath.'/images/1.jpg');
		$image->resize(NULL, 235);
		$image->crop(235, 235);
		$image->render();
	}

	public function actionMaxresi($imagen,$alto,$ancho) {

		    $thumb=Yii::app()->phpThumb->create($imagen);
			$thumb->adaptiveResize($ancho, $alto);
			$thumb->show();

	}

	public function actionIndex()	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
    * Displays the home page
	*/

	public function actionPropiedadDetalle(){$this->render('propiedadDetalle');}
	public function actionPropiedades(){$this->render('propiedades');}
	public function actionContacto(){$this->render('contacto');}
	public function actionServicios(){$this->render('servicios');}

	public function actionEnviarcontacto()	{
		sleep(2);		
		$config = Config::model()->findByPK(1);

		if(isset($_POST['email']))	{

		$body="
		    <strong>".Yii::t('strings', 'Contacto desde')." Capello Inmobiliaria</strong><br><hr>
			<b>".Yii::t('strings', 'NOMBRE').": </b>".$_REQUEST['nombre']."<br>
			<b>".Yii::t('strings', 'EMAIL').": </b>".$_REQUEST['email']."<br>
			<b>".Yii::t('strings', 'TELEFONO').": </b>".$_REQUEST['telefono']."<br>
			<b>".Yii::t('strings', 'ASUNTO').": </b>".$_REQUEST['asunto']."<br>
			<b>".Yii::t('strings', 'COMENTARIO').": </b>".$_REQUEST['consulta']."<br>";

			$mail = new YiiMailer();
			$mail->setView('contact');
			$mail->setData(array('message' => '', 'name' => '',
				 'description' => $body));

			$mail->setFrom('info@capelloinmobiliaria.com', 'Capello Inmobiliaria');

			$mail->AddAddress($_POST['email']);

			$contactos = explode(";",$config->contacto);
			 foreach ($contactos as $contacto) {
			 	$mail->AddAddress($contacto);
			 }
 				
				$mail->setSubject(Yii::t('strings', 'CONTACTO'). ' Capello Inmobiliaria');

				$mail->smtpConnect([
				    'ssl' => [
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    ]
				]);

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}
				
				$this->refresh();

		}
	}

		public function actionEnviarconsulta()	{
		
		sleep(2);		
		$config = Config::model()->findByPK(1);

		if(isset($_POST['email'])) {

		$propiedad = Propiedades::model()->findByPK($_REQUEST['id']);	

		$body="
		    <strong>".Yii::t('strings', 'Consulta desde')." Capello Inmobiliaria</strong><br><hr>
			
			<b>".Yii::t('strings', 'NOMBRE').": </b>".$_REQUEST['nombre']."<br>
			<b>".Yii::t('strings', 'EMAIL').": </b>".$_REQUEST['email']."<br>
			<b>".Yii::t('strings', 'TELEFONO').": </b>".$_REQUEST['telefono']."<br>
			<b>".Yii::t('strings', 'CONSULTA').": </b>".$_REQUEST['consulta']."<br>
			<hr>
			Id Propiedad = ".$_REQUEST['id']."<br><br>
			<b>".$propiedad->titulo."</b><br>
			<b>Precio : </b>".$propiedad->precio."<br>
			<b>Localidad : </b>".$propiedad->localidad->nombre."<br>
			<b>Tipo : </b>".$propiedad->tipo->nombre."<br>
			<b>Condición : </b>".$propiedad->condicion->nombre."<br>
			<b>Plantas : </b>".$propiedad->plantas."<br>
			<b>Habitaciones : </b>".$propiedad->habitaciones."<br>
			<b>Baños : </b>".$propiedad->baños."<br>
			<b>Superficie : </b>".$propiedad->superficie."<br>
			<b>Dirección : </b>".$propiedad->direccion."<br>
			<b>Descripción : </b>".$propiedad->descripcion."<br>
			";

			$mail = new YiiMailer();
			$mail->setView('contact');
			$mail->setData(array('message' => '', 'name' => '',
				 'description' => $body));

			$mail->setFrom('info@capello.com.ar', 'Capello Inmobiliaria');

			$mail->AddAddress($_POST['email']);

			$contactos = explode(";",$config->contacto);
			 foreach ($contactos as $contacto) {
			 	$mail->AddAddress($contacto);
			 }
 				
				$mail->setSubject(Yii::t('strings', 'CONSULTA'). ' Capello Inmobiliaria');

				$mail->smtpConnect([
				    'ssl' => [
				        'verify_peer' => false,
				        'verify_peer_name' => false,
				        'allow_self_signed' => true
				    ]
				]);

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}
				
				$this->refresh();

		}
	}


	public function actionEnviarsuscripcion()	{

		sleep(1);
		$model=new Newsletter;

		if(isset($_POST['email']))
		{
			$model->email=$_POST['email'];
			$model->estado=1;
			if($model->save(false))
				$mail = new YiiMailer();
				$mail->setView('contact');
				$mail->setData(array('message' => '', 'name' => '',
				 'description' => Yii::t('strings','Gracias por suscribirse.')));

				$mail->setFrom('info@goldenlionarg.com', 'Golden Lion Consulting');
			
				$mail->setTo($_POST['email']);
				$mail->setSubject(Yii::t('strings','Suscripción Golden Lion Consulting.'));

				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias...');
				} else {
					//echo $arraycontacto;
					echo $mail->getError();
					Yii::app()->user->setFlash('error','Error : '.$mail->getError());
				}
				
				$this->refresh();

		}
	}


	
	/**
	 * Displays the contact page
	 */
	public function actionContact()	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
		    	$this->redirect(Yii::app()->homeUrl.'admin/home');
		 
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		//$this->redirect(Yii::app()->homeUrl);
		$this->redirect(Yii::app()->homeUrl.'site/login');
	}

	public function actionLLenarMapa() {echo $this->renderPartial('_mapHome');}

	public function actionMostrarMapaAjax($idTipo,$idCondicion,$idLocalidad) {
		sleep(1);
		echo $this->renderPartial('_mapaiframe');
	}

	public function actionMostrarResultadosAjax($idTipo,$idCondicion,$idLocalidad) {
		sleep(1);
		echo $this->renderPartial('_propiedades');
	}

	public function actionMostrarResultadosTodosAjax() {
		sleep(1);
		echo $this->renderPartial('_propiedades');
	}



	
}