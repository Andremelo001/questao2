<?php
$pessoa = array(
	"Nome : Maria Clara" => array("CPF"=>"087883456-18","RG"=>2006089107117,"Idade"=>55,"Altura"=>1.75),
);

foreach ($pessoa as $info => $dados){
	echo $info."<br>";
	  foreach ($dados as $key => $value) {
		  echo $key." : ".$value."<br>";

		}
	}