<?php 
        function generateRandomPass($Length){
            $Database =  'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
            $password = '';
            for($i = 0; $i < $Length; $i++){// sostituiamo il recente $passLength con il parametro richiamato in questa funzione, ovvero $Length
                $randomChar = $Database[rand(0, strlen($Database) -1)];// numero random è uguale a database[numero random da 0 a lunghezza del database-1]
                // var_dump($randomChar);
                $password .= $randomChar;
            }
            return $password;
        }
    
    ?>