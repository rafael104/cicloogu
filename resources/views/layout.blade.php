<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclo OGU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        function loadTabelaValores(nomeTipo)
        {
            $('#divTabelaValores').load('/valores/'+nomeTipo);
        }
        function loadPropostaDados(proposta)
        {
            $('#divPropostaDados').load('/detalhes/'+proposta);
        }
        function loadCardsTipoProposta(unidade)
        {
            $('#divCardsTipoProposta').load('/listarCardsTipoPropostas/'+unidade);
        }
        function filtraPorUnidade(){
            var selectUnidade = document.getElementById('unidade');
            var unidadeSelecionada = selectUnidade.value;
            $('#unidadeSelecionada').val(unidadeSelecionada);
        }
    </script>

</head>
<body>

<div class="container">
    <div class="p-1 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Propostas</h1>
        </div>
    </div>
    <form id="formSelectUnidade" action="" method="post" class="mb-4">
        @csrf
        <select class="form-select" aria-label="Filtre por unidade" id="unidade"
                onchange="
                    filtraPorUnidade();
                    this.form.submit();
                ">
            <option value="0">Todas as unidades</option>
            @foreach ($unidades as $unidade)
                @if($unidade->unidade == $unidadeSelecionada)
                    <option selected value="{{$unidade->unidade}}">{{$unidade->sigla}}</option>
                @else
                    <option value="{{$unidade->unidade}}">{{$unidade->sigla}}</option>
                @endif
            @endforeach
        </select>
        <input type="hidden" name="unidadeSelecionada" id="unidadeSelecionada">
    </form>
    @yield('conteudo')
    <div class="md-2" id="divTabelaValores"></div>
</div>

</body>
</html>
