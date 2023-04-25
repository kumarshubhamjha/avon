
<div class="left-section">

    <div id="accordion" class="accordion-container">
        <!-- <div class="item">
            <div class="accordion-title js-accordion-title open">
                <div class="img-wrapper">
                    <img class="img-fluid" src="{{url('img/icon/listing/bicycle.svg')}}" alt="bicycle-icon">
                </div>
                <p>Bicycle Categories</p>
            </div>
            <div class="accordion-content ">
                <ul>
                    <li>
                        <a href="#" class="active">Men</a>
                    </li>
                    <li>
                        <a href="#" class="">Women</a>
                    </li>
                    <li>
                        <a href="#" class="">Girls</a>
                    </li>
                    <li>
                        <a href="#" class="">Boys</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!--/.accordion-content-->
        <form>
      

        <div class="item">
            <div class="accordion-title js-accordion-title">
                <div class="img-wrapper">
                    <img class="img-fluid" src="{{url('img/icon/listing/age.svg')}}" alt="bicycle-icon">
                </div>
                <p>Price</p>
            </div>
            <div class="accordion-content">
                <ul>
                    <li>
                    <input type="radio" id="radio1" name="price" value="100-1000"><label>100-1000</label>
                       
                    </li>
                    <li>
                    <input type="radio" id="radio2" name="price" value="1000-10000"><label>1000-10000</label>
                    </li>
                    <li>
                    <input type="radio" id="radio3" name="price" value="5000-20000"><label>1000-20000</label>
                    </li>
                </ul>
            </div>
        </div>
</form>
        <!--/.accordion-content-->

        <!-- <div class="item">
            <div class="accordion-title js-accordion-title">
                <div class="img-wrapper">
                    <img class="img-fluid" src="{{url('img/icon/listing/review.svg')}}" alt="Review">
                </div>
                <p>Review</p>
            </div>
            <div class="accordion-content">
                <ul>
                    <li>
                        <a href="#" class="">Review 1</a>
                    </li>
                    <li>
                        <a href="#" class="active">Review 2</a>
                    </li>
                    <li>
                        <a href="#" class="">Review 3</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!--/.accordion-content-->
        <!-- <div class="item">
            <div class="accordion-title js-accordion-title">
                <div class="img-wrapper">
                    <img class="img-fluid" src="{{url('img/icon/listing/suspension.svg')}}" alt="Suspension">
                </div>
                <p>Suspension</p>
            </div>
            <div class="accordion-content">
                <ul>
                    <li>
                        <a href="#" class="active">2000</a>
                    </li>
                    <li>
                        <a href="#" class="">1000</a>
                    </li>
                    <li>
                        <a href="#" class="">500</a>
                    </li>
                    <li>
                        <a href="#" class="">200</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!--/.accordion-content-->

        <!-- <div class="item">
            <div class="accordion-title js-accordion-title">
                <div class="img-wrapper">
                    <img class="img-fluid" src="{{url('img/icon/listing/brake.svg')}}" alt="Brake System">
                </div>
                <p>Brake System</p>
            </div>
            <div class="accordion-content">
                <ul>
                    <li>
                        <a href="#" class="active">2000</a>
                    </li>
                    <li>
                        <a href="#" class="">1000</a>
                    </li>
                    <li>
                        <a href="#" class="">500</a>
                    </li>
                    <li>
                        <a href="#" class="">200</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!--/.accordion-content-->

        <!-- <div class="item">
            <div class="accordion-title js-accordion-title">
                <div class="img-wrapper">
                    <img class="img-fluid" src="{{url('img/icon/listing/colour.svg')}}" alt="Colour">
                </div>
                <p>Colour</p>
            </div>
            <div class="accordion-content">
                <ul>
                    <li>
                        <a href="#" class="active">2000</a>
                    </li>
                    <li>
                        <a href="#" class="">1000</a>
                    </li>
                    <li>
                        <a href="#" class="">500</a>
                    </li>
                    <li>
                        <a href="#" class="">200</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!--/.accordion-content-->

        <!-- <div class="item">
            <div class="accordion-title js-accordion-title">
                <div class="img-wrapper">
                    <img class="img-fluid" src="{{url('img/icon/listing/frame-size.svg')}}" alt="Frame Size">
                </div>
                <p>Frame Size</p>
            </div>
            <div class="accordion-content">
                <ul>
                    <li>
                        <a href="#" class="active">2000</a>
                    </li>
                    <li>
                        <a href="#" class="">1000</a>
                    </li>
                    <li>
                        <a href="#" class="">500</a>
                    </li>
                    <li>
                        <a href="#" class="">200</a>
                    </li>
                </ul>
            </div>
        </div> -->
       
        <!--/.accordion-content-->
    </div>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
   
