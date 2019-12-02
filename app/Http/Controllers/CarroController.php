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
    dd($carro);

    
return "Vista del carro con ese id";
}

public function lista(){
    $carros = Carro::all();
    //dd($carros);
    return view("carros")->with(['carros'=>$carros]);
}

public function nuevo(){
    return view("nuevo");
}

public function guardar(Request $request){
    $carro = new Carro();
    $carro->nombre = $request->nombre;
    $carro->color = $request->color;
    $carro->dueno = $request->dueno;
    $carro->placa = $request->placa;
    $carro->marca = $request->marca;
    $carro->modelo = $request->modelo;
    $carro ->save();
    return redirect("admin/carros/lista")->with(["estatus"=>"El carro {$carro->nombre} fue agregado (="]);

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