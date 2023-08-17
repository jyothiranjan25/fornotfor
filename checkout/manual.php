   <div class="col-md-12 text-center "><button id="rzp-button1" class="btn btn-block mybtn btn-primary tx-tfm">Pay Now</button></div>
   <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
   <form name='razorpayform' action="razorpay_verify.php" method="POST">
       <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
       <input type="hidden" name="razorpay_signature" id="razorpay_signature">
       <input type="hidden" name="inserted_id" value="<?php echo $inserted_id ?>">
       <input type="hidden" name="name" value="<?php echo $teacher ?>">
       <input type="hidden" name="email" value="<?php echo $teacheremail ?>">
       <input type="hidden" name="phone" value="<?php echo $teacherphone ?>">
       <input type="hidden" name="amount" value="<?php echo $amountz ?>">
   </form>
   <script>
       // Checkout details as a json
       var options = <?php echo $json ?>;

       /**
        * The entire list of Checkout fields is available at
        * https://docs.razorpay.com/docs/checkout-form#checkout-fields
        */
       options.handler = function(response) {
           document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
           document.getElementById('razorpay_signature').value = response.razorpay_signature;
           document.razorpayform.submit();
       };

       // Boolean whether to show image inside a white frame. (default: true)
       options.theme.image_padding = false;

       options.modal = {
           ondismiss: function() {
               console.log("This code runs when the popup is closed");
           },
           // Boolean indicating whether pressing escape key 
           // should close the checkout form. (default: true)
           escape: true,
           // Boolean indicating whether clicking translucent blank
           // space outside checkout form should close the form. (default: false)
           backdropclose: false
       };

       var rzp = new Razorpay(options);

       document.getElementById('rzp-button1').onclick = function(e) {
           rzp.open();
           e.preventDefault();
       }
   </script>