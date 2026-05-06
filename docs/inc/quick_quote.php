<section class="quick-quote-bar section small" aria-labelledby="quick-quote-title">
  <div class="container quick-quote-panel animated">
    <div class="quick-quote-copy">
      <span class="eyebrow"><span class="dot"></span> Quick Freight Start</span>
      <h2 id="quick-quote-title">Start a quote in seconds.</h2>
      <p class="copy">Enter the key lane details and continue to the full freight form with your information already filled in.</p>
    </div>
    <form class="quick-quote-form" action="contact.php" method="get">
      <label><span>Pickup</span><input name="origin" placeholder="City, State" required></label>
      <label><span>Destination</span><input name="destination" placeholder="City, State" required></label>
      <label><span>Weight</span><input name="weight" placeholder="lbs"></label>
      <label><span>Drop-Off Date</span><input name="dropoff_date" type="date"></label>
      <button class="btn btn-primary" type="submit">Continue Quote</button>
    </form>
  </div>
</section>
