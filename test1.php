<script>
    function doSomething() {
        var checkedValue = 0;
        var totBoxes = 0;
        var inputElements = document.getElementsByClassName('zxc');
        for(var i=0; inputElements[i]; ++i){
            totBoxes++;
            if(inputElements[i].checked){
                checkedValue = checkedValue+1;
            }
        }
        var percentageValue = Math.round((checkedValue/totBoxes)*100);
        document.getElementById('bbb').innerText = "Your Score is : " + percentageValue.toString()+"%";
        return false;
    }
</script>
<p id="bbb">Hello</p>
<form onsubmit="return doSomething();">
    <input class="zxc" type="radio" name="gender" value="male" />
    <input class="zxc" type="radio" name="gender" value="female" />
    <input class="zxc" type="radio" name="asddd" value="male" />
    <input class="zxc" type="radio" name="asddd" value="female" />
    <input type="submit" value="Submit">
</form>
