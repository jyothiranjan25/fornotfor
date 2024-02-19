   <div class="col-md-12 text-center "><button id="rzp-button1" class="btn btn-block mybtn btn-primary tx-tfm">Donate Now</button></div>
   <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
   <form name='razorpayform' action="verify_vu.php" method="POST">
       <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
       <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                            <input type="hidden" name="uin" value="<?php echo $registration_id ?>">
                            <input type="hidden" name="name" value="<?php echo $namez ?>">
                            <input type="hidden" name="email" value="<?php echo $emailz ?>">
                            <input type="hidden" name="phone" value="<?php echo $contactz ?>">
                            <input type="hidden" name="amount" value="<?php echo $amountz ?>">
                            <input type="hidden" name="run5" value="<?php echo $run5 ?>">
                            <input type="hidden" name="run10" value="<?php echo $run10 ?>">
                            <input type="hidden" name="runfamiy" value="<?php echo $runfamiy ?>">
                            <input type="hidden" name="run5pro" value="<?php echo $run5pro ?>">
                            <input type="hidden" name="run10pro" value="<?php echo $run10pro ?>">
                            <input type="hidden" name="cod" value="<?php echo $cod ?>">
                            <input type="hidden" name="bgmi" value="<?php echo $bgmi ?>">
                            <input type="hidden" name="run40" value="<?php echo $run40 ?>">
                            <input type="hidden" name="run20c" value="<?php echo $run20c ?>">
                            <input type="hidden" name="run10f" value="<?php echo $run10f ?>">
                            <input type="hidden" name="run5kmfun" value="<?php echo $run5kmfun ?>">
                           

                            <input type="hidden" name="addon_1" value="<?php echo $addon_1 ?>">
                            <input type="hidden" name="addon_2" value="<?php echo $addon_2 ?>">

                            <input type="hidden" name="email" value="<?php echo $email ?>">
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