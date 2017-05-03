<!DOCTYPE html>
<html>
<body>

<p>Modify the text in the input field, then click outside the field to fire the onchange event.</p>
<p id="demo"></p>
Enter some text: <input type="text" name="txt" value="Hello" onchange="myFunction(this.value)">

<script>
function isAlphaOrParen(str) {
  return /^[a-zA-Z()]+$/.test(str);
}
function myFunction(val) {
	if (isAlphaOrParen(val)){
    //alert("The input value has changed. The new value is: " + val);
    document.getElementById('demo').innerHTML =val;
    }
    else{
    document.getElementById('demo').innerHTML ="not valid ";
    }
    
}

</script>

</body>
</html>
