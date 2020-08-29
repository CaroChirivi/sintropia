<?php 

	use Illuminate\Support\Facades\DB;

    function obtenerPuesto($cedula){
    	$p = DB::select("SELECT obtener_puesto('" . $cedula . "')");
      Log::info($p);

        $postgresStr = trim($p[0]->obtener_puesto,'{}');
        $elmts = explode(',',$postgresStr);
        
        if($elmts[0] == 'NULL')
        	return null;
        else{
            $puesto = trim($elmts[3],'""');
            $pd = explode(':',$puesto);
            $puesto = [
                     'departamento' => $elmts[0],
                      'municipio' => $elmts[1],
                      'zona' => $elmts[2],
                      'puesto' => $pd[0],
                      'direccion' => $pd[1],
                      'mesa' => $elmts[4]
            ]; 

        	return $puesto;
        }
    }
?>
