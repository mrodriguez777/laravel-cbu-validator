<?php namespace Mrodriguez777\CbuValidator

use Banks;

class Cbu
{

	public static function isValid($cbu)
	{

		if (!preg_match('/[0-9]{22}/', $cbu))
		{
			return false;
		}


		$arr = str_split($cbu);

		if ($arr[7] != self::getVerifyDigit($arr, 0, 6))
		{
			return false;
		}

		if ($arr[21] != self::getVerifyDigit($arr, 8, 20))
		{
			return false;
		}

		return self::bankExists($cbu);
	}


	private static function getVerifyDigit($num, $initPos, $finalPos)
	{
		$ponderador = [3,1,7,9];
		$sum = 0;
		$j = 0;
		for ($i = $finalPos; $i >= $initPos; $i--)
		{
			$sum = $sum + ($num[$i] * $ponderador[$j % 4]);
			$j++;
		}
		return (10 - $sum % 10) % 10;
	}

	
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
