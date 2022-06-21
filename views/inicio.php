<div class="container">
    <h3> Resgistre aqui sua reclamação</h3>
    <form class="card" method="POST" action="registrarReclamacao.php" name="formQueixaDiversa">
        <div class="card-header">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                <label class="form-check-label" for="flexRadioDefault3">
                    Outros problemas
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Problemas com comida
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                   Problemas com animais
                </label>
            </div>

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
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </div>

</form>
<?php
?>