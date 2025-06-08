<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Calculator</title>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: rgb(171, 164, 170);
      margin: 0;
    }
    .calculator {
      background-color: rgb(160, 188, 224);
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      max-width: 320px;
      width: 100%;
    }
    #display {
      width: 100%;
      height: 70px;
      background-color: lightgray;
      color: black;
      border: double;
      border-radius: 10px;
      margin-bottom: 20px;
      font-size: 20px;
      text-align: right;
      padding: 0 15px;
    }
    .buttons {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }
    .buttons button {
      padding: 20px;
      font-size: 25px;
      border-radius: 10px;
      cursor: pointer;
      border: none;
      background-color: lightgray;
    }
    .buttons button.operator { background-color: lightcoral; }
    .buttons button.equal { background-color: rgb(34, 175, 218); }
    .buttons button.clear { background-color: rgb(231, 19, 51); color: white; }
  </style>
</head>
<body>

<?php
$expression = '';
$result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['expression'] ?? '';
    // Basic sanitization
    if (preg_match('/^[0-9+\-*/.() ]+$/', $expression)) {
        try {
            // Use eval safely - wrap in function scope
            eval('$result = ' . $expression . ';');
        } catch (Throwable $e) {
            $result = "Error";
        }
    } else {
        $result = "Invalid input";
    }
}
?>

<div class="calculator">
  <form method="post">
    <input type="text" id="display" name="expression" value="<?= htmlspecialchars($result ?: $expression) ?>" readonly>
    <div class="buttons">
      <?php
      $buttons = ['C', '(', ')', '/',
                  '7', '8', '9', '*',
                  '4', '5', '6', '-',
                  '1', '2', '3', '+',
                  '0', '.', '='];
      foreach ($buttons as $btn) {
          $type = '';
          if (in_array($btn, ['+', '-', '*', '/', '%'])) $type = 'operator';
          elseif ($btn == '=') $type = 'equal';
          elseif ($btn == 'C') $type = 'clear';

          echo "<button type='submit' name='btn' value='$btn' class='$type'>$btn</button>";
      }
      ?>
    </div>
    <input type="hidden" name="expression" id="hiddenExpression" value="<?= htmlspecialchars($expression) ?>">
  </form>
</div>

<script>
  const form = document.querySelector('form');
  const buttons = form.querySelectorAll('button[name="btn"]');
  const hiddenExpression = document.getElementById('hiddenExpression');
  const display = document.getElementById('display');

  buttons.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const val = this.value;

      if (val === 'C') {
        hiddenExpression.value = '';
      } else if (val === '=') {
        form.submit();
        return;
      } else {
        hiddenExpression.value += val;
      }

      display.value = hiddenExpression.value;
    });
  });
</script>

</body>
</html>
