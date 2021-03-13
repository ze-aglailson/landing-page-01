<?php
require_once("PHPMailer.php");
require_once("SMTP.php");

class Email{

    private $email;
    private $senha;
    private $nome;
    private $msg;

    private $mail;


    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setSenha($senha){
        $this->email = $senha;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setMsg($msg){
        $this->msg = $msg;
    }
    public function getMsg(){
        return $this->msg;
    }

    public function __construct() {

        $this->mail = new PHPMailer\PHPMailer();
        $this->mail->isSMTP();

        $this->mail->Port = "465";
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->isHTML(true);
        $this->mail->SMTPSecure = "ssl";
        $this->mail->Mailer = "smtp";
        $this->mail->CharSet = "UTF-8";

        $this->mail->SMTPAuth = true;
        $this->mail->Username = "jaglailson1@gmail.com";
        $this->mail->Password = "#jJ12345678910";

        $this->mail->SingleTo = true;

        $this->mail->From = "jaglailson1@gmail.com";
        $this->mail->FromName = "José Aglailson";

        $this->mail->addAddress("jaglailson1@gmail.com");
        $this->mail->Subject="Testando envio de e-mail";
        $this->mail->Body = "Óla, Aqui está o E-book 'Como ser um social media'.<br>Click no link para baixar ";

        if(!$this->mail->send()){
            $this->setMsg($this->mail->ErrorInfo);      
        }

  


    }

    public function verificaEmail($email){
        $con = new Conexao();
        $result = $con->select("SELECT  * FROM Usuario WHERE usuarioEmail = :EMAIL", array(
            ":EMAIL"=>$email
        )); 
        
        $res = count($result);

        if($res>0){
            return false;
        }else{
            return true;
        }
    }

    public function cadastro(){
        $email = $this->getEmail();
        $nome = $this->getNome();
        if($this->verificaEmail($email)){

            $con = new Conexao();
            $query = $con->query("INSERT INTO Usuario(usuarioEmail, usuarioNome) VALUES (:EMAIL,:NOME)", array(
                ":EMAIL"=>$email,
                ":NOME"=>$nome
            ));

        }else{
            //throw new Exception("Esse e-mail já foi utilizado, por favor use outro.");
            echo "Esse e-mail já foi utilizado, por favor use outro.";
        }

    }
    


}

?>