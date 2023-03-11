<?php
$exit = false;
$round = 1;
$TicTacToe = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

PrintTTT($TicTacToe);

while(!$exit){
  $number = readline("\nPodaj numer pola: ");
  if($round%2!=0){
      $TicTacToe=PlayerMove("X",$number,$TicTacToe);
      $exit=WinCheckVertical($TicTacToe,$exit,$round);
      $exit=WinCheckHorizontal($TicTacToe,$exit,$round);
      $exit=WinCheckDiagonal($TicTacToe,$exit,$round);
      $round++;
  }
  elseif($round%2==0){
      $TicTacToe=PlayerMove("O",$number,$TicTacToe);
      $exit=WinCheckVertical($TicTacToe,$exit,$round);
      $exit=WinCheckHorizontal($TicTacToe,$exit,$round);
      $exit=WinCheckDiagonal($TicTacToe,$exit,$round);
      $round++;
  }
  if(($round-1)==9) $exit=true;
  PrintTTT($TicTacToe);
}

function PrintTTT($TicTacToe){
    echo "\n";
    for ($i=0;$i<3;$i++){
        for ($j=0;$j<3;$j++){
            echo ($TicTacToe[$i][$j] . " ");
        }
        echo "\n";
    }
}
function PlayerMove($symbol,$number,$TicTacToe){
    for ($i=0;$i<3;$i++){
        for ($j=0;$j<3;$j++){
            if($number==$TicTacToe[$i][$j])
                $TicTacToe[$i][$j]=$symbol;
        }
    }
    return $TicTacToe;
}

function WinCheckVertical($TicTacToe,$exit,$round){
    for ($i=0;$i<3;$i++){
            if($TicTacToe[0][$i]==$TicTacToe[1][$i] && $TicTacToe[0][$i]==$TicTacToe[2][$i]){
                echo "\nWinner: ";
                if($round%2!=0) echo "X\n";
                else echo "O\n";
                $exit=true;
            }
    }
    return $exit;
}
function WinCheckHorizontal($TicTacToe,$exit,$round){
    for ($i=0;$i<3;$i++){
        if($TicTacToe[$i][0]==$TicTacToe[$i][1] && $TicTacToe[$i][0]==$TicTacToe[$i][2]){
            echo "Winner: ";
            if($round%2!=0) echo "X\n";
            else echo "O\n";
            $exit=true;
        }
    }
    return $exit;
}

function WinCheckDiagonal($TicTacToe,$exit,$round){
        if($TicTacToe[0][0]==$TicTacToe[1][1] && $TicTacToe[0][0]==$TicTacToe[2][2]){
            echo "Winner: ";
            if($round%2!=0) echo "X\n";
            else echo "O\n";
            $exit=true;
        }
        if($TicTacToe[0][2]==$TicTacToe[1][1] && $TicTacToe[0][2]==$TicTacToe[2][0]){
            echo "Winner: ";
            if($round%2!=0) echo "X\n";
            else echo "O\n";
            $exit=true;
        }
    return $exit;
}