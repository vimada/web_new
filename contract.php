<?php
  include('controllers/contract_db.php');
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>แก้ไขสัญญาลูกค้า</title>
    <?php
      include('ic/head.php');
      ?>
   
  </head>
  <body>
		
  <div class="wrapper d-flex align-items-stretch">
  <?php
      include('ic/sidebar.php');
      ?>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

      <?php include('ic/navbar.php');?>

      <?php include('ic/messages.php'); ?>

        <h2 class="mb-4" style="font-family: 'Prompt', sans-serif; font-size:25px"> แก้ไขสัญญาลูกค้า</h2>
        <form action="" method="POST">
            
                <div class="form-group row">
                    <label for="num" class="col-sm-2 col-form-label" style="font-size: larger;">เลขที่สัญญา </label>
                    <div class="col-10">
                      <select id="search_contract" name="search_contract" class="form-control" >
                      </select>
                    </div>               
                </div>
                <br/>
                <h1 style="font-size: 20px;">ข้อมูลส่วนตัวลูกค้า</h1>
                <br/>

                <div class="form-row">
                <!-- คำนำหน้า -->    
                <div class="form-group col-md-2">
                        <label for="name_title">คำนำหน้า</label>
                        <select id="name_title" name="NAME_TITLE_NO" class="form-control">
                        <option value="0">กรุณาระบุ</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                        </select>
                    </div> 
                    <div class="form-group col-md-5">
                        <label for="firstname">ชื่อจริง</label>
                        <input id="firstname" type="text" class="form-control" name="FIRST_NAME" placeholder="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="lastname">นามสกุล</label>
                        <input id="lastname" type="text" class="form-control" name="LAST_NAME" placeholder="">
                    </div>
                </div>

                <div class="form-group ">
                      <label for="phone_number">เบอร์โทรศัพท์</label>
                      <input type="text" class="form-control" name="MOBILE_NO">
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="phone_nuber">อาชีพ</label>
                      <input type="text" class="form-control" name="CUST_OCCUPATION_NO" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="phone_nuber">ลักษณะงาน</label>
                      <input type="text" class="form-control" name= "CUST_OCCUPATION_TEXT" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="phone_nuber">รายได้ต่อเดือน</label>
                      <input type="text" class="form-control" name= "INCOME_PER_MONTH" placeholder="">
                  </div>
                </div> 

                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="code">เลขบัตรประชาชน</label>
                    <input type="text" class="form-control" name="ID_CARD_NO" >
                </div>
                
                <div class="form-group col-md-4">
                    <label for="code">วันออกบัตร</label>
                    <input type="date" class="form-control" name="ID_CARD_ISSUED_DATE" >
                </div>
                <div class="form-group col-md-4">
                    <label for="code">บัตรหมดอายุ</label>
                    <input type="date" class="form-control" name="ID_CARD_EXPIRE_DATE" >
                </div>
                </div>
                  

                </br>
                </br>
                <h1 style="font-size: 20px;">ข้อมูลสัญญา</h1>
                </br>
                <div class="form-row">
                <div class="form-group col-md-3 ">
                    <label for="code">เลขที่สัญญา</label>
                    <input type="text" class="form-control" name="CONTRACT_CODE" placeholder="">
                </div>

                <div class="form-group col-md-4">
                    <label for="status">สถานะสัญญา</label>
                    <select id ="status" name="CONTRACT_STATUS_NO" class="form-control">
                      <option value="0">กรุณาระบุสถานะสัญญา</option>
                      <option value="1">ปกติ</option>
                      <option value="2">NPL</option>
                      <option value="3">ยึดรถ</option>
                      <option value="4">ขายรถยึด</option>
                      <option value="5">ปิดสด</option>
                      <option value="6">ปิดบัญชี</option>
                      <option value="7">ประนอมหนี้</option>
                    </select>
                </div>
                <div class="form-group col-md-5">
                    <label for="LOAN_TYPE">ประเภทการขาย</label>
                    <select id-="LOAN_TYPE" name="LOAN_TYPE_NO" class="form-control">
                    <option value="">ประเภทหการขาย</option>
                      <option value="1">สินเชื่อบุคคลเดี่ยว</option>
                      <option value="2">สินเชื่อมีหลักทรัพย์</option>
                      <option value="4">สินเชื่อนาโนไฟแนนซ์</option>
                      <option value="5">สินเชื่อนาโนไฟแนนซ์[มีหลักทรัพย์]</option>
                      <option value="6">สินเชื่อบุคคล[มีหลักทรัพย์]</option>
                      <option value="7">สินเชื่อที่มีทะเบียนรถเป็นหลักประกัน</option>
                    </select>
                </div>
                </div>

                <div class="form-group ">
                    <label for="contract_date">วันที่ทำสัญญา</label>
                    <input type="date" class="form-control" name="CONTRACT_DATE" placeholder="">
                </div>
                <!-- <div class="form-group">
                    <label for="condition">เงื่อนไขการขาย</label>
                    <input type="text" class="form-control" id="condition" disabled>
                </div> -->
               

                

                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="LOAN_VAL">วงเงินกู้</label>
                    <input type="number" class="form-control" id="LOAN_VAL" name="LOAN_VAL">
                </div>

               

                <div class="form-group col-md-6">
                    <label for="TERM">จำนวนงวด</label>
                    <input type="number" class="form-control" id="TERM" name="TERM">
                </div>
                </div>
                <div class="form-group">
                    <label for="condition">ผู้รับเงิน</label>
                    <select id="search_emp" name="LOAN_FEE_RECEIPT_BY_EMP_NO" class="form-control"></select>
                </div>



                </br>
                </br>
                <h1 style="font-size: 20px;">แก้ไขที่อยู่ปัจจุบัน</h1>
                </br>
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="addr_no">บ้านเลขที่</label>
                      <input type="text" class="form-control"  name="ADDR_NO" placeholder=""> 
                  </div>
                  <div class="form-group col-md-6">
                    <label for="group">หมู่</label>
                    <input type="text" class="form-control" name="ADDR_MOO" placeholder="">
                  </div>

                </div>

                <div class="form-group ">
                    <label for="build">อาคาร</label>
                    <input type="text" class="form-control" id="build" placeholder="">
                </div>

                <div class="form-row">
                  
                    <div class="form-group col-md-6">
                    <label for="soi">ซอย</label>
                    <input type="text" class="form-control" name="ADDR_SOI" placeholder="">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="group">ถนน</label>
                    <input type="text" class="form-control" name="ADDR_ROAD" placeholder="">
                    </div>
                    </div>

                    <!-- จังหวัด -->
                    <div class="form-group ">
                      <label for="ADDR4_NO">จังหวัด</label>
                      <!-- <input type="text" class="form-control" id="provine"  placeholder="">  -->
                      <select id="ADDR4_NO" name="ADDR4_NO" class="form-control">
                      <option value="">เลือกจังหวัด</option> 
                      </select>
                    </div>

                    <!-- อำเภอ ตำบล เลขไปร -->
                    <div class="form-row">

                        <div class="form-group col-md-3">
                          <label for="aumper">อำเภอ</label>
                          <!-- <input type="text" class="form-control" id="aumper" placeholder=""> -->
                          <select id="ADDR3_NO" name="ADDR3_NO" class="form-control" disabled>
                            <option value="">เลือกอำเภอ</option>
                          </select> 
                        </div>

                        <div class="form-group col-md-4">
                          <label for="district">ตำบล</label>
                          <!-- <input type="text" class="form-control" id="district" placeholder=""> -->
                          <select id ="ADDR2_NO" name="ADDR2_NO" class="form-control" disabled>
                          <option value="">เลือกตำบล</option> 
                          </select>
                        </div>

                        <div class="form-group col-md-5">
                          <label for="zipcodes">รหัสไปรษณีย์</label>
                          <input id="ADDR5" name="ADDR5" class="form-control"  placeholder="">  
                        </div>
                    </div>
    
                

                
               


                </br> 
                </br> 
                <h1 style="font-size: 20px;">ข้อมูลรถ</h1>
                </br> 

               <!--  <div class="form-group ">
                  <label for="car_type">ประเภทการขาย</label>
                  <select id="car_type" name="VEHICLE_TYPE_NO" class="form-control">
                      <option value="0">ประเภทการขาย</option> 
                      <option value="1"></option>
                      <option value="3"></option>
                      <option value="4">  </option>
                      <option value="10"></option>
                    </select>
                </div> -->

                <div class="form-row">
                <div class="form-group col-md-3">
                  <label for="car_type">ประเภทรถ</label>
                  <select id="car_type" name="VEHICLE_TYPE_NO" class="form-control">
                      <option value="0">กรุณาระบุประเภทรถ</option> 
                      <option value="1">รถกระบะ</option>
                      <option value="3">รถเก๋ง</option>
                      <option value="4">รถจักรยานยนต์  </option>
                      <option value="10">รถใช้เพื่อการเกษตร</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                  <label for="car_brand">ยี่ห้อรถ</label>
                  <!-- <input type="text" class="form-control" id="car_brand" name="VEHICLE_BRAND_MODEL_CODE" placeholder=""> -->
                  <select id="car_brand" name="VEHICLE_BRAND_NO" class="form-control">
                      <option value="0">กรุณาระบุยี่ห้อรถ</option> 
                      <option value="1">FORD</option>
                      <option value="2">ISUZU</option>
                      <option value="3">MAZDA  </option>
                      <option value="4">MITSUBISHI</option>
                      <option value="5">NISSAN</option>
                      <option value="6">TOYOTA</option>
                      <option value="15">CHEVROLET</option>
                      <option value="16">DAIHATSU</option>
                      <option value="17">DAEWOO</option>
                      <option value="19">HONDA</option>
                      <option value="21">JRD</option>
                      <option value="22">KAWASAKI</option>
                      <option value="13">SUZUKI  </option>
                      <option value="27">TIGER</option>
                      <option value="29">YAMAHA</option>
                      <option value="39">BMW</option>
                      <option value="40">DATSUN</option>
                      <option value="41">FIAT</option>
                      <option value="42">HINO</option>
                      <option value="43">JEEP</option>
                      <option value="44">KUBOTA </option>
                      <option value="45">OPEL</option>
                      <option value="46">PEUGEOT  </option>
                      <option value="47">SUN</option>
                      <option value="48">VOLKSWAGEN</option>
                      <option value="49">VOLVO</option>
                      <option value="50">YANMAR</option>
                      <option value="52">HYUNDAI</option>
                      <option value="53">KIA</option>
                      <option value="54">BENZ</option>
                      <option value="55">CITROEN</option>
                      <option value="56">HOLDEN</option>
                      <option value="57">JOHN DEERE  </option>
                      <option value="58">SUBARU</option>
                      <option value="59">MASSEY FERGUSON</option>
                      <option value="60">TATA</option>
                      <option value="61">RENAULT</option>
                      <option value="62">VESPA</option>
                      <option value="63">THAIRUNG</option>
                      <option value="64">Austin</option>
                      <option value="65">M BIKE</option>
                      <option value="66">HARDE</option>
                      <option value="67">GMC  </option>
                      <option value="68">CAJIVA</option>
                      <option value="69">VIKYNO</option>
                      <option value="70">CHERY</option>
                      <option value="71">VIVACE</option>
                      <option value="73">LIFAN</option>
                      <option value="74">RYUKA</option>
                      <option value="78">SYM</option>
                      <option value="79">NEW HOLLAND</option>
                      <option value="81">KIOTI</option>
                      <option value="82">CHAMP</option>
                      <option value="83">DFSK  </option>
                      <option value="84">DFM</option>
                      <option value="86">LAND ROVER</option>
                      <option value="88">KMT</option>
                      <option value="94">GPX</option>
                      <option value="95">KOMATSU</option>
                      <option value="97">PROTON</option>
                      <option value="102">PLATINUM</option>
                      <option value="104">LUZHONG</option>
                      <option value="105">EUROTRAC</option>
                      <option value="110">TALAYTHONG  </option>
                      <option value="112">KEEWAY</option>
                      <option value="114">NMAX</option>
                      <option value="116">SOKON</option>
                      <option value="117">Mercury</option>
                      <option value="121">CHRYSLER</option>
                      <option value="123">AUDI</option>
                      <option value="125">ISEKI</option>
                      <option value="127">FOTON</option>
                      <option value="129">NAGANO</option>
                      <option value="130">TAISHAN  </option>
                      <option value="133">BENELLI</option>
                      <option value="136">STALLIONS</option>
                      <option value="139">GOLDEN BOW</option>
                      <option value="143">SACHS</option>
                      <option value="146">HITACHI</option>
                      <option value="149">SEAT</option>
                      <option value="152">DEVA</option>
                      <option value="155">JUPITER</option>
                      <option value="158">ROVER MINI</option>
                      <option value="161">MG</option>
                      <option value="164">FARGO</option>
                      <option value="168">KOBELCO</option>
                      <option value="169">SCOMADI</option>
                      <option value="170">CLAAS</option>
                    </select>
                </div>


                <div class="form-group col-md-5">
                  <label for="car_model">รุ่นรถ</label>
                  <input type="text" class="form-control" id="car_model" name="VEHICLE_MACHINE_NUMBER" placeholder="">
                </div>
                </div>



            <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="car_regis">อักษรทะเบียนรถ</label>
                  <input type="text" class="form-control" id="car_regis" name="CAR_REGISTRATION_01" placeholder="">
                </div>
                
                <div class="form-group col-md-1">
                  <label for="regis_province_car" style="margin-left: 30px;"> </label>
                  <input type="text" class="form-control" style="margin-top: 7px;"  placeholder="   - " disabled>
                </div>

                <div class="form-group col-md-2">
                  <label for="car_color">เลขที่ทะเบียนรถ</label>
                  <input type="text" class="form-control" id="car_color" name="CAR_REGISTRATION_02" placeholder="">
                </div>
                <div class="form-group col-md-4">
                  <label for="regis_province_car">ทะเบียนจังหวัด</label>
                  <input type="text" class="form-control" id="regis_province_car" name="CAR_REGISTRATION_PROVINCE_NO" placeholder="" disabled>
                </div>

                <div class="form-group col-md-3">
                  <label for="car_color">สีรถ</label>
                  <input type="text" class="form-control" id="car_color" name="VEHICLE_COLOR_COMMENT" placeholder="">
                </div>
            </div>
             
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="date_regis_car">วันที่จดทะเบียน</label>
                  <input type="date" class="form-control" id="date_regis_car" name="CAR_REGISTRATION_DATE" placeholder="">
                </div>

                <div class="form-group col-md-6">
                  <label for="car_possess_date">วันที่ยึดรถ</label>
                  <input type="date" class="form-control" id="car_possess_date" name="CAR_POSSESS_DATE" placeholder="">
                </div>
            </div>


                <br/>
                <br/>
                <h1 style="font-size: 20px;">บุคคลที่สามรถติดต่อได้</h1>
                <br/>

                <div class="form-row">
                <!-- คำนำหน้า -->    
                <div class="form-group col-md-2">
                        <label for="name_title">คำนำหน้า</label>
                        <input id="firstname" type="text" class="form-control"  placeholder="คุณ" disabled>
                    </div> 
                    <div class="form-group col-md-3">
                        <label for="firstname">ชื่อจริง</label>
                        <input id="firstname" type="text" class="form-control" name="CUST_CONTACT_FIRST_NAME" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lastname">นามสกุล</label>
                        <input id="lastname" type="text" class="form-control" name="CUST_CONTACT_LAST_NAME" placeholder="">
                    </div>

                    <div class="form-group col-md-3">
                      <label for="phone_number">เบอร์โทรศัพท์</label>
                      <input type="text" class="form-control" name="CUST_CONTACT_PHONE_NO">
                </div>
                </div>

                




                <br/>
                <br/>
                <h1 style="font-size: 20px;">คู่สมรส</h1>
                <br/>

                <div class="form-row">
                <!-- คำนำหน้า -->    
                    <div class="form-group col-md-2">
                        <label for="name_title">คำนำหน้า</label>
                        <input id="firstname" type="text" class="form-control"  placeholder="คุณ" disabled>
                    </div> 
                    <div class="form-group col-md-3">
                        <label for="firstname">ชื่อจริง</label>
                        <input id="firstname" type="text" class="form-control" name="CUST_SPOUSE_FIRST_NAME" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lastname">นามสกุล</label>
                        <input id="lastname" type="text" class="form-control" name="CUST_SPOUSE_LAST_NAME" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="phone_number">อายุ</label>
                      <input type="text" class="form-control" name="CUST_SPOUSE_AGE">
                </div>
                </div>

               

                <br/>
                <br/>
                <br/>
                <h1 style="font-size: 20px;">ข้อมูลผู้ค้ำประกัน</h1>
                <br/>
                <div class="form-row">
                <!-- คำนำหน้า -->    
                <div class="form-group col-md-2">
                        <label for="name_title">คำนำหน้า</label>
                        <select id="name_title" name="" class="form-control">
                        <option value="">กรุณาระบุ</option>
                        <option value="1">นาย</option>
                        <option value="2">นาง</option>
                        <option value="3">นางสาว</option>
                        </select>
                    </div> 
                    <div class="form-group col-md-5">
                        <label for="firstname">ชื่อจริง</label>
                        <input id="firstname" type="text" class="form-control" name="" placeholder="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="lastname">นามสกุล</label>
                        <input id="lastname" type="text" class="form-control" name="" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                      <label for="age">อายุ</label>
                      <input type="text" class="form-control" name="" placeholder="">
                </div>

                <div class="form-group">
                      <label for="phone_nuber">เบอร์โทรศัพท์</label>
                      <input type="text" class="form-control" name="" placeholder="">
                </div>

                <div class="form-group">
                      <label for="phone_nuber">เกี่ยวข้องเป็น</label>
                      <input type="text" class="form-control" name="" placeholder="">
                </div>

                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="code">เลขบัตรประชาชน</label>
                    <input type="text" class="form-control" name="" >
                </div>
                
                <div class="form-group col-md-4">
                    <label for="code">วันออกบัตร</label>
                    <input type="date" class="form-control" name="" >
                </div>
                <div class="form-group col-md-4">
                    <label for="code">บัตรหมดอายุ</label>
                    <input type="date" class="form-control" name="" >
                </div>
                </div>
               
                <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="phone_nuber">อาชีพ</label>
                      <input type="text" class="form-control" id="" name="" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="phone_nuber">ลักษณะงาน</label>
                      <input type="text" class="form-control" id="" name="" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="phone_nuber">รายได้ต่อเดือน</label>
                      <input type="text" class="form-control" id="" name="" placeholder="">
                  </div>
                </div>
                </br>
                <h1 style="font-size: 16px;">ที่อยู่ผู้ค้ำประกัน</h1>
                </br>
                <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="addr_no">บ้านเลขที่</label>
                      <input type="text" class="form-control"  name="" placeholder=""> 
                  </div>
                  <div class="form-group col-md-6">
                    <label for="group">หมู่</label>
                    <input type="text" class="form-control" name="" placeholder="">
                  </div>

                </div>

                <div class="form-group ">
                    <label for="build">อาคาร</label>
                    <input type="text" class="form-control" id="" name="" placeholder="">
                </div>

                <div class="form-row">
                  
                    <div class="form-group col-md-6">
                    <label for="soi">ซอย</label>
                    <input type="text" class="form-control" name="" placeholder="">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="group">ถนน</label>
                    <input type="text" class="form-control" name="" placeholder="">
                    </div>
                    </div>

                    <!-- จังหวัด -->
                    <div class="form-group ">
                      <label for="ADDR4_NO">จังหวัด</label>
                      <!-- <input type="text" class="form-control" id="provine"  placeholder="">  -->
                      <select id="ADDR4_NO" name="" class="form-control">
                      <option value="">เลือกจังหวัด</option> 
                      </select>
                    </div>

                    <!-- อำเภอ ตำบล เลขไปร -->
                    <div class="form-row">

                        <div class="form-group col-md-3">
                          <label for="aumper">อำเภอ</label>
                          <!-- <input type="text" class="form-control" id="aumper" placeholder=""> -->
                          <select id="ADDR3_NO" name="" class="form-control" disabled>
                            <option value="">เลือกอำเภอ</option>
                          </select> 
                        </div>

                        <div class="form-group col-md-4">
                          <label for="district">ตำบล</label>
                          <!-- <input type="text" class="form-control" id="district" placeholder=""> -->
                          <select id ="ADDR2_NO" name="" class="form-control" disabled>
                          <option value="">เลือกตำบล</option> 
                          </select>
                        </div>

                        <div class="form-group col-md-5">
                          <label for="zipcodes">รหัสไปรษณีย์</label>
                          <input id="ADDR5" name="" class="form-control"  placeholder="">  
                        </div>
                    </div>
    
                
                </br>
                <button type="submit" class="btn btn-success">บันทึก</button>  
                <button type="cancel" class="btn btn-dark">ยกเลิก</button>    
        </form>

		</div>
    </div>

    <?php
      include('ic/footer.php');
    ?>

