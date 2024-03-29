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
    .foot{
    display: flex;
    justify-content: space-between;
    background-color: #FFFFFF;
    margin-left: 20px;
    margin-right: 20px;
    /* white-space: nowrap; */
   }
   .t-foot{
    border: 1px solid #E6E6E6;
    border-radius: 5px;
    background-color: #FFFFFF;
   }
   .a-foot{
    border: 1px solid #E6E6E6;
    border-radius: 5px;
    background-color: #856141;
    color: #FFFFFF;
   }
   .b-foot{
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 14px;
    color: #676767;
    margin: 18px;
    margin-left: 30px;
}
    .c-foot{
        margin: 18px;
        margin-left: 30px;
        white-space: nowrap;
    }
    .modal-box5{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #B8B8B8;
    }
    .modal-box7{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
        color: #fff;
    }
    .modal-box6{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
        color: #856141;
    }
    .body{
        background: #F8F8F8;
        overflow-x: hidden;
        
    }
    .box1{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
        color: #3B3B3B;
    }
    .box2{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 12px;
        color: #3B3B3B;
    }
    .box3{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 20px;
        text-align: center;
        color: #3B3B3B;
    }
    .box4{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        text-align: center;
        color: #3B3B3B;
    }
    .justify{
        display: flex;
        justify-content: space-between;
    }
    .grey{
        background-color: #F8F8F8;
    }
    .white{
        background: #FFFFFF;
    }
    .des-thead{
        width: 250px;
        padding: 24px;
        border: 1px solid #E6E6E6;
        border-radius: 5px; 
        margin: 20px 10px;
    }
    

    .header{
        display: flex;
        justify-content: space-between;
        padding: 8px 24px;
        background: #FFFFFF;
    }
    .t-head{
        padding: 0px 24px;
        display: flex;
    }
    .f-head{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 16px;
    }
    .a-fhead{
        padding:12px 24px;
        border: 1px solid #F0F0F0;
    }
    .Inputbox{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        padding: 15px 16px;
        display: flex;
        justify-content: space-between;
        background-color: #FFFFFF;
        top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }
    .search{
        display: flex;
        
    }
    .upInput{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #B8B8B8;
        border: 1px solid #D8D8D8;
        margin-bottom: 29px;
        border-radius: 5px;
        margin: auto;
        display: flex;
		align-items: center;
        padding: 5px;
    }
    .bInput{
        background: 
        linear-gradient(#fff 0 0) padding-box, /*this is your grey background*/
        linear-gradient(to right, #A67951, #FFCA99) border-box;
        border: 1px solid transparent;
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 12px;
        color: #3B3B3B;
        border-radius: 5px;
        margin: auto;
        display: flex;
		align-items: center;
        margin-left: 10px;
        padding: 5px;
    }
    .bInput1{
        background: 
        linear-gradient(#fff 0 0) padding-box, /*this is your grey background*/
        linear-gradient(to right, #A67951, #FFCA99) border-box;
        border: 1px solid transparent;
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 12px;
        color: #3B3B3B;
        border-radius: 5px;
        margin: auto;
        display: flex;
		align-items: center;
        margin-left: 10px;
        padding: 5px;
    }
    .aInput{
        /* padding-right: 60px; */
        font-family: 'Roboto', sans-serif;
        outline: none;
        border: none;
        color: #3B3B3B;
        width: 100%;
    }
    .fa-magnifying-glass {
    padding: 0 10px;
   }
    
    .a-search{
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        margin-bottom: 24px;
        background-color: #FFFFFF;
        margin: auto;
    }
    
    .calen{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #3B3B3B;
        border: none;
        background-color: #FFFFFF;
    }
    .a-calen{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #3B3B3B;
        border: none;
        background-color: #FFFFFF;
    }
    .b-calen{
        border: none;
        background-color: #FFFFFF;
        margin-bottom: 25px;
        margin: auto;
    }
    table, th,td{
        border: 1px solid #D8D8D8;
        border-right: 1px;
        /* padding: 8px 4px; */
        font-family:'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #3B3B3B;
        white-space: nowrap;
    }
    th{
        padding: 8px 4px;
        text-align: center;
        background: #F0F0F0;
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
    }
    td{
        padding: 12px 8px;
        text-align: center;
        background: #fff;
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
    }
    .a-table{
        margin-top: 0px;
        margin-left: 18px;
        overflow-x: scroll;
        margin-right: 20px;
    }
    .htable{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
        /* padding: 8px 4px; */
        background-color: #FAF8F6;
        
    }
    .btable{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        text-align: center;
    }
    .dropdown-menu li {
    border-bottom: 1px solid #E6E6E6;
    padding: 5px;
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 14px;
    }
    .dropdown-menu {
        padding: 0px;
    }
    .up-th{
        color: #856141;
        border: none;
        background-color: #FFFFFF;
        display: flex;
        white-space: nowrap;
        
    }
    .reup{
        padding: 12px 8px;
    }

    .foot{
    display: flex;
    justify-content: space-between;
    background-color: #FFFFFF;
    margin-left: 20px;
    margin-right: 20px;
   }
   .t-foot{
    border: 1px solid #E6E6E6;
    border-radius: 5px;
    background-color: #FFFFFF;
   }
   .a-foot{
    border: 1px solid #E6E6E6;
    border-radius: 5px;
    background-color: #856141;
    color: #FFFFFF;
   }
   .b-foot{
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 14px;
    color: #676767;
    margin: 18px;
    margin-left: 30px;
    }
    .c-foot{
        margin: 18px;
        margin-left: 30px;
        white-space: nowrap;
    }
    img{
        margin-right: 2px;
        margin-bottom: 2px;
        margin-left: 9px;
    }
    .end{
        width: 100%;
        height: 100px;
    }
    a{
    text-decoration: none;
    box-shadow: none;
    font-family: 'Roboto';
    font-weight: 400;
    font-size: 14px;
    color: #676767;
   }
   a:hover{
    text-decoration: none;
   }
   .all-scren{
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background: rgba(255, 255, 255, 0.1);
        display: none;
    }

   /* modal */

   .nav-PC{
        position: absolute;
        background: #fff;
        margin-left: 213px;
        margin-top: 28px;
        display: none;
        border: 1px solid #F0F0F0;
        border-radius: 5px;
        z-index: 1;
    }
    .nav-input:checked ~ .nav-PC {
        display: block;
    }
    .nav-input:checked ~ .all-scren {
        display: block;
    }
    .nav-input{
        display: none;
    }
    .h-modal{
        text-align: center;
        
    }
    .mod-box{
        margin: 6px;
    }
    .item-hmodal{
        position: absolute;
        top: 1%;
        right: 1%;
        border: none;
        background: #fff;
    }
    .content-modal{
        margin-left: 25px;
        margin-right: 25px;
    }
    .ul-modal{
        margin-left: -25px;
        
    }
    .li-modal{
        border: none;
        white-space: nowrap;
    }
    .pay-modal{
        margin-top: -10px;
        width: 400px;
        display: flex;
        justify-content: space-between;
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        background: #fff;
        padding: 7px 12px;
    }
    .content-pay-modal{
        margin-top: -15px;
    }
    .content1-pay-modal{
        margin-bottom: 3px;
        margin-top: 6px;
    }
    .modal-input{
        display: flex;
    }
    #specifyColor{
        accent-color: #856141;
        width: 25px;
        height: 15px;
    }
    #specifyColor1{
        accent-color: #856141;
        width: 25px;
        height: 15px;
    }
    #specifyColor2{
        accent-color: #856141;
        width: 25px;
        height: 15px;
    }
    .calen-modal{
        width: 50%;
        padding: 7px 12px;
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        margin-right: 10px;
        display: flex;
        justify-content: space-between;
    }
    .calen1-modal{
        width: 50%;
        padding: 7px 12px;
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
    }
    .modal-input1{
        padding: 7px 12px;
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
    }
    .f-modal{
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
        margin-bottom: 40px;
    }
    .end-modal{
        background: 
        linear-gradient(#fff 0 0) padding-box, /*this is your grey background*/
        linear-gradient(to right, #A67951, #FFCA99) border-box;
        border: 1px solid transparent;
        border-radius: 5px;
        /* padding: 24px 12px; */
        width: 48%;
        height: 40px;
    }
    .test:hover{
        color: #FFCA99;
    }
    .end-modal1{
        background: linear-gradient(101.94deg, #A67951 0%, #FFCA99 100%);
        border: 1px solid transparent;
        border-radius: 5px;
        width: 48%;
        height: 40px;
    }
    .end-modal1:hover{
        background: #f2bc8b;
    }
    .fa-chevron-down{
        color: #B8B8B8;
    }
    .test-2{
        display: flex;
    }
    .body-table{
        margin-top: 30px;
    }
    .up-th{
        background: #fff;
    }

    /* Responsive Tablet */
    @media only screen and (max-width: 820px) {
        
        .font-18{
            font-size: 18px;
        }
        
        table, th, td{
            font-size: 20px;
        }
        
        .font-20{
            font-size: 20px;
        }
        .font-16{
            font-size: 16px;
        }
        .font-25{
            font-size: 25px;
        }
        .font-22{
            font-size: 22px;
        }
        .t-head{
            display: flex;
            flex-direction: column;
        }
        .des-thead {
            margin-top: 20px;
            width: 100%;
            padding-top: 29px;
            margin-left: auto;
        }
        .a-box{
            margin-top: 0px;
            margin-bottom: 0px 
        }
        .nav-PC{
            position: fixed;
            top: -60px;
            bottom: 0;
            right: 0;
            left: 16px;
            margin-left: -17px;
            margin-top: 62px;
            width: 100%;
            z-index: 1;
        }
        .pay-modal{
            width: 100%;
        }
        .modal-input{
            width: 100%;
        }


    }

    /* Responsive mobile */
    @media only screen and (max-width: 767px) {
        .t-head{
            display: flex;
            flex-direction: column;
            
        }
        
        .des-thead{
            margin-top: 20px;
            width: 100%;
            padding-top: 29px;
            margin-left: auto;
        }
        .a-box{
            margin-top: 0px;
            margin-bottom: 0px 
        }
        .upInput{
            width: 100%;
        }
        .Inputbox{
            display: flex;
            flex-direction: column;
        }
        /* .bInput{
            white-space: nowrap;
        } */
        .bInput1{
            display: block;
            margin-left: 0px;
            margin-top: 10px;
            white-space: nowrap;
            padding: 5px;
        }
        .test-1{
            border: none;
            background: #fff;
        }
        .nav-PC{
            position: fixed;
            top: -60px;
            bottom: 0;
            right: 0;
            left: 16px;
            margin-left: -17px;
            margin-top: 62px;
            width: 100%;
            z-index: 1;
        }
        .in-calen{
            margin-top: 10px;
            width: 100%;
            
        }
        
        .bInput{
            display: none;
        }
        .upsearch{
            display: block;
        }
        .a-search{
            margin-left: 0px;
        }
        /* .b-search{
            margin-right: 125px;
        } */
        
    }
    @media only screen and (max-width: 300px){
        
        .b-foot {
            font-size: 14px;
        }
        .text-tablet-input {
            font-size: 16px;
        }
        .c-head {
            font-size: 17px;
        }
        .cbox-b {
            font-size: 15px;
        }
        .nav-PC{
            width: 100%;
            margin-left: -16px;
        }
        .c-foot{
            white-space: wrap;
        }
        .li-modal{
            white-space: wrap;
        }
        .tetx-fold{
            font-size: 12px;
        }
    }
    @media only screen and (min-width: 768px) { 
        .bInput1{
            display: none;
        }
        .test-1{
            display: none;
        }
    }
    
    
</style>
@endsection

@section('content')
<div class="body">
    <!-- head -->
    <div class="header">
        <span class="box1 font-20">Tiền cọc</span>
        <span class="box2 font-16">Tổng quan</span>
    </div>
    <!-- t-head -->
    <div class="t-head grey">
        <div class="white des-thead">
            <div class="box3 font-25">1.000.000.000đ</div>
            <div class="">
                <div class="box4 font-22">Tổng cọc</div>
            </div>
        </div>
        <div class="white des-thead a-box">
            <div class="box3 font-25">100.000.000đ</div>
            <div class="">
                <div class="box4 font-22">Tổng cọc 2024</div>
            </div>
        </div>  
        <div class="white des-thead">
            <div class="box3 font-25">100.000.000đ</div>
            <div class="">
                <div class="box4 font-22">Tổng cọc 01/2024</div>
            </div>
        </div>
    </div>
    <!-- f-head -->
    <div class="justify white a-fhead ">
        <span class="f-head font-20">Tiền cọc</span>
    </div>
    <!-- h-table -->
    <div class="body-table">
                    <div class="Inputbox">
                        <div class=search>
                            <div class="upInput ">
                                <i class="fa-solid fa-magnifying-glass"></i>    
                        
                                <input class="aInput font-18" type="text" name="search" placeholder="Nhập mã hợp đồng">
                            </div> 
                            
                                
                                    <input type="checkbox" class="nav-input" id="nav-box">

                                    <label for="nav-box" class="bInput">
                                    <span class="box4 font-16">Lọc dữ liệu</span>
                                    <img src="{{asset('images/filter.png')}}" alt="">    
                                    </label>
                                    
                                    <label for="nav-box" class="all-scren"></label>

                                    
                                <nav class="nav-PC">
                                        <div class="h-modal">
                                                <div class="mod-box font-20">Thông tin tìm kiếm</div> 
                                                
                                                    <button class="item-hmodal">
                                                        <label for="nav-box"><i class="fa-solid fa-xmark"></i></label>  
                                                    </button>
                                                
                                        </div>
                                    <div class="content-modal">
                                        <span class="modal-box4 font-18">Trạng thái</span>
                                        <ul class="ul-modal">
                                            <li class="li-modal"><input type="radio" size="" id="specifyColor" name="checkbox1" ><label for="specifyColor" class="modal-box4 font-18 tetx-fold">Hiển thị tất cả</label></li>
                                            <li class="li-modal"><input type="radio" size="" id="specifyColor1" name="checkbox2" ><label for="specifyColor1" class="modal-box4 font-18 tetx-fold">Chỉ hiển thị phòng của Fagi</label></li>
                                            <li class="li-modal"><input type="radio" size="" id="specifyColor2" name="checkbox3" ><label for="specifyColor2" class="modal-box4 font-18 tetx-fold">Chỉ hiển thị phòng cho thuê liên kết</label></li>
                                            
                                        </ul>
                                        
                                        <p class="content-pay-modal modal-box4 font-18">Trạng thái thanh toán</p>
                                        <button class="pay-modal">
                                            <span class="modal-box5 font-18">Chọn</span>
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </button>
                                        
                                        <p class="content1-pay-modal modal-box4 font-18">Ngày tạo</p>

                                        <div class="modal-input">
                                            
                                            <div class="calen-modal">
                                                <span class="modal-box5 font-18">Từ ngày</span>
                                                <img src="{{asset('images/calendar.png')}}" alt="">
                                            </div>

                                            <div class="calen1-modal">
                                                <span class="modal-box5 font-18">Đến ngày</span>
                                                <img src="{{asset('images/calendar.png')}}" alt="">
                                            </div>
                                        </div>

                                        <p class="content1-pay-modal modal-box4 font-18">Thành phố</p>

                                        <div class="modal-input1">
                                            <span class="modal-box5 font-18">Chọn</span>
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>

                                        <div class="f-modal">
                                            <button class="end-modal"><span class="modal-box6 test font-18">Hủy</span></button>
                                            <button class="end-modal1"><span class="modal-box7 font-18">Tìm kiếm</span></button>
                                        </div>  
                                    </div>  
                                </nav>
                                
                        </div>
                                    <div class= upsearch> 
                                            <button class="test-1">
                                                <label for="nav-box" class="bInput1">
                                                    <span class="box4">Lọc dữ liệu</span>
                                                    <img src="{{asset('images/filter.png')}}" alt="">    
                                                </label for="nav-box"> 
                                            </button>
                                               
                                        <div class="in-calen">
                                            <button class= "a-search">
                                                <input class="calen font-16" type="button" value="12/2022">
                                                <img src="{{asset('images/calendar.png')}}"alt="">
                                            </button>
                                                <button class="b-calen" type="submit">
                                                <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            <button class= "a-search">
                                                <input class="a-calen font-16" type="button" value="12/2023">
                                                <img src="{{asset('images/calendar.png')}}"alt="">
                                            </button>
                                        </div>
                                        
                                    </div>
                                    
                    </div>
                    
            <div class="a-table">
                        <table>
                            <!-- <thead> -->
                                <tr class="htable">
                                    <th>STT</th>
                                    <th>Chức năng</th>
                                    <th>Người thuê</th>
                                    <th>Số điện thoại</th>
                                    <th>Tổng cọc</th>
                                    <th>Ngày đặt cọc</th>
                                    <th>Tên phòng</th>
                                    <th>Tòa nhà</th>
                                    <th>Địa chỉ</th>
                                    
                                </tr>
                               
                            <!-- </thead> -->
                            <!-- <tbody> -->
                                <tr class="btable reup">
                                    <td>1</td>
                                    <td class="brown-1">
                                        <div class="dropdown">
                                            <button class="up-th" id="dropdown-function" data-bs-toggle="dropdown">
                                                Chức năng
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px" viewBox="0 0 32 32" version="1.1" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M15.233 19.175l0.754 0.754 6.035-6.035-0.754-0.754-5.281 5.281-5.256-5.256-0.754 0.754 3.013 3.013z" fill="#856141"> </path> </g></svg>
                                            </button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-function">
                                                <li role="presentation">
                                                    <a class="font-14 fw-400 grey-3 ms-2" role="menuitem" tabindex="-1" href="#">Xem chi tiết</a>
                                                </li>
                                                <li role="presentation">
                                                    <a class="font-14 fw-400 grey-3 ms-2" role="menuitem" tabindex="-1" href="#">Xác nhận thanh toán</a>
                                                </li>
                                            
                                            </ul>   
                                        </div>
                                    </td>
                                    <td>Lê Hoàng Liên</td>
                                    <td>0962203695</td>
                                    <td>5.000.000đ</td>
                                    <td>08:00:12  05/05/2023</td>
                                    <td>101</td>
                                    <td>Green Ocean 23 Thọ Tháp </td>
                                    <td >23 P. Thọ Tháp, Dịch Vọng, Cầu Giấy, Hà Nội 100000, Việt Nam</td>
                                    
                                </tr>
                                <tr class="btable">
                                    <td>1</td>
                                    <td class="brown-1">
                                        <div class="dropdown">
                                            <button class="up-th" id="dropdown-function" data-bs-toggle="dropdown">
                                                Chức năng
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px" viewBox="0 0 32 32" version="1.1" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M15.233 19.175l0.754 0.754 6.035-6.035-0.754-0.754-5.281 5.281-5.256-5.256-0.754 0.754 3.013 3.013z" fill="#856141"> </path> </g></svg>
                                            </button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-function">
                                                <li role="presentation">
                                                    <a class="font-14 fw-400 grey-3 ms-2" role="menuitem" tabindex="-1" href="#">Xem chi tiết</a>
                                                </li>
                                                <li role="presentation">
                                                    <a class="font-14 fw-400 grey-3 ms-2" role="menuitem" tabindex="-1" href="#">Xác nhận thanh toán</a>
                                                </li>
                                            
                                            </ul>   
                                        </div>
                                    </td>
                                    <td>Lê Hoàng Liên</td>
                                    <td>0962203695</td>
                                    <td>5.000.000đ</td>
                                    <td>08:00:12  05/05/2023</td>
                                    <td>101</td>
                                    <td>Green Ocean 23 Thọ Tháp </td>
                                    <td >23 P. Thọ Tháp, Dịch Vọng, Cầu Giấy, Hà Nội 100000, Việt Nam</td>
                                </tr>
                                <tr class="btable">
                                    <td>1</td>
                                    <td class="brown-1">
                                        <div class="dropdown">
                                            <button class="up-th" id="dropdown-function" data-bs-toggle="dropdown">
                                                Chức năng
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="23px" viewBox="0 0 32 32" version="1.1" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M15.233 19.175l0.754 0.754 6.035-6.035-0.754-0.754-5.281 5.281-5.256-5.256-0.754 0.754 3.013 3.013z" fill="#856141"> </path> </g></svg>
                                            </button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-function">
                                                <li role="presentation">
                                                    <a class="font-14 fw-400 grey-3 ms-2" role="menuitem" tabindex="-1" href="#">Xem chi tiết</a>
                                                </li>
                                                <li role="presentation">
                                                    <a class="font-14 fw-400 grey-3 ms-2" role="menuitem" tabindex="-1" href="#">Xác nhận thanh toán</a>
                                                </li>
                                            
                                            </ul>   
                                        </div>
                                    </td>
                                    <td>Lê Hoàng Liên</td>
                                    <td>0962203695</td>
                                    <td>5.000.000đ</td>
                                    <td>08:00:12  05/05/2023</td>
                                    <td>101</td>
                                    <td>Green Ocean 23 Thọ Tháp </td>
                                    <td >23 P. Thọ Tháp, Dịch Vọng, Cầu Giấy, Hà Nội 100000, Việt Nam</td>
                                </tr>
                            
                            <!-- </tbody> -->
                        </table>
    </div>

    <div class="foot">
                                <p class= "b-foot">Hiển thị 10 trong 24 bản ghi</p>
                            <div class= "c-foot">
                                    <button class=t-foot>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <rect width="24" height="24" fill="white"/> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#B8B8B8" stroke-linecap="round" stroke-linejoin="round"/> </g></svg>
                                    </button>
                                    <button class=a-foot>1</button>
                                    <button class=t-foot>2</button>
                                    <button class=t-foot>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <rect width="24" height="24" fill="white"/> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/> </g></svg>
                                    </button>
                            </div>
                        </div>

    <div class="end grey"></div>
    
</div>

@endsection

@section('js')
@endsection