<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>PHP-TP-Février</title>
</head>

<body>
    <main>
        <h2>Ex. 1</h2>
        <?php
        $arr = array(19, 50.8, 67, 34, 76, 23, 98, 178, 900.89);
        $counter = 0;
        echo "<p>[";
        while ($counter < count($arr)) {
            if ($counter < count($arr) - 1) {
                echo "$arr[$counter]" . ", ";
            } else echo $arr[$counter];
            $counter += 1;
        };
        echo "]</p>";
        ?>
        <p>.</p>
        <?php
        $avg = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $avg += $arr[$i];
            if ($i == count($arr) - 1) {
                $avg = $avg / count($arr);
                echo "La moyenne : " . $avg;
            }
        }
        ?>
        <p>.</p>
        <?php
        $valMax = max($arr);
        echo "La valeure max : " . $valMax;
        ?>
        <p>.</p>
        <?php
        $searchVal = 34;
        $isInArr = False;
        $idx = 0;
        while (!$isInArr && $idx < count($arr)) {
            if ($searchVal === $arr[$idx]) {
                $isInArr = True;
            } else {
                $idx += 1;
            }
        }
        $txt = $isInArr ? " existe " : " n'existe pas ";
        echo "<p>La valeur $searchVal" . $txt . "dans le tableau</p>";
        $confirmation = in_array($searchVal, $arr);
        $confirmTxt = $confirmation ? " confirme " : " ne confirme pas ";
        echo "<p>La fonction in_array" . $confirmTxt . "cette existence</p>";
        ?>
        <hr>
        <h2>Ex. 2</h2>
        <table>
            <tbody>
                <?php
                $rows = 10;
                $columns = 10;

                for ($j = 0; $j < $rows; $j++) {
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td class='td--head-2'>i X j</td>";
                    } else {
                        echo "<td class='td--head'>$j</td>";
                    }
                    for ($i = 1; $i < $columns; $i++) {
                        $sameIdx = $i === $j ? "td--nb" : "td--default";
                        if ($j == 0) {
                            $no = $i;
                            echo "<td class='td--head'>$i</td>";
                        } else {
                            $calc = $i * $j;
                            echo "<td class='$sameIdx'>$calc</td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Ex. 3</h2>

        <?php
        include './informations.php';
        function generateGallery($info)
        {
            $entryNb = count($info);
            echo "<table>";
            for ($i = 0; $i < $entryNb; $i++) {
                echo "<tr>";
                foreach ($info[$i] as $key => $value) {
                    if ($key !== "photo") {
                        echo "<td><p>$value</p></td>";
                    } else {
                        echo "<td><img class='td--img' src='$value'></td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }

        generateGallery($informations);
        ?>
    </main>

</body>

</html>