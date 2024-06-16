function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    var day = days[now.getDay()];
    var date = now.getDate();
    var month = now.getMonth() + 1; // January is 0!
    var year = now.getFullYear();
    
    var timeString = (hours < 10 ? '0' : '') + hours + ':' + 
                     (minutes < 10 ? '0' : '') + minutes + ':' + 
                     (seconds < 10 ? '0' : '') + seconds;
                     
    var dateString = day + ', ' + (date < 10 ? '0' : '') + date + '/' + 
                     (month < 10 ? '0' : '') + month + '/' + year;

    document.getElementById('clock').textContent = timeString;
    document.getElementById('date').textContent = dateString;
}

setInterval(updateClock, 1000);
updateClock();
