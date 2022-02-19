const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

let countDown = moment.parseZone("2021 06 20 4:59:59","YYYY MM DD HH mm ss"),
    x = setInterval(function () {
        let now = moment(),
            distance = countDown - now;
        if (distance < 0) {
            distance = 0;
        }
        (document.getElementById("days").innerText = Math.floor(distance / day)),
        (document.getElementById("hours").innerText = Math.floor(
            (distance % day) / hour
        )),
        (document.getElementById("minutes").innerText = Math.floor(
            (distance % hour) / minute
        )),
        (document.getElementById("seconds").innerText = Math.floor(
            (distance % minute) / second
        ));
    }, second);