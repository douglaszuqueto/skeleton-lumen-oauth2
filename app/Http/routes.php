<?php


$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * Autenticação OAuth2
 */
$app->post('oauth/access_token', function () {
    return response()->json(Authorizer::issueAccessToken());
});

/**
 * Rota Protegida
 */
$app->get('/user', ['middleware' => 'oauth', function () {
    return App\User::all();
}]);


