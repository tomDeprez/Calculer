<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-3" style="background-color: red; height: 150px;"></div>
            <div class="col-3" style="background-color: black; height: 150px;">
                <div class="row">
                    <div class="12" style="background-color: blue; height: 25px;"></div>
                </div>
            </div>
            <div class="col" style="background-color: blue; height: 150px;"></div>
            <div class="col-md-3" style="background-color: red; height: 150px;">
                <h1>salut</h1>
            </div>
            <div class="col-12" style="height: 50px;"></div>
            <div class="col-12" style="background-color: black; height: 150px;"></div>
            <div class="col" style="background-color: red; height: 75px;"></div>
            <div class="col" style="background-color: blue; height: 75px;"></div>
            <div class="col-12" style="height: 100px;"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="row bg-gray-total" action="calculer.php" method="get">
                    <div class="col-12" style="height: 25px;"></div>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="row bg-gold">
                            <div class="col">
                                <input type="text" name="calcul" id="calcul">
                            </div>
                            <div class="col d-flex justify-content-end">
                                <h1>10</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-12" style="height: 25px;"></div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2"><button type="button" onclick="sendKey7()" class="btn-color">7</button></div>
                            <div class="col-2"><button type="button" onclick="sendKey8()" class="btn-color">8</button></div>
                            <div class="col-2"><button type="button" onclick="sendKey9()" class="btn-color">9</button></div>
                            <div class="col-2"></div>
                            <div class="col-2"><button type="button" onclick="sendKeyCE()" class="btn-color">CE</button></div>
                            <div class="col-2"><button type="button" onclick="sendKeyC()" class="btn-color">C</button></div>

                            <div class="col-12" style="height: 15px;"></div>

                            <div class="col-2"><button type="button" onclick="sendKey4()" class="btn-color">4</button></div>
                            <div class="col-2"><button type="button" onclick="sendKey5()" class="btn-color">5</button></div>
                            <div class="col-2"><button type="button" onclick="sendKey6()" class="btn-color">6</button></div>
                            <div class="col-2"></div>
                            <div class="col-2"><button type="button" onclick="sendKeyDiv()" class="btn-color">/</button></div>
                            <div class="col-2"><button type="button" onclick="sendKeyMulti()" class="btn-color">*</button></div>

                            <div class="col-12" style="height: 15px;"></div>

                            <div class="col-2"><button type="button" onclick="sendKey3()" class="btn-color">3</button></div>
                            <div class="col-2"><button type="button" onclick="sendKey2()" class="btn-color">2</button></div>
                            <div class="col-2"><button type="button" onclick="sendKey1()" class="btn-color">1</button></div>
                            <div class="col-2"></div>
                            <div class="col-2"><button type="button" onclick="sendKeyMoin()" class="btn-color">-</button></div>
                            <div class="col-2"><input type="submit" value="Envoyer" class="btn-color"></div>
                            <div class="col-12" style="height: 35px;"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <script>
        function sendKey7() {
            document.getElementById("calcul").value += "7";
        }

        function sendKey8() {
            document.getElementById("calcul").value += "8";
        }

        function sendKey9() {
            document.getElementById("calcul").value += "9";
        }

        function sendKeyCE() {
            document.getElementById("calcul").value = "";
        }

        function sendKeyC() {
            alert("sendKeyC");
        }

        function sendKey4() {
            document.getElementById("calcul").value += "4";
        }

        function sendKey5() {
            document.getElementById("calcul").value += "5";
        }

        function sendKey6() {
            document.getElementById("calcul").value += "6";
        }

        function sendKeyDiv() {
            document.getElementById("calcul").value += "/";
        }

        function sendKeyMulti() {
            document.getElementById("calcul").value += "*";
        }

        function sendKey3() {
            document.getElementById("calcul").value += "3";
        }

        function sendKey2() {
            document.getElementById("calcul").value += "2";
        }

        function sendKey1() {
            document.getElementById("calcul").value += "1";
        }

        function sendKeyMoin() {
            document.getElementById("calcul").value += "-";
        }
    </script>

</body>

</html>