<?php
require_once("FactoryMethod.php");

$player1 = array(WhiteChessmenCreator::getChessman("King"),
                 WhiteChessmenCreator::getChessman("Queen"),
                 WhiteChessmenCreator::getChessman("Rook"),
                 WhiteChessmenCreator::getChessman("Bishop"),
                 WhiteChessmenCreator::getChessman("Knight"),
                 WhiteChessmenCreator::getChessman("Pawn")
);

foreach ( $player1 as $Chessman ) {
    echo $Chessman->showRules();
}
