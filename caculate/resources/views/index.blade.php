<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caculate</title>
</head>

<body>
    <form method="POST" action="{{ route('caculate') }}">
        @csrf
        <table>
            <tr>
                <td colspan="4"> <input type="text" name="screen" id="numberA" value="@if (isset($result))
                    {{ $result }}
                @endif" /></td>

            </tr>
            <tr>
                <td><button id="btnAddition" class="btntool" onclick="symbolcaculate('(')">(</button></td>
                <td><button id="btnAddition" class="btntool" onclick="symbolcaculate(')')">)</button></td>
                <td><button id="btnAddition" class="btntool" onclick="symbolcaculate('%')">%</button></td>
                <td><button id="btnAddition" class="btntool" onclick="reset()">AC</button></td>
            </tr>
            <tr>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(7)">7</button></td>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(8)">8</button></td>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(9)">9</button></td>
                <td><button id="btnAddition" class="btntool" onclick="symbolcaculate('/')">/</button></td>
            </tr>
            <tr>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(4)">4</button></td>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(5)">5</button></td>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(6)">6</button></td>
                <td><button id="btnAddition" class="btntool" onclick="symbolcaculate('*')">x</button></td>
            </tr>
            <tr>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(1)">1</button></td>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(2)">2</button></td>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(3)">3</button></td>
                <td><button id="btnAddition" class="btntool" onclick="symbolcaculate('-')">-</button></td>
            </tr>
            <tr>
                <td><button id="btnAddition" class="btnNumber" onclick="addition(0)">0</button></td>
                <td><button id="btnAddition" class="btnNumber" onclick="symbolcaculate('.')">.</button></td>
                <td><button id="btnAddition" class="btnKq" onclick="result()">=</button></td>
                <td><button id="btnAddition" class="btntool" onclick="symbolcaculate('+')">+</button></td>
            </tr>

        </table>
    </form>
    <style>
        table {

            width: 500px;
            height: 500px;

        }

        td {
            width: 200px;
            height: auto;
            padding: 0;
            margin: 0;
        }

        .btntool {
            font-size: 35px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(173, 173, 173);
            border: none;
            font-weight: bold;
            color: rgb(66, 65, 65);
            padding: 4px;
            width: 100%;
            height: 50px;
            outline: none;
        }

        .btnNumber {
            font-size: 35px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(216, 216, 216);
            border: none;
            font-weight: bold;
            color: rgb(66, 65, 65);
            padding: 4px;
            width: 100%;
            height: 50px;
            outline: none;
        }

        .btnKq {
            font-size: 35px;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(55, 111, 231);
            border: none;
            font-weight: bold;
            color: white;
            padding: 4px;
            width: 100%;
            height: 50px;
            outline: none;
        }

        .btntool:active {
            background-color: rgb(194, 194, 194);

        }

        .btnNumber:active {
            background-color: rgb(194, 194, 194);

        }

        .btnKq:active {
            background-color: white;
            color: rgb(55, 111, 231);

        }

        #numberA {
            width: 490px;
            height: 60px;
            font-size: 40px;
            outline: none;
            text-align: right;
        }

    </style>
</body>
<script>
    function addition(number) {
        document.getElementById("numberA").value += number;

    }

    function reset() {
        document.getElementById("numberA").value = null;
    }

    function symbolcaculate(symbolmath) {
        document.getElementById("numberA").value += symbolmath;

    }


</script>

</html>
