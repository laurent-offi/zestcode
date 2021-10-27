<?php

function TimeAgo ($oldTime, $newTime) {
    $timeCalc = strtotime($newTime) - strtotime($oldTime);
    if ($timeCalc >= (60*60*24*30*12*2)){
        $timeCalc = intval($timeCalc/60/60/24/30/12) . " ans";
        }else if ($timeCalc >= (60*60*24*30*12)){
            $timeCalc = intval($timeCalc/60/60/24/30/12) . " an";
        }else if ($timeCalc >= (60*60*24*30*2)){
            $timeCalc = intval($timeCalc/60/60/24/30) . " mois";
        }else if ($timeCalc >= (60*60*24*30)){
            $timeCalc = intval($timeCalc/60/60/24/30) . " mois";
        }else if ($timeCalc >= (60*60*24*2)){
            $timeCalc = intval($timeCalc/60/60/24) . " jours";
        }else if ($timeCalc >= (60*60*24)){
            $timeCalc = " un jour";
        }else if ($timeCalc >= (60*60*2)){
            $timeCalc = intval($timeCalc/60/60) . " heures";
        }else if ($timeCalc >= (60*60)){
            $timeCalc = intval($timeCalc/60/60) . " heure";
        }else if ($timeCalc >= 60*2){
            $timeCalc = intval($timeCalc/60) . " minutes";
        }else if ($timeCalc >= 60){
            $timeCalc = intval($timeCalc/60) . " minute";
        }else if ($timeCalc > 0){
            $timeCalc .= " secondes";
        }
    return $timeCalc;
    }
