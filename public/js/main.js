//VARIABLES
const minus = document.querySelector('.minus');
const plus = document.querySelector('.plus');
const quantity_input = document.querySelector('.quantity');
const price_product = document.querySelector('.price');
const subtotal = document.querySelector('.subtotal');
const total = document.querySelector('.total');
//FUNCTIONS
window.addEventListener("scroll", function () {
  var Header = document.querySelector("header");
  Header.classList.toggle("sticky",window.scrollY > 500);
  Header.classList.toggle("sticky-bar",window.scrollY > 500);

});

window.addEventListener("scroll", function ()
  {
    var Header = document.querySelector("header");
    if(document.body.scrollTop > 490 || document.documentElement.scrollTop > 490)
    {
      Header.style.position = "fixed"
    }
    else{
      Header.style.position = "relative"
    }
  }
);

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  var mybutton = document.getElementById("back-top");
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.classList.add("show"); 
  } else {
    mybutton.classList.remove("show");
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// quantity_input.value = 1;
// var quantiy = parseInt(quantity_input.value);
// var priceValue = parseInt(price_product.innerText);
// var subtotalValue = parseInt(subtotal.innerText);

// minus.addEventListener('click',function(){
//   if(quantiy > 1)
//   {
//     quantiy--;
//     subtotalValue = priceValue * quantiy;
//     // price_product.innerText = priceValue.toString();
//     subtotal.innerText = subtotalValue.toString();
//     quantity_input.value = quantiy.toString();
//   }
// })

// plus.addEventListener('click', function(){
//   if(quantiy < 20)
//   {
//     quantiy++;
//     subtotalValue = priceValue * quantiy;
//     // price_product.innerText = priceValue.toString();
//     subtotal.innerText = subtotalValue.toString();
//     quantity_input.value = quantiy.toString();
//   }
// })
//LOGIN
function mobileMenuOpen() {
  document.getElementById("gmDropdown").classList.toggle("show");
}