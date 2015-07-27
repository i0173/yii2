<?php

namespace Expsys\Yii2\Helpers;

/**
 * @brief Хелпер утверждений.
 */

class AssertHelper
{
	/**
	 * @brief Возвращает true, если переменная $var является массивом,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @return bool
	 */

	public static function isArray($var)
	{
		return is_array($var);
	}

	/**
	 * @brief Возвращает true, если переменная $var является булевым,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @return bool
	 */

	public static function isBool($var)
	{
		return is_bool($var);
	}

	/**
	 * @brief Возвращает true, если переменная $var является числом с плавающей точкой,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @return bool
	 */

	public static function isFloat($var)
	{
		return is_float($var);
	}

	/**
	 * @brief Возвращает true, если переменная $var является целым числом,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @return bool
	 */

	public static function isInt($var)
	{
		return is_integer($var);
	}

	/**
	 * @brief Возвращает true, если переменная $var является null,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @return bool
	 */

	public static function isNull($var)
	{
		return $var === null;
	}

	/**
	 * @brief Возвращает true, если переменная $var является числом,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @return bool
	 */

	public static function isNumeric($var)
	{
		return is_numeric($var);
	}

	/**
	 * @brief Возвращает true, если переменная $var является строкой,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @return bool
	 */

	public static function isString($var)
	{
		return is_string($var);
	}

	/**
	 * @brief Возвращает true, если переменная $var является экземпляром $expected,
	 * false - в ином случае.
	 * @param mixed $var Проверяемая переменная
	 * @param object | string $expected Эталонное значение
	 * @return bool
	 */

	public static function isInstanceOf($var, $expected)
	{
		return $var instanceof $expected;
	}
}