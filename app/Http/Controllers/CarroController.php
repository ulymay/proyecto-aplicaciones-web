<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;
class CarroController extends Controller
{

public function index(){

$carro= new Carro();
$carro->nombre="Jetta";
$carro->modelo="2009";
$carro->color="gris";
$carro->dueno="arturo";
$carro->placa=rand(0,100000);
$carro->marca="volkswagen";
$carro->save();

return "El carro fue creado".$carro->nombre;
}

public function show($id_carro){
    $carro = Carro::find($id_carro);
    $carro->dueno="Juanito";
    $carro->save();
    
return "Vista del carro con ese id";
}

public function edit($id){
return "mostrar la vista de edicion";
}

public function update($id, $request){
return "POST, y es para editar un carro";
}

public function delete($id){
return "DELETE, y es para eliminar un carro de la base de datos";
}


}