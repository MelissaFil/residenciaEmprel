<?php
class FoodComplaint extends Complaint {
    private $qtdeComensais;
    private $qtdeDoentes;
    private $qtdeInternacoes;
    private $qtdeObitos;
    private $localAtendimento;
    private $refeicaoSuspeita;

    public function __construct($descricao, $observacao, $nomeReclamante, $enderecoReclamante, $CEPReclamante, $telefoneReclamante,
                                $qtdeComensais, $qtdeDoentes, $qtdeInternacoes, $qtdeObitos, $localAtendimento, $refeicaoSuspeita)
    {
        parent::__construct($descricao, $observacao, $nomeReclamante, $enderecoReclamante, $CEPReclamante, $telefoneReclamante);
        $this->qtdeComensais = $qtdeComensais;
        $this->qtdeDoentes = $qtdeDoentes;
        $this->qtdeInternacoes = $qtdeInternacoes;
        $this->qtdeObitos = $qtdeObitos;
        $this->localAtendimento = $localAtendimento;
        $this->refeicaoSuspeita = $refeicaoSuspeita;

    }


}
