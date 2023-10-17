$(document).ready(function(){

    // This is the section for the banner of the system for the owl carousel function
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // This is the section for the banner of the system as well as the popular products section of the system
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

    // This is used and is defined with a variable it allows for the system to be presented more effectively and more pleasing to the user
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // When the button is pressed within the all products section to determine and list products by a section it will filter them depending on the name they had been assigned.
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })

    // This sections is for the about sections of the system is uses the module owl carousel to ensure that things are working and looking great
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })

    // This is used to be able to interpret and distinguish what happens to the price of the product when the user increases and decrease the quantity
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");

    // This section is responsible for when the user clicks on the qty up button within the system it will go through this code until it reaches the end
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // This section is used to change the product price using the ajax call built into the module already for the system to utilise
        $.ajax({url: "Template/item-price.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // This section will change the price of the product when the user changes the qty of the product within the system
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // This section will change the price of the subtotal when the user changes the qty of the product within the system
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty up button

    // This is a similar section but it is for the qty down section of the system
    $qty_down.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // This section is used to change the product price using the ajax call built into the module already for the system to utilise
        $.ajax({url: "Template/item-price.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // This section will change the price of the product when the user changes the qty of the product within the system
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // This section will change the price of the subtotal when the user changes the qty of the product within the system
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }

            }}); // closing ajax request
    }); // closing qty down button


});
