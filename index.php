<?php
  //! HEAD TO .HTACCESS AND CHANGE DIRECTORY ON LINE 6
  
  /**
   * @type HomeRouter $router
   */
  $router = require __DIR__ . "/lib/routepass/routepass.php";
  $router->setBodyParser(HomeRouter::BODY_PARSER_JSON());
  $router->setViewDirectory(__DIR__ . "/views");
  
  $router->onErrorEvent(function (string $message, Request $request, Response $response) {
    $response->render("error", ["message" => $message]);
  });

  $router->get("/", [function (Request $request, Response $response) {
    $response->send("Hello world!");
  }]);
  
  $router->serve();
?>