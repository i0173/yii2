<?php

namespace expsys\yii2\base;

/**
 * @brief Расширение стандартного класса.
 * @see \yii\base\Component
 */

abstract class Component extends \yii\base\Component
{
	/**
	 * @brief Фабричный метод.
	 * @param array $config Конфигурационный массив
	 * @return \vendor\application\base\Component
	 */

	public static function instance(array $config = array())
	{
		return new static($config);
	}
}