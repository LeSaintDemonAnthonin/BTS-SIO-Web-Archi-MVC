<?php
require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use Quizz\Core\Controller\FastRouteCore;

// Gestion des fichiers environnement
$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// Couche Controller
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {
    $route->addRoute('GET', '/', 'Quizz\Controller\HomeController');
    $route->addRoute('GET', '/lister', 'Quizz\Controller\Questionnaire\ListController');
    $route->addRoute('GET', '/detail/{id:\d+}', 'Quizz\Controller\Questionnaire\ViewController');
    $route->addRoute('GET', '/etudiant', 'Quizz\Controller\etudiant\EtudiantsController');
    $route->addRoute(['GET','POST'], '/etudiant/add', 'Quizz\Controller\etudiant\addEtudiantController');
    $route->addRoute(['GET','POST'],'/update/{id:\d+}','Quizz\Controller\etudiant\updateEtudiantController');
});
// Dispatcher -> Couche view
echo FastRouteCore::getDispatcher($dispatcher);
//controller vient analiser les demandes htttp et en fonction de la demande va venir charger les bonnes classes de types controller
// et von tfaire si besoin référence a un ou des models

// pour mercredi faire un exemple de post de formulaire dan sla base de données