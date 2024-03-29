<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach don hang</title>
    <link rel="stylesheet" href="{{asset('/css/fontawesome/TNshop.css')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
</head>
<body>
@include('kiemtra.header')
<div class="container-fluid">
    <div class="card mt-2 mb-2">
        <div class="card-header d-md-flex d-block justify-content-between">
            <label><h2>Danh Sách sản phẩm</h2></label>
            
            <form class="" action="">
                <div class="border d-flex">
                    <label class="bg-white" for="input_search"><i class="me-2 fa-solid fa-magnifying-glass"></i></label>
                    <input class="border-0 w-100" type="search" id="gsearch" name="gsearch" placeholder="Tìm kiếm">
                </div>
                
            </form>
        </div>
        <div class="card-body overflow">
            <table class="table text-center w-space">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>T-shirt White</td>
                        <td>
                            <img style="width: 100px" src="https://static.wixstatic.com/media/c837a6_944cb31b5c7d4659b7a0c6612b4df573~mv2.jpg/v1/fill/w_349,h_465,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/c837a6_944cb31b5c7d4659b7a0c6612b4df573~mv2.jpg" alt="">
                        </td>
                        <td>150.000đ</td>
                        <td>1</td>
                        <td>
                            <a class="btn btn-danger" href="">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>T-shirt Orange</td>
                        <td>
                            <img style="width: 100px" src="https://static.wixstatic.com/media/c837a6_fd300737ecf3406b83fd9be5d67463e4~mv2.jpg/v1/fill/w_349,h_465,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/c837a6_fd300737ecf3406b83fd9be5d67463e4~mv2.jpg" alt="">
                        </td>
                        <td>150.000đ</td>
                        <td>1</td>
                        <td>
                            <a class="btn btn-danger" href="">Xóa</a>
                        </td>
                    </tr>
                    <!--  -->
                </tbody>
            </table>
            <a class="btn btn-primary" href=""> Thêm mới</a>
            <a class="btn btn-success" href="">Thanh Toán</a>
        </div>

    </div>
    
</div>
@include('kiemtra.footer')
</body>
</html>