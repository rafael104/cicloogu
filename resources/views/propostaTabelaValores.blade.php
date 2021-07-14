<table class="table">
    <thead>
    <tr>
        <th scope="col">Proposta</th>
        <th scope="col">Valor Repasse</th>
        <th scope="col">Data Aprovação</th>
        <th scope="col">Data Contratação</th>
        <th scope="col">Data Empenho</th>
        <th scope="col">Unidade</th>
    </tr>
    </thead>
    <tbody>
    @foreach($valores as $valores)
        <tr>
            <td>
                <button
                    type="button"
                    class="btn btn-link"
                    data-bs-toggle="modal"
                    data-bs-target="#maisInformacoesProposta"
                    onclick="loadPropostaDados('{{$valores->Proposta}}')"
                >
                    {{$valores->Proposta}}
                </button>
            </td>

            <td>{{number_format((float)$valores->ValorRepasse, 2, ',', '.')}}</td>
            @if(!empty($valores->DataAprovadosProposta && $valores->DataAprovadosProposta <> '1900-01-01' ))
                <td>{{date('d-m-Y', strtotime($valores->DataAprovadosProposta))}}</td>
            @else
                <td></td>
            @endif
            @if(!empty($valores->DataContratadasProposta) && $valores->DataContratadasProposta <> '1900-01-01' )
                <td>{{date('d-m-Y', strtotime($valores->DataContratadasProposta))}}</td>
            @else
                <td></td>
            @endif
            @if(!empty($valores->DataEmpenhadasProposta) && $valores->DataEmpenhadasProposta <> '1900-01-01' )
                <td>{{date('d-m-Y', strtotime($valores->DataEmpenhadasProposta))}}</td>
            @else
                <td></td>
            @endif
            <td>{{$valores->sigla}} ({{$valores->Gigov}})</td>
        </tr>
    @endforeach
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="maisInformacoesProposta" tabindex="-1" aria-labelledby="maisInformacoesProposta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Proposta Informações adicionais</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="divPropostaDados">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
