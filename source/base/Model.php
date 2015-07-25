<?php

namespace Expsys\Yii2\Base;

/**
 * @brief Расширение стандартного класса.
 * @see \yii\base\Model
 */

abstract class Model extends \yii\base\Model
{
	/**
	 * @brief Фабричный метод.
	 * @param array $config Конфигурационный массив
	 * @return \vendor\application\base\Model
	 */

	public static function instance(array $config = array())
	{
		return new static($config);
	}
}