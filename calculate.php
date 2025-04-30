<?php

if ($_GET['number'] != "CE") {
$result = 0;
$calcul = $_GET['calcul'] . $_GET['number'];
}
if (isset($_GET['send'])) {
    eval('$result = '.$_GET['calcul'].';');
    $resultStr = (string) $result;
    if (strlen($resultStr) > 5) {
        $result = substr($resultStr, 4, 1) .
                  substr($resultStr, 3, 1) .
                  substr($resultStr, 2, 1) .
                  substr($resultStr, 1, 1) .
                  substr($resultStr, 0, 1) . "...";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calculator.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="row bg-gray-total" action="" method="get">
                    <div class="col-12" style="height: 25px;"></div>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="row bg-gold">
                            <div class="col">
                                <input type="text" name="calcul" id="calcul" value="<?php echo $calcul ?>">
                            </div>
                            <div class="col d-flex justify-content-end">
                                <h1><?php echo $result ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-12" style="height: 25px;"></div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2"><input type="submit" name="number" value="7" class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="number" value="8"  class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="number" value="9"  class="btn-color"></input></div>
                            <div class="col-2"></div>
                            <div class="col-2"><input type="submit" name="number" value="CE" class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="calcul" value="C" class="btn-color"></input></div>

                            <div class="col-12" style="height: 15px;"></div>

                            <div class="col-2"><input type="submit" name="number" value="4"  class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="number" value="5"  class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="number" value="6"  class="btn-color"></input></div>
                            <div class="col-2"></div>
                            <div class="col-2"><input type="submit" name="number" value="/" class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="number" value="*" class="btn-color"></input></div>

                            <div class="col-12" style="height: 15px;"></div>

                            <div class="col-2"><input type="submit" name="number" value="3"  class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="number" value="2"  class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="number" value="1"  class="btn-color"></input></div>
                            <div class="col-2"></div>
                            <div class="col-2"><input type="submit" name="number" value="+" class="btn-color"></input></div>
                            <div class="col-2"><input type="submit" name="send" value="send" value="Envoyer" class="btn-color"></div>
                            <div class="col-12" style="height: 35px;"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>