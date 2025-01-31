<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->group('/public', function () use ($app) {
    $app->get('/echo', 'getEcho');
});

/**
 * @param \Slim\Http\Request  $p_request  The request.
 * @param \Slim\Http\Response $p_response The response.
 * @param array               $p_args     Arguments
 *
 * @return \Slim\Http\Response The augmented response.
 */
function getEcho(Request $request, Response $response, array $p_args)
{
    return $response->withJson(['message' => 'echo']);
}
