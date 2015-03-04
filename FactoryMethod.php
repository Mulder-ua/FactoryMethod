<?php

//Interface is responsible for new create new chessman.
interface ChessmanCreator
{
    public static function getChessman($name);
}

interface Chessman
{
    public function getPosition();
    public function Move();
    public function putOnStartPos();
    public function showRules();
}

class WhiteChessmenCreator implements ChessmanCreator
{
    //Function returns class depend of Chessman name.
    public static function getChessman($name)
    {
        if ($name == "King") {
            return new King();
        } elseif ($name == "Queen") {
            return new Queen();
        } elseif ($name == "Rook") {
            return new Rook();
        } elseif ($name == "Bishop") {
            return new Bishop();
        } elseif ($name == "Knight") {
            return new Knight();
        } elseif ($name == "Pawn") {
            return new Pawn();
        }
    }
}

class King implements Chessman
{
    private $name = 'King';

    public function getPosition() {

    }

    public function Move() {

    }

    public function putOnStartPos() {

    }

    public function showRules() {
        return "<B>" . $this->name . "</B>"
        . "<p>White starts with the king on the first rank to the right of the queen. Black starts with the king "
        . "directly across from the white king. With the squares labeled as in algebraic notation, the white king "
        . "starts on e1 and the black king on e8. A king can move one square in any direction (horizontally, vertically, "
        . "or diagonally) unless the square is already occupied by a friendly piece or the move would place the king in "
        . "check. As a result, the opposing kings may never occupy adjacent squares (see opposition), but the king can "
        . "give discovered check by unmasking a bishop, rook, or queen. The king is also involved in the special move "
        . "of castling.</p>";
    }

}

class Queen implements Chessman
{
    private $name = 'Queen';

    public function getPosition() {

    }

    public function Move() {

    }

    public function putOnStartPos() {

    }

    public function showRules() {
        return "<B>" . $this->name . "</B>"
        . "<p>The queen can be moved any number of unoccupied squares in a straight line vertically, "
        . "horizontally, or diagonally, thus combining the moves of the rook and bishop. The queen captures by occupying"
        . "the square on which an enemy piece sits. Although both players start with one queen each, a player can promote "
        . "a pawn to any of several types of pieces, including a queen, when the pawn is moved to the player's furthest "
        . "rank (the opponent's first rank). Such a queen created by promotion can be an additional queen, or if the"
        . " player's queen has been captured, a replacement queen. Pawn promotion to a queen is colloquially called"
        . " queening, which is by farthe most common type of piece a pawn is promoted to because of the relative"
        . " power of a queen.</p>";
    }

}

class Rook
{
    private $name = 'Rook';

    public function getPosition() {

    }

    public function Move() {

    }

    public function putOnStartPos() {

    }

    public function showRules() {
        return "<B>" . $this->name . "</B>"
        . "<p>In algebraic notation, the white rooks start on squares a1 and h1, while the black rooks start on a8"
        . "and h8. The rook moves horizontally or vertically, through any number of unoccupied squares (see diagram)."
        . "As with captures by other pieces, the rook captures by occupying the square on which the enemy piece sits."
        . "The rook also participates, with the king, in a special move called castling.</p>";
    }
}

class Bishop
{
    private $name = 'Bishop';

    public function getPosition() {

    }

    public function Move() {

    }

    public function putOnStartPos() {

    }

    public function showRules() {
        return "<B>" . $this->name . "</B>"
        . "<p>The bishop has no restrictions in distance for each move, but is limited to diagonal movement. "
        . "Bishops, like all other pieces except the knight, cannot jump over other pieces. A bishop captures"
        . "by occupying the square on which an enemy piece sits. The bishops may be differentiated according to which"
        . "wing they begin on, i.e. the king's bishop and queen's bishop. As a consequence of its diagonal movement, "
        . "each bishop always remains on either the white or black squares, and so it is also common to refer to "
        . "them as light-squared or dark-squared bishops.</p>";
    }
}

class Knight
{
    private $name = 'Knight';

    public function getPosition() {

    }

    public function Move() {

    }

    public function putOnStartPos() {

    }

    public function showRules() {
        return "<B>" . $this->name . "</B>"
        . "<p>The knight move is unusual among chess pieces. When it moves, it can move to a square that is"
        . "two squares horizontally and one square vertically, or two squares vertically and one square horizontally."
        . "The complete move therefore looks like the letter L. Unlike all other standard chess pieces, the knight can "
        . "'jump over' all other pieces (of either color) to its destination square.[1] It captures an enemy piece by"
        . "replacing it on its square. The knight's ability to 'jump over' other pieces means it tends to be at its most"
        . "powerful in closed positions, in contrast to that of a bishop. The move is one of the longest-surviving moves"
        . "in chess, having remained unchanged since before the seventh century. Because of this it also appears in most "
        . "chess-related regional games. The knight moves alternately to light and dark squares.</p>";
    }
}

class Pawn
{
    private $name = 'Pawn';

    public function getPosition() {

    }

    public function Move() {

    }

    public function putOnStartPos() {

    }

    public function showRules() {
        return "<B>" . $this->name . "</B>"
        . "<p>Unlike the other pieces, pawns may not move backwards. Normally a pawn moves by advancing a single square, "
        . "but the first time a pawn is moved, it has the option of advancing two squares. Pawns may not use the initial "
        . "two-square advance to jump over an occupied square, or to capture. Any piece directly in front of a pawn, friend "
        . "or foe, blocks its advance. In the diagram at right, the pawn on c4 may move to c5, while the pawn on e2 may move "
        . "to either e3 or e4.</p>";
    }
}