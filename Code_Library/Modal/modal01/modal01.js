// Get the modal element
const modal = document.getElementById("modal");

// Get the delayed close button element
const delayedCloseButton = document.getElementById("delayed-close-btn");

// Get the countdown element
const countdown = document.getElementById("countdown");

// Set the time (in milliseconds) for the modal to automatically close
const timeToClose = 5000;

// Show the modal and start the countdown
modal.style.display = "block";
startCountdown();

// Create a function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Add an event listener to the delayed close button to close the modal when clicked
delayedCloseButton.addEventListener("click", closeModal);

// Function to start the countdown
function startCountdown() {
  // Record the start time for the countdown
  const startTime = Date.now();

  // Update the countdown every second
  const intervalId = setInterval(() => {
    const remainingTime = Math.ceil((timeToClose - (Date.now() - startTime)) / 1000);
    countdown.textContent = `Closing in ${remainingTime} seconds...`;
    if (remainingTime <= 0) {
      clearInterval(intervalId);
      countdown.style.display = "none";
      delayedCloseButton.style.display = "block";
    }
  }, 1000);

  // Show the countdown element
  countdown.style.display = "block";
}
