function pilihanComputer() {
    const comp = Math.random();
    if (comp < 0.33) {
        return "semut";
    }
    if (comp >= 0.33 && comp < 0.66) {
        return "gajah";
    }
    return "orang";
}
function hasil(userChoise, comChoise) {
    if (userChoise === comChoise) {
        return "DRAW";
    }
    if (
        (userChoise === "gajah" && comChoise === "semut") ||
        (userChoise === "semut" && comChoise === "orang") ||
        (userChoise === "orang" && comChoise === "gajah")
    ) {
        return "COM WIN";
    }
    if (
        (userChoise === "gajah" && comChoise === "orang") ||
        (userChoise === "semut" && comChoise === "gajah") ||
        (userChoise === "orang" && comChoise === "semut")
    ) {
        return "YOU WIN";
    }
}
const gajah = document.getElementsByClassName("gajah")[0];
const orang = document.getElementsByClassName("orang")[0];
const semut = document.getElementsByClassName("semut")[0];

const info = document.getElementsByClassName("info")[0];

const imgKomputer = document.getElementsByClassName("img-komputer")[0];

gajah.addEventListener("click", function () {
    const pCom = pilihanComputer();
    const pPlayer = "gajah";
    const result = hasil(pPlayer, pCom);
    info.innerHTML = result;
    imgKomputer.setAttribute("src", `img_tugas4/${pCom}.png`);
});
orang.addEventListener("click", function () {
    const pCom = pilihanComputer();
    const pPlayer = "orang";
    const result = hasil(pPlayer, pCom);
    info.innerHTML = result;
    imgKomputer.setAttribute("src", `img_tugas4/${pCom}.png`);
});
semut.addEventListener("click", function () {
    const pCom = pilihanComputer();
    const pPlayer = "semut";
    const result = hasil(pPlayer, pCom);
    info.innerHTML = result;
    imgKomputer.setAttribute("src", `img_tugas4/${pCom}.png`);
});
