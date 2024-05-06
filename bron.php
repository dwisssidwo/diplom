<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Бронирование</title>
<link rel="stylesheet" href="broni.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<style>
  /* Additional CSS for the tables */
  .reservation-area {
    clear: both;
    float: left;
    width: 50%; /* Уменьшим ширину, чтобы вместить таблицу */
    padding: 10px;
    overflow-x: auto;
    text-align: center;
  }

  .reservation-area .seat {
    display: inline-block;
    width: 80px; /* Увеличение ширины столика */
    height: 80px; /* Увеличение высоты столика */
    margin: 10px;
    border: 2px solid #09ff00; /* Изменение цвета границы столика */
    border-radius: 15px; /* Увеличение радиуса скругления границы */
    background-color: #11ff35;
    text-align: center;
    line-height: 80px; /* Выравнивание текста по центру */
    cursor: pointer;
    font-size: 20px; /* Увеличение размера текста */
    font-family: Arial, sans-serif;
  }

  .reservation-area .seat.selected {
    background-color: #f0080d;
    color: black;
  }

  .reservation-area .seat.reserved {
    background-color: #f0080d;
  }

  .status-table {
    float: left;
    width: 40%; /* Уменьшим ширину таблицы */
    margin-top: 10px;
    border-collapse: collapse;
  }

  .status-table th,
  .status-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  .status-table th {
    background-color: #f2f2f2;
  }

</style>
</head>
<body>

<div class="reservation-area">
</div>

<table class="status-table">
  <thead>
    <tr>
      <th>Стол №</th>
      <th>Статус</th>
    </tr>
  </thead>
  <tbody id="status-table-body">
    <!-- Table rows will be dynamically added here -->
  </tbody>
</table>

<div class="status-container" id="status-container">
  <h2 id="status-heading"></h2>
  <p id="status-message"></p>
  <input type="datetime-local" id="reservation-datetime">
  <button id="reserve-btn">Забронировать</button>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const reservationArea = document.querySelector('.reservation-area');
  const statusTableBody = document.getElementById('status-table-body');
  const statusContainer = document.getElementById('status-container');
  const statusHeading = document.getElementById('status-heading');
  const statusMessage = document.getElementById('status-message');
  const reservationDatetime = document.getElementById('reservation-datetime');
  const reserveBtn = document.getElementById('reserve-btn');
  const totalSeats = 23;

  // Dummy data for seat reservations (replace with actual data)
  const seatReservations = {
    5: { status: 'Забронировано', datetime: '2024-05-01T15:30' },
    10: { status: 'Занято', datetime: '2024-05-02T18:00' },
    15: { status: 'Занято', datetime: '2024-05-01T17:00' }
  };

  // Function to mark a seat as reserved
  function markSeatAsReserved(seatNumber) {
    const seat = document.createElement('button');
    seat.textContent = seatNumber;
    seat.className = 'seat';
    seat.addEventListener('click', () => {
      if (!seat.classList.contains('reserved')) {
        seat.classList.add('selected');
        openStatusWindow(seatNumber); // Open status window for the selected seat
      }
    });
    if (seatNumber in seatReservations) {
      seat.classList.add('reserved');
    }
    reservationArea.appendChild(seat);

    // Add status to the status table
    const statusRow = document.createElement('tr');
    const seatNumberCell = document.createElement('td');
    seatNumberCell.textContent = seatNumber;
    statusRow.appendChild(seatNumberCell);
    const statusCell = document.createElement('td');
    const status = seatNumber in seatReservations ? 'Занят' : 'Свободен';
    statusCell.textContent = status;
    statusRow.appendChild(statusCell);
    statusTableBody.appendChild(statusRow);
  }

  // Dynamically populate reservation area with seats and status table
  for (let i = 1; i <= totalSeats; i++) {
    markSeatAsReserved(i);
  }

  // Function to open status window for a selected seat
  function openStatusWindow(seatNumber) {
    statusContainer.classList.add('active');
    statusHeading.textContent = `Стол №${seatNumber}`;
    if (seatNumber in seatReservations) {
      const { status, datetime } = seatReservations[seatNumber];
      if (status === 'Занято') {
        statusMessage.textContent = `Статус: ${status} на ${datetime}`;
      } else {
        statusMessage.textContent = `Статус: ${status}`;
      }
      reservationDatetime.value = datetime;
    } else {
      statusMessage.textContent = 'Стол свободен';
      reservationDatetime.value = ''; // Clear datetime input
    }
  }

  // Function to close status window
  function closeStatusWindow() {
    statusContainer.classList.remove('active');
  }

  // Event listener for reserve button
  reserveBtn.addEventListener('click', () => {
    // Perform reservation here
    closeStatusWindow();
  });
});

</script>

</body>
</html>
