window.onload = function () {

    document.querySelectorAll('.servertime').forEach(function (serverTime) {
        let dateCurrent = serverTime.getAttribute('data-time') * 1;

        let timeUpdate = function (dateCurrent) {
            let date = new Date(dateCurrent * 1000);
            serverTime.innerHTML = date.toLocaleTimeString('ru', {
                timeZone: 'UTC',
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hc: 'h24',
                hour: '2-digit',
                minute: '2-digit',
                second: undefined
            });
        };

        if (dateCurrent) {
            timeUpdate(dateCurrent);
            setInterval(function () {
                let time = new Date().getTime();
                let deltaTime = parseInt(time / 1000) - dateCurrent;
                dateCurrent += deltaTime;
                timeUpdate(dateCurrent);
            }, 1000);
        }
    });
};