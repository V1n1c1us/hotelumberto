<?php

if ($_POST['send'] == 1) {
    $enviar = new SendMail($_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['mensagem']);
    $enviado = $enviar->enviaEmail();
}

/* CLASSE ENVIAR EMAIL */

class SendMail
{
    protected $nome;
    protected $telefone;
    protected $email;
    protected $mensagem;

    public function __construct($nome, $email, $telefone, $mensagem)
    {
        $this->nome = $nome;
        $this->fone = $telefone;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }

    public function enviaEmail()
    {
        if ($this->nome == "") {
            return false;
        }
        if ($this->telefone == "") {
            return false;
        }
        if ($this->email == "") {
            return false;
        }
        if ($this->mensagem == "") {
            return false;
        }


        $email_remetente = "suporte@iguanaweb.com.br";
        $email_destinatario = array("suporte@iguanaweb.com.br");
        $email_assunto = "Contato via Site";
        $email_conteudo = "<p style='line-height:30px;'>";
        $email_conteudo .= "<b>Nome</b>: $this->nome \n";
        $email_conteudo .= "<b>Fone</b>: $this->telefone \n";
        $email_conteudo .= "<b>E-email</b>: $this->email \n";
        $email_conteudo .= "<b>Mensagem:</b> $this->mensagem \n</p>";


        $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $this->email", "Subject: $email_assunto", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

        foreach ($email_destinatario as $destinatario) {
            mail($destinatario, $email_assunto, nl2br($email_conteudo), $email_headers);

        }
        if ($enviado = 1) {
            echo "</b>Email enviado com sucesso!</b>";
        } else {
            echo "</b>Falha no envio do E-Mail!</b>";
        }
    }
}

?>	