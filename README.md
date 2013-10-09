Auto Coupons Magento Modal
==============================

Sobre o Módulo
--------------

O módulo Auto Coupons cria uma rota para recebimento de POSTs com a informação de um email para cadastrado no banco de newsletter, geração e envio de um CUPOM de desconto baseado em uma regra de promoção pré existente na loja Magento através de um Email transacional que deve ser definido pelo lojista.

Instruções
--------------

Realize backup completo do seu site, banco de dados e arquivos antes de instalar qualquer módulo.

Requerimentos
--------------

- Magento 1.4.2.0 ou superior
- PHP 5.2.0 ou superior
- jQuery > 1.7.x (não incluso no módulo)

Observações Importantes
--------------

- Esse módulo não é "Plug and Play". Você precisa modificar o arquivo modal.phtml de acordo com suas necessidades e instaciar o bloco, como por exemplo:
	&lt;block type="autocoupons/standard_modal" template="autocoupons/modal.phtml" name="autocoupons.modal" as="autocoupons_modal" /&gt;

- A URL que seu formulário deve fazer o POST com o email a receber o código do cupom é http://&lt;MagentoBaseUrl&gt;/autocoupons/standard/generate. Você pode utilizar qualquer formulário para ativar o disparo desde que o destino do post esteja correto.
- O CSS e JS do modal foi feito inpage, no arquivo modal.phtml. Sabemos que essa não é a forma mais adequada mas foi utilizada para simplicar a edição do modal para outras lojas.

Bugs?
--------------
Utilize o próprio GitHub para reportar problemas ou entre em contato comigo via email: denis dot spalenza (at) xpdev dot com dot br

Licença
--------------
Todo commit desse repositório está sob a lincença OSL-3.0, veja VF_LICENSE.txt