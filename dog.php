<?php

  // Class,Object
  // Class　データと関数をセットで持っている変数
  // プロパティ：データ
  // メソッド：処理の塊、関数

  class Dog
	{
		public $name = 'Hachi';

		public function bark(){
			echo "ワン";
		}
	}		
  $dog = new Dog(); //オブジェクトを生成する
  // $dog->bark();

  echo $dog->name;
  echo "\n";
  
