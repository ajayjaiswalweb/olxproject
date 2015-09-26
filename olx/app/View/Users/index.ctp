<button type="button" id="fbLogin" onclick="fblogin();">login with facebook</button>
<script>
 function fblogin(){
  var webURL = window.location.protocol + "//" + window.location.host + "/olx/" + 'auth/facebook';  
  window.location.href = webURL;
}
</script>