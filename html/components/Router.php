<?php
    class Router
    {
        private $routes;

        public function __construct()
        {
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include($routesPath);
        }

        private function getURI(){ //returns request string
            //get request URL
            if(!empty($_SERVER['REQUEST_URI']))
            {
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        }
        public function run()
        {
            $uri = $this->getURI();

            //get routes
            foreach ($this->routes as $uriPattern => $path) 
            {
                //check for matching with routes
                if(preg_match("~$uriPattern~", $uri))
                {
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                    //getting controller and action name
                    $segments = explode('/', $internalRoute);

                    $controllerName = array_shift($segments).'Controller';
                    $actionName = 'action'.ucfirst(array_shift($segments));

                    $parameters = $segments;;
                    
                    //include controller file
                    $controller = ROOT."/controllers/".$controllerName.".php";
                    if(file_exists($controller))
                    {
                        require_once($controller);
                    }

                    //create object
                    $controllerObj = new $controllerName;
                    $result = call_user_func_array(array($controllerObj, $actionName), $parameters);
                    if($result != null)
                    {
                        break;
                    }
                }
            }
        }
    }
