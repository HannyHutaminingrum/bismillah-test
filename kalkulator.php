<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <section class="navbar1">
        <div class="lingkaran1"></div>
        <div class="lingkaran2"></div>
        <div class="lingkaran3"></div>
            <tr class="search">
                <td>
                    <input type="text" name="input" placeholder="https://" required>
                </td>
            </tr>
        </section>
        <section class="navbar2">
        <div class="lingkaran4"></div>
            <h5>My Account</h5>
            <h4>
                Calculator
            </h4>
        </section>
    </div>
    <form action="" name="Calc">
        <table class="tabel1">
            <tr class="hasil">
                <td>
                    <input type="text" name="input" size="1000000000000000000000000000000000000000000000000000000000000000" placeholder="0" required>
                    <br>
                </td>
            </tr>
        </table>
        <table class="tabel2">
            <tr class="baris1">
                    <td>
                    <input type="button" name="clear" value=" C " onclick="location.href = '?clear'">
                        <input type="button" name="one" value=" 1 " onclick="Calc.input.value += '1'">
                        <input type="button" name="two" value=" 2 " onclick="Calc.input.value += '2'">
                        <input type="button" name="three" value="3" onclick="Calc.input.value += '3'">
                        <input type="button" name="plus" value=" + " onclick="Calc.input.value += ' + '">
                        <input type="button" name="minus" value=" - " onclick="Calc.input.value += ' - '">
                    </td>
            </tr>
            <tr class="baris2">
                <td>
                <input type="button" name="four" value="4" onclick="Calc.input.value += '4'">
                <input type="button" name="five" value="5" onclick="Calc.input.value += '5'">
                <input type="button" name="six" value="6" onclick="Calc.input.value += '6'">
                <input type="button" name="seven" value="7" onclick="Calc.input.value += '7'">
                <input type="button" name="times" value=" x " onclick="Calc.input.value += ' * '">
                <input type="button" name="div" value=" / " onclick="Calc.input.value += ' / '">
                </td>
            </tr>
                <tr class="baris3">
                    <td>
                    <input type="button" name="eight" value="8" onclick="Calc.input.value += '8'">
                    <input type="button" name="nine" value="9" onclick="Calc.input.value += '9'">
                    <input type="button" name="zero" value="0" onclick="Calc.input.value += '0'">
                    <input type="button" name="ratusan" value="00" onclick="Calc.input.value += '00'">
                    <input type="button" name="kuadrat" value="^" onclick="Calc.input.value += '**'">
                    <input type="button" name="dolt" value=" = " onclick="Calc.input.value = eval(Calc.input.value)">
                    </td>
                </tr>
        </table>
    </form>
</body>
</html>