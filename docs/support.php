<?php $page_title='Contact International Visions LLC | Freight Support & General Questions'; $page_description='Contact International Visions LLC for freight support, general questions, callback requests and trucking service information across Maryland and nationwide lanes.'; $active='support'; include 'inc/header.php'; ?>
<main>
<section class="page-hero"><div class="container animated in"><span class="eyebrow"><span class="dot"></span> General Contact</span><h1>Contact International Visions LLC.</h1><p class="lead">Have a general question, service request or business inquiry? Send a message to our support team and we will respond as soon as possible.</p></div></section>
<?php include 'inc/guide.php'; ?>
<section class="section">
  <div class="container grid-2">
    <form class="panel card animated support-form" action="send_support.php" method="post">
      <span class="eyebrow"><span class="dot"></span> Support Message</span>
      <h2>Send a general inquiry.</h2>
      <p class="copy">For load pricing, use the quote form. For general contact, business questions, records, support or partnership messages, use this form.</p>
      <div class="form-grid">
        <div><label for="name">Full Name</label><input id="name" name="name" required></div>
        <div><label for="phone">Telephone Number</label><input id="phone" name="phone" required></div>
        <div class="full"><label for="address">Address</label><input id="address" name="address" placeholder="Street, City, State, ZIP"></div>
        <div class="full"><label for="email">Email</label><input id="email" name="email" type="email" required></div>
        <div class="full"><label for="message">Message</label><textarea id="message" name="message" required placeholder="How can International Visions LLC help?"></textarea></div>
        <div class="full"><button class="btn btn-primary" type="submit">Send to Support</button></div>
      </div>
    </form>
    <aside class="panel contact-info-card animated">
      <img class="contact-logo" src="assets/logo.svg" alt="International Visions LLC logo">
      <h2>Freight support with direct communication.</h2>
      <p class="copy">International Visions LLC is Maryland based and family operated, supporting general freight, box truck transport, regional delivery and nationwide logistics coordination.</p>
      <div class="contact-methods">
        <a href="mailto:support@internationalvisionsllc.org"><i class="fa-solid fa-envelope"></i> support@internationalvisionsllc.org</a>
        <a href="mailto:trucking@internationalvisionsllc.org"><i class="fa-solid fa-truck"></i> trucking@internationalvisionsllc.org</a>
        <a href="contact.php#quote-form"><i class="fa-solid fa-comments"></i> Open Quote Form</a>
      </div>
      <div class="socials large"><a href="#" aria-label="Google"><i class="fa-brands fa-google"></i></a><a href="#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a><a href="#" aria-label="Telegram"><i class="fa-brands fa-telegram"></i></a></div>
    </aside>
  </div>
</section>
<section class="section small">
  <div class="container">
    <div class="panel map-embed animated">
      <iframe title="North America map with Maryland marker" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Maryland%2C%20USA&z=4&output=embed"></iframe>
    </div>
  </div>
</section>
<section class="section small">
  <div class="container faq-grid">
    <div class="card animated"><h3>What freight does IVLLC move?</h3><p>International Visions LLC supports general freight, business goods, boxed freight, palletized shipments and scheduled delivery needs.</p></div>
    <div class="card animated"><h3>Where is the company based?</h3><p>International Visions LLC is based in Maryland and supports local, regional and nationwide freight movement.</p></div>
    <div class="card animated"><h3>How do I request pricing?</h3><p>Use the quote form with pickup, destination, weight, freight type and preferred dates so the team can review the lane and call you back.</p></div>
    <div class="card animated"><h3>How quickly will the team respond?</h3><p>Response time depends on current dispatch activity, but messages are reviewed with a focus on clear follow-up and practical freight coordination.</p></div>
  </div>
</section>
</main><?php include 'inc/footer.php'; ?>
