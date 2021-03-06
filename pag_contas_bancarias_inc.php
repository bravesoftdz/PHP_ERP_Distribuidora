<?php
/*
+------------------------------------------------+
| Desenvolvido Por:                              |
| DATATEX INFORMATICA E SERVICOS LTDA            |
| System of the New Generation                   |
|                                                |
| http://www.datatex.com.br                      |
| sistemas@datatex.com.br                        |
| Fone: 55 11 2629-4605                          |
|                                                |
| PROTECAO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificacao deste Sistema esta protegida  |
| pela Lei Nro.9609 onde se dispoe sobre a       |
| protecao da propriedade intelectual de         |
| programa de computador, sua comercializacao    |
| no Pais, e da outras providencias.             |
| ATENCAO: Nao e permitido efetuar alteracoes    |
| na codificacao do sistema, efetuar instalacoes | 
| em outros computadores, copias e utiliza-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/
require_once("vcl/vcl.inc.php");
//Includes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("jsval/formvalidator.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class pagcontasbancariasinc extends Page
{
   public $mgt_conta_bancaria_titular = null;
   public $mgt_conta_bancaria_conta = null;
   public $mgt_conta_bancaria_agencia = null;
   public $mgt_conta_bancaria_banco = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Label18 = null;
   public $Panel1 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label2 = null;
   public $bt_incluir = null;
   public $bt_fechar = null;
   public $GroupBox1 = null;
   public $GroupBox3 = null;
   public $area_sistema = null;
   function mgt_conta_bancaria_titularJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasinc.bt_incluir.focus();
        return false;
      }

<?php

   }

   function mgt_conta_bancaria_contaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasinc.mgt_conta_bancaria_titular.focus();
        return false;
      }

<?php

   }

   function mgt_conta_bancaria_agenciaJSKeyPress($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasinc.mgt_conta_bancaria_conta.focus();
        return false;
      }

<?php

   }


   function mgt_conta_bancaria_nroJSKeyUp($sender, $params)
   {

?>
   //Add your javascript code here

   //*** INICIO - So Numero ***

   var campo = document.pagcontasbancariasinc.mgt_conta_bancaria_nro
   var digits="0123456789"
   var campo_temp
   for (var i=0;i<campo.value.length;i++){
       campo_temp=campo.value.substring(i,i+1)
       if (digits.indexOf(campo_temp)==-1){
          campo.value = campo.value.substring(0,i);
          break;
       }
   }

   //*** FINAL - So Numero ***

<?php

   }

   function pagcontasbancariasincCreate($sender, $params)
   {
      require_once("includes/valida_sessao.inc.php");

      //*************************************
      //*** INICIO - Validacao de Leitura ***
      //*************************************

      $tag_permissao = trim($this->Name);
      $tag_permissao = str_replace('alt', '', $tag_permissao);
      $tag_permissao = str_replace('inc', '', $tag_permissao);
	  $tag_permissao = $_SESSION['login_permissao_' . trim($tag_permissao)];
	  
      if($tag_permissao == "2")
      {
        if( isset($this->bt_incluir) )
        {
           $this->bt_incluir->Visible = false;
        }
        if( isset($this->bt_alterar) )
        {
           $this->bt_alterar->Visible = false;
        }
        if( isset($this->bt_excluir) )
        {
           $this->bt_excluir->Visible = false;
        }
      }
      elseif($tag_permissao == "0")
      {
 	     redirect('frame_corpo.php');
	  }

      //************************************
      //*** FINAL - Validacao de Leitura ***
      //************************************

      $this->mgt_conta_bancaria_banco->Text = "";
      $this->mgt_conta_bancaria_agencia->Text = "";
      $this->mgt_conta_bancaria_conta->Text = "";
      $this->mgt_conta_bancaria_titular->Text = "";

      $this->MSG_Erro->Caption = "";
   }

   function mgt_conta_bancaria_bancoJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

      if((event.keyCode == 9) || (event.keyCode == 13) )
      {
        document.pagcontasbancariasinc.mgt_conta_bancaria_agencia.focus();
        return false;
      }

<?php

   }

   function mgt_conta_bancaria_nroJSKeyPress($sender, $params)
   {

?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.pagcontasbancariasinc.mgt_conta_bancaria_banco.focus();
     return false;
   }

<?php

   }

   function bt_incluirJSClick($sender, $params)
   {

?>
   //Add your javascript code here

<?php

   }

   function bt_fecharClick($sender, $params)
   {
      redirect('pag_contas_bancarias.php');
   }

   function bt_incluirClick($sender, $params)
   {
      if(trim($this->mgt_conta_bancaria_banco->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Banco.";
      }
      elseif(trim($this->mgt_conta_bancaria_agencia->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Agencia.";
      }
      elseif(trim($this->mgt_conta_bancaria_conta->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Conta.";
      }
      elseif(trim($this->mgt_conta_bancaria_titular->Text) == "")
      {
         $this->MSG_Erro->Caption = "Por favor, preencha o campo de Titular.";
      }
      else
      {
         $Comando_SQL = "insert into mgt_contas_bancarias(";
         $Comando_SQL .= "mgt_conta_bancaria_banco, ";
         $Comando_SQL .= "mgt_conta_bancaria_agencia, ";
         $Comando_SQL .= "mgt_conta_bancaria_conta, ";
         $Comando_SQL .= "mgt_conta_bancaria_titular) ";
         $Comando_SQL .= "values(";
         $Comando_SQL .= "'" . trim($this->mgt_conta_bancaria_banco->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_conta_bancaria_agencia->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_conta_bancaria_conta->Text) . "',";
         $Comando_SQL .= "'" . trim($this->mgt_conta_bancaria_titular->Text) . "')";

         GetConexaoPrincipal()->SQL_Comunitario->Close();
         GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_Comunitario->Open();
         GetConexaoPrincipal()->SQL_Comunitario->Close();

         redirect('pag_contas_bancarias.php');
      }

   }
   function pagcontasbancariasincJSLoad($sender, $params)
   {

   ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

   <?php

   }

}

global $application;

global $pagcontasbancariasinc;

//Creates the form
$pagcontasbancariasinc = new pagcontasbancariasinc($application);

//Read from resource file
$pagcontasbancariasinc->loadResource(__FILE__);

//Shows the form
$pagcontasbancariasinc->show();

?>