<h1>Magento Testes</h1>

<h2>AutoCompletar</h2>
<p>Criei duas extenções de teste seguindo vídeo aulas para o ambiente Magento.</p> 
<p>A primeira extenção (AutoCompletar) apenas preenche de forma automática os campos referente ao 
endereço com base no cep informado.</p>
<p>Selecione um produto e tente fechar uma compra. Ao chegar na tela de <b>encerrar compra</b>, preencha
o código postal primeiro para conferir se os dados referentes ao endereço foram preenchidos automáticamente.</p>
<p>Fonte de estudo: <a href="https://www.youtube.com/watch?v=4SBxnqagapw" targer="_blank">Blog Mario SAM</a></p>

<h2>LogProduct</h2>
<p>Esta outra extenção registra num arquivo de log o nome e o Sku do produto que sofreu alteração no sistema.</p>
<p>Ative os arquivos de log. Caminho System->Configuration->Developer->Log Settings, Enabled = Yes.</p>
<p>Crie o arquivo <b>product-updates.log</b> em var/log/</p>
<p>Atualize um produto e confira a gravação no arquivo <b>product-updates.log</b></p>
<p>Fonte de estudo: <a href="https://www.youtube.com/watch?v=BlW6CGL69o4" targer="_blank">How To Create A Magento Module</a></p>