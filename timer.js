let endDate = new Date("2023-09-05T12:00:00").getTime();

let timer = setInterval(down, 1000);

function down() {
  let current = new Date().getTime();
  let timeDiff = endDate - current;

  if (timeDiff > 0) {
    let days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));

    if (days < 10) {
      days = "0" + days;
    }

    let hours = Math.floor(
      (timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );

    if (hours < 10) {
      hours = "0" + hours;
    }

    let mins = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));

    if (mins < 10) {
      mins = "0" + mins;
    }

    let secs = Math.floor((timeDiff % (1000 * 60)) / 1000);
    if (secs < 10) {
      secs = "0" + secs;
    }

    let clock = `${days} : ${hours} : ${mins} : ${secs}`;

    document.querySelector(".dealtimer").innerText = clock;
  }
}
