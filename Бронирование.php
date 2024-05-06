<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Бронирование</title>
<link rel="stylesheet" href="broni.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>

		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="updown.php">UpDown</a></h1>
  <div class="collapse navbar-collapse nav-wil justify-content-center" id="bs-example-navbar-collapse-1">
    <nav>
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="updown.php">Главное</a></h1>
      </ul>
    </nav>
  </div>
</nav>

<div class="notification-area">
  <p id="notificationMessage"></p>
  <div id="additionalOffer" style="display: none;">
    <p>Хотите ли вы заказать еду и напитки до вашего столика?</p>
    <button id="offerYes" href="food.php">Да</button>
    <button id="offerNo">Нет</button>
  </div>
</div>
<div class="reservation-area"> <!-- Seats will be dynamically added here -->
</div>

<div class="modal" id="reservationModal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close-btn">&times;</span>
      <h2>Бронирование места</h2>
    </div>
    <p>Выбрано место <span id="selectedSeatNumber"></span></p>
    <input type="date" id="reservationDate">
    <input type="text" id="reservationTime" placeholder="Время (например, 09:00)">
    <button id="confirmReservation">Забронировать</button>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const reservationArea = document.querySelector('.reservation-area');
  const modal = document.getElementById('reservationModal');
  const closeBtn = document.querySelector('.close-btn');
  const confirmReservationBtn = document.getElementById('confirmReservation');
  const selectedSeatNumber = document.getElementById('selectedSeatNumber');
  const reservationTimeInput = document.getElementById('reservationTime');
  const orderLink = document.getElementById('orderLink');
  const totalSeats = 23; // Total number of seats

  for (let i = 1; i <= totalSeats; i++) {
    const seat = document.createElement('button');
    seat.textContent = i;
    seat.className = 'seat';
    seat.addEventListener('click', () => {
      if (!seat.classList.contains('reserved')) {
        selectedSeatNumber.textContent = `№${i}`;
        toggleModal(true); // Show modal on seat select
      }
    });
    reservationArea.appendChild(seat);
  }

  function toggleModal(show) {
    modal.style.display = show ? 'flex' : 'none';
  }

  closeBtn.addEventListener('click', () => toggleModal(false));

  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      toggleModal(false);
    }
  });

  confirmReservationBtn.addEventListener('click', () => {
    const selectedNumber = selectedSeatNumber.textContent.replace('№', '');
    const reservationDate = document.getElementById('reservationDate').value;
    const reservationTime = reservationTimeInput.value.trim();

    if (reservationDate && reservationTime) {
      const seatToReserve = document.querySelector(`.seat:nth-child(${selectedNumber})`);
      if (seatToReserve && !seatToReserve.classList.contains('reserved')) {
        seatToReserve.classList.add('reserved');
        toggleModal(false);
        reservationTimeInput.value = '';
        showNotification(selectedNumber, reservationDate, reservationTime);
      } else {
        alert('Это Место уже забронировано.');
      }
    } else {
      alert('Заполните все поле.');
    }
  });

  function showNotification(seatNumber, date, time) {
    const message = `Ваше место номер ${seatNumber} забронировано на ${date} в ${time}.`;
    document.getElementById('notificationMessage').textContent = message;
    document.querySelector('.notification-area').style.display = 'block';
    document.getElementById('additionalOffer').style.display = 'block'; // Show additional offer
    orderLink.style.display = 'inline'; // Show order link
  }

  document.getElementById('offerYes').addEventListener('click', () => {
  window.location.href = 'food.php'; // Перенаправление на другой сайт
});


  document.getElementById('offerNo').addEventListener('click', () => {
    document.querySelector('.notification-area').style.display = 'none'; // Hide notification after response
    alert('Благодарим за бронирование! Наслаждайтесь мероприятием.');
  });
});

</script>
</form>
</body>
</html>
