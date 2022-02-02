<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultData
 *
 * @author User™
 */
class DefaultData
{

    //vehicle get resion
    public function religion()
    {
        return array(
            "1" => "Buddhist",
            "2" => "Hindu",
            "3" => "Islam",
            "4" => "Christian",
            "5" => "Other"
        );
    }

    //select vehicle rent type    
    public function nationality()
    {
        return array(
            "1" => "Sinhala",
            "2" => "Tamil",
            "3" => "Muslim",
            "6" => "Other"
        );
    }

    //select vehicle Budget    
    public function getVehicleBudget()
    {
        return array(
            "1" => "Economy",
            "2" => "Compact(mid sized car)",
            "3" => "Premium(High luxurious):",
            "4" => "Luxurious"
        );
    }
}
