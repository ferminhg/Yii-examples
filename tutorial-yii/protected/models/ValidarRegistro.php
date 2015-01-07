<?php


class ValidarRegistro extends CFormModel
{

	public $nombre;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('nombre', 'required', 'message' => 'Este campo es obligatorio'),
			array('nombre', 'match', 'pattern' => '/^[a-zA-z\s]+$/', 'message' => 'Solo se aceptan letras y espacios en blanco'),
			array('nombre', 'length', 'min' => 5, 'tooShort' => 'Minimo 5 caracteres',
									   'max' => 50, 'tooLong' => 'Máximo 50 caracteres'),	
		);
	}

}