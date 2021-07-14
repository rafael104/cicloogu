<div class="row row-cols-1 row-cols-md-3 g-4" id="divCardsTipoProposta">
@foreach ($titulosCard as $tituloCard)
    <div class="col mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">{{$tituloCard->nomeTipo}}(s)</h5>
                <p class="card-text">{{$tituloCard->descricaoTipo}}</p>
            </div>
            <div class="card-footer">
                @if($tituloCard->nomeTipo == "Apta")
                    <small class="text-muted">Quantidade: {{$valoresAgregados["quantidadeApta"]}}</small>
                @elseif($tituloCard->nomeTipo == "Aprovada")
                    <small class="text-muted">Quantidade: {{$valoresAgregados["quantidadeAprovada"]}}</small>
                @elseif($tituloCard->nomeTipo == "Contratada")
                    <small class="text-muted">Quantidade: {{$valoresAgregados["quantidadeContratada"]}}</small>
                @endif
            </div>
            <div class="card-footer">
                @if($tituloCard->nomeTipo == "Apta")
                    <small class="text-muted">Valor de repasse: {{$valoresAgregados["somaApta"]}}</small>
                @elseif($tituloCard->nomeTipo == "Aprovada")
                    <small class="text-muted">Valor de repasse: {{$valoresAgregados["somaAprovada"]}}</small>
                @elseif($tituloCard->nomeTipo == "Contratada")
                    <small class="text-muted">Valor de repasse: {{$valoresAgregados["somaContratada"]}}</small>
                @endif
            </div>
            <div class="card-footer">
                <small class="text-muted d-flex justify-content-center">
                    <button class="btn btn-dark"
                            type="button"
                            aria-expanded="false"
                            aria-controls="main_content_div"
                            onclick="loadTabelaValores('{{$tituloCard->nomeTipo}}')">
                        Listar
                    </button>
                </small>
            </div>
        </div>
    </div>
@endforeach
</div>
