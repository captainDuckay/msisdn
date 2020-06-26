<?php

declare(strict_types=1);

namespace captainDuckay\msisdn;

/**
 * Class CellPhone
 * @author Nicki Bo Otte <duckay@live.com>
 */
class DK {

	/**
	 * Check if the msisdn is a reserved CellPhone type
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function checkIfReservedForCellPhone( string $msisdn ): bool {

		DK::checkIsValid( $msisdn );

		switch( $msisdn[0] ):
			case '3':
				switch( $msisdn[1] ):
					case '4';
						switch( $msisdn[2] ):
							case '2';
							case '4';
							case '5';
							case '6';
							case '7';
							case '8';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '5';
						switch( $msisdn[2] ):
							case '6';
							case '7';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '6';
						switch( $msisdn[2] ):
							case '2';
							case '5';
							case '6';
								return true;
							default:
								return false;
						endswitch;
					case '8';
						switch( $msisdn[2] ):
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '9';
						switch( $msisdn[2] ):
							case '8';
								return true;
							default:
								return false;
						endswitch;
					default:
						return false;
				endswitch;
				break;
			case '4':
				switch( $msisdn[1] ):
					case '4':
					case '3';
						switch( $msisdn[2] ):
							case '1';
								return true;
							default:
								return false;
						endswitch;
					case '6';
						switch( $msisdn[2] ):
							case '2';
							case '6';
							case '8';
								return true;
							default:
								return false;
						endswitch;
					case '7';
						switch( $msisdn[2] ):
							case '2';
							case '4';
							case '6';
							case '8';
								return true;
							default:
								return false;
						endswitch;
					case '8';
						switch( $msisdn[2] ):
							case '5';
							case '6';
							case '8';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '9';
						switch( $msisdn[2] ):
							case '3';
							case '4';
							case '5';
							case '6';
							case '8';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					default:
						return false;
				endswitch;
				break;
			case '5':
				switch( $msisdn[1] ):
					case '4':
						switch( $msisdn[2] ):
							case '2';
							case '3';
							case '5';
								return true;
							default:
								return false;
						endswitch;
					case '5';
						switch( $msisdn[2] ):
							case '1';
							case '2';
							case '6';
								return true;
							default:
								return false;
						endswitch;
					case '7';
						switch( $msisdn[2] ):
							case '1';
							case '2';
							case '3';
							case '4';
							case '7';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '8';
						switch( $msisdn[2] ):
							case '4';
							case '6';
							case '7';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '9';
						switch( $msisdn[2] ):
							case '7';
							case '8';
								return true;
							default:
								return false;
						endswitch;
					default:
						return false;
				endswitch;
				break;
			case '6':
				switch( $msisdn[1] ):
					case '2':
						switch( $msisdn[2] ):
							case '7';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '4';
						switch( $msisdn[2] ):
							case '1';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					case '5';
						switch( $msisdn[2] ):
							case '8';
								return true;
							default:
								return false;
						endswitch;
					case '6';
						switch( $msisdn[2] ):
							case '2';
							case '3';
							case '4';
							case '5';
							case '7';
								return true;
							default:
								return false;
						endswitch;
					case '9';
						switch( $msisdn[2] ):
							case '2';
							case '4';
							case '7';
								return true;
							default:
								return false;
						endswitch;
					default:
						return false;
				endswitch;
				break;
			case '7':
				switch( $msisdn[1] ):
					case '7':
						switch( $msisdn[2] ):
							case '1';
							case '2';
								return true;
							default:
								return false;
						endswitch;
					case '8';
						switch( $msisdn[2] ):
							case '2';
							case '3';
							case '5';
							case '6';
							case '8';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					default:
						return false;
				endswitch;
				break;
			case '8':
				switch( $msisdn[1] ):
					case '2':
						switch( $msisdn[2] ):
							case '6';
							case '7';
							case '9';
								return true;
							default:
								return false;
						endswitch;
					default:
						return false;
				endswitch;
				break;
			default:
				return false;
		endswitch;

	}

	/**
	 *
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	private static function checkIsValid( string $msisdn ): bool {

		return (DK::checkIfCellPhone( $msisdn ) || DK::checkIfLandLine( $msisdn ));

	}

	/**
	 * Check if the msisdn is a CellPhone type
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function checkIfCellPhone( string $msisdn ): bool {

		switch( $msisdn[0] ):
			case '9':
				switch( $msisdn[1] ):
					case '1';
					case '2';
					case '3';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '8':
			case '7':
				switch( $msisdn[1] ):
					case '1';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '6':
			case '3':
				switch( $msisdn[1] ):
					case '0';
					case '1';
						return true;
					default:
						return false;
				endswitch;

				break;
			case '5':
				switch( $msisdn[1] ):
					case '0';
					case '1';
					case '2';
					case '3';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '4':
				switch( $msisdn[1] ):
					case '0';
					case '1';
					case '2';
						return true;
					default:
						return false;
				endswitch;

				break;
			case '2':
				return true;
				break;

			default:
				return false;
		endswitch;

	}

	/**
	 * Check if the msisdn is a LandLine type
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function checkIfLandLine( string $msisdn ): bool {

		switch( $msisdn[0] ):
			case '3':
				switch( $msisdn[1] ):
					case '2';
					case '3';
					case '4';
					case '5';
					case '6';
					case '8';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '4':
				switch( $msisdn[1] ):
					case '3';
					case '4';
					case '5';
					case '6';
					case '7';
					case '8';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '5':
				switch( $msisdn[1] ):
					case '4';
					case '5';
					case '6';
					case '7';
					case '8';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '6':
				switch( $msisdn[1] ):
					case '2';
					case '3';
					case '4';
					case '5';
					case '6';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '7':
				switch( $msisdn[1] ):
					case '0';
					case '2';
					case '3';
					case '4';
					case '5';
					case '6';
					case '7';
					case '8';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '8':
				switch( $msisdn[1] ):
					case '2';
					case '6';
					case '7';
					case '8';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '9':
				switch( $msisdn[1] ):
					case '6';
					case '7';
					case '8';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;

			default:
				return false;
		endswitch;


	}

	/**
	 * Check if the msisdn is a CellPhone type
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function checkIfReserved( string $msisdn ): bool {

		switch( $msisdn[0] ):
			case '0':
				switch( $msisdn[1] ):
					case '1';
					case '2';
					case '3';
					case '4';
					case '5';
					case '6';
					case '7';
					case '8';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '1':
				switch( $msisdn[1] ):
					case '3';
					case '4';
					case '5';
					case '7';
					case '9';
						return true;
					default:
						return false;
				endswitch;
				break;
			case '6':
				switch( $msisdn[1] ):
					case '7';
					case '8';
						return true;
					default:
						return false;
				endswitch;

				break;

			case '8':
				switch( $msisdn[1] ):
					case '3';
					case '4';
					case '5';
						return true;
					default:
						return false;
				endswitch;

			case '9':
				switch( $msisdn[1] ):
					case '4';
					case '5';
						return true;
					default:
						return false;
				endswitch;

				break;
			default:
				return false;
		endswitch;

	}

	/**
	 * Check if the msisdn is a cost free number
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function checkIfCostFree( string $msisdn ): bool {

		switch( $msisdn[0] ):
			case '8':
				switch( $msisdn[1] ):
					case '0';
						return true;
					default:
						return false;
				endswitch;
				break;
			default:
				return false;
		endswitch;

	}

	/**
	 * Check if the msisdn is a overtaxed number
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function checkIfOvertaxed( string $msisdn ): bool {

		switch( $msisdn[0] ):
			case '9':
				switch( $msisdn[1] ):
					case '0';
						return true;
					default:
						return false;
				endswitch;
				break;
			default:
				return false;
		endswitch;

	}

	/**
	 * Check if the msisdn is international prefixed
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 *
	 * @param string $msisdn
	 *
	 * @return bool
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function checkIfInternationalPrefixed( string $msisdn ): bool {

		switch( $msisdn[0] ):
			case '+':
				return true;
			case '0':
				switch( $msisdn[1] ):
					case '0';
						return true;
					default:
						return false;
				endswitch;
				break;
			default:
				return false;
		endswitch;

	}

	/**
	 * Generate a valid random danish cellPhoneNumber
	 * Made with the 2016 standards from ENS
	 * https://ens.dk/ansvarsomraader/telefoni/numre/den-danske-nummerplan
	 * @return DK
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function generateCellPhoneNumber(): string {

		$firstDigit = number_format( rand( 2, 9 ) );
		switch( $firstDigit ):
			case '9':
				$secondDigit = number_format( rand( 1, 3 ) );
				break;
			case '8':
			case '7':
				$secondDigit = 1;
				break;
			case '6':
			case '3':
				$secondDigit = number_format( rand( 0, 1 ) );
				break;
			case '5':
				$secondDigit = number_format( rand( 0, 3 ) );
				break;
			case '4':
				$secondDigit = number_format( rand( 0, 2 ) );
				break;
			case '2':
				$secondDigit = number_format( rand( 0, 9 ) );
				break;

			default:
				die( $firstDigit . ' is not allowed as the first digit of cellPhoneNumber' );
		endswitch;

		$thirdDigit   = number_format( rand( 0, 9 ) );
		$forthDigit   = number_format( rand( 0, 9 ) );
		$fifthDigit   = number_format( rand( 0, 9 ) );
		$sixthDigit   = number_format( rand( 0, 9 ) );
		$seventhDigit = number_format( rand( 0, 9 ) );
		$eighthDigit  = number_format( rand( 0, 9 ) );

		return (
			$firstDigit .
			$secondDigit .
			$thirdDigit .
			$forthDigit .
			$fifthDigit .
			$sixthDigit .
			$seventhDigit .
			$eighthDigit
		);
	}

	/**
	 *
	 * @return DK
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	public static function generateLandLineNumber(): string {

		$firstDigit = number_format( rand( 3, 9 ) );
		switch( $firstDigit ):
			case '9':
				$secondDigit = number_format( rand( 6, 9 ) );
				break;
			case '8':
				$secondDigit = number_format( (rand( 0, 1 ) == 1 ? rand( 6, 9 ) : 8) );
				break;
			case '7':
				$secondDigit = number_format( (rand( 0, 1 ) == 1 ? rand( 2, 9 ) : 0) );
				break;
			case '6':
				$secondDigit = number_format( (rand( 0, 1 ) == 1 ? rand( 2, 6 ) : 9) );
				break;
			case '5':
				$secondDigit = number_format( rand( 4, 9 ) );
				break;
			case '4':
				$secondDigit = number_format( rand( 3, 9 ) );
				break;
			case '3':
				$secondDigit = number_format( (rand( 0, 1 ) == 1 ? rand( 2, 6 ) : rand( 8, 9 )) );
				break;

			default:
				die( $firstDigit . ' is not allowed as the first digit of cellPhoneNumber' );
		endswitch;

		$thirdDigit   = number_format( rand( 0, 9 ) );
		$forthDigit   = number_format( rand( 0, 9 ) );
		$fifthDigit   = number_format( rand( 0, 9 ) );
		$sixthDigit   = number_format( rand( 0, 9 ) );
		$seventhDigit = number_format( rand( 0, 9 ) );
		$eighthDigit  = number_format( rand( 0, 9 ) );

		return (
			$firstDigit .
			$secondDigit .
			$thirdDigit .
			$forthDigit .
			$fifthDigit .
			$sixthDigit .
			$seventhDigit .
			$eighthDigit
		);

	}

	/**
	 * Removes 0045 and +45 prefix from msisdn
	 *
	 * @param string $msisdn
	 *
	 * @return string
	 * @author Nicki Bo Otte <duckay@live.com>
	 */
	private static function removeCountryCode( string $msisdn ): string {

		$msisdn = preg_replace( '/^\+45/m', '', $msisdn );
		return preg_replace( '/^0045/m', '', $msisdn );

	}

}