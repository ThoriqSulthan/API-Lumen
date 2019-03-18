<?php

	namespace App;

	Use Illuminate\Database\Eloquent\Model;

	class Kelas extends Model {
		public $table = 't_kelas';

		protected $fillable = [
			'nama_kelas', 'jurusan'
		];
	}
?>