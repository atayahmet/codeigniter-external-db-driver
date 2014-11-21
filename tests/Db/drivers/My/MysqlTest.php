<?php

namespace Db;

use \Db\Query as DB;

class MysqlTest extends \PHPUnit_Framework_TestCase {
	public function testInsert()
	{
		// ilk senaryomuz tabloya yeni kay�t olu�turma
		// kullan�c� tablosuna bir yeni �ye ekliyoruz ve ard�n etkilenen kay�t say�s�n�
		// UnitTest'e g�nderiyoruz
		DB::insert('members',
			array(
			'name' 	=> 'Ahmet',
			'age'	=> 18
			)
		);

		// sonu� istedi�imiz gibimi kontrol ediyoruz.
		$this->assertGreaterThan(0, DB::insert_id());
	}

	public function testUpdate()
	{
		// ikinci senaryomuz update metodu.
		// Tablodaki ilk kayd� guncelleyece�iz.
		// Sonras�nda tekrar etkilenen sat�r say�s� alaca��z.
		$result = DB::select('*')->order_by('id','asc')->get('members');
		var_dump($result->result());
	
	}
}
