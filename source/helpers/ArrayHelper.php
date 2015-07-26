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
	 * @brief Возвращает true, если переменная $var является массивом, false - в ином случае.
	 * @param mixed $var Проверяемая переменная.
	 * @return bool
	 */

	public static function isArray($var)
	{
		return is_array($var);
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