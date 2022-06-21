<?php
Class Complaint {
    protected $descricao;
    protected $observacao;
    protected $nomeReclamante;
    protected $enderecoReclamante;
    protected $CEPReclamante;
    protected $telefoneReclamante;

    public function __construct($descricao, $observacao, $nomeReclamante, $enderecoReclamante, $CEPReclamante, $telefoneReclamante)
    {
        $this->observacao = $observacao;
        $this->descricao = $descricao;
        $this->nomeReclamante = $nomeReclamante;
        $this->enderecoReclamante = $enderecoReclamante;
        $this->CEPReclamante = $CEPReclamante;
        $this->telefoneReclamante = $telefoneReclamante;
    }

    public function Reclamar(){

    }
}
