function showPopup(popupId) {
    // Находим элемент окна по его id
    var popup = document.getElementById(popupId);
    
    // Показываем окно (делаем его видимым)
    popup.style.display = "block";
}

function hidePopup(popupId) {
    // Находим элемент окна по его id
    var popup = document.getElementById(popupId);
    
    // Скрываем окно (делаем его невидимым)
    popup.style.display = "none";
}
