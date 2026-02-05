<?php
    class Calculatrice {
        public function main(float $a, float $b, string $operateur): float
        {
            switch ($operateur) {
                case '+':
                    return $this->addition($a, $b);
                case '-':
                    return $this->soustraction($a, $b);
                case '*':
                    return $this->multiplication($a, $b);
                case '/':
                    return $this->division($a, $b);
                default:
                    throw new Exception("Opérateur invalide.");
            }
        }

        // Méthode pour additionner deux nombres
        private function addition(float $a, float $b): float {
            return $a + $b;
        }

        // Méthode pour soustraire deux nombres
        private function soustraction(float $a, float $b): float
        {
            return $a - $b;
        }

        // Méthode pour multiplier deux nombres
        private function multiplication(float $a, float $b): float
        {
            return $a * $b;
        }

        // Méthode pour diviser deux nombres
        private function division(float $a, float $b): float
        {
            if ($b == 0) {
                throw new Exception("Division par zéro interdite.");
            }
            return $a / $b;
        }
    }