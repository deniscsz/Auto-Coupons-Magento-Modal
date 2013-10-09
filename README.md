Auto Coupons Magento Modal
==============================

Sobre o M�dulo
--------------

O m�dulo Auto Coupons cria uma rota para recebimento de POSTs com a informa��o de um email para cadastrado no banco de newsletter, gera��o e envio de um CUPOM de desconto baseado em uma regra de promo��o pr� existente na loja Magento atrav�s de um Email transacional que deve ser definido pelo lojista.

Instru��es
--------------

Realize backup completo do seu site, banco de dados e arquivos antes de instalar qualquer m�dulo.

Requerimentos
--------------

- Magento 1.4.2.0 ou superior
- PHP 5.2.0 ou superior
- jQuery > 1.7.x (n�o incluso no m�dulo)

Observa��es
--------------

- Esse m�dulo n�o � "Plug and Play". Voc� precisa modificar o arquivo modal.phtml de acordo com suas necessidades e instaciar o bloco, como por exemplo:

    <block type="autocoupons/standard_modal" template="autocoupons/modal.phtml" name="autocoupons.modal" as="autocoupons_modal" />

- A URL que seu formul�rio deve fazer o POST com o email a receber o c�digo do cupom � http://<MagentoBaseUrl>/autocoupons/standard/generate. Voc� pode utilizar qualquer formul�rio para ativar o disparo desde que o destino do post esteja correto.
- O CSS e JS do modal foi feito inpage, no arquivo modal.phtml. Sabemos que essa n�o � a forma mais adequada mas foi utilizada para simplicar a edi��o do modal para outras lojas.