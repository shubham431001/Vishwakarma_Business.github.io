<?php
// Payment Gateway
$api_key = "rzp_test_qv0huvLGbR6irf";
$amounted = "37100";

?>



<?php require("connectionbill.php"); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1>Welcome to payment</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h1>Order Summary:</h1><br>

                                <?php

                                $conn = mysqli_connect("127.0.0.1:3306", "root", "", "dbbilling");
                                $sqli = "SELECT * FROM `bill_checkouts`";
                                $select_cart = mysqli_query($conn, $sqli);

                                if (mysqli_num_rows($select_cart) > 0) {
                                    while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {

                                        echo
                                        " <div class='container'>
                                        <p>Name : {$fetch_cart['fnbill']}</p>
                                        <p>E-Mail : {$fetch_cart['e_mails']}</p>
                                        <p>Address : {$fetch_cart['addresses']}</p>
                                        </div>
                                       
                                        ";
                                    };
                                };

                                // if($fetch_cart && $sql){
                                //     echo "

                                //     ";
                                // }

                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <center>

                <form action="" method="POST">
                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $api_key; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys data-amount="<?php echo $amounted; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35. data-currency="INR" // You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account data-order-id="<?php echo 'OID' . rand(10, 100) . 'END'; ?>" // Replace with the order_id generated by you in the backend. data-buttontext="PAY NOW" data-name="VISHWANIRMAAN PVT LTD" data-description="Thanks, you are valuable customer, your needs our response, ACP build your dream home stay & safe." data-image="http://localhost/Vishwakarma_Business/images/vslogo.png" data-prefill.name="<?php $_POST['firstname'] ?>" data-prefill.email="<?php $_POST['email'] ?>" data-theme.color="#0099ff"></script>
                    <input type="hidden" custom="Hidden Element" name="hidden" />
                </form>

            </center>
        </div>
    </div>
</div>

<script>

</script>

<?php 
   
?>

<style>
    .razorpay-payment-button {
        border: none;
        background-color: #0099ff;
        color: white;
        padding: 10px 20px;
        font-size: medium;
        border-radius: 5px;
    }

    .razorpay-payment-button:hover {
        background-color: #0089e4;
        transition: all ease-in-out .9s;
    }

</style>