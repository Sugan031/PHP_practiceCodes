<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <div style="border: 1px solid black; display: inline-block; width: 110px; height: 50px;" id="inputs">
    </div>
<div>
    <input type="submit" name="clearall"  value="AC">
    <input type="submit" name="clear" value="C">
    <input type="submit" name="Posneg" value="+/-">
    <input type="submit" name="division" value="/">
    <br><br>
    <input type="submit" name="one"  value="1" onclick="writenumber(1)">
    <input type="submit" name="two" value="2" onclick="writenumber(2)">
    <input type="submit" name="three" value="3" onclick="writenumber(3)">
    <input type="submit" name="multiple" value="x" >
    <br><br>
    <input type="submit" name="four" value="4" onclick="writenumber(4)">
    <input type="submit" name="five" value="5" onclick="writenumber(5)">
    <input type="submit" name="six" value="6" onclick="writenumber(6)">
    <input type="submit" name="subtraction" value="-">
    <br><br>
    <input type="submit" name="seven" value="7" onclick="writenumber(7)">
    <input type="submit" name="eight" value="8" onclick="writenumber(8)">
    <input type="submit" name="nine" value="9" onclick="writenumber(9)">
    <input type="submit" name="addition" value="+">
    <br><br>
    <input type="submit" name="percent" value="%">
    <input type="submit" name="Zero" value="0" onclick="writenumber(0)">
    <input type="submit" name="dot" value=".">
    <input type="submit" name="equals" value="=">
</div>


    <script>
        const writenumber = (number)=>{
            document.getElementById("inputs").innerText += number;
        };

        const valueNumbers = writenumber.value;
        console.log(valueNumbers);
    </script>
</body>
</html>
