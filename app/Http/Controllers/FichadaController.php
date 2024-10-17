<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Fichada;
use App\Models\Grupo;
use App\Models\Persona;
use App\Models\Seccion;
use App\Models\Sucursal;
use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichadaController extends Controller
{

    private $database;
    private $request;

    public function __construct(Request $request)
    {
        $this->database = 'sqlsrv'.$request->database;
        $this->request = $request;
        try {
            DB::connection($this->database)->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration." );
        }
    }

    public function fichadas()
    {
        $model = new Fichada();
        $databaseName = $this->database;
        $model->setConnection($databaseName);
        $data = $model->select('*')->paginate(100);
        return response()->json($data);
    }

    public function asistencias()
    {
        $model = new Asistencia();
        $databaseName = $this->database;
        $model->setConnection($databaseName);
        $data = $model->select('*')->paginate(100);
        return response()->json($data);
    }

    public function personas()
    {
        $model = new Persona();
        $databaseName = $this->database;
        $model->setConnection($databaseName);
        $data = $model->select('*')->with(['sucursales','grupos','secciones'])->paginate(100);
        return response()->json($data);
    }

    public function sucursales()
    {
        $model = new Sucursal();
        $databaseName = $this->database;
        $model->setConnection($databaseName);
        $data = $model->select('*')->paginate(100);
        return response()->json($data);
    }

    public function grupos()
    {
        $model = new Grupo();
        $databaseName = $this->database;
        $model->setConnection($databaseName);
        $data = $model->select('*')->paginate(100);
        return response()->json($data);
    }

    public function secciones()
    {
        $model = new Seccion();
        $databaseName = $this->database;
        $model->setConnection($databaseName);
        $data = $model->select('*')->paginate(100);
        return response()->json($data);
    }
}
