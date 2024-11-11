// setRecentlyViewedProducts();
// function setRecentlyViewedProducts(product) {
//     const products = store(a);
//   if(product==products.id)
//   {
//     const productData = {
   
//         productTitle: products.title ,
//         productImg:  products.thumbs ,
//         productPrice:  products.price,
//         productUrl: products.href,
      
//       };
//   }
    

// }


//   const productList = [];
//   let jsonResp, jsonRespArr, jsonRespArrStr;
//   const numberOfProducts = 4;
//   productList.push(productData);
//   const currProductPageTitle = productData.productTitle;
//   const productDataString = JSON.stringify(productList);
//   const localData = localStorage.getItem("recentlyViewedProduct");
// // console.log(localData);
//   if (localData === null) {
//     localStorage.setItem("recentlyViewedProduct", productDataString);
//   } else if (localData) {
//     const oldProductData = localStorage.getItem("recentlyViewedProduct");
//     const countProductData = (oldProductData.match(/productTitle/g) || []).length;
//     const sameProduct = oldProductData.includes(currProductPageTitle);
//     if (countProductData < numberOfProducts && sameProduct == false) {
//       jsonResp = JSON.parse(oldProductData);
//       jsonRespArr = jsonResp.concat(productList);
//       jsonRespArrStr = JSON.stringify(jsonRespArr);
//       localStorage.setItem("recentlyViewedProduct", jsonRespArrStr);
//     } else if (countProductData >= numberOfProducts && sameProduct == false) {
//       jsonResp = JSON.parse(oldProductData);
//       jsonResp.shift();
//       jsonRespArr = jsonResp.concat(productList);
//       jsonRespArr = JSON.stringify(jsonRespArr);
//       localStorage.setItem("recentlyViewedProduct", jsonRespArr);
//     }
//   }
// }

// setRecentlyViewedProducts();
// const localViewed = localStorage.recentlyViewedProduct;
// function getRecentlyViewedProducts() {
//   const productData = JSON.parse(localStorage.getItem("recentlyViewedProduct"));
//   const recentlyViewedHtml = [];
//   productData.map(item => {
//     recentlyViewedHtml.unshift(`
//     <li class="grid__item">
//      <div class="card-wrapper underline-links-hover">
//       <div class="card card--standard card--media " style="--ratio-percent: 100%;">
//         <div class="card__inner color-background-2 gradient ratio" style="--ratio-percent: 100%;">
//          <div class="card__media">
//          <div class="media media--transparent media--hover-effect">
//     		  <img class="motion-reduce" src="${item.productImg}" width="${item.imgWidth}" height="${item.imgHeight}"  loading="lazy" alt="${item.productImageAltText}"/>
//          </div>
//          </div>
//        </div>
//        <div class="card__content">
//        <div class="card__information">
//        <h3 class="card__heading h5">
//        <a class="full-unstyled-link" href="${item.productUrl}">${item.productTitle}</a></h3>
//          <div class="card-information">
//            <div class="price ">
//              <div class="price__container">
//                <div class="price-item price-item--regular">
//                    ${item.productPrice}
//                </div>
//              </div>
//            </div>
//          </div>
//        </div>
//        </div>
//        </div>
//        </div>
//     </li>
//    `);
//   });
//   const newProductData = `${recentlyViewedHtml.join("")}`;
//   const fullContent = document.getElementsByClassName("recently-viewed");
//   fullContent[0].innerHTML = newProductData;
// }

// document.addEventListener("DOMContentLoaded", function (event) {
//   getRecentlyViewedProducts();
// });

