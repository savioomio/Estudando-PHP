__________________________________________________
|                                                |
|         Atividade_1----Arrays-Exercicios       |
|________________________________________________|

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_1---Arrays-Exercicios</title>
</head>

<style>
        body {
            background-color: #f2f2f2;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        h1 {
            text-align: center;
            color: #333;
            text-shadow: 1px 1px #999;
        }
        h2 {
            color: #333;
            text-shadow: 1px 1px #999;
        }
        p {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #999;
            margin-bottom: 10px;
        }
    </style>


<body>

    <h1>Atividade_1----Arrays-Exercicios</h1>

    <?php

    echo '<h2> Exercicios de arrays - Sávio Pessôa Afonso</h2>';

    echo '<hr>';

    $notas_alunos = array(
        '<b>PSW1</b>' => array(
            'Avaliação' => 6,
            'Teste' => 7
        ),
        '<b>BD</b>' => array(
            'Avaliação' => 5,
            'Teste' => 9
        ),
        '<b>Redes</b>' => array(
            'Avaliação' => 10,
            'Teste' => 10
        ),
        '<b>ASW1</b>' => array(
            'Avaliação' => 4,
            'Teste' => 2
        ),
        '<b>PI1</b>' => array(
            'Avaliação' => 8,
            'Teste' => 9
        )
    );


    foreach ($notas_alunos as $disciplina => $notas) {
        $media = ($notas['Avaliação'] + $notas['Teste']) / 2;
        echo '<p>'.$disciplina.': ';
        foreach ($notas as $tipo => $nota) {
            echo '<br>'.$tipo.'='.$nota.' ';
        }
        echo '<br>'.'Média='.$media.'</p>';
    }
   
    echo '<hr>';

    ?>


</body>

</html>

___________________________________________________________
|                                                         |
|         Atividade_2----Arrays/funções-Exercicios        |
|_________________________________________________________|
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções_Sávio</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        pre {
            background-color: #eee;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 6px rgba(0, 0, 0);
            font-size: 14px;
        }

        hr {
            border: none;
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }

        h2 {
            color: #666;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
            margin: 30px 0 10px;
        }
    </style>
</head>

<body>
    <h1>Funções</h1>
    <?php
  
    $pets = [
        'borboleta',
        'cobra',
        'caranguejeira'
    ];
  
    $alunos = [
        [
            'nome' => 'Sávio',
            'matricula' => '20211GBI29I',
            'cpf' => 06411242526,
            'rg' => null
        ],
        [
            'nome' => 'Pessôa',
            'matricula' => '20211GBI29I',
            'cpf' => 06411242526,
            'rg' => null
        ],
        [
            'nome' => 'Afonso',
            'matricula' => '20211GBI29I',
            'cpf' => 06411242526,
            'rg' => null
        ]
    ];

    echo '<pre>';
    print_r(array_values($alunos));
    echo '</pre>';

    echo '<pre>';
    print_r(array_values($pets));
    echo '</pre>';

    $found = false;
    foreach ($alunos as $aluno) {
        if ($aluno['nome'] === 'Sávio') {
            $found = true;
            break;
        }
    }
    print_r($found);
    echo '</br>';

    print_r(in_array('caranguejeira', $pets));
    echo '<br></br>';

    var_dump(in_array('cobra', $pets));
    echo '</br>';

    var_dump(array_search('cobra', $pets));
    echo '<br></br>';

    var_dump(isset($alunos[0]['rg']));
    echo '<br></br>';

    print_r(explode(' ', 'Sávio Pessôa Afonso'));
    echo '<br></br>';
  
    sort($pets);
    print_r($pets);
    echo '<hr>';
  
    uasort($alunos, function ($a, $b) {
        if ($a['nome'] == $b['nome']) return 0;
        return $a['nome'] < $b['nome'] ? -1 : 1;
    });
    echo '<pre>';
    print_r($alunos);
    echo '</pre>';

    echo '<hr>';

    echo '<h2>Foreach</h2>';

    foreach ($alunos as $key => $value) {
        echo "Chave: $key";
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

    echo '<h2>Foreach Aninhado</h2>';
  
    foreach ($alunos as $key => $value) {
        foreach ($value as $Nkey => $Nvalue) {
            echo "Chave: $Nkey";
            echo '<pre>';
            echo $Nvalue;
            echo '<br>';
            echo '</pre>';
        }
    }
    ?>
</body>
