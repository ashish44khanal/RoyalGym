<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop  </title>
</head>
<body>
<?php include('header.html')?>

    <div class="customTopLayerService">
        <div class="topLayer">
            <div class="container">
            <h3>SHOP</h3>
            <p>Home > Shop</p>
            </div>
        </div>
    </div>

    <div class="shopHeadSection">
        <h3 class="text-center font-weight-bold">PRODUCTS FROM ROYAL GYM</h3>

        <div class="categoryBtn text-center">
            <div class="container">
            <button class="catBtn" data-id="all">ALL</button>
             <button class="catBtn" data-id="Gainer">GAINER</button>
             <button class="catBtn" data-id="Protein">PROTEIN</button>
             <button class="catBtn" data-id="Amino">AMINO</button>
             <button class="catBtn" data-id="Preworkout">PREWORKDOUT</button>
             <button class="catBtn" data-id="Fat Burner">FAT BURNER</button>

            </div>
        </div>

    </div>

    <div class="shopProducts">
        <div class="container">
            <div class="row justify-content-center" id="MyRow">
                
            </div>
        </div>
    </div>

<script>        
var gymProduct = [
  {
    id: 1,
    name: "name 1",
    category: "Gainer",
    price: "Rs. 220",
    img: "./images/product1.png",
  },
  {
    id: 6,
    name: "name 1",
    category: "Gainer",
    price: "Rs. 220",
    img: "./images/product1.png",
  },
  {
    id: 2,
    name: "name 2",
    category: "Protein",
    price: "Rs. 320",
    img: "./images/product1.png",
  },
  {
    id: 3,
    name: "name 3",
    category: "Amino",
    price: "Rs. 420",
    img: "./images/product1.png",
  },
  {
    id: 4,
    name: "name 4",
    category: "Preworkout",
    price: "Rs. 520",
    img: "./images/product1.png",
  },
  {
    id: 5,
    name: "name 5",
    category: "Fat Burner",
    price: "Rs. 620",
    img: "./images/product1.png",
  },
];

const catBtns=document.querySelectorAll(".catBtn");

window.addEventListener("DOMContentLoaded", function () {
  // console.log("shake and bake");
  displayProducts(gymProduct)
});

catBtns.forEach(function(cbtn){
cbtn.addEventListener("click",function(e){
  const currentBtn=e.currentTarget.dataset.id;
  const filteredgymProduct=gymProduct.filter(function(fGymP){
    if(fGymP.category==currentBtn){
      return fGymP;
    }
  });
  // console.log(filteredgymProduct);
  if(currentBtn=='all'){
    displayProducts(gymProduct)
  }
  else{
    displayProducts(filteredgymProduct)
  }
})
});

function displayProducts(productItem){
  let displayProduct = productItem.map(function (item) {
    return ` 
            <div class="col-md-3 col-sm-4 col-6">
              <a href="Product_detail.php">
              <div class="productCard">        
                <div class="myproductInfo">
                  <div class="productImg">
                    <img src=${item.img} alt="${item.name}" class="img-fluid" id="productImage">
                  </div>
                  <div class="productInfo">
                           <h6 class="font-weight-bold" id="productName">${item.name}</h6>
                            <span id="productPrice" class="redText">${item.price}</span>
                            <p class="text-muted productCategory">${item.category}</p>
                  </div>
                </div>      
              </div>
              </a>
            </div>`;
  });
  const productRow = document.getElementById('MyRow');
  displayProduct = displayProduct.join("");
  productRow.innerHTML = displayProduct;
  productRow.style.transition=" width 2s, height 4s";
}
</script>
    
</body>
</html>