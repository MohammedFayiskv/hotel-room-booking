
  <div class="container-fluid">
    <div class="row" style="width:100%">
        <div class="col-md-3 ">
    <a class="navbar-brand  brand-name" href="#">Navbar</a>
    <button class="navbar-toggler toggle-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <i class="fa-solid fa-bars" style="color: #ffffff;"></i>
    </button></div>
    <div class=" col-md-9 collapse navbar-collapse" id="navbarNav">
        <div class="col-md-10">

          <ul class="navbar-nav main-ul ">
                  <li class="nav-item ">
                    <a class="nav-link main-li active" aria-current="page" href="/">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link main-li" href="/about">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link main-li" href="/rooms">SERVICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link main-li" href="/rooms">ROOMS</a>
                  </li>

              <li class="nav-item dropdown">
                <a class="nav-link main-li dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PAGES </a>
                <ul class="dropdown-menu ">
                  <li ><a class="dropdown-item page-dropdown " href="#">Booking</a></li>
                  <li><a class="dropdown-item page-dropdown" href="#">Our Team</a></li>
                  <li><a class="dropdown-item page-dropdown" href="#">Testimonial</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link main-li" href="#">CONTACT</a></li>
        </ul>
    </div>
       
        <div class="col-md-2 icon-section" >
              <!-- <div class="col-md-4">
              </div> -->
        <!-- <div class=" col-md-2 search-container">
            <input type="text" class="form-control search-box" id="searchBox" placeholder="Search...">
            <button class="btn  search-button" id="searchButton">
            <i class="fa-solid fa-magnifying-glass "></i>
          </div> -->
    <!-- <div class="col-md-2">
            <i class="bi bi-person-circle"></i>
            <div> -->/
            <i class="bi bi-person-circle"></i>
        </div>
        </div>
  
    </div>
  </div>
  @push('scripts')
    <!-- // Function to handle link clicks -->
    <!-- <script>
       
        function handleLinkClicks(selector, isDropdown = false) {
            const links = document.querySelectorAll(selector);

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default link behavior
                    
                    // For main links
                    if (!isDropdown) {
                        // Remove 'clicked' class from all main links
                        document.querySelectorAll('.main-ul .nav-link').forEach(l => l.classList.remove('clicked'));
                    } else {
                        // Remove 'clicked' class from all dropdown items
                        document.querySelectorAll('.page-dropdown').forEach(l => l.classList.remove('clicked'));
                    }

                    // Add the 'clicked' class to the current link
                    this.classList.add('clicked');
                });
            });
        }

        // Call the function for main links and dropdown links
        handleLinkClicks('.main-ul .nav-link'); // Main links
        handleLinkClicks('.page-dropdown', true); // Dropdown items
    </script> -->

<!-- // Function to handle search option -->
<!-- <script>

    const searchBox = document.getElementById('searchBox');
    const searchButton = document.getElementById('searchButton');

    searchButton.addEventListener('click', function() {
        searchBox.classList.toggle('open'); // Toggle the 'open' class
        if (searchBox.classList.contains('open')) {
            searchBox.focus(); // Focus on the input when opened
        } else {
            searchBox.value = ''; // Clear input when closed
        }
    });

    // Close search box when clicking outside
    document.addEventListener('click', function(event) {
        if (!searchBox.contains(event.target) && !searchButton.contains(event.target)) {
            searchBox.classList.remove('open'); // Remove the 'open' class
            searchBox.value = ''; // Clear input when closed
        }
    });
</script> -->
@endpush
