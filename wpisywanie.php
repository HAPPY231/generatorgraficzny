<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"></script>
    <title>Graficzny generator zapytań</title>
</head>
<body>
    <div class="wpisywanie">
        <div class="wiersz">
            <input type="text" id="baza" placeholder="Podaj nazwę bazy danych"/>
            <input type="text" id="tabela" placeholder="Podaj nazwę tabeli"/><br>
            <input type="text" id="argument"  placeholder="Argument 1"/>
            <input type="text" id="argumentz"  placeholder="Argument 2"/><br>
        </div>
        <div class="wiersz1">
            <button id="select" value="SELECT" onclick="wyswietl('SELECT')">SELECT</button>
            <button id="gwiazdka" value="*" onclick="wyswietl(' *')">*</button>
            <button id="from" value="FROM" onclick="wyswietl(' FROM ')">FROM</button>
            <button id="baza1" onclick="baza()">BAZA</button>
            <button id="kropek" value="." onclick="wyswietl('.')">.</button>
            <button id="tabela1" onclick="tabela()">TABELA</button>
            <button id="where" value="WHERE" onclick="wyswietl(' WHERE ')">WHERE</button><br>
            <button id="argument1" onclick="argument1()">ARGUMENT 1</button>
            <button id="argument2" onclick="argument2()">ARGUMENT 2</button>
            <button id="and" value="AND" onclick="wyswietl(' AND ')">AND</button>
            <button id="or" value="OR" onclick="wyswietl(' OR ')">OR</button>
            <button id="rowne" value="=" onclick="wyswietl(' = ')">=</button>
            <button id="mniejsze" value="<" onclick="wyswietl(' < ')"><</button>
            <button id="wieksze" value=">" onclick="wyswietl(' > ')">></button>
            <button id="rozne" value="!=" onclick="wyswietl(' != ')">!=</button>
        </div>
    <form method="POST" action="wysylanie.php">
    <textarea name="wynik" id="wynik" rows="20" cols="80"></textarea><br>
    <input type="submit" name="wyslij1" value="Wyślij"/>
    </form>
</div>
</body>
</html>