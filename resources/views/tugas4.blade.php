<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      /* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

      html,
      body,
      div,
      span,
      applet,
      object,
      iframe,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      p,
      blockquote,
      pre,
      a,
      abbr,
      acronym,
      address,
      big,
      cite,
      code,
      del,
      dfn,
      em,
      img,
      ins,
      kbd,
      q,
      s,
      samp,
      small,
      strike,
      strong,
      sub,
      sup,
      tt,
      var,
      b,
      u,
      i,
      center,
      dl,
      dt,
      dd,
      ol,
      ul,
      li,
      fieldset,
      form,
      label,
      legend,
      table,
      caption,
      tbody,
      tfoot,
      thead,
      tr,
      th,
      td,
      article,
      aside,
      canvas,
      details,
      embed,
      figure,
      figcaption,
      footer,
      header,
      hgroup,
      menu,
      nav,
      output,
      ruby,
      section,
      summary,
      time,
      mark,
      audio,
      video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
      }
      /* HTML5 display-role reset for older browsers */
      article,
      aside,
      details,
      figcaption,
      figure,
      footer,
      header,
      hgroup,
      menu,
      nav,
      section {
        display: block;
      }
      body {
        line-height: 1;
      }
      ol,
      ul {
        list-style: none;
      }
      blockquote,
      q {
        quotes: none;
      }
      blockquote:before,
      blockquote:after,
      q:before,
      q:after {
        content: "";
        content: none;
      }
      table {
        border-collapse: collapse;
        border-spacing: 0;
      }

      /* Suwit Jawa 2.0 */

      body {
        background-image: url(img_tugas4/bg.png);
        font-family: arial;
      }
      h1 {
        font-size: 60px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0;
        margin-top: 30px;
        text-transform: uppercase;
        color: #e7e7e7;
        text-shadow: 1.5px 1.5px 0 #333, 0px 1.5px 0 #333, -1.5px -1.5px 0 #333,
          -1.5px -1.5px 0 #333, -1.5px 1.5px 0 #333, 1.5px -1.5px 0 #333,
          0.7778174593px 0.7778174593px 0 #aaaaaa,
          1.5556349186px 1.5556349186px 0 #aaaaaa,
          2.3334523779px 2.3334523779px 0 #aaaaaa,
          3.1112698372px 3.1112698372px 0 #aaaaaa,
          3.8890872965px 3.8890872965px 0 #aaaaaa,
          4.6669047558px 4.6669047558px 0 #aaaaaa,
          5.4447222151px 5.4447222151px 0 #aaaaaa,
          6.2225396744px 6.2225396744px 0 #aaaaaa,
          7.0003571337px 7.0003571337px 0 #aaaaaa,
          7.7781745931px 7.7781745931px 0 #aaaaaa;
      }

      .container {
        width: 600px;
        margin: auto;
        padding: 20px;
        position: relative;
      }

      .area-komputer {
        width: 560px;
        height: 250px;
        margin: 5px auto;
        background-color: lightblue;
        background: linear-gradient(
          to bottom,
          rgba(179, 220, 237, 1) 0%,
          rgba(41, 184, 229, 1) 100%
        );
        position: relative;
        padding-top: 40px;
        box-sizing: border-box;
        border-radius: 40px 40px 0 0;
      }

      .area-player {
        width: 560px;
        height: 250px;
        margin: 5px auto;
        background-color: lightgreen;
        background: linear-gradient(
          to bottom,
          rgba(210, 255, 82, 1) 0%,
          rgba(145, 232, 66, 1) 100%
        );
        position: relative;
        border-radius: 0 0 40px 40px;
      }

      .info {
        width: 150px;
        height: 60px;
        border: 5px solid salmon;
        position: absolute;
        left: 50%;
        margin-left: -75px;
        top: 50%;
        margin-top: -30px;
        background-color: white;
        border-radius: 30px;
        z-index: 1;
        text-align: center;
        line-height: 60px;
        color: #f89bb4;
        font-size: 26px;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
      }

      ul {
        padding-top: 80px;
        padding-left: 25px;
      }

      li {
        display: inline-block;
        margin: 0 18px;
      }

      img {
        width: 130px;
        height: 130px;
        display: block;
        margin: auto;
        border-radius: 50%;
      }

      .gajah,
      .orang,
      .semut {
        transition: 0.3s;
        position: relative;
        top: 0;
        cursor: pointer;
      }

      .gajah:hover,
      .semut:hover,
      .orang:hover,
      .active {
        box-shadow: 0 0 10px 5px limegreen;
      }

      .gajah:active,
      .semut:active,
      .orang:active {
        top: 2px;
      }
    </style>
  </head>
  <body>
    <h1>Suwit Jawa v2.0</h1>

    <div class="container">
      <div class="area-komputer">
        <img src="img_tugas4/gajah.png" class="img-komputer" />
      </div>
      <div class="info"></div>
      <div class="area-player">
        <ul>
          <li>
            <img src="img_tugas4/gajah.png" class="gajah" />
          </li>
          <li>
            <img src="img_tugas4/orang.png" class="orang" />
          </li>
          <li>
            <img src="img_tugas4/semut.png" class="semut" />
          </li>
        </ul>
      </div>
    </div>
    <script>
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
    </script>
  </body>
</html>
