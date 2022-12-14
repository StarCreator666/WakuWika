@extends('layout.user')
@section('content')
    
<div class="breadcumb-wrapper background-image"style="background-image: url(&quot;assets/img/breadcumb/breadcumb-bg.jpg&quot;);">
<div class="container z-index-common">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Ca<span class="font-style text-theme2">rt</span></h1>
        <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Cart</li>
        </ul>
    </div>
</div>
</div>
<div class="as-cart-wrapper space-top space-extra-bottom" style="text-align: center;">
<h2 class="h4 summary-title">Pesanan Anda</h2>
<div class="container">
    <form class="woocommerce-cart-form" id="formD" name="formD" action="" method="post" enctype="multipart/form-data">
        <table class="cart_table">
            <thead>
                <tr>
                    <th class="cart-col-image">Image</th>
                    <th class="cart-col-productname">Product Name</th>
                    <th class="cart-col-price">Price</th>
                    <th class="cart-col-quantity">Quantity</th>
                    <th class="cart-col-total">Total</th>
                    <th class="cart-col-remove">Remove</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $noharga = 1;
                    $nojumlah = 1;
                @endphp
                <tr class="cart_item">
                    <td data-title="Product"><a class="cart-productimage" href="shop-detailis.html"><img
                                width="91" height="91" src="assets/img/menu/menu_thumb_1_1.png" alt="Image"></a>
                    </td>
                    <td data-title="Name"><a class="cart-productname" href="shop-detailis.html">Chicken
                            Vagetable</a></td>
                    <td data-title="Price">
                        <input type="text" id="harga{{ $noharga++ }}" value="18000"  onkeyup="sum();" hidden />
                        <span class="amount"><bdi><span>Rp.</span>18.000</bdi></span>
                    </td>
                    <td data-title="Quantity">
                        <div class="quantity">
                            {{-- <button class="quantity-minus qty-btn"><i class="far fa-minus" onkeyup="sum();"></i>
                            </button>  --}}
                            <input type="number" class="qty-input" value="1" min="1" max="99" id="jumlah{{ $nojumlah }}"  onkeyup="sum();"> 
                            {{-- <button class="quantity-plus qty-btn"><i class="far fa-plus" onkeyup="sum();"></i>
                            </button> --}}
                        </div>
                    </td>
                    <td data-title="Hot/Ice">
                        <span class="amount"><bdi><span></span>Hot</bdi></span></td>
                    <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                </tr>
            </tbody>
        </table>
        <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h2 class="h4 summary-title">Cart Totals</h2>
               <table class="cart_totals">
                    <tbody>
                        <tr class="order-total">
                            <td style="width: 20%;">Order Total</td>
                            <td data-title="Total" style="text-align: right;"><strong><input type="text" id="total" placeholder="Rp.0" style="text-align: right; padding-right:0; border: none;background: transparent;" readonly></strong></td>
                        </tr>
                    </tbody>
                </table>
                <div class="actions"><a href="/pesan" class="as-btn" style="height: 29px;text-align: center;padding-top: 8px;text-transform: capitalize;font-weight: 700;font-size: 12px;padding-bottom: 7px;">Buat Pesanan</a></div>
            </div>
        </div>
    </form>

</div>
</div>
<script type="text/javascript" language="Javascript">
    function sum() {
      var txtFirstNumberValue1 = document.getElementById('harga1').value;
      var txtSecondNumberValue1 = document.getElementById('jumlah1').value;

      var newValue1 = txtSecondNumberValue1 || 0;
      var result1 = parseInt(txtFirstNumberValue1) * parseInt(newValue1);
      if (!isNaN(result1)) {
         document.getElementById('total').value = 'Rp.' + result1;
      }
}        
</script>
@endsection