<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    $this->logger->info("Slim-Skeleton '/' route");
    return $this->view->render($response, 'index.html',[]);
});

$app->group('/customers',function (){
   $this->get('/add',function ($request,$response,$args){
       return $this->view->render($response, '/customers/add.html',[]);
   });
});

