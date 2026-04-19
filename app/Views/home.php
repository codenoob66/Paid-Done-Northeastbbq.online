<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="container carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/bbq1.jpg') ?>" class="d-block w-100 c-img" alt="iamge 1">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/bbq2.jpg') ?>" class="d-block w-100 c-img" alt="image 2">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/bbq3.jpg') ?>" class="d-block w-100 c-img" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-4">
  <h1 class="text-center text-danger s-header-font">
    Our humble beginnings
  </h1>

  <p class="text-center">
    At Northeast BBQ, it has always been our dream to contribute to the local dining scene. We sought to create a Chinese BBQ experience that is uniquely our own, exemplifying the vibrant flavors and traditional techniques that make this cuisine so special. We are proud to serve our community with reimagined experiences and energy.
    Using connections to local produce vendors, fishmongers, butchers, grocers, and seasoned cooks, the menu at Northeast BBQ is meant to bridge generations while welcoming all to enjoy. Our extensive menu is big by design, featuring favorites that take you back to traditional Cantonese villages, alongside modern classics. Friends from around the world can appreciate the freshness and quality from locally-sourced ingredients and expert preparation.
  </p>
</div>

<div class="container mt-4 mb-4">
  <h1 class="text-center text-danger s-header-font">
    Reservation
  </h1>
</div>

<div class="container mb-4">
  <div class="row">
    <div class="col-12 col-lg-6">
      <div class="ratio ratio-16x9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.361284451!2d-74.0059!3d40.7128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjEiTiA3NMKwMDAnMjEuMiJX!5e0!3m2!1sen!2sph!4v1713512345678!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="col flex-column text-center my-auto">
      <p>Northeast BBQ is open six days a week 11am to 10pm, and closed on Tuesdays. </p>
      <p>We accept reservations over the phone for groups of six and up. Please call <span class="text-danger fw-bold italic-font">info@northeastbbq.online</span> for inquiries. We welcome walk-ins for smaller parties.</p>
      <p>Event and catering services available. Direct inquiries to <span class="text-danger fw-bold italic-font">info@northeastbbq.online</span></p>
    </div>

    <div class="col-12 col-md-6 mx-md-auto">
      <form method="post" action="/send" class="p-3">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" placeholder="We would never give out your information" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div>
        <label for="exampleInputPassword1" class="form-label">Write your inquiry</label>
        <textarea class="form-control" rows="5" name="message" id="exampleInputMessage"></textarea>
      </div>
      <button type="submit" class="btn btn-danger mt-3">Submit</button>
    </form>
    </div>
  </div>
</div>