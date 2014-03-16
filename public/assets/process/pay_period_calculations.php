<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function getWeeklySavings() {
        if(isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $user = unserialize($user);
            $income = $user->getIncome();
            $weeklyIncome = $income / 50;
            $tenPercent = $weeklyIncome * .1;

            return round($tenPercent, 2);
        }
        return -1;
    }
?>