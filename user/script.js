

function addCart(id,qty,type){
      var cart = document.getElementById("toast-cart");
  cart.classList.add("show");
  //post('./cart/add_item.php', {id: id,qty:qty});

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cart.innerHTML = '<i class="fas fa-shopping-cart cart"></i> Product added to cart';
    }
  };
  xhttp.open("POST", "./cart/add_item.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("type="+type+"&id="+id + "&qty="+qty);


  setTimeout(function(){
    cart.classList.remove("show");
  }, 3000);
}



function post(path, params, method='post') {

  const form = document.createElement('form');
  form.method = method;
  form.action = path;

  for (const key in params) {
    if (params.hasOwnProperty(key)) {
      const hiddenField = document.createElement('input');
      hiddenField.type = 'hidden';
      hiddenField.name = key;
      hiddenField.value = params[key];

      form.appendChild(hiddenField);
    }
  }

  document.body.appendChild(form);
  form.submit();
}


