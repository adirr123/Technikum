<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licz2</title>
</head>
<body>
    <script>
        function potega(n) {
  if (n <= 0) {
    return false;
  }
  while (n % 3 === 0) {
    n /= 3;
  }
  return n === 1;
}
console.log()
    
</script>
</body>
</html>
Napisz Funkcję zamieniającą godziny, dni, na sekundy, pamiętaj aby funkcja zawierała return