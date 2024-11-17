class BookingManager {
  constructor() {
    this.tableBody = document.getElementById('table-data');
    this.searchInput = document.querySelector('input[type="text"]');
    this.page = 1; // Track current page
    this.setupEventListeners();
  }

  setupEventListeners() {
    // Debounce search input
    this.searchInput.addEventListener('input', this.debounce((e) => {
      this.page = 1; // Reset to page 1 when searching
      this.getBookings(e.target.value);
    }, 300));

    // Start auto refresh (optional)
    this.startAutoRefresh();
  }

  startAutoRefresh() {
    setInterval(() => {
      this.getBookings(this.searchInput.value);
    }, 30000);
  }

  async getBookings(search = '') {
    try {
      const formData = new FormData();
      formData.append('get_bookings', 'true');
      formData.append('search', search);
      formData.append('page', this.page); // Send the current page to the server

      const response = await fetch('ajax/new_bookings.php', {
        method: 'POST',
        body: formData
      });

      const html = await response.text();
      this.tableBody.innerHTML = html;

    } catch (error) {
      console.error('Error fetching bookings:', error);
      this.showNotification('error', 'Failed to fetch bookings.');
    }
  }

  showNotification(type, message) {
    alert(type, message);
  }

  debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
      const later = () => {
        clearTimeout(timeout);
        func(...args);
      };
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
    };
  }
}

const bookingManager = new BookingManager();
window.bookingManager = bookingManager;
