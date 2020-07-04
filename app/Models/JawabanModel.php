<?php
	namespace App\Models;
	use Illuminate\Support\Facades\DB;

	class JawabanModel{
		public static function get_all(){
			$jawaban = DB::table('jawaban')->get();
			return $jawaban;
		}
		public static function join(){
			$jawaban = DB::table('jawaban')->join('pertanyaan', 'jawaban.id_pertanyaan', '=', 'pertanyaan.id')->get();
			return $jawaban;
		}
		public static function create(){
			$pertanyaan = pertanyaan::pluck('judul','id_pertanyaan');
			return $pertanyaan; 
		}

		public static function save($data){
			unset($data["_token"]);
			$new_jawaban = DB::table('jawaban')->insert($data);
			return $new_jawaban;
		}
		
		public static function find_by_id($id){
			$jawaban = DB::table('jawaban')->where('id', $id)->first();
			return $jawaban;
		}

		public static function update($id, $request){
			$jawaban = DB::table('jawaban')
			->where('id', $id)
			->update(['judul'=>$request["judul"],
							'isi'=>$request["isi"],
							'tanggal_dibuat'=>$request["tanggal_dibuat"],
							'tanggal_diperbaharui'=>$request["tanggal_diperbaharui"]]);
		}
		public static function destroy($id){
			$deleted = DB::table('jawaban')->where('id', $id)->delete();
			return $deleted;
		}
	}
	
?>