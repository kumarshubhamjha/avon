
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
        var ajaxurl = "{{sc_route('filter.index')}}";
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
           
            error: function (data) {
                console.log(data);
            }
        });
    });
});
    </script>

