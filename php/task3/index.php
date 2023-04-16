<?php

class RankingTable
{
    private $players = [];

    public function __construct($playerNames)
    {
        $order = 1;
        foreach ($playerNames as $playerName) {
            $this->players[$playerName] = [
                'score' => 0,
                'gamesPlayed' => 0,
                'order' => $order
            ];
            $order++;
        }
    }

    public function recordResult($playerName, $score)
    {
        if (isset($this->players[$playerName])) {
            $this->players[$playerName]['score'] += $score;
            $this->players[$playerName]['gamesPlayed']++;
        }
    }

    public function playerRank($rank)
    {
        uasort($this->players, function ($a, $b) {
            if ($a['score'] === $b['score']) {
                if ($a['gamesPlayed'] === $b['gamesPlayed']) {
                    return $a['order'] - $b['order'];
                } else {
                    return $a['gamesPlayed'] - $b['gamesPlayed'];
                }
            } else {
                return $b['score'] - $a['score'];
            }
        });

        $rankedPlayers = array_values($this->players);
        $rank--;

        if ($rank >= 0 && $rank < count($rankedPlayers)) {
            echo array_search($rankedPlayers[$rank], $this->players);
        } else {
            echo null;
        }
    }
}

$table = new RankingTable(['Jan', 'Maks', 'Monika']);

$table->recordResult('Jan', 2);
$table->recordResult('Maks', 3);
$table->recordResult('Monika', 5);

$table->playerRank(1);
