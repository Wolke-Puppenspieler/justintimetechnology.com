<?php
        $services = array("Virus Removal",
        "Windows Troubleshooting", "Network Setup and Support",
        "Custom Computer Building","Harware and Software Upgrades","Disposal of your Old Computer Hardware");
        foreach ($services as $services) {
            echo "<li>$services</li>";
        }
        
        unset($services);
      ?>