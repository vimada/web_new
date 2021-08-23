<?php 
    include "connect.php";

    $search = $_GET['q'];
    $return_arr = [];

    $sql = "SELECT REC_NO,CONTRACT_CODE,FIRST_NAME,LAST_NAME,CONTRACT_DATE,LOAN_VAL,ID_CARD_NO,LOAN_TYPE_NO,
            LOAN_CONTRACT_STATUS_DESCR,LOAN_FEE_RECEIPT_BY_EMP_NO,c.NAME_TITLE_NO,TERM,VEHICLE_TYPE_NO,MOBILE_NO,
            VEHICLE_BRAND_NO,CAR_POSSESS_DATE,CAR_REGISTRATION_DATE,VEHICLE_COLOR_COMMENT,CONTRACT_STATUS_NO
            ,ADDR5,ADDR_NO,ADDR4_NO,ADDR3_NO,ADDR2_NO,ADDR_SOI,ADDR_ROAD,ADDR_BUILDING,ADDR_MOO,
            h.EMP_FIRST_NAME,h.EMP_LAST_NAME,p.ADDR_PROVINCE_NAME,CAR_REGISTRATION_PROVINCE_NO,
            CUST_CONTACT_FIRST_NAME,CUST_CONTACT_LAST_NAME,CUST_CONTACT_PHONE_NO,CUST_SPOUSE_FIRST_NAME,CUST_SPOUSE_LAST_NAME,CUST_SPOUSE_AGE,
            CUST_OCCUPATION_TEXT,CUST_OCCUPATION_NO,o.OCCUPATION_DESCR,INCOME_PER_MONTH,ID_CARD_ISSUED_DATE,ID_CARD_EXPIRE_DATE,
            CAR_REGISTRATION_01,CAR_REGISTRATION_02
           
    FROM sale_loan_contract c
    LEFT JOIN sale_loan_contract_status s ON c.CONTRACT_STATUS_NO = s.LOAN_CONTRACT_STATUS_NO 
    LEFT JOIN hr_emp h ON h.EMP_NO = c.LOAN_FEE_RECEIPT_BY_EMP_NO 
    LEFT JOIN sys_address_province  p ON p.ADDR_PROVINCE_NO = c.CAR_REGISTRATION_PROVINCE_NO
    LEFT JOIN sys_occupation o ON o.OCCUPATION_NO = c.CUST_OCCUPATION_NO
    WHERE (CONTRACT_CODE LIKE '%{$search}%' OR ID_CARD_NO LIKE '%{$search}%' OR CONCAT_ws(' ',FIRST_NAME,LAST_NAME) LIKE '%{$search}%')
    AND c.CONTRACT_STATUS_NO IN (1,5,6) ORDER BY CONTRACT_DATE DESC
    LIMIT 50";

    $query = mysqli_query($dbhandle, $sql);
    // If query fails, show the reason 
    if(!$query){
        die("SQL query failed: " . mysqli_error($dbhandle));
    }

    while($row = mysqli_fetch_array($query)) {

    //     $id                     = $row['REC_NO'];
    //     $code                   = $row['CONTRACT_CODE'];
    //     $title_name             = $row['NAME_TITLE_NO'];
    //     $id_card                = $row['ID_CARD_NO'];
    //     $status                 = $row['LOAN_CONTRACT_STATUS_DESCR'];
    //     $amount                 = $row['LOAN_VAL'];
    //     $contract_date          = $row['CONTRACT_DATE'];
    //     $firstname              = $row['FIRST_NAME'];
    //     $lastname               = $row['LAST_NAME'];
    //     $payee                  = $row['APPROVED_EMP_NO'];

    //     /* car */
    //     $car_brand              = $row['VEHICLE_BRAND_MODEL_CODE'];
    //     $car_regis              = $row['CAR_REGISTRATION'];
    //     $car_color              = $row['VEHICLE_COLOR_COMMENT'];
    //     $date_regis_car         = $row['CAR_REGISTRATION_DATE'];
    //     $car_possess_date       = $row['CAR_POSSESS_DATE'];
    //    /*  $date_check_car         = $row[''];

    //     $due_date_regis         = $row['']; */
         
    //     $result = array("id" => $id,"text" => $code ,'status'=>$status,'amount'=>$amount,'id_card'=>$id_card  
    //     ,'firstname'=>$firstname,'lastname'=>$lastname,'contract_date'=>$contract_date ,'payee'=> $payee
    //     ,'title_name'=>$title_name,'code'=>$code,
    //     'car_brand'=>$car_brand,'car_regis'=>$car_regis,'date_regis_car'=>$date_regis_car,'car_color'=>$car_color);
        
    //     array_push($return_arr,$result);

        $row['id'] = $row['REC_NO'];
        // $row['LOAN_FEE_RECEIPT_BY_EMP_NO'] = 1;
        // $row['LOAN_FEE_RECEIPT_BY_EMP'] = 'Admin';
        $row['LOAN_FEE_RECEIPT_BY_EMP'] = $row['EMP_FIRST_NAME'] . ' ' . $row['EMP_LAST_NAME'];
        $row['CAR_REGISTRATION_PROVINCE_NO']=$row['ADDR_PROVINCE_NAME'];
        $row['CUST_OCCUPATION_NO'] = $row['OCCUPATION_DESCR'];
        array_push($return_arr,$row);
    }

    mysqli_close($dbhandle);

    echo json_encode(
        array("results"=>$return_arr),JSON_UNESCAPED_UNICODE 
    );

    exit();

?>
