# Simples arquitetura utilizando Lumen 5.2 e OAuth2

## Instalação e Configuração
 * Crie o projeto utilizando o composer: **composer create-project douglaszuqueto/skeleton-lumen-oauth2**
 * Entre na pasta do projeto criado: **cd skeleton-lumen-oauth2**
 * Crie o arquivo .env: **cp .env.example .env** e configure o arquivo de acordo com suas configurações
 * Execute as migrations: **php artisan migrate**
 * No seu banco de dados:
  * Vá na tabela **users**, e crie seu usuário
  * Vá na tabela **oauth_clients** e crie um cliente. Veja no exemplo abaixo:
    
    ```
    id: app,
    secret: secret
    name: lumen_oauth2
    ```
## Rodando o Projeto

 * Rode o projeto usando o CLI do PHP: **php -S seuIP:suaPorta -t ./public**

## Testando
 * Para testar o projeto, recomendo o uso do [Postman](https://www.getpostman.com/) e se baseie nos recursos relatados no tópico abaixo.

## Recursos

* **GET /**

  ```
  Lumen (5.2.7) (Laravel Components 5.2.*)
  ```
* **POST /oauth/access_token**
 * Dados De entrada
  
    ```
    username:       douglas.zuqueto@gmail.com
    password:       admin
    client_id:      app
    client_secret:  secret
    grant_type:     password
    ```
  * Dados de Saída
  
     ```json
      {
        "access_token": "u53O5pCKsSAlwtXfd1ies7kkC29Pj1APkyzIUvFK",
        "token_type": "Bearer",
        "expires_in": 3600
      }
     ```
* **GET /user**
 * Rota Bloqueada
 
    ```json
    {
      "error": "access_denied",
      "error_description": "The resource owner or authorization server denied the request."
    }
    ```
 * Acessando rota **/user**
    * Precisa-se passar o **Token** no HEADER da requisição
      
       ```
       Authorization: Bearer skwc3ojORUjM6zzPov0BLYTikxrOXNidyJmp2ZVQ
       ```
    *  Retorno
     
      ```json
      [
        {
          "id": 1,
          "name": "Douglas",
          "email": "douglas@.zuqueto@gmail.com",
          "remember_token": null,
          "created_at": "2016-06-27 04:50:03",
          "updated_at": "2016-06-27 04:50:03"
        }
      ]
      ```
