<?php

namespace Expsys\Yii2\Helpers;

/**
 * @brief Вспомогательный класс для работы с датой-временем.
 */

class DateTimeHelper
{
	/**
	 * @brief Формат даты.
	 */

	const FORMAT_DATE = 'd.m.Y';

	/**
	 * @brief Формат даты-времени.
	 */

	const FORMAT_DATETIME = 'd.m.Y H:i:s';

	/**
	 * @brief Формат даты-времени, используемый по-умолчанию.
	 */

	const FORMAT_DEFAULT = self::FORMAT_DATE;

	/**
	 * @brief Формат даты-времени в формате ISO 8601.
	 */

	const FORMAT_ISO8601 = 'c';

	/**
	 * @brief Возвращает дату-время $date в формате $format.
	 * @param string $date Дата-время
	 * @param string $format Формат даты-времени
	 * @retur string
	 */

	public static function format($date, $format = self::FORMAT_DEFAULT)
	{
		return date($format, strtotime($date));
	}

	/**
	 * @brief Возвращает метку времени в формате $format.
	 * @param string $format Формат метки времени
	 * @return string
	 * @see \expsys\yii2\helpers\DateTimeHelper::FORMAT_DEFAULT
	 */

	public static function timestamp($format = self::FORMAT_DEFAULT)
	{
		return date($format);
	}
}