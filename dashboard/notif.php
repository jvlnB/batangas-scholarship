<?php
if (isset($_POST['view'])) {
    if ($_POST['view'] != '') {
        $updateNotification = mysqli_query($conn, "UPDATE admin_notification SET n_read = '1' WHERE n_read = '0'");
    }

    $selectNotifications = mysqli_query($conn, "SELECT * FROM admin_notification ORDER BY date_received DESC");
    $output = '';

    if (mysqli_num_rows($selectNotifications) > 0) {

        while ($row = mysqli_fetch_array($selectNotifications)) {
            $orderNumber = $row['order_number'];
            $date = $row['date_received'];
            $newDate = read_date($date);
            $delivery = $row['Delivery'];

            if ($orderNumber != NULL && $delivery == NULL) {
                $output .=
                    '<li>
                    <a href="transaction_view.php?orderID=' . $row['order_number'] . '">
                        <strong>' . $row['order_number'] . '</strong><br />
                        <span><em>' . $row['notification_message'] . '</em></span><br>
                        <small><em>' . $newDate . '</em></small>
                    </a>
                </li>
                <li class="divider"></li>';
            } else if ($orderNumber == NULL && $delivery == NULL) {
                $output .=
                    '<li>
                    <a href="calendar.php">
                        <strong>' . $row['title'] . '</strong><br />
                        <span><em>' . $row['notification_message'] . '</em></span><br>
                        <small><em>' . $newDate . '</em></small>
                    </a>
                </li>
                <li class="divider"></li>';
            } else if ($orderNumber != NULL && $delivery == '1') {
                $output .=
                    '<li>
                    <a href="transaction_view.php?orderID=' . $row['order_number'] . '">
                        <strong> Missed Delivery! </strong><br />
                        <span><em>' . $row['notification_message'] . '</em></span><br>
                        <small><em>' . $newDate . '</em></small>
                    </a>
                </li>
                <li class="divider"></li>';
            }
        }
    } else {
        $output .= '<li><a href="#" class="text-bold text-italic text-center">You have no notifications yet!</a></li>';
    }

    $select = mysqli_query($conn, "SELECT * FROM admin_notification WHERE n_read ='0'");
    $count = mysqli_num_rows($select);
    $data = array(
        'notification' => $output,
        'unseen_notification' => $count
    );

    echo json_encode($data);
}