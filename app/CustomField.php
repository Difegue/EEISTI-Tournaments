<?php namespace App;

use Illuminate\Support\Facades\DB;

/*
* GE SUI REMI VERNAY ET JE NIK TON PORJE
*/

class CustomField {

	static function create($cfield) {
		DB::insert('INSERT INTO CustomFields(id_custom_field, number_of_fields, field_1, field_2, field_3, field_4, field_5, field_6, field_7, field_8, name_of_field) VALUES (:id_custom_field, :number_of_fields, :field_1, :field_2, :field_3, :field_4, :field_5, :field_6, :field_7, :field_8, :name_of_field)', $cfield);
		$id = DB::getPdo()->lastInsertId();
		return $id;
	}

	static function get($id) {
		$cfield = DB::select('SELECT id_custom_field,* FROM CustomFields WHERE id_custom_field=?', [$id])[0];
		return $cfield;
	}

	static function update($cfield) {
		DB::update('UPDATE CustomFields SET number_of_fields=:number_of_fields, field_1=:field_1, field_2=:field_2, field_3=:field_3, field_4=:field_4, field_5=:field_5, field_6=:field_7, field_8=:field_8, name_of_field=:name_of_field WHERE id_custom_field=:id_custom_field', $cfield);
		return 1;
	}

	static function delete($id) {
		return DB::delete('DELETE FROM CustomFields WHERE rowid=?', [$id]);
	}

	static function getAll() {
		$games = DB::select('SELECT * FROM CustomFields ORDER BY id_custom_field', []);
		return $games;
	}

	static function purge($id) {
		return DB::delete('DELETE FROM CustomFields WHERE id_custom_field=?', [$id]);
	}
}

?>