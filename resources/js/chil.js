// Function to show the loader and disable scrolling
function showLoader() {
    document.getElementById("loader").style.display = "grid";
    document.body.style.overflow = "hidden"; // Disable scrolling
  }

  // Function to hide the loader and enable scrolling
  function hideLoader() {
    document.getElementById("loader").style.display = "none";
    document.body.style.overflow = "auto"; // Enable scrolling
  }

  // Example usage: Show loader on page load, hide after 3 seconds
  window.onload = function () {
    showLoader();
    setTimeout(hideLoader, 3000); // Hide loader after 3 seconds
  };

  // JavaScript to handle scroll to top functionality
  window.onscroll = function () {
    scrollFunction();
  };

  function scrollFunction() {
    if (
      document.body.scrollTop > 800 ||
      document.documentElement.scrollTop > 800
    ) {
      document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
      document.getElementById("scrollToTopBtn").style.display = "none";
    }
  }

  function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }

  document.getElementById("scrollToTopBtn").onclick = scrollToTop;
