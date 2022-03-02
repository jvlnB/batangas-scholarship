<?php

include ('includes/db_user.php');

function random_color()
{
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

if (isset($_GET['getBar'])){
    $data = array();
    $selectCategory = mysqli_query($conn, "SELECT category, COUNT(infoID) AS categoryCount FROM userinfo GROUP BY category");
    
    if (mysqli_num_rows($selectCategory) > 0){
        
        while ($row = mysqli_fetch_assoc($selectCategory)){
            $data[] = array(
                'categoryName' => $row['category'],
                'counts' => $row['categoryCount'],
                'color' => random_color(),
                );
        }
        
    } else {
        $data[] = array(
            'categoryName' => 'None',
            'counts' => '0',
            'color' => random_color()
            );
    }
    
    echo json_encode($data);
}