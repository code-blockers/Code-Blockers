# Projeto de Tênis

Este é um projeto de loja virtual de tênis, desenvolvido para fornecer uma plataforma onde os usuários podem explorar, visualizar e comprar uma variedade de tênis. Este README fornece informações sobre a configuração, instalação e uso do projeto.

## Requisitos

- PHP >= 7.0
- MySQL
- Composer
- Git

## Configuração do Ambiente

1. Clone o repositório:
   ```bash
   git clone [https://github.com/seu-usuario/nome-do-repositorio.git](https://github.com/code-blockers/Code-Blockers)
   ```

2. Navegue até o diretório do projeto:
   ```bash
   cd nome-do-repositorio
   ```

3. Instale as dependências usando o Composer:
   ```bash
   composer install
   ```

4. Configure o banco de dados:
   - Crie um banco de dados MySQL para o projeto.
   - Copie o arquivo `.env.example` para um novo arquivo chamado `.env` e configure as variáveis de ambiente, incluindo as credenciais do banco de dados.

5. Execute as migrações do banco de dados:
   ```bash
   php artisan migrate
   ```

6. Inicie o servidor embutido do PHP:
   ```bash
   php -S localhost:8000 -t public
   ```

7. Acesse o projeto no navegador: [http://localhost:8000](http://localhost:8000)

## Funcionalidades Principais

- **Explorar Tênis:**
  - Navegue pela coleção de tênis disponíveis.
  - Visualize detalhes, preços e imagens de cada tênis.

- **Adicionar ao Carrinho:**
  - Adicione tênis desejados ao carrinho de compras.

- **Finalizar Compra:**
  - Prossiga para a finalização da compra no carrinho.
  - Forneça informações de entrega.



