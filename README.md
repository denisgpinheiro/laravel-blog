# O  PROJETO:

API de CRUD desenvolvido em Laravel v10.17.0 (PHP v8.1.21), para cadastro de Posts e Categorias (Model Blog). 

- Utilizado padrão DDD e boas práticas de desenvolvimento.
- Utilizado Teste unitário.
- Utilizado app Insomnia para consumo da API.
- Ambiente docker criado com Laradock

## Como rodar a aplicação

- Clone o repositório para sua máquina
- Navegue até a pasta Laradock:
	cd laradock
	
- Suba os containers executando:
	docker-compose up -d nginx mysql 
	
- Após todos os containers estarem em execução, utilize o comando "docker  ps" e localize o container "laradock-workspace"

- Copie o ID do container e acesse-o utilizando o seguinte comando:

docker exec -it [ID-DO-CONTAINER] bash

- Dentro do containenr, execute o comando "composer install".

- Execute as Migrations:

	php artisan migrate
	
- Execute os Seeders:
	php artisan db:seed
	
- Utilize o arquivo Insomnia_2023-08-02.json e importe-o para o "Insomnia" para executar as respectivas rotas.

  ARQUIVO INSOMNIA: https://drive.google.com/file/d/15PlMWwFHG7B4OOsLdsfCp6VMsQ7ALZxo/view?usp=sharing
  

## TESTES UNITÁRIOS;
Para executar os testes unitários, dentro do container execute o seguinte comando:

./vendor/bin/phpunit --filter PostControllerTest

PRINT: !(https://prnt.sc/zcbe80i2A73c)

## ROTAS DA API:

Rotas para Posts
- GET: /posts - Listar todos os posts
- GET: /posts/{id} - Mostrar detalhes de um post
- POST: /posts - Criar um novo post
- PUT: /posts/{id} - Atualizar um post
- DELETE: /posts/{id} - Excluir um post

Todas para Categorias
- GET: /categories - Listar todas as categorias
- GET: /categories/{id} - Mostrar detalhes de uma categoria
- POST: /categories - Criar uma nova categoria
- PUT: /categories/{id} - Atualizar uma categoria
- DELETE: /categories/{id} - Excluir uma  categoria

Alguns prints do Insomnia:
- !(https://prnt.sc/JTKkdqGPfgA4)
- !(https://prnt.sc/ELXnBBL-34kV)
- !(https://prnt.sc/F0Ej9DCw-ouF)
