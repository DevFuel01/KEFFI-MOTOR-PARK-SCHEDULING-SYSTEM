<?php
if (!isset($file_access)) die("Direct File Access Denied");
?>

<div class="content">
    <div class="container-fluid">
        <?php
        if (!isset($_POST['submit'])) {
        ?>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header alert-success">
                        <h5 class="m-0">Quick Tips</h5>
                    </div>
                    <div class="card-body">
						<li><b>Navigation:</b> Use the menu on the left to access key features of the system.</li>

						<li><b>View Schedules:</b> Click on <b>“New Booking”</b> to explore available transport schedules in real time.</li>

						<li><b>Make a Booking:</b> Select your preferred trip and proceed to booking. You’ll be redirected to complete your payment securely.</li>

						<li><b>Get Your Ticket:</b> After successful payment, your Ticket ID will be generated instantly. This serves as your boarding pass — make sure to bring it to the terminal.</li>

						<li><b>Track Your History:</b> Click on <b>“View Bookings”</b> anytime to review your booking history, status updates, or print your ticket.</li>
                    </div>
                </div>
            </div><?php
                    } else {
                        $class = $_POST['class'];
                        $number = $_POST['number'];
                        $schedule_id = $_POST['id'];
                        if ($number < 1) die("Invalid Number");
                        ?>

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header alert-success">
                            <h5 class="m-0">Booking Preview</h5>
                        </div>
                        <div class="card-body">
                            <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> <?php echo ucwords($class), " Class" ?>:</h5>
                                You are about to book
                                <?php echo $number, " Ticket", $number > 1 ? 's' : '', ' for ', getRouteFromSchedule($schedule_id); ?>
                                <br />

                                <?php

                                    $fee = ($_SESSION['amount'] = getFee($schedule_id, $class));
                                    echo $number, " x ₦", $fee, " = ₦", ($fee * $number), "<hr/>";
                                    $fee = $fee * $number;
                                    $amount = intval($fee);
                                    $vat = ceil($fee * 0.03);
                                    echo "V.A.T Charges = ₦$vat<br/><br/><hr/>";
                                    echo "Total = ₦", $total = $amount + $vat;
                                    $fee =  intval($total) . "00";
                                    $_SESSION['amount'] =  $total;
                                    $_SESSION['original'] =  $fee;
                                    $_SESSION['schedule'] =  $schedule_id;
                                    $_SESSION['no'] =  $number;
                                    $_SESSION['class'] =  $class;
                                    ?>
                            </div>
                            <a href="pay.php"><button
                                    onclick="return confirm('You will be directed to make your payment.\nPayment finalizes your booking!')"
                                    class="btn btn-primary">Pay Now</button></a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>