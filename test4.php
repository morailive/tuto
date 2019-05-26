<?php

/* test 4 */
function is_anagram($mot1,$mot2){
echo "le premier mot : ".$mot1."-> ".count(str_split($mot1))."<br/>";
echo "le second mot  : ".$mot2."->".count(str_split($mot2))."<br/><hr/>";	
	/* mettre les lettres dans un tableau */ 
	$t1 = str_split($mot1) ;
	$t2 = str_split($mot2) ;
  	/* conter les elements du tableau*/

  	$ct1 = count(str_split($mot1));
  	$ct2 = count($t2);
  	/* comparer les deux nombres */

  	if ($ct1==$ct2){
  		/* ensuite...*/
  		echo "déjà les mots sont de même longueur..<br/>" ;
  		for ($i=0;$i<$ct1;$i++){
  			echo "$i -> $ct1 -> $t1[$i]<br/>" ;
  			if (!in_array($t1[$i], $t2)){

  				echo "no match";


  			}
  			else{
  				echo "anagrame!";

  				return true;
  			}
  		}
  	}
  	else{echo "les mots ne sont pas de longueur identique";}
}

is_anagram("BBC","CBB");