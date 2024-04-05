<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro; 
class LibroController extends Controller
{
   // Método para guardar un nuevo libro
   public function guardar(Request $request)
   {
       // Validar los datos del formulario
       $request->validate([
           'nombreLibro' => 'required|string|max:255',
           'precioLibro' => 'required|numeric',
           'isbn' => 'required|string|max:20',
       ]);

       // Crear una nueva instancia del modelo Libro con los datos del formulario
       $libro = new Libro();
       $libro->nombreLibro = $request->nombreLibro;
       $libro->precioLibro = $request->precioLibro;
       $libro->isbn = $request->isbn;

       // Guardar el libro en la base de datos
       $libro->save();

       // Redireccionar a la página de inicio u otra página deseada
       return redirect()->route('crudLibros')->with('success', 'Libro guardado exitosamente.');
   }

   // Método para mostrar los detalles de un libro
   public function show($id)
   {
       $libro = Libro::findOrFail($id);
       return view('crudLibros', compact('libro'));
   }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreLibro' => 'required|string|max:255',
            'precioLibro' => 'required|numeric',
            'isbn' => 'required|string|max:20',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->nombreLibro = $request->nombreLibro;
        $libro->precioLibro = $request->precioLibro;
        $libro->isbn = $request->isbn;
        $libro->save();

        return redirect()->route('crudLibros')->with('success', 'Libro actualizado exitosamente.');
    }

    // Método para eliminar un libro de la base de datos
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        
        return redirect()->route('crudLibros')->with('success', 'Libro eliminado exitosamente.');
    }
    public function index()
    {
        $libros = Libro::all();
        return view('crudLibros', compact('libros'));
    }
    
}




