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
    A long time resident and businessman in Chinatown, it has always been Louis Wong's dream to contribute to Chinatown's exciting dining scene. He sought to create a Chinese restaurant that is uniquely his own and at the same time exemplifies the vibrant intergenerational dynamics that makes Chinatown so special. Located on Mulberry Street in the heart of historic Chinatown NYC, Uncle Lou is proud to be neighbors with some of the oldest businesses and institutions, as well as innovative new ventures that bring reimagined experiences and energy to the community.
    Using his connections to local produce vendors, fishmongers, butchers, grocers, and seasoned cooks, the menu at Uncle Lou is meant to bridge the generations, while welcoming all to enjoy. The extensive menu is big by design. The "lo wah kiu favorites" takes grandparents back to the Cantonese villages in Toisan, Sunwui, Enping, and Hoiping. ABC's and "jook sing" are comforted by classic meals they enjoyed between Chinese school and playing in Columbus Park. Friends from around the world can appreciate the freshness and quality from locally-sourced ingredients and expert preparation.
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12096.34867987055!2d-74.00718066356129!3d40.71609750627592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259f56c2fc10d%3A0xcf9e1370cd1f3111!2sChinatown%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sph!4v1768643516127!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <div class="col flex-column text-center my-auto">
      <p>Uncle Lou is open six days a week 11am to 10pm, and closed on Tuesdays. </p>
      <p>We accept reservations over the phone for groups of six and up. Please call <span class="text-danger fw-bold italic-font">212-966-5538</span>. We welcome walk-ins for smaller parties.</p>
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