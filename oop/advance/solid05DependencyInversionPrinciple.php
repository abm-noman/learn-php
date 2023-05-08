<?php
//     Dependency Inversion Principle (DIP): High-level modules should not depend on low-level modules. Both should depend on abstractions. Abstractions should not depend on details. Details should depend on abstractions. This means that you should depend on abstractions, rather than concrete implementations, and that your code should be modular and loosely coupled.

//Bad Practice
    class Authinticator{
        public function authenticate($username, $password, $external=false, $externalService=false){
            // Authenticate the user
            if($username == "admin" && $password == "admin"){
                return true;
            }
            else if(true==$external && 'google'==$externalService){
                $ga = new GoogleAuthenticator();
                $ga->authenticate();
            }
            
            else if(true==$external && 'github'==$externalService){
                $ga = new GithubAuthenticator();
                $ga->authenticate();
            }
            else if(true==$external && 'local'==$externalService){
                $ga = new LocalAuthenticator();
                $ga->authenticate();
            }
        }
    }



//     Dependency Inversion Principle (DIP)
    interface AuthServiceProviderInterface{
        function authinticate();
    }
   
    class GithubAuthenticator implements AuthServiceProviderInterface{
        function authenticate(){
            return 0;
        }
    }

    class Auth{
        private $authServiceProvider;
        function __construct(AuthServiceProviderInterface $asp){
            $this->authServiceProvider = $asp;
        }
        function auth(){
            return $this->asp->auth();
        }
    }

    $ga = new GithubAuthenticator();
    $auth = new Authenticator($ga);
    $auth->auth();
    


?>