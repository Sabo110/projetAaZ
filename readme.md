samir est un site web de peintures
# pour realiser un test on utilise la commande
symfony console make:unit-test
# pour lancer les tests
php bin/phpunit --testdox
 # pour remplir la base de donnees avec de fauses donee on a utilise les fixtures

 pour ce la nous avons d'abord taper en ligne de commande composer require --dev orm-fixtures qui nous as creé un dossier datafixtures et un fichiers la ou nous avons utilisé la librairie faker pour avoir de fausses donnees

 # pour realiser la pagination nous avons besoin d'installer une dependance 
 composer require knplabs/knp-paginator-bundle
 maintenant nous pouvons injecter le paginator interface dans notre controller qui gere l'affichage de la pagination
