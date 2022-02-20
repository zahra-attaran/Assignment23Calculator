<?php
$ans = null;
if (isset($_POST['sub'])) {
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $op = $_POST['sub'];
    if ($op == "+")
        $ans = $num1 + $num2;
    else if ($op == "-")
        $ans = $num1 - $num2;
    else if ($op == "*")
        $ans = $num1 * $num2;
    else if ($op == "/")
        $ans = $num1 / $num2;

} ?>
<html>
<head>
    <style>
        .container {
            height: 100vh !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ops {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            text-align: center;
        }

        input, select {
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 450px;
        }

        .op {
            background-color: #c95dd9;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 13px;
            text-align: center;
            cursor: pointer;
            width: 60px;
            height: 60px;
            font-size: 22px;
            font-weight: bold;
        }

        .lbl {
            font-size: 26px;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="post" action="">
        <span class="lbl">Number1:</span><input name="n1" value="">
        <br>
        <span class="lbl">Number2:</span><input name="n2" value="">
        <br>
        <div class="ops">
            <button class="op" name="sub" value="+">
                +
            </button>
            <button class="op" name="sub" value="-">
                -
            </button>
            <button class="op" name="sub" value="*">
                *
            </button>
            <button class="op" name="sub" value="/">
                /
            </button>

        </div>
        <br>
        <br> <span class="lbl">Result:</span><input type='text' value="<?php echo $ans; ?>"><br>
    </form>
</div>
</body>
</html>
