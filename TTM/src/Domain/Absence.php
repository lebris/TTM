<?php

namespace Teamtimemanager\Domain;

Class Absence
{
	private 
		$name,
		$awayperiodstartdate,
		$awayperiodenddate,
		$awayperiodinhour,
		$awayperiodindays;
	
	public function __construct($name, $awayperiodstartdate, $awayperiodenddate, $awayperiodinhour, $awayperiodindays)
	{
		$this->name = (string) $name;
		$this->awayperiodstartdate = $awayperiodstartdate;
		$this->awayperiodenddate = $awayperiodstartdate;
		$this->awayperiodinhour = $awayperiodinhour;
		$this->awayperiodindays = $awayperiodindays;
	}
	
	public function getName ()
	{
		return $this->name;
	}
	
	
}