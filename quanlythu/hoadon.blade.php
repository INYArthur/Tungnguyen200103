@extends('layout.master')
@section('page_name', 'Danh sách phòng')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<!-- <link rel="stylesheet" href="{{asset('/css/quanly.css')}}"/> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<style>
    
    .box{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
    }
    .box1{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 12px;
    }
    .box2{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 12px;
        color: #B8B8B8;
    }
    .box3{
        display: flex;
        justify-content: space-between;
        margin-left: 15px;
    }
    .box4{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
    }
    .box5{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 16px;
    }
    .search{
        border: 1px solid #D8D8D8;
        border-radius: 5px;
    }
    .white{
        background-color: #FFFFFF;
    }
    .grey{
        background: #F0F0F0;
    }
    .white-color {
        color: #FFFFFF;
    }

    /*  */

    .body{
        background-color: #F0F0F0;
        overflow-x: hidden;
    }
    .header{
        height: 32px;
        display:flex;
        justify-content: space-between;
        background-color: #FFFFFF;
        padding: 8px 24px;
        width: 100%;
    }
    .f-head{
        height: 56px;
        display: flex;
        justify-content: space-between;
        background-color: #FFFFFF;  
        padding: 8px 24px;
        margin-top: 30px;
        width: 100%;
    }
    .t-head{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 16px;
        padding-top: 10px;
    }
    .b-head{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 12px;
        color: #FFFFFF;
    }
    .back{
        display:flex;
        margin-top: 5px;
    }
    .a-back{
        background-color: #D8D8D8;
        margin-right: 10px;
        padding-right: 3px;
    }
    .b-back{
        background-color: #00A86B;
    }
    
    .table{
        margin-top: 30px;
        margin-left: 20px;
        margin-right: 40px;
    }
    .a-table{
        display: flex;
        justify-content: space-between;
        padding: 8px 24px;
        border: 1px solid #F0F0F0;
        margin-right: 40px;
        
    }
    .h-table{
        padding: 16px;
        margin-right: 40px;
    }
    .text-table{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #3B3B3B;
    }
    .des-table{
        padding: 7px 12px;
        border: 1px solid #E6E6E6;
        background: #F0F0F0;
        border-radius: 5px;
    }
    table, th, td{
        border: 1px solid #F0F0F0;
        text-align: center;
        margin-left: 20px;
        background: #FFFFFF;
        width: 100%;
        white-space: nowrap;
    }
    td{
        padding: 12px 8px;
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
    }
    th{
        background: #FAF8F6;
        padding: 8px 4px;
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
    }
    .end-table{
        margin-top: -14px;
        padding-right: 40px;
        
    }
    .foot{
        background: #FFFFFF;
        padding: 16px;
        border: 1px solid #F0F0F0;
        margin-left: 20px;
        margin-right: 20px;
    }
    .end-foot{
        width: 100%;
        height: 150px;
        background: #F0F0F0;
    }
    .table-1{
        
        padding: 7px 12px;
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        margin-bottom: 20px;
        width: 580px;
        /* white-space: nowrap; */
        margin-right: 15px;
    }
    .up{
        padding-top: 7px;
        /* white-space: nowrap; */
    }

    /* responsive mobile*/
    @media only screen and (max-width: 767px) {
        table{
            margin-left: 0px;
        }
        .f-head {
            display: flex;
            flex-direction: column;
            margin-right: 5px;
            height: 100px;
            
        }
        .end-table{
            margin-left: 20px;
            padding-right: 20px;
        }
        .up {
            padding-top: 0px;     
        }
        .box3{
            display: flex;
            flex-direction: column;
        }
        .table-1{
            width: 100%;
        }
        .font-16-1{
            font-size: 16px;
        }
        .font-18-1{
            font-size: 18px;
        }
        .font-14{
            font-size: 14px;
        }
        
        
    }
    @media only screen and (max-width: 370px) {
        .end-table{
            overflow-x: scroll;
            margin: 0 20px;
            padding-right: 0;
            margin-top: -13px;
        }
        .header{
            white-space: nowrap;
        }
        .res-box{
            margin-left: 15px;
        }
        .font-14{
            font-size: 14px;
        }
        .font-12{
            font-size: 12px;
        }
        .font-16{
            font-size: 16px;
        }
        .font-13{
            font-size: 13px;
        }

    }

    @media only screen and (min-width: 768px) and (max-width: 820px) {
        .box3{
            display: flex;
            flex-direction: column;
        }
        .h-table{
            padding-left: 70px;
            padding-top: 26px;
        }
        .font-20{
            font-size: 20px;
        }
        .font-15{
            font-size: 14px;
        }
        .font-16{
            font-size: 16px;
        }
        .font-18{
            font-size: 17px;
        }
        .header{
            height: 40px;
        }
        th{
            font-size: 18px;
        }
        td{
            font-size: 18px;
        }
    }
    

