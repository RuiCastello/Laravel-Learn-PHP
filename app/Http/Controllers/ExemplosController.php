<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemplosController extends Controller
{


    public function strings(){

        $title = "Strings";
        $phrase = "Giraffe Academy";

        //Transformar em lower-case
        $lowerCase = strtolower($phrase);

        //Transformar letras maiúsculas
        $upperCase = strtoupper($phrase);

        //Saber o tamanho de uma string
        $stringLength = strlen($phrase);

        //Escolher uma letra específica de uma string, neste caso a terceira letras, pois o index começa em zero.
        $stringChar = $phrase[2];

        //Mudar uma letra de uma string
        $stringChangedChar = $phrase;
        $stringChangedChar[0] = "B";

        //Trocar uma palavra por outra
        $stringReplace = str_replace("Giraffe", "Panda", $phrase);

        //Substring - receber parte de uma string a começar num determinado index e com um determinado tamanho
        //substr($string, starting_index, length)
        $stringSubstring = substr($phrase, 8, 3);



        // Passar variáveis todas para a view deste método
        $list = compact('lowerCase', 'upperCase', 'stringLength', 'stringChar', 'stringChangedChar',
            'stringReplace', 'stringSubstring');





        return view('exemplos.display')->with(
            [
                'title' => $title,
                'list' => $list
            ]
        );
    } // end strings()




    public function numbers(){

        $title = "Numbers";

        //Soma +, Subtração -, multiplicação *, divisão /, resto de uma divisão %
        $numberAdd = 2 + 6 ;

        //Valor absoluto de um número (devolve o número sempre positivo)
        $numberAbs = abs(-100);

        // Exponente , elevar um número a outro
        $numberToThePower =  pow(2, 4); // Dois elevado a quatro (2^4).

        // Raíz quadrada de um número
        $numberSquareRoot = sqrt(144);

        // Comparar números, qual deles é maior?
        $numberMax = max(1, 2, 3, 9);

        // Comparar números, qual deles é menor?
        $numberMin = min(1, 2, 3, 9);

        // Arredondar um número
        $numberRound3dot5 = round(3.5);
        $numberRound3dot45 = round(3.45);

        // Arredondar para cima
        $numberRoundUpCeiling = ceil(3.3);

        // Arredondar para baixo
        $numberRoundDownFloor = floor(3.3);



        //Passar variáveis todas para a view deste método
        $list = compact(
            'numberAdd', 'numberAbs','numberToThePower','numberSquareRoot', 'numberMax', 'numberMin', 'numberRound3dot5', 'numberRound3dot45', 'numberRoundUpCeiling', 'numberRoundDownFloor'
        );

        return view('exemplos.display')->with(
            [
                'title' => $title,
                'list' => $list
            ]
        );
    } // end numbers()



    public function forms(){

        $title = "Forms - User Input";

        $preContent = '
        <form action="'.$_SERVER['PHP_SELF'].'" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
        </form>
        ';


        // Como receber um input de um utilizador
        empty($_GET['name']) ? $inputGet = "Input indefinido" : $inputGet = $_GET['name'] ;


        //Passar variáveis todas para a view deste método
        $list = compact(
            'inputGet'
        );

        return view('exemplos.display')->with(
            [
                'title' => $title,
                'preContent' => $preContent,
                'list' => $list
            ]
        );
    } // end forms()



    public function arrays(){

        $title = "Arrays";

        // criar um array
        $array = array();
        // OU
        $array = []; // Nas versões de php mais recentes

        //Strings dentro de um array
        $arrayStrings = array("Kevin", "Peter", "Oscar", "Jim");

        // Mostrar apenas um elemento de um array
        $arrayElement = $arrayStrings[2];

        //Quantos elementos tem um array?
        $countArray = count($arrayStrings);

        //Associative array
        $associativeArray = array(
            'Joao Soneca' => 'Morada do Joao Soneca 13 1dto',
            'Joana Desperta' => 'Morada da Joana 11 3dto'
        );


        //Passar variáveis todas para a view deste método
        $list = compact(
            'arrayStrings', 'arrayElement', 'countArray', 'associativeArray'
        );



        return view('exemplos.display')->with(
            [
                'title' => $title,
                'list' => $list
            ]
        );
    } // end arrays()



}
