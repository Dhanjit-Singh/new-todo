<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pyramid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Pyramid Shape</h3>
                </div>
            </div>
            <div class="card-body">
                <?php
                function pypart($n)
                {
                    for ($i = 0; $i < $n; $i++) {
                        // Add spaces before asterisks
                        for ($k = 0; $k <= $i; $k++) {
                            // echo "&nbsp;";
                        }
                        // Print asterisks
                        for ($j = 0; $j <= $i; $j++) {
                            echo " * &nbsp;";
                        }
                        echo "<br>";
                    }
                }
                $n = 5;
                pypart($n);
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Pyramid 2</h3>
                </div>
            </div>
            <div class="card-body">
                <?php
                function pypart2($n)
                {
                    for ($i = 0; $i < $n; $i++) {
                        // Add spaces before asterisks
                        for ($k = 0; $k <= $n; $k++) {
                            if ($k < ($n - $i)) {
                                echo " * &nbsp";
                            }
                        }
                        // Print asterisks
                        echo "<br>";
                    }
                }
                $n = 5;
                pypart2($n);
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Triangle</h3>
                </div>
            </div>
            <div class="card-body">
                <?php
                function triangle($n)
                {
                    $k = 2 * $n - 2;
                    for ($i = 0; $i < $n; $i++) {
                        for ($j = 0; $j < $k; $j++) {
                            echo "&nbsp;";
                        }
                        $k = $k - 1;
                        for ($j = 0; $j <= $i; $j++) {
                            echo "*&nbsp;";
                        }
                        echo "<br>";
                    }
                }
                $n = 5;
                triangle($n);
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3>Triangle 2</h3>
                </div>
            </div>
            <div class="card-body">
                <?php
                    function triangle_pattern($len)
                    {
                        $string = "*";
                        $pyramid_str = "";
                        $mid_point = ceil($len / 2);

                        for ($i = 1; $i <= $mid_point; $i++) {
                            for ($j = 1; $j <= $i; ++$j) {
                                $pyramid_str .= $string . " ";
                            }
                            $pyramid_str .= "<br>";
                        }

                        for ($i = $mid_point; $i >= 1; $i--) {
                            for ($j = 1; $j < $i; ++$j) {
                                $pyramid_str .= $string . " ";
                            }
                            $pyramid_str .= "<br>";
                        }

                        return $pyramid_str;
                    }
                    echo triangle_pattern(9);
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>