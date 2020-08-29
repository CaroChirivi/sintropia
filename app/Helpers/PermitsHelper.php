<?php 

  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Route;
  use Illuminate\Support\Facades\Log;

  use App\Menu;
  use App\Permit;

  // function getDirectos(){
  //   $usuario = Auth::user();
  //   $directos = Menu::select("menus.*")
  //           ->join('permisos', 'permisos.menu', '=', 'menus.menu')
  //           ->where('permisos.rol', '=', $usuario->rol)
  //           ->where('menus.directo', true)
  //           ->get();
  //   return $directos;
  // }

  function getQuickLinks(){
    $user = Auth::user();
    $qlinks = Menu::select("menus.*")
            ->join('permisos', 'permisos.menu_id', '=', 'menus.id')
            ->where('permisos.rol_id', '=', $user->rol_id)
            ->where('menus.directo', true)
            ->where('menus.dibujar', true)
            ->get();
    return $qlinks;
  }

  function allMenu(){
    return Menu::select("menu")->get();
  }

  function tieneHijos($padre){
    $hijo = Menu::where('menus.padre', $padre)
          ->first();
    if($hijo != null)
      return true;
    else
      return false;
  }

  function getFathers(){
    $user = Auth::user();
    $fathers = Menu::select("menus.*")
            ->join('permisos', 'permisos.menu_id', '=', 'menus.id')
            ->where('permisos.rol_id', '=', $user->rol_id)
            ->where('menus.directo', false)
            ->where('menus.dibujar', true)
            ->whereNull('menus.padre_id')
            ->get();
    //Log::info(count($fathers));
    return $fathers;
  }

  function getChildren(){
    $user = Auth::user();
    $children = Menu::select("menus.*")
                ->join('permisos', 'permisos.menu_id', '=', 'menus.id')
                ->where('permisos.rol_id', '=', $user->rol_id)
                ->where('menus.directo', false)
                ->where('menus.dibujar', true)
                ->whereNotNull('menus.padre_id')
                ->get();
    //Log::info(count($hijos));
    return $children;
  }

  function getMenus(){
    $padres = Menu::select("menus.*")
            ->whereNull('menus.padre')
            ->get();
    return $padres;
  }

  function getSubmenus(){
    $usuario = Auth::user();
    $hijos = Menu::select("menus.*")
                ->whereNotNull('menus.padre')
                ->get();
    return $hijos;
  }

  function getPermit(){
    $user = Auth::user();
    $currentRouteName = Route::currentRouteName();
    $elmts = explode('.',$currentRouteName);
    //Log::info($elmts);
    $ruta = $elmts[0];
    //Log::info($ruta);
    $menu = Menu::select("id")->where("ruta", '=', $ruta)->first();
    //Log::info($menu);
    if($menu == null){
      return null;
    }else{
      $permit = Permit::where('rol_id', '=', $user->rol_id)
                             ->where('menu_id', '=', $menu->id)
                             ->first(); 
      // Log::info($usuario->rol);
      // Log::info($usuario->rol);
      //Log::info($permit);
      if($permit == null){
        return null;
      }else{
        //Log::info("si existe permiso");
        $band = $permit;
        switch ($elmts[1]) {
            case 'create':
                if($permit->crear == DISABLED)
                  $band = null;
                break;
            case 'store':
              if($permit->crear == DISABLED)
                $band = null;
              break;
            case 'edit':
                if($permit->actualizar == DISABLED){
                  $band = null;
                }
                break;
            case 'update':
                if($permit->actualizar == DISABLED){
                  $band = null;
                }
                break;
            case 'destroy':
                if($permit->borrar == DISABLED)
                  $band = null;
                break;
            case 'show':
                if($permit->ver == DISABLED)
                  $band = null;
                break;
            default:
                $band = $permit;
        }
        return $band; 
      }
    }
  }

  function permiso($rol, $menu){
    $per = Permiso::where("rol", $rol)
                  ->where("menu", $menu)
                  ->first();
    return $per;
  }
?>