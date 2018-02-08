<!DOCTYPE html>
<html>
<body>


  Address:<br>
    <textarea id="myTextarea"  rows = "4" colS ="50">
        Massage input Test Test Test Test Test test test
    </textarea>

    <br>

<form>
  <p>Sensitive case :</p>
    <input type="radio" name="gender" value="1" > Yes<br>
    <input type="radio" name="gender" value="2" > No<br>

</form>
<br>

    Search: <input type="text" id = "look"><br><br>

     <input type="button" onclick="myFunction()" value="Search">


  <p id="demo3"></p>




<script>
function myFunction() {
    var x = document.getElementById("myTextarea").value;

    var Search = document.getElementById("look").value;

    var coffee = document.forms[0];
   var txt = "";
   var i;
   for (i = 0; i < coffee.length; i++) {
       if (coffee[i].checked) {
           txt = txt + coffee[i].value + " ";
       }
   }

    if(Search == '') {
    document.getElementById("demo3").innerHTML = "0";
  }if(Search != '') {

      if(txt == 1){
          var rgxp = new RegExp(Search, "gi");
          document.getElementById("demo3").innerHTML = "result for serach : " + (x.match(rgxp).length);
        }else{
          var rgxp = new RegExp(Search, "g");
          document.getElementById("demo3").innerHTML = "result for serach : " + (x.match(rgxp).length);

        }


    }







}
</script>



</body>
</html>
