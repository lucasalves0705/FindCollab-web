<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuariosController extends Controller
{
    const link = 'https://apifindcollaboficial.herokuapp.com/view/';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos_array = Http::get(self::link.'candidato/listar.php')->json();

        $candidatos = new Collection();

        foreach ($candidatos_array as $candidato){
            $candidatos->add(new Usuario($candidato));
        }

        return view('listar-candidato', compact('candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create(Request $request)
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $candidato = new Usuario($request->all());

        if (!$candidato->codigo ?? false) {
            $response = Http::withBody(
                json_encode($candidato), 'application/javascript'
            )->post(self::link.'candidato/inserir.php');
        } else {
            $response = Http::withBody(
                json_encode($candidato), 'application/javascript'
            )->post(self::link.'candidato/editar.php');
        }

        return redirect()->route('usuario_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $body = new \stdClass();
        $body->codigo =$id;

        $response = Http::withBody(
            json_encode($body), 'application/javascript'
        )->post(self::link.'candidato/consultar.php');

        $candidato = new Usuario($response->json()[0]);

        return view('register', compact('candidato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $body = new \stdClass();

        $body->codigo =$id;

        $response = Http::withBody(
            json_encode($body), 'application/javascript'
        )->post(self::link.'candidato/consultar.php');

        $candidato = new Usuario($response[0]);

        return view('register', compact('candidato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $body = new \stdClass();

        $body->codigo = $id;

        $response = Http::withBody(
            json_encode($body), 'application/javascript'
        )->post(self::link.'candidato/excluir.php');

        dd($body, $response);

        return redirect()->route('usuario_index');
    }


    /********************/

    const linkAdm = 'https://apifindcollaboficial.herokuapp.com/view/';

    public function indexAdm()
    {
        $adms_array = Http::get(self::linkAdm.'administrador/listar.php')->json();

        $adms = new Collection();

        foreach ($adms_array as $adm){
            $adms->add(new Usuario($adm));
        }

        return view('listar-adm', compact('adms'));
    }

    public function createAdm(Request $request)
    {
        return view('register-adm');
    }

    public function insereAdm(Request $request)
    {

        $adm = array("codigo" => "15", "email" => $request->all()['email'], "senha" => $request->all()['senha']);
        $response = Http::withBody(
            json_encode($adm)
            , 'application/javascript'
            )->post(self::linkAdm.'administrador/inserir.php');

        return redirect()->route('adm_index');
    }

    public function showAdm($id)
    {
        $body = new \stdClass();
        $body->codigo =$id;

        $response = Http::withBody(
            json_encode($body), 'application/javascript'
        )->post(self::link.'administrador/consultar.php');

        $adms = $response->json()[0];

        return view('show-adm', compact('adms'));
    }

    public function destroyAdm($id)
    {
        $body = new \stdClass();

        $body->codigo = $id;

        $response = Http::withBody(
            json_encode($body), 'application/javascript'
        )->post(self::link.'administrador/excluir.php');

        return redirect()->route('adm_index');
    }
}
