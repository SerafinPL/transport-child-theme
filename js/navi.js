jQuery(document).ready(function ($) {
  

  let AddN,
    AddO,
    TitleNAD,
    TitleOD, infoCheckout = null;

  if (
    $(".woocommerce-column--billing-address.col-1 > .woocommerce-column__title")
      .length
  ) {
    

    AddN = $(
      ".woocommerce-column--billing-address.col-1 > .woocommerce-column__title"
    )[0];

    AddN.innerHTML = "Adress Nadawcy";
  }

  if (
    $(".woocommerce-column--billing-address.col-1 > .woocommerce-column__title")
      .length
  ) {
    

    AddO = $(
      ".woocommerce-column--shipping-address.col-2 > .woocommerce-column__title"
    )[0];

    AddO.innerHTML = "Adress Odbiorcy";
  }

  if ($(".woocommerce-billing-fields > h3").length) {
    

    TitleNAD = $(".woocommerce-billing-fields > h3")[0];

    TitleNAD.innerHTML = "Dane Nadawcy";
  }

  if ($("h3#ship-to-different-address").length) {
    

    TitleOD = $("h3#ship-to-different-address label span")[0];

    TitleOD.innerHTML = "Dane Odbiorcy";
  }

  if ($("form.woocommerce-form").length) {
    

    infoCheckout = $("form.woocommerce-form > p")[0];


    if ( infoCheckout.className === ""){

      infoCheckout.innerHTML = "Aby złożyć zamówienie należy się zalogować.";
    }

  }


});