</style>
@endsection
    
@section('content')
<div class="body">
    <div class="header">
        <span class="box font-18 font-16-1 font-14">Nhập hóa đơn</span>
        <div class="res-box">
            <span class="box1 font-16 font-12">Chi tiết</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="-8.16 -8.16 40.32 40.32" fill="none" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M15 7L10 12L15 17" stroke="#B8B8B8" stroke-width="1.104" stroke-linecap="round" stroke-linejoin="round"/> </g></svg>
            <span class="box2 font-16 font-12"> Quản lý phòng </span>
        </div>
    </div>
    <!-- header -->
    <div class="f-head">
        <div class="up"><span class="t-head font-18 font-16-1"> Nhập hóa đơn tiền phòng 201 - Green Ocean 23 Thọ Tháp </span></div>
        <div class="back">
            <div>
                <button class="a-back search">
                    <span class="box1 font-15 font-14 font-13">Quay lại</span>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </div>
            <div>
                <button class="b-back search">
                    <span class="b-head font-15 font-14 font-13">Xác nhận thanh toán</span>
                    <i class="fa-solid fa-check white-color"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- table -->
<div class="table">
    <div class="a-table white">
        <span class= "t-head font-20">Hóa đơn - HDS00003846</span>
    </div>
    <!-- t-head-table -->
    <div class="h-table white">
        <div class="box3">
            <div class="table-1 grey" style="background: #F0F0F0;"><span class="box4 font-20 font-16-1">Phòng 201 - Green Ocean 23 Thọ Tháp  </span></div>
            <div class="table-1 grey" style="background: #F0F0F0;"><span class="box4 font-20 font-16-1">Ngày tạo hóa đơn: 08:00:12  05/05/2023</span></div>
        </div>
        <div class="box3">
            <div class="table-1 grey" style="background: #F0F0F0;"><span class="box4 font-20 font-16-1">Chủ nhà: Fagi Group</span></div>
            <div class="table-1 grey" style="background: #F0F0F0;"><span class="box4 font-20 font-16-1">Người thuê: Lê Thị Thùy Linh - 0965598723</span></div>
        </div>
        <div class="box3">
            <div class="table-1 grey" style="background: #F0F0F0;"><span class="box4 font-20 font-16-1">Địa chỉ: 23 P. Thọ Tháp, Dịch Vọng, Cầu Giấy, Hà Nội 100000, Việt Nam</span></div>
            <div class="table-1 grey" style="background: #F0F0F0;"><span class="box4 font-20 font-16-1">Ngày thanh toán: 08:00:12  06/05/2023</span></div>
        </div>
    </div>
    
</div>
    <!-- end-table -->
    <div class="end-table box4">
        <table>
            <tr class="">
                <th class="">Tên</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                
            </tr>
            <tr class="">
                <td class="">Tiền phòng</td>
                <td>4.000.000đ</td>
                <td>1</td>
                <td>4.000.000đ</td>
            </tr>
            <tr class="">
                <td class="">Tiền điện</td>
                <td>4.000đ</td>
                <td>152</td>
                <td>608.000đ</td>
            </tr>
            <tr class="">
                <td class="">Tiền nước</td>
                <td>30.000đ</td>
                <td>12</td>
                <td>360.000đ</td>
            </tr>
            <tr class="">
                <td class="">Tiền internet</td>
                <td>100.000đ</td>
                <td>1</td>
                <td>100.000đ</td>
            </tr>

            <tr class="">
                <td class="">Chi phí khác</td>
                <td>20.000đ</td>
                <td>1</td>
                <td>20.000đ</td>
            </tr>
            <tr class="">
                <td class="box font-18" colspan="3">Thành tiền</td>
                <td class="box font-18">5.088.000đ</td>
            </tr>
        </table>
    </div>
    <div class="foot">
        <div class="des-table"><span class="box font-18">Tổng tiền thanh toán: 5.088.000đ</span></div>
    </div>
</div>
<div class="end-foot"></div>

@endsection

@section('js')
@endsection