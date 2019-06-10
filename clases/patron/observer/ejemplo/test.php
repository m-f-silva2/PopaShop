<?php  
require_once "Partido.php";
require_once "Mail.php";
require_once "Log.php";
$partido = new Partido('Colombia', 'Peru');
$partido->attach(new Mail());
$partido->attach(new Log());
$partido->gol('Colombia');
$partido->gol('Colombia');
$partido->gol('Peru');
echo $partido->getScore();
/**
 * Resultado:
 * Enviando Email con marcador Colombia: 1 | Peru: 0
 * Guardando archivo con marcador Colombia: 1 | Peru: 0
 *
 * Enviando Email con marcador Colombia: 2 | Peru: 0
 * Guardando archivo con marcador Colombia: 2 | Peru: 0
 *
 * Enviando Email con marcador Colombia: 2 | Peru: 1
 * Guardando archivo con marcador Colombia: 2 | Peru: 1
 * Colombia: 2 | Peru: 1
 **/

?>