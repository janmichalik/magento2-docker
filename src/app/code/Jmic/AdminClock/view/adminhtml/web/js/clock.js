define([], function () {
    return {
        init: function () {
            function pad(n) {
                return n < 10 ? '0' + n : n;
            }

            function updateClock() {
                const now = new Date();
                const hours = pad(now.getHours());
                const minutes = pad(now.getMinutes());
                const seconds = pad(now.getSeconds());
                const day = pad(now.getDate());
                const month = pad(now.getMonth() + 1);
                const year = now.getFullYear();
                const timeString = `${hours}:${minutes}:${seconds}`;
                const dateString = `${day}.${month}.${year}`;
                const timeEl = document.getElementById('clock-time');
                const dateEl = document.getElementById('clock-date');
                if (timeEl) timeEl.textContent = timeString;
                if (dateEl) dateEl.textContent = dateString;
            }

            updateClock();
            setInterval(updateClock, 1000);
        }
    };
});
