<?php

namespace Expsys\Yii2\Helpers;
use \Closure;

/**
 * @brief Расширение стандартного класса.
 * @see \yii\helpers\ArrayHelper
 */

class ArrayHelper extends \yii\helpers\ArrayHelper
{
	/**
	 * @brief Обходит каждое значение массива $array, передавая его
	 * в $callback-функцию. Если $callback-функция возвращает true,
	 * данное значение из $array возвращается в результирующий массив.
	 * @param array $array Целевой массив
	 * @param Closure $callback Пользовательская функция
	 * @param int $flag Флаг определяющий какие аргументы передавать в $callback
	 * @return array Результирующий массив
	 */

	public static function filter(array $array, Closure $callback = null, $flag = 0)
	{
		return $callback ?
			array_filter($array, $callback, $flag) :
			array_filter($array);
	}

	/**
	 * @brief Возвращает true, если массив $array является пустым, false - в ином случае.
	 * @param array $array Целевой массив
	 * @param bool $strict Строкий и нестрогий метод проберки
	 * @return bool
	 */

	public static function isEmpty(array $array, $strict = true)
	{
		return static::isNotEmpty($array, $strict);
	}

	/**
	 * @brief Возвращает true, если массив $array не является пустым, false - в ином случае.
	 * @param array $array Целевой массив
	 * @param bool $strict Строкий и нестрогий метод проберки
	 * @return bool
	 */

	public static function isNotEmpty(array $array, $strict = true)
	{
		$callback = function($value) {
			return AssertHelper::isNumeric($value) ?
				true : (bool) $value;
		};

		return $strict ?
			(bool) static::filter($array, $callback) :
			(bool) static::filter($array);
	}

	/**
	 * @brief Добавляет элемент $element в массив $array.
	 * @param array $array Целевой массив
	 * @param mixed $element Добавляемый элемент
	 * @return void
	 */

	public static function push(array & $array, $element)
	{
		array_push($array, $element);
	}

	/**
	 * @brife Применяет пользовательскую функцию $callback
	 * ко всем элементам массива $array.
	 * @param array $array Целевой массив
	 * @param Closure $callback Пользовательская функция
	 * @param mixed $userdata Дополнительные данные, передаваемые в $callback
	 * @return bool Результат выполнения операции
	 */

	public static function walk(array & $array, Closure $callback, $userdata = null)
	{
		return array_walk($array, $callback, $userdata);
	}
}