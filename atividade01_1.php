<?php
	$n1 = 2;
	$n2 = 3;
	$med = ($n1 + $n2) / 2;
	$apr = 0;
	$exa = 0;
	$rep = 0;
	$somsal = 0;

	for ($aluno=1; $aluno < 6; $aluno++) {
		$somsal = $somsal + ($n1 + $n2);
		echo "Aluno $aluno</br>";
		echo "Nota 1: $n1</br>";
		echo "Nota 2: $n2</br>";
		echo "Media: $med</br>";
		if ($med < 3) {
			echo "ALUNO REPROVADO</br></br>";
			$rep++;
		} elseif ($med >= 3 && $med <=7) {
			echo "ALUNO EM EXAME</br></br>";
			$exa++;
		} else {
			echo "ALUNO APROVADO</br></br>";
			$apr++;
		}
	}
	$medsal = $somsal / 12;

	echo "Alunos aprovados: $apr</br>";
	echo "Alunos em exame: $exa</br>";
	echo "Alunos reprovados: $rep</br>";
	printf("Media total da classe: %.2f", $medsal);
?>