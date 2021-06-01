let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("active");
});


function searchFunction(){
  let input = document.getElementsByClassName("js--search-bar")[0];
  let filter = input.value.toUpperCase();
  let card_wrapper = document.getElementsByClassName("card-wrapper")[0];
  let links = card_wrapper.getElementsByTagName("li");
  
  for (let i = 0; i < links.length; i++) {
      let card = links[i].getElementsByClassName("gridCard__heading")[0];
      let txtValue = card.textContent || card.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          links[i].style.display = "";
      } else {
          links[i].style.display = "none";
      }
  }
}

  const select = document.getElementsByClassName('category-filter-section__select')[0];
  let card_wrapper = document.getElementsByClassName("card-wrapper")[0];
  let list_of_products = card_wrapper.getElementsByTagName('li');
  let select_value;

  for(let i = 0; i < list_of_products.length; i++){
      list_of_products[i].style.display = '';
  }

  select.addEventListener('change', function(){
      select_value = select.value;
      if(select_value == 'All'){
        for(let i = 0; i < list_of_products.length; i++){
                list_of_products[i].style.display = '';
            }  
        }
      else {
        for(let i = 0; i < list_of_products.length; i++){
                if (list_of_products[i].getAttribute('data-category') == select_value){
                    list_of_products[i].style.display = '';
                }     
                else {
                    list_of_products[i].style.display = 'none'; 
                } 
            }  
        }
  });
