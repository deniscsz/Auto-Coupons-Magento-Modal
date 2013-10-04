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

Configuração
--------------



Observações
--------------

- A URL que seu formulário deve fazer o POST com o email a receber o código do cupom é http://<MagentoBaseUrl>/autocoupons/standard/generate. Você pode utilizar qualquer formulário para ativar o disparo desde que o destino do post esteja correto.
- O CSS e JS do modal foi feito inpage, no arquivo modal.phtml. Sabemos que essa não é a forma mais adequada mas foi utilizada para simplicar a edição do modal para outras lojas.