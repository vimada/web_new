<?php 
    include "connect.php";

    $search = $_GET['q'];
    $return_arr = [];

    $sql = "SELECT 
    FROM 
    WHERE (CONTRACT_CODE LIKE '%{$search}%' OR ID_CARD_NO LIKE '%{$search}%' OR CONCAT_ws(' ',FIRST_NAME,LAST_NAME) LIKE '%{$search}%')
    AND c.CONTRACT_STATUS_NO IN (1,5,6) ORDER BY CONTRACT_DATE DESC
    LIMIT 50";

    $query = mysqli_query($dbhandle, $sql);
    // If query fails, show the reason 
    if(!$query){
        die("SQL query failed: " . mysqli_error($dbhandle));
    }

    while($row = mysqli_fetch_array($query)) {

    

        $row['id'] = $row['REC_NO'];
        $row['LOAN_FEE_RECEIPT_BY_EMP'] = $row['EMP_FIRST_NAME'] . ' ' . $row['EMP_LAST_NAME'];
        $row['CAR_REGISTRATION_PROVINCE_NO']=$row['ADDR_PROVINCE_NAME'];
        array_push($return_arr,$row);
    }

    mysqli_close($dbhandle);

    echo json_encode(
        array("results"=>$return_arr),JSON_UNESCAPED_UNICODE 
    );

    exit();

?>
