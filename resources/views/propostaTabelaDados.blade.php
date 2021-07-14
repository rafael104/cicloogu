<form>
    <fieldset disabled>
        <legend>Proposta {{$detalhes->Proposta}}</legend>
        <div class="mb-3">
            <label for="convenio" class="form-label">Convênio</label>
            <input type="text" id="convenio" class="form-control" placeholder="{{addslashes($detalhes->Convenio)}}">
        </div>
        <div class="mb-3">
            <label for="operacao" class="form-label">Operação</label>
            <input type="text" id="operacao" class="form-control" placeholder="{{addslashes($detalhes->Operacao)}}">
        </div>

        <div class="mb-3">
            <label for="gestor" class="form-label">Gestor</label>
            <input type="text" id="gestor" class="form-control" placeholder="{{addslashes($detalhes->gestor)}}">
        </div>
        <div class="mb-3">
            <label for="tomador" class="form-label">Tomador</label>
            <input type="text" id="tomador" class="form-control" placeholder="{{addslashes($detalhes->Tomador)}}">
        </div>
        <div class="mb-3">
            <label for="situacaoProposta" class="form-label">Operação</label>
            <input type="text" id="situacaoProposta" class="form-control" placeholder="{{addslashes($detalhes->SituacaoProposta)}}">
        </div>
        <div class="mb-3">
            <label for="tipoOrcamento" class="form-label">Tipo Orçamento</label>
            <input type="text" id="tipoOrcamento" class="form-control" placeholder="{{addslashes($detalhes->Tipo_Orcamento)}}">
        </div>
    </fieldset>
</form>
