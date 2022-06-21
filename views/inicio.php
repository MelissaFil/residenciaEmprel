<div class="container">
    <h3> Resgistre aqui sua reclamação</h3>
    <form class="card" method="POST" action="registrarReclamacao.php" name="formQueixaDiversa">
        <div class="card-header">
            <select id="tipoSelect" name="tiposelect" class="form-select" aria-label="Default select example">
                <option value="">Outros problemas</option>
                <option value="1">Problemas com comida</option>
                <option value="2">Problemas com animais</option>
            </select>


        </div>
        <div class="card-body">
            <div class="row" >
                <div class="col-12 mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea type="text" class="form-control" name="descricao"></textarea>

                </div>
                <div class="col-12 mb-3">
                    <label for="observacao" class="form-label">Observação</label>
                    <textarea type="text" class="form-control" name="observacao"></textarea>
                </div>

                <h4 class="mb-4">Dados complementares</h4>
                <div class="col-12 mb-3">
                    <label for="nomeSolicitante" class="form-label">Nome do solicitante</label>
                    <input type="text" class="form-control" name="nomeSolicitante">
                </div>
                <div class="col-12 mb-3">
                    <label for="ruaSolicitante" class="form-label">Enedereço do solicitante</label>
                    <input type="text" class="form-control" name="ruaSolicitante">
                </div>
                <div class="col-6 mb-3">
                    <label for="compSolicitante" class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="compSolicitante">
                </div>
                <div class="col-6 mb-3">
                    <label for="emailSolicitante" class="form-label">Email</label>
                    <input type="text" class="form-control" name="emailSolicitante">
                </div>

                <h4 class="mb-4">Informações do evento</h4>
                <div class="col-12 mb-3">
                    <label for="enderecoEvento" class="form-label">Endereço do evento</label>
                    <input type="text" class="form-control" name="enderecoEvento">
                </div>
                <div class="col-12 mb-3">
                    <label for="data" class="form-label">Data do evento</label>
                    <input type="text" class="form-control" name="data">
                </div>


        </div>
            <div class="row d-none" id="comidaProblemas">
                <h4 class="mb-4">Informações sobre problemas com comida</h4>
                <div class="col-6 mb-3">
                    <label for="qtdeComensais" class="form-label">Pessoas que comeram</label>
                    <input type="number" class="form-control" name="qtdeComensais">
                </div>
                <div class="col-6 mb-3">
                    <label for="qtdeDoentes" class="form-label">Pessoas doentes</label>
                    <input type="number" class="form-control" name="qtdeDoentes">
                </div>
                <div class="col-6 mb-3">
                    <label for="qtdeInternacoes" class="form-label">Pessoas internadas</label>
                    <input type="number" class="form-control" name="qtdeInternacoes">
                </div>
                <div class="col-6 mb-3">
                    <label for="qtdeObitos" class="form-label">Pessoas que morreram</label>
                    <input type="number" class="form-control" name="qtdeObitos">
                </div>
                <div class="col-6 mb-3">
                    <label for="localAtendimento" class="form-label">Local atendimento</label>
                    <input type="text" class="form-control" name="localAtendimento">
                </div>
                <div class="col-6 mb-3">
                    <label for="refeicaoSuspeita" class="form-label">Qual era a refeição</label>
                    <input type="text" class="form-control" name="refeicaoSuspeita">
                </div>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </div>

</form>
<?php
?>