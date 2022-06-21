<?php
class AnimalComplaint extends Complaint {
    private $nomeAnimal;
    private $qtdeAnimal;
    private $diaIncomodo;
    private $ruaOcorrencia;
    private $complementOcorrencia;

    public function __construct($descricao, $observacao, $nomeReclamante, $enderecoReclamante, $CEPReclamante, $telefoneReclamante,
                                $nomeAnimal, $qtdeAnimal, $diaIncomodo, $ruaOcorrencia, $complementOcorrencia)
    {
        parent::__construct($descricao, $observacao, $nomeReclamante, $enderecoReclamante, $CEPReclamante, $telefoneReclamante);
        $this->nomeAnimal = $nomeAnimal;
        $this->qtdeAnimal = $qtdeAnimal;
        $this->diaIncomodo = $diaIncomodo;
        $this->ruaOcorrencia = $ruaOcorrencia;
        $this->complementOcorrencia = $complementOcorrencia;

    }

}