<?php

namespace Andframe\Framework\Core;

class Model


{
    public function __construct()
    {
        echo 'я в модели';
    }

	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.


	// метод выборки данных
	public function get_data()
	{
		// todo
	} */
}