<div class="bg-dark" style="margin-top: 20px;">
  <div class="container">     
    <div class="row" style="color: white; padding: 100px 20px 50px 20px;">
      <div class="col-md-4">
        <h1>About Me</h1>
        <p class="disabled">My name is Jonathan Davis and I’m professional photographer and retoucher. I’m offering my services to individual and corporate clients throughout the USA. Make your favorite life moment or event last and remain in your memory!</p>
      </div>
      <div class="col-md-4">
        <h1>Contact Infomation</h1>
        <table>
          <tr>
            <td><i class="fas fa-map-marker-alt fa-2x"></i></td>
            <td></td>
            <td>2130 Fulton Street San Diego,CA 94117-1080 USA</td>
          </tr>
          <tr>
            <td><i class="fas fa-envelope fa-2x"></i></td>
            <td></td>
            <td>info@demolink.org</td>
          </tr>
          <tr>
            <td><i class="fas fa-phone fa-2x"></i></td>
            <td></td>
            <td>1-800-1234-678</td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <h1>Newsletter</h1>
        <p>Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.</p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Your Email" id="mail" name="email" style="margin: 0px;">
          <div class="input-group-append">
            <span class="input-group-text">@</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-60px";
    }
    prevScrollpos = currentScrollPos;
  }
  // Get the modal
  var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// typewrite
var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-type');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtType(elements[i], JSON.parse(toRotate), period);
    }
  }
};
    // end typewrite
  </script>
  <!-- end js -->

</body>
</html>