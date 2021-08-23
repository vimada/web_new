<?php 
    include "connect.php";
    session_start();

    $search = $_GET['q'];
    $return_arr = [];

    $sql = "SELECT EMP_NO,e.EMP_FIRST_NAME,e.EMP_LAST_NAME,p.EMP_POS_DESCR,o.ORG_NAME
            FROM hr_emp e
            LEFT JOIN sys_org o ON e.EMP_ORG_NO = o.ORG_NO  
            LEFT JOIN hr_emp_position p ON e.EMP_POS_NO = p.EMP_POS_NO
            WHERE CONCAT_ws(' ',e.EMP_FIRST_NAME,e.EMP_LAST_NAME) LIKE '%{$search}%'";

    $query = mysqli_query($dbhandle, $sql);
    // If query fails, show the reason 
    if(!$query){
        die("SQL query failed: " . mysqli_error($dbhandle));
    }

    while($row = mysqli_fetch_array($query)) {
        $id         = $row['EMP_NO'];
        $position   = $row['EMP_POS_DESCR'];
        $org        = $row['ORG_NAME'];
        $firstname  = $row['EMP_FIRST_NAME'];
        $lastname   = $row['EMP_LAST_NAME'];

        $result = array("id" => $id,"text" =>  $firstname . ' ' . $lastname ,'position'=>$position,'org'=>$org );

        array_push($return_arr,$result);
    }
    
    mysqli_close($dbhandle);

    echo json_encode(
        array("results"=>$return_arr)
    );

    exit();

?>
