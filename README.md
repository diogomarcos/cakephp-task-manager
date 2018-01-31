CakePHP Task Manager
=======================

Introdução
------------
Esse projeto tem como objetivo realizar a apresentação e o conhecimento relacionada ao desenvolvimento PHP. 
Nesse caso foi utilizado o CakePHP 3 para essa finalidade.

O Projeto consiste na exibição/listagens de tarefas, com os recursos de adicionar uma nova tarefa (com título, descrição e prioridade), 
editar uma determinada tarefa, visualizar as informações de uma determinada tarefa e ainda a sua exclusão. 
Uma outra funcionalidade é a opção de definir prioridade das tarefas com o uso do Drag and Drop.

O sistema ainda possui a opção de consumir as informações através da API Rest.

Regras da aplicação
---------------------------
+ Gerenciador de tarefas com inclusão / alteração e exclusão
+ Interface para visualização da lista de tarefas
+ Interface com drag and drop
+ Interface responsiva

### Tecnologias usadas
Para o desenvolvimento da aplicação foram utilizados os seguintes recursos:

+ CakePHP 3.5
+ Restfull
+ Bootstrap

### Ambiente de Desenvolvimento

+ IDE PHPStorm

### Requisitos da Aplicação

+ Git
+ PHP 5
+ Composer

### Execução da Aplicação
Para realizar o uso da aplicação, basta seguir os seguintes passos:

1. Através do 'prompt command' ou 'git bash', realizar o clone do projeto pelo comando:

        git clone git@github.com:diogomarcos/cakephp-task-manager.git cakephp-task-manager

2. Com o 'prompt command' ou 'git bash', navegue até a pasta do projeto `cakephp-task-manager` e execute os comandos abaixo para 
fazer o download dos requisitos necessários para o funcionamento da aplicação:

        php composer.phar install
        php composer.phar update

3. Assim que finalizar o passo 2, pelo 'prompt command' ou 'git bash', estando na pasta do projeto `cakephp-task-manager` execute 
o comando abaixo para executar a migration:

        No Windows: bin\cake.bat migrations migrate 
        
        No Linux: bin\cake migrations migrate

4. Finalizando o passo 3, pelo 'prompt command' ou 'git bash', estando na pasta do projeto `cakephp-task-manager` execute 
o comando abaixo para executar a aplicação:

        No Windows: bin\cake.bat server 
                
        No Linux: bin\cake server

5. Em seu navegador de preferência use o endereço abaixo para ter acesso a aplicação:

        http://localhost:8765

### Considerações Complementares
1. Para usar o projeto como API REST basta seguir os detalhes a seguir. E para teste basta ter algum cliente, como o Postman.
2. Para que funcione corretamente o cliente (Postman por exemplo), é recomendado que adicione o projeto em uma Virtual Host.

+ Ação Index (GET):
    + Retorno: http://localhost:8765/tasks.json (http://task-manager/tasks.json)
    + URL: http://localhost:8765/tasks (http://task-manager/tasks)
    + HTTP Method: GET
    + Accept Header: application/json
    + Exemplo:
    ![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/index-get.PNG)

+ Ação View (GET):
    + Retorno: http://localhost:8765/tasks/2.json (http://task-manager/tasks/2.json)
    + URL: http://localhost:8765/tasks/2 (http://task-manager/tasks/2)
    + HTTP Method: GET
    + Accept Header: application/json
    + Exemplo:
    ![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/view-get.PNG)

+ Ação Add (POST):
    + URL: http://localhost:8765/tasks (http://task-manager/tasks)
    + HTTP Method: POST
    + Accept Header application/json
    + Content-Type Header: application/json
    + Body: title, description e priority
    + Exemplo:
    ![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/add-post.PNG)

+ Ação Edit (PUT):
    + URL: http://localhost:8765/tasks/2 (http://task-manager/tasks/2)
    + HTTP Method: PUT
    + Accept Header application/json
    + Content-Type Header: application/json
    + Body: title, description ou priority
    + Exemplo:
    ![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/edit-put.PNG)

+ Ação Delete (DELETE):
    + URL: http://localhost:8765/tasks/16 (http://task-manager/tasks/16)
    + HTTP Method: DELETE
    + Accept Header application/json
    + Exemplo:
    ![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/delete-delete.PNG)

### Resultado do Desenvolvimento
Abaixo estão disponibilizados as telas da aplicação:

+ Página Inícial / Gerenciar Tarefas:
![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/pagina-inicial.PNG)

+ Página Priorizar Tarefas:
![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/pagina-priorizar.PNG)

+ Página Adicionar Tarefa:
![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/pagina-adicionar.PNG)

+ Página Ver Tarefa:
![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/pagina-ver.PNG)

+ Página Editar Tarefa:
![alt tag](https://raw.githubusercontent.com/diogomarcos/cakephp-task-manager/master/webroot/img/screen/pagina-editar.PNG)

