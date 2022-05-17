</body>
<script>

var some = false;


function shownav(){
   var nav =  document.getElementById('navbarText');
   if(some == false){
   nav.classList.remove('collapse');
   some = true;
   }else{
    nav.classList.add('collapse');
    some = false;
   }


}

</script>
<script  src="./script.js"></script>
</html>
