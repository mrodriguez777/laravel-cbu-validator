<?php namespace Mrodriguez777\CbuValidator;

class Banks
{
	protected $banksarray = [
      '005' => 'A.B.N. Amro Bank N.V.',
      '007' => 'Banco De Galicia Y Buenos Aires S.A.',
      '011' => 'Banco De La Nación Argentina',
      '014' => 'Banco De La Provincia De Buenos Aires',
      '015' => 'ICBC Argentina S.A.',
      '016' => 'Citibank N.A.',
      '017' => 'Bbva Banco Francés S.A.',
      '018' => 'The Bank Of Tokyo - Mitsubishi Ufj, Ltd.',
      '020' => 'Banco De La Provincia De Cordoba S.A.',
      '027' => 'Banco Supervielle S.A.',
      '029' => 'Banco De La Ciudad De Buenos Aires',
      '034' => 'Banco Patagonia S.A.',
      '044' => 'Banco Hipotecario S.A.',
      '045' => 'Banco De San Juan S.A.',
      '046' => 'Banco Do Brasil S.A.',
      '060' => 'Banco Del Tucuman S.A.',
      '065' => 'Banco Municipal De Rosario',
      '072' => 'Banco Santander Rio S.A.',
      '079' => 'Banco Regional De Cuyo S.A.',
      '083' => 'Banco Del Chubut S.A.',
      '086' => 'Banco De Santa Cruz S.A.',
      '093' => 'Banco De La Pampa Sociedad De Economía Mixta',
      '094' => 'Banco De Corrientes S.A.',
      '097' => 'Banco Provincia Del Neuquén S.A.',
      '147' => 'Banco B. I. Creditanstalt S.A.',
      '150' => 'HSBC Bank Argentina S.A.',
      '165' => 'J P Morgan Chase Bank, National Association (Sucursal Buenos Aires)',
      '191' => 'Banco Credicoop Cooperativo Limitado',
      '198' => 'Banco De Valores S.A.',
      '247' => 'Banco Roela S.A.',
      '254' => 'Banco Mariva S.A.',
      '259' => 'Banco Itau Buen Ayre S.A.',
      '262' => 'Bank Of America, National Association',
      '266' => 'BNP Paribas',
      '268' => 'Banco Provincia De Tierra Del Fuego',
      '269' => 'Banco De La Republica Oriental Del Uruguay',
      '277' => 'Banco Saenz S.A.',
      '281' => 'Banco Meridian S.A.',
      '285' => 'Banco Macro S.A.',
      '293' => 'Banco Mercurio S.A.',
      '295' => 'American Express Bank Ltd. S.A.',
      '299' => 'Banco COMAFI S.A.',
      '300' => 'Banco De Inversion Y Comercio Exterior S.A.',
      '301' => 'Banco Piano S.A.',
      '303' => 'Banco Finansur S.A.',
      '305' => 'Banco Julio S.A.',
      '306' => 'Banco Privado De Inversiones S.A.',
      '309' => 'Nuevo Banco De La Rioja S.A.',
      '310' => 'Banco Del Sol S.A.',
      '311' => 'Nuevo Banco Del Chaco S.A.',
      '312' => 'M.B.A. Banco De Inversiones S.A.',
      '315' => 'Banco De Formosa S.A.',
      '319' => 'Banco CMF S.A.',
      '321' => 'Banco De Santiago Del Estero S.A.',
      '322' => 'Nuevo Banco Industrial De Azul S.A.',
      '325' => 'Deutsche Bank S.A.',
      '330' => 'Nuevo Banco De Santa Fe S.A.',
      '331' => 'Banco Cetelem Argentina S.A.',
      '332' => 'Banco De Servicios Financieros S.A.',
      '335' => 'Banco Cofidis S.A.',
      '336' => 'Banco Bradesco Argentina S.A.',
      '338' => 'Banco De Servicios Y Transacciones S.A.',
      '339' => 'RCI Banque',
      '340' => 'Bacs Banco De Credito Y Securitizacion S.A.',
      '341' => 'Banco Masventas S.A.',
      '386' => 'Nuevo Banco De Entre Rios S.A.',
      '388' => 'Nuevo Banco Bisel S.A.',
      '389' => 'Banco Columbia S.A.',
      '415' => 'MULTIFINANZAS Compañia Financiera S.A.',
      '426' => 'Banco Banco BICA S.A.',
      '431' => 'Banco COINAG S.A.',
      '432' => 'Banco De COMERCIO S.A.',
      '44059' => 'Ford Credit Compañia Financiera S.A.',
      '44077' => 'Compañia Financiera Argentina S.A.',
      '44088' => 'Volkwagen Financial Services CIA.FIN.S.A',
      '44090' => 'CORDIAL Compañía Financiera S.A.',
      '44092' => 'FCA Compañia Financiera S.A.',
      '44093' => 'GPAT Compañia Financiera S.A.',
      '44094' => 'Mercedes-Benz Compañía Financiera Argent',
      '44095' => 'ROMBO Compañía Financiera S.A.',
      '44096' => 'JOHN DEERE Credit Compañía Financiera S.',
      '44098' => 'PSA Finance Argentina Compañía Financier',
      '44099' => 'TOYOTA Compañía Financiera De Argentina',
      '44100' => 'FINANDINO Compañia Financiera S.A.',
      '45056' => 'MONTEMAR Compañia Financiera S.A.',
      '45072' => 'MULTIFINANZAS Compañia Financiera S.A.',
      '65203' => 'Caja De Credito "CUENCA" Cooperativa LIM'
		];

