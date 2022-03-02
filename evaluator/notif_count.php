<?php
require_once('db_user.php');

if (isset($_POST['view'])) {
    if ($_POST['view'] != '') {
        $updateNotification = mysqli_query($conn, "UPDATE tbl_notif SET n_read = '1' WHERE n_read = '0'");
    }
    
    $select = mysqli_query($conn, "SELECT * FROM tbl_notif WHERE n_read ='0'");
    $count = mysqli_num_rows($select);
    $data = array(
        'unseen_notification' => $count
    );

    echo json_encode($data);
}
