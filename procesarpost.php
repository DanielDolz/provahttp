<?php

var_dump($_SERVER[REQUEST_METHOD]);

//echo "Hola" . $_POST['nom'];
//
//var_dump($_POST);
//var_dump($_FILES);
//
//// $_POST['name']
//
//// --Laravel--
//// Request -> input('name')
//// Response

//API REST
//
//Recurs: task
//
//CREATE   -> POST miapi.com/task -> Dades:Formulari
//RETRIEVE -> GET miapi.com/task{id} -> Un sol recurs (NO DADES)
//            GET miapi.com/task     -> Tots els recursos (NO DADES)
//UPDATE   -> PUT miapi.com/task{id} -> Dades:Formulari
//DELETE    -> DELETE miapi.com/task{id}  -> NO DADES
