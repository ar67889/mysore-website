<html>
    <head>
        <title>Mysore</title>
        <link rel="shortcut icon" href="img/ganda.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Kalam&family=Catamaran:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles1.css">
    </head>
    <body>
      <div class="btn btn-warning btn-group dropup position-fixed bottom-0 end-0 mb-3 me-3 z-3">
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor" class="bi bi-arrows-expand" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8ZM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2ZM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10Z"/>
          </svg>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#header">Top</a></li>
          <li><a class="dropdown-item" href="#about">Down</a></li>
        </ul>
      </div>

      <section class="header" id="header" data-aos="zoom-out">
        <header class="p-3 text-bg-dark">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img src="img/Mysore.png" alt="logo" height="75" id="logo">
        
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#connectivity" class="nav-link px-2 link-secondary text-white">Connectivity</a></li>
                  <li><a href="#heritage" class="nav-link px-2 link-secondary text-white">Heritage</a></li>
                  <li><a href="#places" class="nav-link px-2 link-secondary text-white">Tourist Attractions</a></li>
                  <li><a href="#cuisine" class="nav-link px-2 link-secondary text-white">Cuisine</a></li>
                  <li><a href="#entertainment" class="nav-link px-2 link-secondary text-white">Entertainment</a></li>
                </ul>
                
                <div class="dropdown text-end btn btn-warning">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                      </svg>
                    </a>
                    <ul class="dropdown-menu text-small">
                      <li><a class="dropdown-item" href="index.html">Sign out</a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </header>
        </section>

        <div class="p-5 text-center bg-image position-relative z-n1" style="background-image: url('img/Mysore_main.jpg'); height: 800; background-position: center;" data-aos="zoom-in">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white" id="hero" data-aos="fade-right">
                <h1 class="mb-3 fw-bold" id="hero_text">Mysore</h1>
                <h4 class="mb-3 fw-medium" id="hero_sub">Where Heritage Meets Majesty...</h1>
                </div>
              </div>
            </div>
        </div>

        <div class="px-4 py-5 my-5 text-center border-bottom" id="explore" data-aos="zoom-in">
          <h1 class="display-5 fw-bold text-body-emphasis">Explore Mysore</h1>
          <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Mysore, a city in the southern part of India, is a treasure trove of cultural heritage and historical landmarks. 
              From the majestic Mysore Palace to the serene Brindavan Gardens and the vibrant Devaraja Market, there are plenty of attractions to explore. 
              We can also witness the grandeur of the Dasara festival, celebrated with great pomp and show in Mysore.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <a class="btn btn-warning btn-lg px-4 gap-3" href="#connectivity" role="button">Explore</a>
            </div>
          </div>
        </div>

        <div class="connectivity container col-xxl-8 px-4 py-5 my-5 border-bottom" id="connectivity" data-aos="zoom-out">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="img/map.jpg" class="d-block mx-lg-auto img-fluid border rounded-3 shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Connectivity</h1>
              <p class="lead">Mysore, also known as Mysuru, is well-connected to major cities in India through various modes of transportation. 
                It has a well-developed road network, with national highways and state highways connecting it to cities like Bangalore, Chennai, and Mangalore. 
                Mysore also has a railway station that is connected to several major cities across the country. 
                Additionally, it has an airport, the Mysore Airport, which offers domestic flights to cities like Bangalore and Chennai.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="btn btn-warning btn-lg px-4 gap-3" href="connectivity.html" role="button">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="connectivity container col-xxl-8 px-4 py-5 my-5 border-bottom" id="heritage" data-aos="zoom-in">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="img/heritage.jpg" class="d-block mx-lg-auto img-fluid border rounded-3 shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Heritage</h1>
              <p class="lead">Mysore is renowned for its rich heritage and vibrant culture. 
                The city is famous for its magnificent palaces, including the opulent Mysore Palace, which showcases exquisite architecture and hosts grand cultural events during the annual Dasara festival. 
                Mysore is also known for its traditional arts and crafts, such as Mysore silk sarees, intricate woodwork, and beautiful paintings, reflecting the city's cultural legacy.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="btn btn-warning btn-lg px-4 gap-3" href="heritage.html" role="button">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="connectivity container col-xxl-8 px-4 py-5 my-5 border-bottom" id="places" data-aos="zoom-out">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="img/lalit_mahal.jpg" class="d-block mx-lg-auto img-fluid border rounded-3 shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Tourist Attractions</h1>
              <p class="lead">Mysore offers a plethora of famous attractions for visitors to explore. 
                The iconic Mysore Palace is a must-visit, with its stunning architecture and beautifully lit facade during the evenings. 
                The Chamundi Hill, home to the Chamundeshwari Temple, provides a breathtaking view of the city and is a significant religious site. 
                Other notable places include the Brindavan Gardens, St. Philomena's Cathedral, and the Mysore Zoo, which is one of the oldest and most well-maintained zoos in India.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="btn btn-warning btn-lg px-4 gap-3" href="places.html" role="button">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="connectivity container col-xxl-8 px-4 py-5 my-5 border-bottom" id="cuisine" data-aos="zoom-in">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="img/bonda.jpg" class="d-block mx-lg-auto img-fluid border rounded-3 shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisine</h1>
              <p class="lead">Mysore has a distinct cuisine that is known for its rich flavors and unique blend of spices. 
                The city is famous for its mouthwatering Mysore Masala Dosa, Mysore Bonda etc. 
                Mysore Pak, a sweet delicacy made from gram flour, ghee, and sugar, is another popular treat that originated in the city. 
                Additionally, Mysore is known for its aromatic filter coffee, which is brewed using a traditional filter and served with frothy milk in a stainless steel tumbler and saucer.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="btn btn-warning btn-lg px-4 gap-3" href="cuisine.html" role="button">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="connectivity container col-xxl-8 px-4 py-5 my-5" id="entertainment" data-aos="zoom-out">
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="img/mall.jpg" class="d-block mx-lg-auto img-fluid border rounded-3 shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
              <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Entertainment</h1>
              <p class="lead">Mysore offers a delightful shopping experience with its bustling markets and vibrant shopping streets. 
                The Devaraja Market is a popular destination for buying traditional items such as silk sarees, sandalwood products, and spices. 
                For entertainment, Mysore has numerous options including the Mysore Mall, Mysore Palace Illumination, where the palace is beautifully lit up every Sunday evening, and the Mysore Dasara festival, which showcases a grand procession, cultural performances, and exhibitions.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="btn btn-warning btn-lg px-4 gap-3" href="entertainment.html" role="button">Learn More</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container" id="about">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            
            <ul class="nav col-md-5 justify-content-start">
              <li class="nav-item"><a href="#header" class="nav-link px-2 text-body-secondary link-dark fw-bold">Top</a></li>
              <li class="nav-item"><a href="#connectivity" class="nav-link px-2 link-dark text-body-secondary">Connectivity</a></li>
              <li class="nav-item"><a href="#heritage" class="nav-link px-2 link-dark text-body-secondary">Heritage</a></li>
              <li class="nav-item"><a href="#places" class="nav-link px-2 link-dark text-body-secondary">Tourist Attractions</a></li>
              <li class="nav-item"><a href="#cuisine" class="nav-link px-2 link-dark text-body-secondary">Cuisine</a></li>
            </ul>
        
            <img src="img/Mysore light.png" alt="logo" height="75">
        
            
          </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    </body>
</html>