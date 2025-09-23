# Documentação da Arquitetura

## Tipo de Arquitetura Utilizada

O projeto utiliza uma arquitetura **MVC simplificada** (Model-View-Controller) combinada com princípios de **Arquitetura em Camadas**.

* **MVC** é um padrão clássico para aplicações web que separa claramente a lógica da aplicação em três componentes:

  * **Model (Modelo):** Responsável pelos dados e regras de negócio.
  * **View (Visão):** Responsável pela apresentação da interface com o usuário.
  * **Controller (Controlador):** Responsável por receber as requisições, intermediar entre Model e View e gerenciar o fluxo da aplicação.

* **Arquitetura em Camadas** complementa o MVC ao organizar o sistema em camadas funcionais distintas:

  * **Camada de Apresentação:** Views que exibem dados e recebem entradas.
  * **Camada de Controle:** Controllers que processam requisições.
  * **Camada de Negócio:** Services que implementam as regras de negócio.
  * **Camada de Persistência:** Database para manipulação do armazenamento.

---

## Por que essa arquitetura faz sentido para este projeto?

1. **Separação de Responsabilidades:** Cada camada tem sua função clara, facilitando manutenção, evolução e testes.
2. **Organização e Clareza:** O fluxo de dados e comandos fica bem definido, evitando código misturado e difícil de manter.
3. **Escalabilidade:** Mesmo sendo simples, permite adicionar novas funcionalidades, como autenticação avançada, roles, ou migração para bancos maiores.
4. **Flexibilidade:** Facilidade em trocar componentes (ex: mudar o banco SQLite para MySQL) sem impactar toda a aplicação.
5. **Boa Prática Padrão:** MVC é amplamente usado em aplicações web e conhecido por desenvolvedores, facilitando colaboração e entendimento.

---

## Organização do Projeto

### Diretórios principais e suas responsabilidades:

* **src/Controllers/**
  Contém os *Controllers*, responsáveis por processar as requisições HTTP, invocar regras de negócio e carregar as views.
  Exemplo: `UserController` trata cadastro, login e listagem de usuários.

* **src/Services/**
  Camada de negócio onde regras e validações são implementadas.
  Exemplo: `UserManager` executa cadastro, valida senha, verifica duplicidade e faz reset de senha.

* **src/Entities/**
  Modelagem das entidades do domínio, como a classe `User`, que representa os dados do usuário.

* **src/Database/**
  Gerencia conexão e operações no banco SQLite, abstraindo a persistência de dados.

* **views/**
  Contém os templates HTML/PHP que apresentam a interface do sistema para o usuário.

* **public/**
  Ponto de entrada da aplicação (arquivo index.php), acessível externamente para receber requisições.

---

## Fluxo simplificado da aplicação

1. O arquivo público `index.php` recebe uma requisição com uma ação (ex: login, registro, listagem).
2. O *Controller* correspondente é chamado para tratar a ação.
3. O *Controller* invoca o *Service* para aplicar regras de negócio.
4. O *Service* interage com a camada de *Database* para ler ou gravar dados.
5. O *Controller* carrega a *View* adequada, mostrando resultado ou formulários.
6. Usuário interage, ciclo se repete.

---

## Resumo

O projeto usa uma **arquitetura MVC com camadas**, que é adequada para aplicações web simples a médias, pois promove:

* Código organizado e fácil de entender;
* Separação clara de responsabilidades;
* Manutenção facilitada e escalabilidade futura;
* Adoção de boas práticas modernas de desenvolvimento.
