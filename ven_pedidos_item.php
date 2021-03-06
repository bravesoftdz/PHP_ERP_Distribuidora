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
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class venpedidositem extends Page
{
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $Label1 = null;
   public $abrir_cadastro = null;
   public $bt_cadastro = null;
   public $registros = null;
   public $bt_fechar = null;
   public $bt_buscar = null;
   public $opcao_busca = null;
   public $dados_busca = null;
   public $area_sistema = null;
   public $Label5 = null;
   public $Label4 = null;
   public $Label3 = null;
   public $Label2 = null;
   public $GroupBox3 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function abrir_cadastroJSKeyPress($sender, $params)
   {

      ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venpedidositem.bt_cadastro.focus();
     return false;
   }

      <?php

   }

   function opcao_buscaJSKeyPress($sender, $params)
   {

      ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venpedidositem.bt_buscar.focus();
     return false;
   }

      <?php

   }

   function dados_buscaJSKeyPress($sender, $params)
   {

      ?>
   //Add your javascript code here

   if((event.keyCode == 9) || (event.keyCode == 13) )
   {
     document.venpedidositem.opcao_busca.focus();
     return false;
   }

      <?php

   }

   function bt_cadastroClick($sender, $params)
   {
      if(trim($this->abrir_cadastro->Text) == "")
      {
         $this->MSG_Erro->Caption = "O Campo de Codigo deve ser preenchido.";
      }
      else
      {
         $Comando_SQL = "select *,date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data,date_format(mgt_pedido_data_entrega, '%d/%m/%Y') AS mgt_pedido_data_entrega, IF(mgt_pedido_status = 'Preparando','#','') AS mgt_pedido_status_1, IF(mgt_pedido_status = 'Faturado','#','') AS mgt_pedido_status_2, IF(mgt_pedido_status = 'Semi-Faturado','#','') AS mgt_pedido_status_3, IF(mgt_pedido_status = 'Aguardando','#','') AS mgt_pedido_status_4, IF(mgt_pedido_status = 'Producao','#','') AS mgt_pedido_status_5 from mgt_pedidos where mgt_pedido_numero = '" . $this->abrir_cadastro->Text . "' and mgt_pedido_status <> 'Faturado' order by mgt_pedido_numero";

         GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->Close();
         GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->EOF) == 1)
         {
            $this->MSG_Erro->Caption = "O Cadastro Nao foi encontrado.";
         }
         else
         {
            redirect('ven_pedidos_item_alt.php?mgt_pedido_numero=' . $this->abrir_cadastro->Text);
         }
      }
   }

   function registrosJSRowChanged($sender, $params)
   {

      ?>
   //Add your javascript code here

      //*** Obtem o Registro Clicado ***

      document.venpedidositem.abrir_cadastro.value = registros.getTableModel().getValue(1, registros.getFocusedRow());

      <?php

   }

   function bt_buscarClick($sender, $params)
   {
      require_once("includes/inverte_data_amd_to_dma.fnc.php");
      require_once("includes/inverte_data_dma_to_amd.fnc.php");

      $Comando_SQL = "Select ";
      $Comando_SQL .= "mgt_pedido_status, ";
      $Comando_SQL .= "mgt_pedido_numero, ";
      $Comando_SQL .= "mgt_pedido_cliente_codigo, ";
      $Comando_SQL .= "mgt_pedido_cliente_nome, ";
      $Comando_SQL .= "mgt_pedido_data, ";
      $Comando_SQL .= "date_format(mgt_pedido_data, '%d/%m/%Y') AS mgt_pedido_data_inv, ";
      $Comando_SQL .= "mgt_pedido_data_entrega, ";
      $Comando_SQL .= "date_format(mgt_pedido_data_entrega, '%d/%m/%Y') AS mgt_pedido_data_entrega_inv, ";
      $Comando_SQL .= "mgt_pedido_produto_codigo, ";
      $Comando_SQL .= "mgt_pedido_produto_descricao, ";
      $Comando_SQL .= "mgt_pedido_produto_quantidade, ";
      $Comando_SQL .= "mgt_pedido_produto_quantidade_faturado, ";
      $Comando_SQL .= "mgt_pedido_produto_quantidade_faturar, ";
      $Comando_SQL .= "mgt_mapa_produto_numero_pedido, ";
      $Comando_SQL .= "mgt_mapa_produto_codigo, ";
      $Comando_SQL .= "mgt_mapa_produto_quantidade_producao, ";
      $Comando_SQL .= "mgt_mapa_produto_quantidade_produzido, ";
      $Comando_SQL .= "mgt_mapa_produto_quantidade_problemas ";
      $Comando_SQL .= "FROM ";
      $Comando_SQL .= "mgt_pedidos_produtos ";
      $Comando_SQL .= "LEFT JOIN ";
      $Comando_SQL .= "mgt_mapas_produtos ON ";
      $Comando_SQL .= "(mgt_pedidos_produtos.mgt_pedido_produto_numero_pedido = mgt_mapas_produtos.mgt_mapa_produto_numero_pedido AND ";
      $Comando_SQL .= "mgt_pedidos_produtos.mgt_pedido_produto_codigo = mgt_mapas_produtos.mgt_mapa_produto_codigo) ";
      $Comando_SQL .= "LEFT JOIN ";
      $Comando_SQL .= "mgt_pedidos ON ";
      $Comando_SQL .= "(mgt_pedidos_produtos.mgt_pedido_produto_numero_pedido = mgt_pedidos.mgt_pedido_numero) ";
      $Comando_SQL .= "WHERE ";

      if(trim($this->dados_busca->Text) == "")
      {
         $Comando_SQL .= "mgt_pedidos.mgt_pedido_status <> 'Faturado' ";
      }
      else
      {
         if(trim($this->opcao_busca->ItemIndex) == "Numero")
         {
            $Comando_SQL .= "mgt_pedido_numero = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Data")
         {
            $Comando_SQL .= "mgt_pedidos where mgt_pedido_data = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Cliente")
         {
            $Comando_SQL .= "mgt_pedido_cliente_nome like '%" . trim($this->dados_busca->Text) . "%' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Valor")
         {
            $Comando_SQL .= "mgt_pedido_valor_total = '" . trim($this->dados_busca->Text) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Entrega")
         {
            $Comando_SQL .= "mgt_pedido_data_entrega = '" . inverte_data_dma_to_amd(trim($this->dados_busca->Text)) . "' ";
         }
         elseif(trim($this->opcao_busca->ItemIndex) == "Status")
         {
            $Comando_SQL .= "mgt_pedido_status = '" . trim($this->dados_busca->Text) . "' ";
         }
      }

      $Comando_SQL .= "Order By mgt_pedido_numero Desc ";

      GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->SQL;
   }

   function venpedidositemCreate($sender, $params)
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
         if(isset($this->bt_incluir))
         {
            $this->bt_incluir->Visible = false;
         }
         if(isset($this->bt_alterar))
         {
            $this->bt_alterar->Visible = false;
         }
         if(isset($this->bt_excluir))
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

      GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->Close();
      GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->Open();

      //*** Registra o Ultimo Comando de Selecao ***
      $_SESSION['comando_sql_grid'] = '';
      $_SESSION['comando_sql_grid'] = GetConexaoPrincipal()->SQL_MGT_Pedidos_Itens->SQL;
   }

   function venpedidositemJSLoad($sender, $params)
   {

      ?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

      <?php

   }

}

global $application;

global $venpedidositem;

//Creates the form
$venpedidositem = new venpedidositem($application);

//Read from resource file
$venpedidositem->loadResource(__FILE__);

//Shows the form
$venpedidositem->show();

?>