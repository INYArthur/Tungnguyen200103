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
    /* *{
        outline: 1px solid blue;
    } */
    .all{
        width: 100%;
        overflow-x: hidden;
    }
    .modal-box4{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #3B3B3B;
    }
    .modal-box5{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        color: #3B3B3B;
    }
    .modal-box6{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
        color: #856141;
    }
    .modal-box7{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 14px;
        color: #fff;
    }
    .heading {
        background-color: #FFFFFF;
        color: black;
        display: flex;
        justify-content: space-between;
        padding: 8px 24px;
    }
    .mod-box{
        font-family: 'Roboto';
        font-weight: 600;
        font-size: 16px;
        text-align: center;
        color: #3B3B3B;
    }
    .c-head{
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        font-weight: 600;
		color: #3B3B3B;
    }
    .c-head2{
        font-family: 'Roboto', sans-serif;
        font-size: 12px;
        font-weight: 400;
		color: #3B3B3B;
    }
    .seconding {
        display: flex;
        padding: 0px 24px;
        gap: 24px;
        background-color: #F8F8F8;
        gap: 24px;
        
    }
    .box {
        width:  250px;
        background-color : #FFFFFF;
        padding: 24px;  
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        box-sizing: border-box;
        margin: 20px 0px 20px 0px;

    }

   
    .cbox-a {
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        text-align: center;
        font-weight: 600;
		color: #3B3B3B;
    }
    
    .cbox-b {
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        font-weight: 400;
        color: #3B3B3B;
        display: flex;
        justify-content: space-between;
        white-space: nowrap;
    }

    .box4 {
        display: flex;
        justify-content: space-between;
        padding: 12px 24px;
        font-weight: 600;
        font-size: 16px;
		color: #3B3B3B;
        background-color: #FFFFFF;
        border-bottom: 1px solid #D8D8D8;
        font-family: 'Roboto', sans-serif;
        margin-bottom: 1px;
    }
    .box5 {
        display: flex;
        padding-left: 18px;
        
    }
    .cbox5 {
         border-bottom: 1px solid #D8D8D8;
         padding: 10px 3px;
        background-color: #FAF8F6;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 16px;
        text-align: center;
       
    }
    .tbox5 {
        background-color: #FFFFFF;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 16px;
        text-align: center;
        color: #B8B8B8;
        padding: 10px 3px;
        padding-left: 8px;

    }
    .fbox5{
        border: none;
        background: #FFFFFF;
        color: #B8B8B8;
    }
    .box6 {
        background-color: #F8F8F8 !important;
        width: 100%;
    }
    .Inputbox{
        font-family: 'Roboto';
        font-weight: 400;
        font-size: 14px;
        padding: 15px 16px;
        display: flex;
        justify-content: space-between;
        background-color: #FFFFFF;
        position: relative;
        top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    
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
        
    }
    .aInput{
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 14px;
        border: none;
        width: 100%;
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
        
        display: flex;
		align-items: center;
        margin-left: 10px;
        position: relative;
        padding-left: 5px;
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

        display: flex;
		align-items: center;
        margin-left: 10px;
        padding-left: 5px;
    }
    .c-input{
        padding-left: 5px;
    }
    .search{
        display: flex;
		justify-content: space-between;
        box-sizing:border-box;
        margin-right: 20px;
        
    }
    .upsearch{
        display: flex;
    }
    .a-search {
        border: 1px solid #E6E6E6;
        border-radius: 5px;
        background-color: #FFFFFF;
        white-space: nowrap;
        /*  */
        
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
        border: 1px solid transparent;
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
    }
    td{
        padding: 12px 8px;
        text-align: center;
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
    .a-table{
        margin-top: 20px;
        margin-left: 18px;
        overflow-x: scroll;
        margin-right: 20px;
    }
    tbody{
        background-color: #FFFFFF;
       
    }
    .up-th{
        color: #856141;
        border: none;
        background-color: #FFFFFF;
        display: flex;
        white-space: nowrap;
        /* position: relative; */
    }
    .sub-th{
        /* position: absolute; */
        padding: 8px 12px;
        margin-top: 20px;
        margin-right: 20px;
        border-radius: 10px;
        display: none;
        z-index: 1;
        
    }
    /* .up-th:focus>.sub-th{
        display: block;
    } */
    
    li{
        border: 1px solid #E6E6E6;
        padding: 5px;
        color: #676767;
        text-align: left;
        background-color: white;
    }
   .up-td{
    border: 1px solid green;
    border-radius: 120px;
    color: green;
    background-color: #D9F2E9;
    white-space: nowrap;
    padding: 4px 8px;

   }
   .dw-td{
    border: 1px solid orange;
    border-radius: 120px;
    color: orange;
    background-color: #FFE3CF;
    white-space: nowrap;
    padding: 4px 8px;
    
   }
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
   
   .fa-magnifying-glass {
    padding: 0 10px;
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
   input:focus {
    box-shadow: none;
    outline: none;
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
    .reup{
        padding: 12px 8px;
    }
    img{
        margin-right: 4px;
        margin-bottom: 4px;
        margin-left: 0px;
        padding-left: 10px;
        padding-top: 4px;
    }
    .end{
        width: 100%;
        background: #F8F8F8;
        height: 200px; 
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
    .test-modal{
        border: none;
        width: 100%;
    }

    /* Responsive */
    @media only screen and (max-width: 820px) {
        .text-tablet{
            font-size: 20px;
        }
        .text-tablet-input{
            font-size: 18px;
        }
        .b-foot {
            font-size: 20px;
        }
        table, th, td{
            font-size: 20px;
            
        }
        .res-head-search{
            font-size: 16px;
        }
        .fbox5{
            font-size: 20px;
        }
        .cbox5{
            font-size: 20px;
        }
        .box4{
            font-size: 20px;
        }
        .c-head{
            font-size: 20px;
        }
        .c-head2{
            font-size: 16px;
        }
        .cbox-a{
            font-size: 25px;
        }
        .cbox-b{
            font-size: 22px;
        }
        .seconding{
            display: flex;
            flex-direction: column;
        }
        .box{
            margin-top: 20px;
            width: 100%;
            padding-top: 29px;
        }
        .a-box{
            margin-top: -25px;
            margin-bottom: -25px 
        }
        .nav-PC{
            position: fixed;
            top: 0px;
            bottom: 0;
            right: 0;
            left: 16px;
            margin-left: -17px;
            margin-top: 0px;
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



    @media only screen and (max-width: 767px) {
        .fa-xmark{
            width:20px;
            height: 20px;
        }
        .seconding{
            display: flex;
            flex-direction: column;
        }
        .box{
            margin-top: 20px;
            width: 100%;
            padding-top: 29px;
        }
        .a-box{
            margin-top: -25px;
            margin-bottom: -25px 
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
        .test-1{
            border: none;
            background: #fff;
            margin-left: -5px;
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
    @media only screen and (min-width: 767px) { 
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
<div class="all">
    <div class="heading">
        <span class="c-head"> Hóa đơn tiền nhà</span> 
        <span class="c-head2"> Tổng quan</span>

    </div>
    <div class="seconding">
        <div class="box">
            <div class="cbox-a">100.000.000đ</div>
            <div class="cbox-b">
                <div>Tổng hóa đơn </div>
                <div>32</div>
            </div>
        </div>
        <div class="box a-box">
            <div class="cbox-a">30.000.000đ</div>
            <div class="cbox-b">
                <div> Hóa đơn chưa thanh toán </div>
                <div>10</div>
            </div>
        </div>  
        <div class="box">
            <div class="cbox-a">70.000.000đ</div>
            <div class="cbox-b">
                <div> Hóa đơn đã thanh toán </div>
                <div>22</div>
            </div>
        </div>
        
    </div>
    <div>
        <div class="box4">Hóa đơn tiền nhà</div>
            <div class="box5"> 
                <div class="cbox5">Tất cả</div>
                <div class="tbox5"><button class="fbox5">Chưa thanh toán</button></div>
            </div> 
            <div class="box6">  
                    <div class="Inputbox">
                        <div class=search>
                            <div class="upInput ">
                                <i class="fa-solid fa-magnifying-glass"></i>    
                                
                                <input class="aInput text-tablet-input" type="text" name="search" placeholder="Nhập mã hợp đồng">
                            </div> 
                            
                                
                                    <input type="checkbox" class="nav-input" id="nav-box">
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="exampleModal" >
                                        <label  for="nav-box" class="bInput">
                                        <span class="c-head2">Lọc dữ liệu</span>
                                        <img src="{{asset('images/filter.png')}}" alt="">    
                                        </label>
                                    </button>
                                    
                                    <label for="nav-box" class="all-scren"></label>

                                <div class="nav-PC" id="exampleModal">
                                        <div class="h-modal">
                                                <div class="mod-box text-tablet">Thông tin tìm kiếm</div> 
                                                
                                                    <button class="item-hmodal">
                                                        <label for="nav-box"><i class="fa-solid fa-xmark"></i></label>  
                                                    </button>
                                                
                                        </div>
                                    <div class="content-modal">
                                        <span class="modal-box4 text-tablet-input">Trạng thái</span>
                                        <ul class="ul-modal">
                                            <li class="li-modal"><input type="radio" size="" id="specifyColor" name="checkbox1" ><label for="specifyColor" class="modal-box4 text-tablet-input tetx-fold">Hiển thị tất cả</label></li>
                                            <li class="li-modal"><input type="radio" size="" id="specifyColor1" name="checkbox2" ><label for="specifyColor1" class="modal-box4 text-tablet-input tetx-fold">Chỉ hiển thị phòng của Fagi</label></li>
                                            <li class="li-modal"><input type="radio" size="" id="specifyColor2" name="checkbox3" ><label for="specifyColor2" class="modal-box4 text-tablet-input tetx-fold">Chỉ hiển thị phòng cho thuê liên kết</label></li>
                                            
                                        </ul>
                                        
                                        <p class="content-pay-modal modal-box4 text-tablet-input">Trạng thái thanh toán</p>
                                        <button class="pay-modal">
                                            <input class="test-modal modal-box5 text-tablet-input" type="text" placeholder="Chọn">
                                            <i class="fa-solid fa-chevron-down"></i>
                                            
                                        </button>
                                        
                                        <p class="content1-pay-modal modal-box4 text-tablet-input">Ngày tạo</p>

                                        <div class="modal-input">
                                            
                                            <div class="calen-modal">
                                                <input class="test-modal modal-box5 text-tablet-input" type="date" placeholder="Từ ngày">
                                                
                                                <!-- <img src="{{asset('images/calendar.png')}}" alt=""> -->
                                            </div>

                                            <div class="calen1-modal">
                                            <input class="test-modal modal-box5 text-tablet-input" type="date" placeholder="Đến ngày">
                                                <!-- <img src="{{asset('images/calendar.png')}}" alt=""> -->
                                            </div>
                                        </div>

                                        <p class="content1-pay-modal modal-box4 text-tablet-input">Thành phố</p>

                                        <div class="modal-input1">
                                            <input class=" test-modal modal-box5 text-tablet-input" type="text" placeholder="Chọn">
                                            
                                            <i class="fa-solid fa-chevron-down"></i>
                                        </div>

                                        <div class="f-modal">
                                            <button class="end-modal"><span class="modal-box6 test text-tablet-input">Hủy</span></button>
                                            <button class="end-modal1"><span class="modal-box7 text-tablet-input">Tìm kiếm</span></button>
                                        </div>  
                                    </div>  
                                </div>
                                
                        </div>
                                    <div class= upsearch> 
                                            <button class="btn" data-bs-toggle="modal" data-bs-target="exampleModal" tabindex="-1">
                                                <label for="nav-box" class="bInput1">
                                                    <span class="c-head2">Lọc dữ liệu</span>
                                                    <img src="{{asset('images/filter.png')}}" alt="">    
                                                </label for="nav-box"> 
                                            </button>
                                               
                                        <div class="in-calen">
                                            <button class= "a-search">
                                                <input class="calen res-head-search" type="button" value="12/2022">
                                                <img src="{{asset('images/calendar.png')}}"alt="">
                                            </button>
                                                <button class="b-calen" type="submit">
                                                <i class="fa-solid fa-arrow-right"></i>
                                                </button>
                                            <button class= "a-search">
                                                <input class="a-calen res-head-search" type="button" value="12/2023">
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
                                    <th>Mã hóa đơn</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Chủ nhà</th>
                                    <th>Ngày thanh toán</th>
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
                                    <td>HDS 00000457</td>
                                    <td>5.082.000đ</td>
                                    <td>
                                        <div class="up-td">Đã thanh toán</div>
                                    </td>
                                    <td>08:00:12 05/05/2023</td>
                                    <td>Fagi Group</td>
                                    <td>05/05/2023</td>
                                    <td>101</td>
                                    <td >Green Ocean 23 Thọ Pháp</td>
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
                                    <td>HDS 00000457</td>
                                    <td>5.082.000đ</td>
                                    <td>
                                        <div class="up-td">Đã thanh toán</div>
                                    </td>
                                    <td>08:00:12 05/05/2023</td>
                                    <td>Fagi Group</td>
                                    <td>05/05/2023</td>
                                    <td>101</td>
                                    <td>Green Ocean 23 Thọ Pháp</td>
                                    <td>23 P. Thọ Tháp, Dịch Vọng, Cầu Giấy, Hà Nội 100000, Việt Nam</td>
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
                                    <td>HDS 00000457</td>
                                    <td>5.082.000đ</td>
                                    <td>
                                        <div class="dw-td">Chưa thanh toán</div>
                                    </td>
                                    <td>08:00:12 05/05/2023</td>
                                    <td >Hoàng Hải Đăng</td>
                                    <td></td>
                                    <td>101</td>
                                    <td>Green Ocean 23 Thọ Pháp</td>
                                    <td>23 P. Thọ Tháp, Dịch Vọng, Cầu Giấy, Hà Nội 100000, Việt Nam</td>
                                </tr>
                            <!-- </tbody> -->
                        </table>
                    </div>
                        <div class="foot">
                                <p class= "b-foot">Hiển thị 10 trong 24 bản ghi</p>
                            <div class= "c-foot">
                                    <button class="t-foot ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <rect width="24" height="24" fill="white"/> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#B8B8B8" stroke-linecap="round" stroke-linejoin="round"/> </g></svg>
                                    </button>
                                    <button class="a-foot ">1</button>
                                    <button class="t-foot ">2</button>
                                    <button class="t-foot ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <rect width="24" height="24" fill="white"/> <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#676767" stroke-linecap="round" stroke-linejoin="round"/> </g></svg>
                                    </button>
                            </div>
                        </div>
            </div> 
     </div>
    <div class= end></div>
</div>

@endsection

@section('js')
@endsection