	protected $accountTypes = [
		'007' => ['CA' => ['30', '20'], 'CC' => []],
		'011' => ['CA' => ['30'], 'CC' => ['20']],
		'017' => ['CA' => ['40'], 'CC' => ['20']],
		'020' => ['CA' => ['11'], 'CC' => ['01']],
		'027' => ['CA' => ['20'], 'CC' => ['10']],
		'029' => ['CA' => ['10'], 'CC' => ['00']],
		'034' => ['CA' => ['08'], 'CC' => ['00']],
		'044' => ['CA' => ['40', '02'], 'CC' => ['01']],
		'060' => ['CA' => ['40'], 'CC' => ['30']],
		'065' => ['CA' => ['02'], 'CC' => []],
		'072' => ['CA' => ['30', '88'], 'CC' => ['20']],
		'083' => ['CA' => ['31', '33', '38', '34', '42', '40', '41', '44'], 'CC' => []],
		'086' => ['CA' => ['02'], 'CC' => []],
		'093' => ['CA' => ['21', '20'], 'CC' => ['10']],
		'094' => ['CA' => ['66', '60', '70', '72', '76'], 'CC' => ['10']],
		'097' => ['CA' => ['55', '60', '51', '62', '63'], 'CC' => []],
		'150' => ['CA' => ['00'], 'CC' => []],
		'259' => ['CA' => ['20'], 'CC' => ['10']],
		'268' => ['CA' => ['11'], 'CC' => []],
		'285' => ['CA' => ['40'], 'CC' => ['30']],
		'299' => ['CA' => ['01', '02', '04',  '05', '06', '07', '09', '10', '11', '16'], 'CC' => []],
		'309' => ['CA' => ['02'], 'CC' => []],
		'311' => ['CA' => ['11'], 'CC' => []],
		'315' => ['CA' => ['02'], 'CC' => []],
		'321' => ['CA' => ['50'], 'CC' => ['30']],
		'322' => ['CA' => ['27', '29'], 'CC' => []],
		'330' => ['CA' => ['20', '25'], 'CC' => []],
		'386' => ['CA' => ['03'], 'CC' => ['05', '01']],
		'389' => ['CA' => ['40'], 'CC' => []],
	];
		public function exists($id)
		{
			return array_key_exists($id, $this->getBankList());
		}

		public function getBankNameById($id)
		{
			if($this->exists())
			{
				return $this->getBankList($id);
			}

			return false;
		}

		public function getBankList()
		{
			return $this->banksarray;
		}

		public function getAccountTypes()
		{
			return $this->accountTypes;
		}
}
?>
