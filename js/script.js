function submitForm() {
  const dateInput = document.getElementById('date-input').value;
  const yearInput = document.getElementById('year-input').value;

  // You can use the selected date and year for further processing
  console.log('Selected Date:', dateInput);
  console.log('Selected Year:', yearInput);
}


function selectTimeSlot(button) {
  // Reset all buttons to default style
  const timeSlots = document.getElementsByClassName('time-slot');
  for (let i = 0; i < timeSlots.length; i++) {
    timeSlots[i].classList.remove('selected');
  }

  // Mark the selected button
  button.classList.add('selected');

  // Display the selected time slot
  const selectedTimeElement = document.getElementById('selected-time');
  selectedTimeElement.textContent = 'Selected Time: ' + button.textContent;
}
