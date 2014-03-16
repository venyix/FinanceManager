<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function getWeeklySavings() {
        $income = $_SESSION['user']['income'];
        $weeklyIncome = $income / 50;
        $tenPercent = $weeklyIncome * .1;
        
        return round($tenPercent, 2);
    }
?>