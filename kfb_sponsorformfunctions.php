<?php

	function validName($name)
    {
        
		if (!empty($name) and ctype_alpha($name))
        {
			return true;
		} else
		{
			return false;
		}
	}
    
    function validOrganization($organization)
    {
        if(!empty($organization))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function validPhone($phone)
    {
        if(!empty($phone))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
	
    function validEmail($email)
	{

        if(!empty($email))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function validGold($gold)
    {
		if ($gold == "year" OR $gold == "month")
        {
			return true;
		} else
        {
			return false;
		}
    }
    
    function validSilver($silver)
    {
		if ($silver == "year" OR $silver == "month")
        {
			return true;
		} else
        {
			return false;
		}
    }
	
    function validBronze($bronze)
    {
		if ($bronze == "year" OR $bronze == "month")
        {
			return true;
		} else
        {
			return false;
		}
    }   
?>	
