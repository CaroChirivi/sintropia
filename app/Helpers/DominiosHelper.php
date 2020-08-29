<?php 

	use Illuminate\Support\Facades\DB;
  use Illuminate\Support\Facades\Log;

  use Referidos\Dominio;
  use Referidos\Dominios;

  use Referidos\Selects;

    function getDescripcion($dominio, $codigo){
      $descripcion = Dominio::where('dominio', $dominio)
                    ->where('codigo', $codigo)
                    ->select('nombre')
                    ->first();
      if ($descripcion != null) {
        return $descripcion->nombre;
      }
        return null;
    }

    function dominio($codigo) {
        $selects = DB::table('dominios')
          ->join('campos', 'dominios.dominio', '=', 'campos.dominio')
          ->select('campos.dominio as campo', 'campos.nombre', 'dominios.codigo', 'dominios.nombre')
          ->where([['campos.dominio', '=', $codigo]])
          ->orderBy('dominios.nombre', 'asc')
          ->get();

         return $selects;
    }

    function rangoDominios($min, $max) {
        $selects = DB::table('dominios')
          ->join('campos', 'dominios.dominio', '=', 'campos.dominio')
          ->select('campos.dominio as campo', 'campos.nombre', 'dominios.codigo', 'dominios.nombre')
          ->where([['campos.dominio', '>=', $min], ['campos.dominio', '<=', $max]])
          ->orderBy('dominios.nombre', 'asc')
          ->get();

         return $selects;
    }

    function getDominios(){
      $selects = Selects::select('selects.select_id as id', 'selects.campo', 'dominioss.descripcion', 'dominioss.alias')
      ->join('dominioss', 'dominioss.dominio', '=', 'selects.dominio')
      ->orderBy('selects.campo', 'asc')
      ->orderBy('dominioss.descripcion', 'asc')
      ->get();

      return $selects;                          
    }

    function getCampo($campo){
      $selects = Selects::select('selects.select_id as id', 'selects.campo', 'dominioss.descripcion', 'dominioss.alias')
      ->join('dominioss', 'dominioss.dominio', '=', 'selects.dominio')
      ->where('selects.campo', $campo)
      ->orderBy('dominioss.descripcion', 'asc')
      ->get();

      return $selects;  
    }

    function todosDominios() {
        $selects = DB::table('dominios')
          ->join('campos', 'dominios.dominio', '=', 'campos.dominio')
          ->select('campos.dominio as campo', 'campos.descripcion', 'dominios.codigo', 'dominios.descripcion')
          ->where([['dominios.estado', '=', ESTADOACTIVO], ['campos.estado', '=', ESTADOACTIVO]])
          ->orderBy('dominios.descripcion', 'asc')
          ->get();

         return $selects;
    }
?>
