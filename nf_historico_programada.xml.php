<?php
<object class="nfhistoricoprogramada" name="nfhistoricoprogramada" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfhistoricoprogramada</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfhistoricoprogramadaCreate</property>
  <property name="jsOnLoad">nfhistoricoprogramadaJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Historico de Vendas Programadas]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">97</property>
    <property name="Left">634</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">24</property>
    <property name="Width">104</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">14</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">37</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
  </object>
  <object class="DBGrid" name="registros" >
    <property name="Columns"><![CDATA[a:8:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_programada_finalidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;30&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:15:&quot;Nro.Programacao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_programada_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;93&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Data&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_programada_data_emissao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;75&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Cliente&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_programada_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;182&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:19:&quot;Vlr.Programacao(R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_programada_valor_total&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;105&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:8:&quot;taCenter&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Data Entrega&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_programada_data_entrega&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;75&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:15:&quot;Nro.Faturamento&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_programada_faturamento&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;85&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Nro.Pedido&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_programada_pedido&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;65&quot;;}}]]></property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Programadas</property>
    <property name="Height">288</property>
    <property name="Left">8</property>
    <property name="Name">registros</property>
    <property name="ReadOnly">1</property>
    <property name="Top">136</property>
    <property name="Width">730</property>
    <property name="jsOnRowChanged">registrosJSRowChanged</property>
    <property name="jsOnRowSaved"></property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">455</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_cadastro" >
      <property name="Caption">Abrir Cadastro</property>
      <property name="Height">25</property>
      <property name="Left">621</property>
      <property name="Name">bt_cadastro</property>
      <property name="Top">16</property>
      <property name="Width">100</property>
      <property name="OnClick">bt_cadastroClick</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Para visualizar a Programacao desejada, clique na linha desejada do grid acima e clique no botao &quot;Abrir Cadastro&quot; ou informe o Nro.Programacao desejada no campo ao lado.]]></property>
      <property name="Height">34</property>
      <property name="Left">5</property>
      <property name="Name">Label5</property>
      <property name="Top">12</property>
      <property name="Width">480</property>
    </object>
    <object class="Edit" name="abrir_cadastro" >
      <property name="Height">21</property>
      <property name="Left">566</property>
      <property name="Name">abrir_cadastro</property>
      <property name="Top">18</property>
      <property name="Width">53</property>
      <property name="jsOnKeyPress">abrir_cadastroJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Programacao]]></property>
      <property name="Height">13</property>
      <property name="Left">488</property>
      <property name="Name">Label1</property>
      <property name="Top">22</property>
      <property name="Width">74</property>
    </object>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption">Registros Obtidos:</property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="Top">122</property>
    <property name="Width">139</property>
  </object>
  <object class="Label" name="MSG_Erro" >
    <property name="Alignment">agCenter</property>
    <property name="Font">
        <property name="Color">#FF0000</property>
    </property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">MSG_Erro</property>
    <property name="ParentFont">0</property>
    <property name="Top">441</property>
    <property name="Width">730</property>
  </object>
  <object class="Label" name="Label12" >
    <property name="Caption"><![CDATA[&lt;b&gt;Valor Total (R$):&lt;/b&gt;]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label12</property>
    <property name="Top">426</property>
    <property name="Width">96</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_valor_total" >
    <property name="Caption">0.00</property>
    <property name="Height">13</property>
    <property name="Left">108</property>
    <property name="Name">mgt_nota_fiscal_valor_total</property>
    <property name="Top">426</property>
    <property name="Width">131</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption">Busca</property>
    <property name="Height">97</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">24</property>
    <property name="Width">616</property>
    <object class="Label" name="Label3" >
      <property name="Caption">Dados Busca</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label3</property>
      <property name="Top">20</property>
      <property name="Width">72</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Opcoes]]></property>
      <property name="Height">13</property>
      <property name="Left">398</property>
      <property name="Name">Label4</property>
      <property name="Top">20</property>
      <property name="Width">44</property>
    </object>
    <object class="Edit" name="dados_busca" >
      <property name="Height">21</property>
      <property name="Left">92</property>
      <property name="Name">dados_busca</property>
      <property name="Top">16</property>
      <property name="Width">302</property>
      <property name="jsOnKeyPress">dados_buscaJSKeyPress</property>
    </object>
    <object class="ComboBox" name="opcao_busca" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:5:{s:7:&quot;Cliente&quot;;s:7:&quot;Cliente&quot;;s:6:&quot;Numero&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Valor&quot;;s:5:&quot;Valor&quot;;s:7:&quot;Entrega&quot;;s:7:&quot;Entrega&quot;;s:10:&quot;Observacao&quot;;s:10:&quot;Observacao&quot;;}]]></property>
      <property name="Left">447</property>
      <property name="Name">opcao_busca</property>
      <property name="Top">16</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">532</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">64</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Data Emissao]]></property>
      <property name="Height">13</property>
      <property name="Left">11</property>
      <property name="Name">Label6</property>
      <property name="Top">44</property>
      <property name="Width">77</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_emissao_ini" >
      <property name="Height">21</property>
      <property name="Left">92</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_emissao_ini</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">40</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_emissao_iniJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_emissao_iniJSKeyUp</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">173</property>
      <property name="Name">Label7</property>
      <property name="Top">44</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_emissao_fim" >
      <property name="Height">21</property>
      <property name="Left">198</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_emissao_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">39</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_emissao_fimJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_emissao_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption">CFOP</property>
      <property name="Height">13</property>
      <property name="Left">53</property>
      <property name="Name">Label8</property>
      <property name="Top">68</property>
      <property name="Width">35</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cfop" >
      <property name="Height">21</property>
      <property name="Left">92</property>
      <property name="Name">mgt_nota_fiscal_cfop</property>
      <property name="Top">64</property>
      <property name="Width">181</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cfopJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_cfopJSKeyUp</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Data Vencimento</property>
      <property name="Height">13</property>
      <property name="Left">323</property>
      <property name="Name">Label9</property>
      <property name="Top">44</property>
      <property name="Width">100</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_ini" >
      <property name="Height">21</property>
      <property name="Left">427</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_ini</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">40</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_iniJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_iniJSKeyUp</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">507</property>
      <property name="Name">Label10</property>
      <property name="Top">44</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_fim" >
      <property name="Height">21</property>
      <property name="Left">532</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_dup_dt_vcto_fim</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">39</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_fimJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_fimJSKeyUp</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">326</property>
      <property name="Name">Label11</property>
      <property name="Top">72</property>
      <property name="Width">31</property>
    </object>
    <object class="ComboBox" name="mgt_nota_fiscal_finalidade" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:4:{s:3:&quot;TOD&quot;;s:5:&quot;Todos&quot;;s:3:&quot;PRD&quot;;s:14:&quot;PRD - Produtos&quot;;s:3:&quot;SRV&quot;;s:14:&quot;SRV - Servicos&quot;;s:3:&quot;NVL&quot;;s:20:&quot;NVL - Nao Vinculados&quot;;}]]></property>
      <property name="Left">361</property>
      <property name="Name">mgt_nota_fiscal_finalidade</property>
      <property name="Top">69</property>
      <property name="Width">141</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_finalidadeJSKeyPress</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">653</property>
        <property name="Top">101</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
