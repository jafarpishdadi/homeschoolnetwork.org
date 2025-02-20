ButtonAddToCart = new class ButtonAddToCart {
  constructor() {
    //Init selectors
    this.btnAddToCart = 'btn-add-to-cart';
    //Add events
    this.eventHandlers();
  }

  eventHandlers() {
    $(document).on('click', `.${this.btnAddToCart}`, (e) => {
      const button = $(e.currentTarget),
        form = button.parents('form');
      this.addOfferToCart(form, button);
    });
  }

  addOfferToCart(form, button) {
    const cartData = [
      {
        'offer_id': form.find('input[name="offer_id"]').val(),
        'quantity': form.find('input[name="quantity"]').val(),
      }
    ];

    $.request('Cart::onAdd', {
      data: {'cart': cartData},
      success: function (response) {
        if (!!response && response.status) {
          button.attr('data-content', form.find('input[name="quantity"]').val()+' Items added to cart');
          //CartLinkHeader.updateBlock();
          $.request('Cart::onGetData', {
            update: {'shop/cart-link-header': `._ajax_cart_link_header_wrapper`}
          });
        } else {
          button.attr('data-content', response.message);
        }

        button.popover('show');
        setTimeout(() => {
          button.popover('hide');
        }, 2500);

        document.getElementById("btn-go-to-cart").style.display = "inline";
      }
    });
  }
}();
