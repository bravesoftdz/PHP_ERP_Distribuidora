<?php
<object class="estmanutencao" name="estmanutencao" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">estmanutencao</property>
  <property name="Width">755</property>
  <property name="OnCreate">estmanutencaoCreate</property>
  <property name="jsOnLoad">estmanutencaoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption">MOVIMENTO DE ESTOQUE</property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption">Busca</property>
    <property name="Height">80</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">24</property>
    <property name="Width">730</property>
    <object class="Label" name="Label3" >
      <property name="Caption">Dados Para Busca</property>
      <property name="Height">13</property>
      <property name="Left">24</property>
      <property name="Name">Label3</property>
      <property name="Top">28</property>
      <property name="Width">304</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Opcoes]]></property>
      <property name="Height">13</property>
      <property name="Left">466</property>
      <property name="Name">Label4</property>
      <property name="Top">28</property>
      <property name="Width">160</property>
    </object>
    <object class="Edit" name="dados_busca" >
      <property name="Height">21</property>
      <property name="Left">24</property>
      <property name="Name">dados_busca</property>
      <property name="Top">41</property>
      <property name="Width">424</property>
      <property name="jsOnKeyPress">dados_buscaJSKeyPress</property>
    </object>
    <object class="ComboBox" name="opcao_busca" >
      <property name="Height">18</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:2:{s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:9:&quot;Descricao&quot;;s:9:&quot;Descricao&quot;;}]]></property>
      <property name="Left">466</property>
      <property name="Name">opcao_busca</property>
      <property name="Top">42</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">opcao_buscaJSKeyPress</property>
    </object>
    <object class="Button" name="bt_buscar" >
      <property name="Caption">Buscar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">bt_buscar</property>
      <property name="Top">39</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_buscarClick</property>
    </object>
  </object>
  <object class="DBGrid" name="registros" >
    <property name="Columns"><![CDATA[a:8:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;510&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Qtde. Atual&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_produto_estoque_atual&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Qtde. Ideal&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_produto_estoque_ideal&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Qtde. Minima&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_produto_estoque_minimo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:13:&quot;Qtde. Inicial&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_produto_estoque_inicial&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:14:&quot;taRightJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Valor Venda&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:17:&quot;mgt_produto_preco&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:9:&quot;stNumeric&quot;;s:14:&quot;TitleAlignment&quot;;s:14:&quot;taRightJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Localizacao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_produto_localizacao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}}]]></property>
    <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
    <property name="Height">108</property>
    <property name="Left">8</property>
    <property name="Name">registros</property>
    <property name="ReadOnly">1</property>
    <property name="Top">130</property>
    <property name="Width">730</property>
    <property name="jsOnRowChanged">registrosJSRowChanged</property>
  </object>
  <object class="Label" name="Label2" >
    <property name="Caption">Registros Obtidos:</property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label2</property>
    <property name="Top">112</property>
    <property name="Width">139</property>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption">Produto</property>
    <property name="Height">197</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">245</property>
    <property name="Width">730</property>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label6</property>
      <property name="Top">24</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">271</property>
      <property name="Name">Label7</property>
      <property name="Top">24</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption">Qtde. Inicial</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label8</property>
      <property name="Top">48</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Qtde. Atual</property>
      <property name="Height">13</property>
      <property name="Left">271</property>
      <property name="Name">Label9</property>
      <property name="Top">48</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Qtde. Ideal</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label10</property>
      <property name="Top">72</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption"><![CDATA[Qtde. Minima]]></property>
      <property name="Height">13</property>
      <property name="Left">271</property>
      <property name="Name">Label11</property>
      <property name="Top">72</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption">Qtde.</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label12</property>
      <property name="Top">96</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">Valor Venda</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label13</property>
      <property name="Top">120</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[Localizacao]]></property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label14</property>
      <property name="Top">144</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[Observacao]]></property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label15</property>
      <property name="Top">168</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">104</property>
      <property name="Name">produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">20</property>
      <property name="Width">121</property>
    </object>
    <object class="Edit" name="qtde_inicial" >
      <property name="Height">21</property>
      <property name="Left">104</property>
      <property name="Name">qtde_inicial</property>
      <property name="Top">44</property>
      <property name="Width">121</property>
    </object>
    <object class="Edit" name="qtde_ideal" >
      <property name="Height">21</property>
      <property name="Left">104</property>
      <property name="Name">qtde_ideal</property>
      <property name="Top">68</property>
      <property name="Width">121</property>
    </object>
    <object class="Edit" name="qtde" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">104</property>
      <property name="Name">qtde</property>
      <property name="ParentColor">0</property>
      <property name="Top">92</property>
      <property name="Width">121</property>
    </object>
    <object class="Edit" name="valor_venda" >
      <property name="Height">21</property>
      <property name="Left">104</property>
      <property name="Name">valor_venda</property>
      <property name="Top">116</property>
      <property name="Width">121</property>
    </object>
    <object class="Edit" name="localizacao" >
      <property name="Height">21</property>
      <property name="Left">104</property>
      <property name="Name">localizacao</property>
      <property name="Top">140</property>
      <property name="Width">609</property>
    </object>
    <object class="Edit" name="observacao" >
      <property name="Height">21</property>
      <property name="Left">104</property>
      <property name="Name">observacao</property>
      <property name="Top">164</property>
      <property name="Width">609</property>
    </object>
    <object class="Edit" name="produto_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">360</property>
      <property name="Name">produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">20</property>
      <property name="Width">353</property>
    </object>
    <object class="Edit" name="qtde_atual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">360</property>
      <property name="Name">qtde_atual</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">44</property>
      <property name="Width">121</property>
    </object>
    <object class="Edit" name="qtde_minima" >
      <property name="Height">21</property>
      <property name="Left">360</property>
      <property name="Name">qtde_minima</property>
      <property name="Top">68</property>
      <property name="Width">121</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">449</property>
    <property name="Width">730</property>
    <object class="Button" name="Button1" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">Button1</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_adicionar" >
      <property name="Caption">Adicionar</property>
      <property name="Height">25</property>
      <property name="Left">260</property>
      <property name="Name">bt_adicionar</property>
      <property name="Top">17</property>
      <property name="Width">98</property>
      <property name="OnClick">bt_adicionarClick</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">20</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">18</property>
      <property name="Width">131</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
    </object>
    <object class="Panel" name="Panel2" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel2</property>
      <property name="ParentColor">0</property>
      <property name="Top">33</property>
      <property name="Width">10</property>
    </object>
    <object class="Button" name="bt_remover" >
      <property name="Caption">Remover</property>
      <property name="Height">25</property>
      <property name="Left">371</property>
      <property name="Name">bt_remover</property>
      <property name="Top">17</property>
      <property name="Width">98</property>
      <property name="OnClick">bt_removerClick</property>
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
