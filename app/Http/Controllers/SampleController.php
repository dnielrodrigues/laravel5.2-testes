<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sample;

use Illuminate\Http\Response;

class SampleController extends Controller
{

    /**
     * Atributos
     */
    protected $model;
    protected $request;

    /**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct( Sample $sample , Request $request )
    {

        $this->model = $sample;
        $this->request = $request;

    }

    /**
     * listar
     */
    public function index()
    {

        $model = $this->model;

        return $model::all();

    }

    /**
     * criar item vazio (???)
     */
    public function create( Request $request )
    {
        //
    }

    /**
     * salvar
     */
    public function store()
    {

        $model = $this->model;
        $input = $this->request->all();

        return $model::create( $input );

    }

    /**
     * exibir unico
     */
    public function show($id)
    {

        $model = $this->model;

        $obj = $model::find($id);

        if ( is_null($obj) ) {
            return ["result"=>"false"];
        }

        return $obj;

    }

    /**
     * editar
     */
    public function edit($id)
    {

        // ....

    }

    /**
     * editar
     */
    public function update($id)
    {

        $model = $this->model;
        $input = $this->request->all();

        $obj = $model::find($id);
        $obj->update( $input );

        return $obj;

    }

    /**
     * deletar
     */
    public function destroy($id)
    {

        $model = $this->model;

        $obj = $model::find($id);

        if ( is_null( $obj ) ) {
            return [
                "result" => false,
                "msg" => "Objeto não encontrado."
            ];
        }

        if ( $obj->delete() ) {
            return [ "result" => true ];
        }

        return [
            "result" => false,
            "msg" => "Erro inesperado. Entre em contato com suporte."
        ];

    }
}
