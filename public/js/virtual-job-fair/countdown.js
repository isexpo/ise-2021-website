"use strict";
// Polyfill
Number.prototype.pad = function (size) {
  var sign = Math.sign(this) === -1 ? "-" : "";
  return (
    sign +
    new Array(size)
      .concat([Math.abs(this)])
      .join("0")
      .slice(-size)
  );
};

let second = 1000;
let minute = second * 60;
let hour = minute * 60;
let day = hour * 24;

//periode virtual job fair ==> 31 oktober - 7 november 2021

let countDown = new Date("Oct 31, 2021 00:00:00").getTime();
window.setInterval(function () {
  let distance = countDown - new Date().getTime();
  if (distance < 0) distance = 0;
  document.getElementById("days").innerText = `${Math.floor(distance / day).pad(2)}`;
  document.getElementById("hours").innerText = `${Math.floor(
    (distance % day) / hour
  ).pad(2)}`;
  document.getElementById("minutes").innerText = `${Math.floor(
    (distance % hour) / minute
  ).pad(2)}`;
}, second);