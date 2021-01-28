<?php
// tablice indeksowane numerycznie
    $colors=array('biały','czarny','czerwony');

    echo 'Rozmiar tablicy: ',count($colors),'<br>';
    echo 'Pierwszy element tablicy: ',$colors[0],'<br>';
    echo 'Ostatni element tablicy: ',$colors[2],'<br>';
    echo 'Ostatni element tablicy: ',$colors[count($colors)-1],'<br>';

    echo '<hr>';

    /*
    Pętla for w formacie 
    Kolor 1: biały
    Kolor 2: czarny
    */

    for($i=0; $i<count($colors); $i++){
        echo 'Kolor',$i+1,':',$colors[$i],'<br>';
    }

    echo '<hr>';

    /*
    Napisz funkcie ktrą wyświetli zawartość tablicy
    Do pierwszego elementu kolory przypisz nowy kolor: aqua, drugiego: magenta, trzeciego: cyan 
    Wyświetl kolory w formacie: (za pomocą funkcji)
    1:kolor aqua
    2 kolor: ...
    */

    echo "Wersja 1 <br>";

    function foo($arr){
        $arr[0]='aqua';
        $arr[1]='magenta';
        $arr[2]='cyan';
        foreach($arr as $key => $value){
            $index=$key+1;
            echo "$index Kolor:".$value."<br>";
        }
    }
foo($colors);

    echo '<hr>';

    echo "Wersja 2 <br>";

    function tabColors(&$tab, $color1, $color2, $color3){
        $tab[0] = $color1;
        $tab[1] = $color2;
        $tab[2] = $color3;
      }
    
      function tabShow($tab){
        for($i=0; $i < count($tab); $i++) {
          echo $i+1,' kolor: ',$tab[$i],'<br>';
        }
      }
      tabColors($colors1, 'aqua', 'magenta', 'cyan');
      tabShow($colors1);

    echo '<hr>';

    //tablice asocjacyjne

    $x=array('klucz1' => 'x','klucz2' => 'y');
    echo $x['klucz2'],'<br>';

    $data=array(
        'name' => 'Jan',
        'surname'=>'Kowalski',
        'age' =>20
    );

    echo $data['name'],'<hr>';

    //wyświetlić wszystkie dane za pomocą heredoc

    echo<<<TAB
        Imię: {$data['name']}<br>
        Nazwisko: {$data['surname']}<br>
        Wiek: {$data['age']}<br>
        TAB;

    //foreach
    
    foreach ($data as $value){
        echo "$value ";
    }

    echo '<br>';

    foreach ($data as $value){
        echo "$value ";
    }

    echo '<br>';

    foreach ($data as $key => $value){
        echo "$key: $value<br> ";
    }

    foreach ($data as $keys => $value){
        echo ucfirst($key),": $value<br> ";
    }

    //print_r()

    echo '<pre>';
    print_r($value);
    echo '</pre>';

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    /*
    Napisz uniwersalną funkcje do wyświetlania danych z tablicy w formacie:
        klucz1: Wartość1
        klucz2: Wartość2

        tablica indeksowa
        0: Anna
        1: Nowak

        tablica asocjacyjna
        Name: Annd
        Surname: Nowak
    */

    function show($arr){
        foreach($arr as $key =>$value){
            echo ucfirst($key).":$value<br>";
        }
    }
    show($colors);
    show($data);
?>