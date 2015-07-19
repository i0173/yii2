<?php

namespace expsys\yii2\helpers;

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
	 * @return array Новый массив с добавленным элементом
	 */

	public static function push(array & $array, $element)
	{
	}
}