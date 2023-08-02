# O  PROJETO:

API de CRUD desenvolvido em Laravel v10.17.0 (PHP v8.1.21), para cadastro de Posts e Categorias (Model Blog). 

- Utilizado padrão DDD e boas práticas de desenvolvimento.
- Utilizado Teste unitário.
- Utilizado app Insomnia para consumo da API.
- Ambiente docker criado com Laradock

## Como rodar a aplicação

- Clone o repositório para sua máquina
- Navegue até a pasta Laradock
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

## TESTES UNITÁRIOS;
Para executar os testes unitários, dentro do container execute o seguinte comando:

./vendor/bin/phpunit --filter PostControllerTest


## ROTAS DA API:

Rotas para Posts

Todas para Categorias

