<?php

class Route 
{
    protected static $routes;

    protected $caminho; // URI
    protected $controller;
    protected $method;

    protected $profile; //nivel de acesso da rota

    public function __construct (string $caminho, string $controller, string $method) {
        $this->caminho = $caminho;
        $this->controller = $controller;
        $this->method = $method;
    }

    public function getCaminho () : string {
        return $this->caminho;
    }

    public function getController () : string {
        return $this->controller;
    }

    public function getMethod () : string {
        return $this->method;
    }

    public function getProfile () {
        return $this->profile;
    }

    public static function get (string $caminho, string $controller) : Route {
        //função para registrar uma rota do tipo GET
        if (self::$routes == NULL) { //checa se a lista tá nula
            self::$routes = [];
        }
        
        //cria e adiciona a rota na lista de rotas
        $rota = new Route($caminho, $controller, 'GET');
        array_push(self::$routes, $rota);
        return $rota;
    }

    public static function post (string $caminho, string $controller) : Route {
        if (self::$routes == NULL) { //checa se a lista tá nula
            self::$routes = [];
        }
        
        //cria e adiciona a rota na lista de rotas
        $rota = new Route($caminho, $controller, 'POST');
        array_push(self::$routes, $rota);
        return $rota;
    }

    public static function rotear (string $caminho, string $method, $type) {
        //implementar
        
        foreach (self::$routes as $rota) {            
            if ($rota->getCaminho() == $caminho) {
    
                if ($rota->getMethod() == $method) {
                   
                    if(!empty($rota->getProfile())) {
                        if($rota->getProfile() == $type) {
                            include __DIR__ . $rota->getController();
                            exit;
                        } else {
                            echo "Seu tipo de usuário não permiti acessar está pagina";
                            exit;
                        }
                    } else {
                        include __DIR__ . $rota->getController();
                        exit;
                    }

                } else {
                    echo "Método inadequado";
                    exit;
                }
                
            }
        }

        echo "Página não encontrada";
        exit;

        
    }

    public function only (string $profile) : Route {
        $this->profile = $profile;
        return $this;
    }   

    public function can (string $valor) : Route {
        return $this;
    }


}
