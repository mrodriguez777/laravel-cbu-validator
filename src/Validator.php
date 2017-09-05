<?php namespace Mrodriguez777\CbuValidator;


class Validator
{

    public function __construct() {}


    public function isValid($cbuNumber)
    {

        if (!$this->validFormat($cbuNumber))
				{
            return false;
        }

      	return $this->validate($cbuNumber);

    }


		private function validFormat($cbuNumber)
		{
			return preg_match('/[0-9]{22}/', $cbuNumber);
		}

    private function validate($cbuNumber)
    {

        // Perform simple test on invalid bank_id
        if(!CBU::bankExists($cbuNumber))
				{
            return false;
        }


        // Check digits
        return $this->verifyDigits($cbuNumber);
    }



		private function verifyDigits($cbuNumber)
		{
			$arr = str_split($cbuNumber);

			if ($arr[7] != $this->getVerifyDigit($arr, 0, 6))
			{
				return false;
			}

			if ($arr[21] != $this->getVerifyDigit($arr, 8, 20))
			{
				return false;
			}
			return true;
		}

    private function getVerifyDigit($num, $initPos, $finalPos)
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

}
