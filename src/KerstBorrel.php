<?php

namespace TDD;

    class KerstBorrel{
        public function kostenKerstpakket($aantalPersoneelsleden, $maxBudget){

            if($aantalPersoneelsleden < 1 ){
                echo "Het aantal personeelsleden valt buiten bereik";
                return false;
            } elseif ($aantalPersoneelsleden > 32){
                echo "Het aantal personeelsleden valt buiten bereik";
                return false;
            };

            //kosten in euro voor de flessen drank die worden gedronken tijdens de kerstborrel
            $dranken = 8 * (round(0.5 * $aantalPersoneelsleden));

            //kosten in euro voor de snacks die worden gegeten tijdens de kerstborrel
            $snacks = 2 * (round(6.5 * $aantalPersoneelsleden));

            if($maxBudget < 200 ){
                echo "Het maximum budget voor het kerstpakket valt buiten bereik";
                return false;
            } elseif ($maxBudget > 8000){
                echo "Het maximum budget voor het kerstpakket valt buiten bereik";
                return false;
            };

            //kosten in eiro per stuk voor het kerstpakket dat wordt uitgedeeld na afloop van de kerstborrel
            $kostenKerstpaket = ($maxBudget - $dranken - $snacks) / $aantalPersoneelsleden;

            if($kostenKerstpaket > 250){
                echo "Bedrag is hoger dan de toegestaande 250 euro";
                return false;
            };

            return round($kostenKerstpaket);
            
        }
    }






?>