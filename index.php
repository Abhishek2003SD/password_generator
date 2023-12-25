<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="javaScript.js"></script>
</head>
<body>

<div class="container">

  <div id="header">
    <label for="password">Generated Password:</label>
    <input type="text" id="password" readonly placeholder="generate your password">
  </div>

    <div class="con">
    <label>
      <input type="checkbox" name="charsetOption" value="numbers">
    </label>
    <label for="" class="l1">Numbers</label>
    </div>
    
    <label>
      <input type="checkbox" name="charsetOption" value="symbols"> Symbols
    </label>


    <label>
      <input type="checkbox" name="charsetOption" value="characters"> Alphabetic Characters
    </label>
   

  <button onclick="generatePassword()" class="generate">Generate Password</button>
  <button onclick="clearPassword()" class="clear">Clear</button>

</div>
</body>
</html>
