<?php namespace Mrodriguez777\CbuValidator;


class Cbu extends Validator
{

	public static function getBankId($cbu)
	{
		return substr($cbu, 0, 3);
	}

	public static function bankExists($cbu)
	{
		return (new Banks())->exists(self::getBankId($cbu));
	}

	public static function getBankName($cbu)
	{
		return (new Banks())->getBankNameById(self::getBankId($cbu));
	}
}
