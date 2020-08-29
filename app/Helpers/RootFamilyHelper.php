<?php 

  use Referidos\Referido;

    function getReferidoNombre($doc){
      $referido = Referido::where('nro_doc', $doc)
                    ->select('primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido')
                    ->first();
      if ($referido != null) {
        return $referido->nombre;
      }
        return null;
    }

    function getLider($id){
      $referido = Referido::where('id', $id)
                    ->select('primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido')
                    ->first();
      if ($referido != null) {
        return $referido->nombre;
      }
        return null;
    }

    function getReferidoId($doc){
      $referido = Referido::where('nro_doc', $doc)
                    ->select('id')
                    ->first();
      if ($referido != null) {
        return $referido->id;
      }
        return null;
    }
?>
