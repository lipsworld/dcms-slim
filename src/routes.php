<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    return $this->view->render($response, '/front/index.html',[]);
});

$app->group('/control-panel',function (){
   $this->get('/index',function ($request,$response,$args){
       return $this->view->render($response, '/admin/index.html',[]);
   });
});

