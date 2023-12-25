


@include('template1.nav')

<div class="contact">
    <div class="container">
      <div class="main-heading">
        <h2>Contact Us</h2>
        <p>
          Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget
          tincidunt.
        </p>
      </div>
      <div class="content">
        <form action="">
          <input class="main-input" type="text" name="name" placeholder="Your Name" />
          <input class="main-input" type="email" name="mail" placeholder="Your Email" />
          <textarea class="main-input" name="message" placeholder="Your Message"></textarea>
          <input type="submit" value="Send Message" />
        </form>
        <div class="info">
          <h4>Get In Touch</h4>
          <span class="phone">+0777888888</span>
          <span class="phone">+0888899999</span>
          <h4>Where We Are</h4>
          <address> Address 17<br />New York<br />5556667770<br />USA</address>
        </div>
      </div>
    </div>
  </div>


  

  @include('template1.footer')