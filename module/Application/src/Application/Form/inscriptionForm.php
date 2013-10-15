<?php

use Zend\Form\Form;
class inscriptionForm extends Form{
	public function __construct($options = null){
		parent::__construct();
		$this->setName('inscription');

		$this->SetAttribute('method', 'get');
		$this->add(array(
			'name' => 'nom',
			'attribute' => array(
				'type' => 'text',
				'label' => 'nom',
			),
		));
	
	}
}