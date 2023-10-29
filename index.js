const startDateInput = document.getElementById('start-date');
const startTimeInput = document.getElementById('start-time');
const endDateInput = document.getElementById('end-date');
const endTimeInput = document.getElementById('end-time');
const calculateButton = document.querySelector('.btnn');

calculateButton.addEventListener('click', calculateHalfDuration);

function calculateHalfDuration() {
  const startDate = new Date(startDateInput.value + 'T' + startTimeInput.value);
  const endDate = new Date(endDateInput.value + 'T' + endTimeInput.value);

  if (isNaN(startDate) || isNaN(endDate)) {
    alert('Veuillez sélectionner des dates et heures valides.');
    return;
  }

  const duration = endDate - startDate;
  const halfDuration = duration / 2;

  const middleDate = new Date(startDate.getTime() + halfDuration);

  alert('Le milieu des vacances est le ' + middleDate.toLocaleString());
}
