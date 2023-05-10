<script>
function literydwie(slowo) {
  for (let i = 0; i < slowo.length - 1; i++) {
    if (slowo[i] === slowo[i+1]) {
      return true;
    }
  }
  return false;
}
console.log(literydwie("apful"));
</script>