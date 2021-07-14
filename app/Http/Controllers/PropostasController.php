<?php


namespace App\Http\Controllers;


use App\TipoProposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropostasController extends Controller
{
    public function listarCardsTipoProposta(Request $request)
    {

        $unidadeSelecionada = $request->input('unidadeSelecionada');
        if(!empty($unidadeSelecionada)){
            session(['unidade' =>  $unidadeSelecionada]);
        } else {
            session(['unidade' =>  null]);
        }

        $tipoPropostaApta = new TipoProposta("Apta","Aptas a analisar Plano de Trabalho");
        $tipoPropostaAprovada = new TipoProposta("Aprovada","Com Plano de Trabalho aprovado, porém ainda não foram contratadas");
        $tipoPropostaContratada = new TipoProposta("Contratada","Com Plano de Trabalho aprovado e a contratação realizada");

        $titulosCard = [
            $tipoPropostaApta
            ,$tipoPropostaAprovada
            ,$tipoPropostaContratada
        ];

        $unidades = $this->listarUnidades();

        $valoresAgregados = $this->listarValoresAgregados($unidadeSelecionada);

        return view('index', compact('titulosCard', 'unidades', 'valoresAgregados', 'unidadeSelecionada'));

    }

    public function listarValores(Request $request, $nomeTipo)
    {
        $unidade = session('unidade');
        if(!empty($unidade)){
            if($nomeTipo == "Apta"){
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->where('AprovadosProposta', '=',0)
                    ->where('ContratadasProposta', '=',0)
                    ->where('dados.Gigov', $unidade)
                    ->get();
            } elseif ($nomeTipo == "Aprovada"){
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->where('AprovadosProposta', '<>',0)
                    ->where('ContratadasProposta', '=',0)
                    ->where('dados.Gigov', $unidade)
                    ->get();
            } elseif ($nomeTipo == "Contratada"){
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->where('ContratadasProposta', '<>',0)
                    ->where('dados.Gigov', $unidade)
                    ->get();
            } else {
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->where('dados.Gigov', $unidade)
                    ->get();
            }
        } else {

            if($nomeTipo == "Apta"){
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->where('AprovadosProposta', '=',0)
                    ->where('ContratadasProposta', '=',0)
                    ->get();
            } elseif ($nomeTipo == "Aprovada"){
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->where('AprovadosProposta', '<>',0)
                    ->where('ContratadasProposta', '=',0)
                    ->get();
            } elseif ($nomeTipo == "Contratada"){
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->where('ContratadasProposta', '<>',0)
                    ->get();
            } else {
                $valores = DB::table('valores')
                    ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                    ->join('unidades', 'dados.Gigov', '=', 'unidades.unidade')
                    ->select('valores.*', 'dados.Gigov','unidades.sigla')
                    ->get();
            }
        }

        return view('propostaTabelaValores',compact('valores'));
    }

    public function listarDetalhesProposta(Request $request, $proposta)
    {
        $detalhes = DB::table('dados')
            ->where('Proposta', $proposta)
            ->first();
        return view('propostaTabelaDados',compact('detalhes'));
    }

    public function listarUnidades()
    {
        $unidades = DB::table('unidades')
            ->select('unidade', 'sigla')
            ->get();
        return $unidades;
    }

    public function listarValoresAgregados($unidade)
    {
        if(!empty($unidade)){
            $quantidadeApta = DB::table('valores')
                ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                ->where('AprovadosProposta', '=', 0)
                ->where('ContratadasProposta', '=', 0)
                ->where('dados.Gigov', $unidade)
                ->count();
            $quantidadeAprovada = DB::table('valores')
                ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                ->where('AprovadosProposta', '<>', 0)
                ->where('ContratadasProposta', '=', 0)
                ->where('dados.Gigov', $unidade)
                ->count();
            $quantidadeContratada = DB::table('valores')
                ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                ->where('ContratadasProposta', '<>', 0)
                ->where('dados.Gigov', $unidade)
                ->count();

            $somaApta = DB::table('valores')
                ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                ->where('AprovadosProposta', '=', 0)
                ->where('ContratadasProposta', '=', 0)
                ->where('dados.Gigov', $unidade)
                ->sum('ValorRepasse');
            $somaAprovada = DB::table('valores')
                ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                ->where('AprovadosProposta', '<>', 0)
                ->where('ContratadasProposta', '=', 0)
                ->where('dados.Gigov', $unidade)
                ->sum('ValorRepasse');
            $somaContratada = DB::table('valores')
                ->join('dados', 'valores.Proposta', '=', 'dados.Proposta')
                ->where('ContratadasProposta', '<>', 0)
                ->where('dados.Gigov', $unidade)
                ->sum('ValorRepasse');
        } else {
            $quantidadeApta = DB::table('valores')
                ->where('AprovadosProposta', '=', 0)
                ->where('ContratadasProposta', '=', 0)
                ->count();
            $quantidadeAprovada = DB::table('valores')
                ->where('AprovadosProposta', '<>', 0)
                ->where('ContratadasProposta', '=', 0)
                ->count();
            $quantidadeContratada = DB::table('valores')
                ->where('ContratadasProposta', '<>', 0)
                ->count();

            $somaApta = DB::table('valores')
                ->where('AprovadosProposta', '=', 0)
                ->where('ContratadasProposta', '=', 0)
                ->sum('ValorRepasse');
            $somaAprovada = DB::table('valores')
                ->where('AprovadosProposta', '<>', 0)
                ->where('ContratadasProposta', '=', 0)
                ->sum('ValorRepasse');
            $somaContratada = DB::table('valores')
                ->where('ContratadasProposta', '<>', 0)
                ->sum('ValorRepasse');
        }

        $valoresAgregados = [
            "quantidadeApta" => $quantidadeApta
            ,"quantidadeAprovada" => $quantidadeAprovada
            ,"quantidadeContratada" => $quantidadeContratada
            ,"somaApta" => number_format((float)$somaApta, 2, ',', '.')
            ,"somaAprovada" => number_format((float)$somaAprovada, 2, ',', '.')
            ,"somaContratada" => number_format((float)$somaContratada, 2, ',', '.')
        ];

        return $valoresAgregados;
    }
}
