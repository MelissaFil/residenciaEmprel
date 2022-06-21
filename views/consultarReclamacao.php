<div class="container">
    <h4 class="mb-4">Listagem de reclamações</h4>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Observação</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Reclamante</th>
                    <th scope="col">telefoneReclamante</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($linha  = mysqli_fetch_array($consulta_complaint)){
                    echo'<tr><td>'.$linha['observacao'].'</td>';
                    echo'<td>'.$linha['descricao'].'</td>';
                    echo'<td>'.$linha['nomeReclamante'].'</td>';
                    echo'<td>'.$linha['telefoneReclamante'].'</td></tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

