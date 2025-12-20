// ======================
// Helper functions
// ======================

function showMessage(type, message) {
  const formMessage = document.getElementById('formMessage');
  formMessage.className = `form-message ${type}`;
  formMessage.textContent = message;
}

function resetButton(button, textElement, loaderElement) {
  button.disabled = false;
  textElement.style.display = 'inline';
  loaderElement.style.display = 'none';
}


document.addEventListener('DOMContentLoaded', () => {
  initializeSmoothScrolling();
  initializeMobileMenu();
  initializeReservationForm();
  setMinDate();
});


function initializeSmoothScrolling() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}


function initializeMobileMenu() {
  const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (mobileMenuToggle && navMenu) {
    mobileMenuToggle.addEventListener('click', () => {
      navMenu.style.display =
        navMenu.style.display === 'flex' ? 'none' : 'flex';
    });
  }
}


function setMinDate() {
  const today = new Date().toISOString().split('T')[0];
  const checkInInput = document.getElementById('checkIn');
  const checkOutInput = document.getElementById('checkOut');

  if (!checkInInput || !checkOutInput) return;

  checkInInput.setAttribute('min', today);

  checkInInput.addEventListener('change', () => {
    const checkInDate = new Date(checkInInput.value);
    const nextDay = new Date(checkInDate);
    nextDay.setDate(nextDay.getDate() + 1);

    const minCheckOut = nextDay.toISOString().split('T')[0];
    checkOutInput.setAttribute('min', minCheckOut);

    if (
      checkOutInput.value &&
      new Date(checkOutInput.value) <= checkInDate
    ) {
      checkOutInput.value = minCheckOut;
    }
  });
}


function initializeReservationForm() {
  const form = document.getElementById('reservationForm');
  if (form) {
    form.addEventListener('submit', handleFormSubmit);
  }
}

async function handleFormSubmit(e) {
  e.preventDefault();

  const submitButton = e.target.querySelector('.submit-button');
  const buttonText = submitButton.querySelector('.button-text');
  const buttonLoader = submitButton.querySelector('.button-loader');

  submitButton.disabled = true;
  buttonText.style.display = 'none';
  buttonLoader.style.display = 'inline';

  const formData = new FormData(e.target);

  // Client-side date validation
  const checkIn = new Date(formData.get('checkIn'));
  const checkOut = new Date(formData.get('checkOut'));

  if (checkIn >= checkOut) {
    showMessage('error', 'Check-out date must be after check-in date.');
    resetButton(submitButton, buttonText, buttonLoader);
    return;
  }

  try {
    const response = await fetch('save_reservation.php', {
      method: 'POST',
      body: formData
    });

    const result = await response.text();

    if (result.trim() === 'success') {
      showMessage(
        'success',
        'Reservation submitted successfully! We will contact you within 24 hours.'
      );
      e.target.reset();
    } else {
      showMessage('error', result);
    }
  } catch (error) {
    showMessage('error', 'Server error. Please try again.');
  } finally {
    resetButton(submitButton, buttonText, buttonLoader);
  }
}
