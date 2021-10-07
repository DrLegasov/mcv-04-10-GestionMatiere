<?php



if(!empty($_GET['action'])):
    
switch ($_GET ['action']) {
                            case 'subjectsList':
                                require('controllers/subjectController.php');
                                break;
                            case 'sessionsList':
                                require('controllers/sessionsController.php');
                                break;
                            case 'trainersList':
                                require('controllers/trainersController.php');
                                break;
                            case 'UsList':
                                require('controllers/UsController.php');
                                break;
                            default:
                                require('controllers/errorController.php');
                            }
endif;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>Document</title>
</head>

<body>
    <header class="gestion">
        <h2 class="mx-auto my-5">Gestion des Formations</h2>
    </header>
    <main>
        <div class="container justify-content-center">
            <div class="accordion mx-2" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            SESSIONS
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <button type="button" class="btn btn-outline-success my-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                AJOUTER
                            </button>
                            <a href="index.php"
                                class="btn btn-outline-info my-2 mx-1 accordion-collapse collapse show">RAFRAICHIR</a><br><hr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une SESSION</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input class="addform  form-control" type="text"
                                                placeholder="Intitulé de la session"><br>
                                            <input class="addform  form-control" type="date"
                                                placeholder="Date de Débvbut"><br>
                                            <input class="addform  form-control" type="date"
                                                placeholder="Date de Fin"><br>
                                            <input class="addform  form-control" type="number"
                                                placeholder="Nombre d'apprenants"><br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-dark"
                                                data-bs-dismiss="modal">ANNULER</button>
                                            <button type="button" class="btn btn-success">VALIDER</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <strong></strong> <?php include("controllers/sessionsController.php"); ?> <code></code>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseTwo">
                            MATIERE
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <button
                                class="btn btn-outline-success my-2 mx-1 accordion-collapse collapse show">AJOUTER</button>
                            <a href="index.php"
                                class="btn btn-outline-info my-2 mx-1 accordion-collapse collapse show">RAFRAICHIR</a><br><hr>
                            <strong></strong> <?php include("controllers/subjectController.php")  ;?> <code></code>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            INTERVENANTS
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <button
                                class="btn btn-outline-success my-2 mx-1 accordion-collapse collapse show">AJOUTER</button>
                            <a href="index.php"
                                class="btn btn-outline-info my-2 mx-1 accordion-collapse collapse show">RAFRAICHIR</a><br><hr>
                            <strong>.</strong> <?php include("controllers/trainersController.php")  ;?> <code></code>,
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseThree">
                            APPRENANTS
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <button
                                class="btn btn-outline-success my-2 mx-1 accordion-collapse collapse show">AJOUTER</button>
                            <a href="index.php"
                                class="btn btn-outline-info my-2 mx-1 accordion-collapse collapse show">RAFRAICHIR</a><br>
                            <hr>

                            <strong>This is the third item's accordion body.</strong>
                            <?php include("controllers/UsController.php")   ;?> <code></code>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <footer>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>