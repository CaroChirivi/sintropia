<?php
    define('VERSION', 'v1.0');

    /*departamentos*/
    define('CODIGO_DEPARTAMENTO', '50');
    define('DEP_META', 'META');

    /*tipo vias*/
    define('INVASION', 13);
    define('FINCA', 20);
    define('VIA_CASA', 7);
    define('VIA_CASA_LOTE', 18);
    define('VIA_ETAPA', 17);
    define('VIA_LOTE', 14);
    define('VIA_MANZANA', 12);
    define('VIA_SUPER_MANZANA', 19);
    define('VIA_SIN_INFO', 10);
    define('VIA_TORRE', 15);
    define('ROL_LIDER', '1');

    /*estado beneficario y representante y/o cualquier registro que tenga un estado boleano activo o inactivo*/
    define('ENABLED', '1');
    define('DISABLED', '0');

    /*estado beneficario y representante estado boleano activo o inactivo*/
    define('HABILITADO', true);
    define('INHABILITADO', false);
    define('NO_VOTA', 'No se encuentra registrado en el departamento del Meta o tiene alguna inhabilidad');
    define('EDAD_MINIMA', 5);


    define('ESTADISTICA_DEFAULT', '0');

    /*tipos de documentos*/
    define('REGISTRO_CIVIL', 'U');
    define('TARJETA_IDENTIDAD', 'T');
    define('CEDULA', 'C');

    define('OBSERVACION_BUENA', true);
    define('OBSERVACION_MALA', false);
    define('MSJ_DESACTIVADO', 'REPRESENTANTE DESACTIVADO EN LA BASE DE DATOS');
    define('MSJ_ACTIVADO', 'REPRESENTANTE ACTIVADO EN LA BASE DE DATOS');

    /*tipos de ayudas*/
    define('KIT_ESCOLAR', 41);
    define('KIT_MAXIMO', 4);
    define('BACHILLER', 1);

    /*roles de usuario*/
    if (!defined('ROL_REGISTRO'))define('ROL_REGISTRO', '3');
?>