<?php Response::setMetaDescription(__('Welcome To LBRY India')) ?>
<?php Response::setMetaTitle(__('Welcome To LBRY India Commuity, a place to discover LBRY')) ?>

<main class="ancillary">
  <section class="hero" style="background-image: url(/img/table2.jpg)">
    <div class="inner-wrap inner-wrap--center-hero">
      <h1>LBRY India Community Welcomes You</h1>
      <h3>We're excited to share about LBRY with you!</h3>
    </div>
  </section>

  <section>
    <div class="inner-wrap">
      <h3>Enter your email address to receive LBRY updates, news, and information for India's LBRYians!</h3>
      <p>As an open source project, our development and future relies on our communities around the world, and we're delighted to see our community growing in India. Please enter your email below and we'll give you instructions to redeem the LBC as mentioned by our team.</p>

      <?php echo View::render('mail/_subscribeForm', [
        'tag' => 'LBRYIndia',
        'submitLabel' => 'Sign me up',
        'hideDisclaimer' => true,
        'largeInput' => true,
        'btnClass' => 'btn-alt btn-large'
      ]) ?>
    </div>
  </section>
</main>
