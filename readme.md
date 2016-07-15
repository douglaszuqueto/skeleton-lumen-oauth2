# Simples arquitetura utilizando Lumen 5.2 e OAuth2

## Instalação
 * composer create-project douglaszuqueto/skeleton-lumen-oauth2

## Rodando o Projeto
 * cd skeleton-lumen-oauth2
 * php -S seuIP:suaPorta -t ./public

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
