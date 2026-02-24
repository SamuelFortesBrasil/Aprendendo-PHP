<?php

class Conta {
    public $numConta;
    private $saldo = 0;
    private $dono;
    private $status;
    protected $tipo;
    
    public function abrirConta() {
        $this->status = "aberta";
        if($this->tipo == "CC"){
            $this->saldo += 50;
        }else{
            $this->saldo += 150;
            $this->tipo = "CP";
        }
    }
    
    public function fecharConta() {
        if($this->saldo < 0){
             echo "<p>Sua conta está negativada, portanto não pode ser fechada!</p>";
        } else if($this->saldo > 0){
            echo "<p>Retire todos fundos da conta antes de fecha-lá!</p>";
        }else{
            $this->status = "fechada";
        }
    }
    
    public function depositar($valor) {
        if($this->status === "fechada"){
            echo "<p>Sua conta está fechada</p>";
        }else{
            $this->saldo += $valor;
        }
    }
    
    public function sacar($valor) {
        if($this->status === "fechada"){
            echo "<p>Não é possível realizar saques pois a conta está fechada!</p>";
        }else if($this->saldo <= 0){
            echo  "<p>O saldo atual é insuficiente para saques!</p>";
        }else if($valor > $this->saldo){
            echo "<p>Não é possível efetuar um saque maior que o saldo!</p>";
        }else{
            $this-> saldo -= $valor;
            echo "<p>Saque de R$ $valor efetuado com sucesso.</p>";
        }
    }
    
    public function pagarMensalidade($tipoConta) {
        if($tipoConta === "CC"){
            $this->saldo -= 12; 
        }else{
            $this->saldo -= 20;
        }
        
        if($this-> saldo <= 0){
            echo"<p>O pagamento da mensalidade não pode ser concluído, sua conta ficará negativada</p>";
        }
    }
    
    //Métodos cobrados pelo Prof.Guanabara...
    public function getNumConta() {
        return $this->numConta;
    }
    
    public function setNumConta($num){
        $this->numConta = $num;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    } 

     public function getStatus() {
         return $this->status;
     }
     
     public function setStatus($status) {
         $this->status = $status;
         if ($status === "fechada"){
             $this->saldo = 0;
         }
     }
     
     public function getTipo() {
         return $this->tipo;
     }
     
     public function setTipo($tipo){
         $this->tipo = $tipo;
     } 

}