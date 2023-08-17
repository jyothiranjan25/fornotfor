<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="123"
    data-order_id="123"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="uin" value="<?php echo $orderz ?>">
  <input type="hidden" name="name" value="<?php echo $namez ?>">
  <input type="hidden" name="email" value="<?php echo $emailz ?>">
  <input type="hidden" name="phone" value="<?php echo $contactz ?>">
  <input type="hidden" name="amount" value="<?php echo $amountz ?>">
  <input type="hidden" name="tickets" value="<?php echo $ticketsz ?>">
  <input type="hidden" name="course" value="<?php echo $coursez ?>">
  <input type="hidden" name="batch" value="<?php echo $batchz ?>">
  <input type="hidden" name="tshirt" value="<?php echo $tshirtz ?>">
</form>