<script>

  $(document).ready(function () {

        $("#search_contract").select2({
            ajax: {
            url: "controllers/search_contract.php",
            dataType: 'json',
            delay: 1000,
            data: function (params) {
              return {
                q: params.term, // search term
              
              };
            },  
            cache: true
          },
          placeholder: 'ค้นหาเลขที่สัญญา,เลขบัตรประชาชน,ชื่อ-นามสกุล',
          minimumInputLength: 3,
          templateResult: formatRepo,
          templateSelection: formatRepoSelection
      });

       let url;
    
      let provinceDropdown = $('#ADDR4_NO');
      url = 'json/province.json';

      $.getJSON(url, function (data) {
        $.each(data, function (key, entry) {
          provinceDropdown.append($('<option></option>').attr('value', entry.ADDR_PROVINCE_NO).text(entry.ADDR_PROVINCE_NAME));
        })
      });

      $('#search_contract').on('select2:select', function (e) {
          var data = e.params.data;

          $("#ADDR2_NO,#ADDR3_NO").prop('disabled',true);

          $.each( data , function( key, value ) {
            if( $('[name="'+ key +'"]').length ){

                var $this = $('[name="'+ key +'"]');

                  if( $this.prop('id') == 'search_emp' ){
                      var option = new Option(e.params.data.LOAN_FEE_RECEIPT_BY_EMP, value, true, true);
                      $this.append(option).trigger('change');
                        // manually trigger the `select2:select` event
                      $this.trigger({
                          type: 'select2:select',
                          params: {
                              data: data
                          }
                      });
              
                  }else if(  $this.prop('id') == 'ADDR4_NO' ){

                      $this.val(value).trigger('change',[e.params.data.ADDR3_NO]);
                      $("#ADDR3_NO").trigger('change',[e.params.data.ADDR2_NO]);
                

                  }else if( $this.prop('id') == 'ADDR3_NO' || $this.prop('id') == 'ADDR2_NO'  ){
                      //
                  }else{

                    $this.val(value);

                  }
          
            }
          });

      }); 

      function formatRepo (repo) {
        if (repo.loading) {
          return repo.CONTRACT_CODE;
        }
        
        if ( repo.CONTRACT_CODE !== undefined ) {
          return 'เลขที่: ' + repo.CONTRACT_CODE + ' (เลขบัตร: ' + repo.ID_CARD_NO + ' ,' + repo.FIRST_NAME + ' ' + repo.LAST_NAME + ' ,วันที่: ' + repo.CONTRACT_DATE + ' ,สถานะ: ' + repo.LOAN_CONTRACT_STATUS_DESCR + ', ' + repo.LOAN_VAL + ')';
        }

        return repo.CONTRACT_CODE;
      }

      function formatRepoSelection (repo) {

        if ( repo.CONTRACT_CODE !== undefined ) {
          return 'เลขที่: ' + repo.CONTRACT_CODE + ' (เลขบัตร: ' + repo.ID_CARD_NO + ' ,' + repo.FIRST_NAME + ' ' + repo.LAST_NAME + ' ,วันที่: ' + repo.CONTRACT_DATE + ' ,สถานะ: ' + repo.LOAN_CONTRACT_STATUS_DESCR + ', ' + repo.LOAN_VAL + ')';
        }
        return repo.CONTRACT_CODE;
      }

      $('#search_emp').select2({
            ajax: {
            url: "controllers/search_emp.php",
            dataType: 'json',
            delay: 1000,
            data: function (params) {
              return {
                q: params.term, // search term
              };
            },
            // cache: true
          },
          placeholder: 'ค้นหาชื่อพนักงาน',
          minimumInputLength: 3
      });

         $("#ADDR4_NO").on('change', function(e,amphur){

          $("#ADDR2_NO").prop('disabled',true);

          $ADDR_2 = $('#ADDR2_NO');
          $ADDR_3 = $('#ADDR3_NO');
          $ADDR_2.empty();
          $ADDR_3.empty();

          $ADDR_2.append($('<option></option>').attr('value','').text('เลือกตำบล'));
          $ADDR_3.append($('<option></option>').attr('value','').text('เลือกอำเภอ'));
        

          url = 'json/amphur.json';

          $.getJSON(url, function (data) {
            $.each(data, function (key, entry) {
              
              if(entry.ADDR_PROVINCE_NO == $("#ADDR4_NO").val() ){

                if( amphur !== undefined && entry.ADDR_AMPHUR_NO == amphur ){
                    alert(amphur);
                    $ADDR_3.append('<option value="'+entry.ADDR_AMPHUR_NO+'" selected="selected">'+ entry.ADDR_AMPHUR_NAME +'</option>');
                }else{
                  $ADDR_3.append($('<option></option>').attr('value', entry.ADDR_AMPHUR_NO).text(entry.ADDR_AMPHUR_NAME));
                } 
              }
            })
          });

          $ADDR_3.prop('disabled',false);

        });

        $("#ADDR3_NO").on('change' , function(e,district){
        
            $("#ADDR2_NO").empty();
            $("#ADDR2_NO").append($('<option></option>').attr('value','').text('เลือกตำบล'));
            
            url = 'json/district.json';

            $.getJSON(url, function (data) {
              $.each(data, function (key, entry) {
                
                if(entry.ADDR_AMPHUR_NO == $("#ADDR3_NO").val() ){
                  
                  if( district !== undefined && entry.ADDR_DISTRICT_NO == district ){
                    $("#ADDR2_NO").append('<option value="'+entry.ADDR_DISTRICT_NO+'" selected="selected">'+ entry.ADDR_DISTRICT_NAME +'</option>');
                  }else{
                    $("#ADDR2_NO").append($('<option></option>').attr('value', entry.ADDR_DISTRICT_NO).text(entry.ADDR_DISTRICT_NAME));
                  }
                  
                }
              })
            });

            $("#ADDR2_NO").prop('disabled',false);
        
        }); 

       
  }); 

  </script>
    
</body>
</html>