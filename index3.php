<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <form name="calculator" method="POST" action="proseskalkulatorinput.php">
            <input type="text" id="display" name="display" value="<?php echo isset($_GET['display']) ? $_GET['display'] : ''; ?>" readonly>
            <div class="buttons">
                <button type="submit" name="button" value="1">1</button>
                <button type="submit" name="button" value="2">2</button>
                <button type="submit" name="button" value="3">3</button>
                <button type="submit" name="button" value="+">+</button>
                <button type="submit" name="button" value="4">4</button>
                <button type="submit" name="button" value="5">5</button>
                <button type="submit" name="button" value="6">6</button>
                <button type="submit" name="button" value="-">-</button>
                <button type="submit" name="button" value="7">7</button>
                <button type="submit" name="button" value="8">8</button>
                <button type="submit" name="button" value="9">9</button>
                <button type="submit" name="button" value="*">*</button>
                <button type="submit" name="button" value="0">0</button>
                <button type="submit" name="button" value="C" class="tombol1">C</button>
                <button type="submit" name="button" value="=" class="equal">=</button>
                <button type="submit" name="button" value="/">/</button>
            </div>
        </form>

    </div>
</body>
</html>
