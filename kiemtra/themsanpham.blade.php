<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them san pham</title>
    <link rel="stylesheet" href="{{asset('/css/fontawesome/TNshop.css')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
</head>
<body>
    @include('kiemtra.header')
<div class="container-fluid ms-md-5 ms-0">
    <div class=" mt-5 ms-md-5 ms-0 d-md-flex d-block mb-4">
        <div class=" col-md-4 col-12">
            <img class="w-100" style="width: 350px; object-fit: cover;" src="https://static.wixstatic.com/media/c837a6_944cb31b5c7d4659b7a0c6612b4df573~mv2.jpg/v1/fill/w_625,h_834,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/c837a6_944cb31b5c7d4659b7a0c6612b4df573~mv2.jpg" alt="">
        </div>
        <div class="col-md-4 col-12 ms-md-5 ms-0">
            <span class="font-30-bold">TN shirt</span>
            <br>
            <label><span class="p-2">SKU: 0015</span></label>
            
            <br>
            <label class="pt-3"><span class="p-2 font-20">150.000đ</span></label>

            <div class="p-2">
                <span class="font-16">Số lượng</span>
                <div class="mt-2">
                    <input type="number" pattern="[0-9]" max="999" min="1" value="1">
                </div>
            </div>
                <input type="checkbox" class="nav-PC-input" id="nav-PC-input">
            <label for="nav-PC-input" class="p-2 mt-3">
                <button class="w-100 p-2 bg-black" type="button">
                    <span class="text-yeelow">Thêm vào giỏ hàng</span>
                </button>
            </label>
            <div class="p-2 mt-2">
                <span class="">THÔNG TIN SẢN PHẨM</span>
                <hr>
                <span class="font-12">TN shirt là chi tiết sản phẩm. TN shirt là nơi tuyệt vời để bổ sung chi tiết về sản phẩm của bạn như định cỡ, chất liệu, hướng dẫn chăm sóc và làm sạch. Đây cũng là nơi tuyệt vời để nói về điều làm cho sản phẩm này đặc biệt và khách hàng có thể hưởng lợi gì từ nó. Người mua muốn biết họ sẽ nhận được gì trước khi mua, vì vậy hãy cung cấp càng nhiều thông tin càng tốt để họ có thể mua một cách tự tin và chắc chắn.</span>
                <hr>
    
            </div>

        </div>
        
    </div>
</div>
@include('kiemtra.footer')
</body>
</html>