<form action="submit.php" method="post">
<script
      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
      data-key="<?php echo $publishablekey?>"
      data-amount="1000"
      data-name="Rojgar Mitral"
      data-description="Rojgar Mitra"
      data-image="https://images.indianexpress.com/2021/08/labour-12001.jpg"
      data-currency="inr">
</script>
</form>