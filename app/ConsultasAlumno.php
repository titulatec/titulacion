<?php
class ConsultasAlumno
{
	public static function all_alumnos()
	{
		return DB::table('alumnos')->get();
	}
}