$(document).ready(function() {
    
  
    // CREATE
  
    
    $("input[type=radio]").click(function (e) {
        // var price = $("input[name=price]:checked").val();
        // alert(price);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var formData = {
            price: $("input[name=price]:checked").val(),
            
        };
        var type = "POST";
        var product='';
        var imagepath="{{ sc_file('') }}";
        console.log(imagepath);
        var ajaxurl = "{{sc_route('filter.index')}}";
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function(data)
            {
                console.log(data);
                $.each(data, function(i, item) {
                    product+='<div class="col-md-6 col-lg-6 col-xl-4">';
                    product+='<div class="item">';
                    product+='<div class="top">';
                    product+='<div class="product-name-rating d-flex flex-wrap justify-content-between align-items-center hasLabel">';
                    product+='<div class="label">';
                    product+='<span>FTB</span>';
                    product+='</div>';
                    product+='<div class="product-name">';
                    product+='<a href="product/'+data[i].alias+'.html">'+ data[i].name;'</a>';
                    product+='<span>SKU:'+data[i].sku; '</span>';
                    product+='</div>';
                    product+='<div class="rating">4.7</div>';
                    product+='</div>';
                    product+='</div>';
                    product+='<div class="image">';
                    product+='<div class="inner-image freeway-01 active"><a href="product/'+data[i].alias+'.html"><img src="'+ imagepath+'/'+data[i].image+'" alt="New bundle" class="img-fluid"></a></div>';
                    product+='</div>';
                    product+='<div class="color-selection d-flex flex-wrap justify-content-between align-items-center">';
                    product+='<div class="color-availbilty">5 Colors Available</div>';
                    product+='<div class="color-image">';
                    product+='<a class="active" href="JavaScript:void(0);" data-href="freeway-01"><img src="'+ imagepath+'/img/color-img/color.jpg" alt="color"></a>';
                    product+='</div>';
                    product+='</div>';
                    product+='<div class="price-sec-fav d-flex flex-wrap justify-content-between">';
                    product+='<div class="price d-flex flex-wrap justify-content-start align-items-center">';
                    product+='<span class="new-price">';
                    product+='<i class="fa fa-inr" aria-hidden="true"></i>'+ data[i].price;
                    product+='</span>';
                    product+='<span class="old-price">';
                    product+='<i class="fa fa-inr" aria-hidden="true"></i> 0.00';
                    product+='</span>';
                    product+='<div class="w-100">EMI starts @ 2775* / month</div>';
                    product+='</div>';
                    product+='<div class="fav d-flex flex-wrap justify-content-center align-items-center">';
                    product+='<button class="button button-secondary button-zakaria" onclick="addToCartAjax(`'+data[i].id+'`,`default`,``)">';
                    product+='<img src="'+ imagepath+'/img/icon/pdp/wishlist.svg" alt="wishlist">';
                    product+='</button>';
                    product+='</div>';
                    product+='</div>';
                    product+='<div class="cart-buy-links d-flex flex-wrap justify-content-center">';
                    product+='<div class="cart d-flex flex-wrap justify-content-center">';
                    product+='<a class="d-flex flex-wrap justify-content-center align-items-center" href="=">';
                    product+='<img src="'+ imagepath+'/img/icon/flip-product.png" alt="Flip Product">';
                    product+='</a>';
                    product+='<a onclick="addToCartAjax(`'+data[i].id+'`,`default`,``)" href="JavaScript:void(0);" class="d-flex flex-wrap justify-content-center align-items-center"><img src="'+ imagepath+'/img/icon/cart-product.png" alt=""></a>';
                    product+='</div>';
                    product+='<div class="buy-links">';
                    product+='<a class="default-btn" href="product/'+data[i].alias+'.html">Buy Now</a>';
                    product+='</div>';
                    product+='</div>';
                    product+='</div>';
                    product+='</div>';
                    
                });
                console.log(product);
                $('#productlist').html(product);

            },
            error: function (data) {
                console.log(data);
               
            }
        });
    });
});
    </script>

