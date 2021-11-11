<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: #926aa6;
      }
      small {
        visibility: hidden;
        color: red;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row mx-5 px-5">
        <div
          class="
            row
            mx-4
            my-5
            justify-content-center
            bg-white
            shadow-lg
            py-3
            px-5
            mb-5
            rounded
          "
        >
          <div class="row">
            <p class="display-5 border-start border-danger border-5">
              Registration Form
            </p>
          </div>
          <div class="row">
            <p class="lead text-start">Silahkan mengisi formulir berikut</p>
          </div>
          <form onsubmit="return validate()" action="message.html" id="form">
            <div class="row my-1">
              <label for="Name" class="form-label">Name:</label>
              <input
                type="text"
                class="form-control"
                id="Name"
                placeholder="Masukkan nama anda"
              />
              <br />
              <small id="wName">Wrong name</small>
            </div>
            <div class="row my-1">
              <label for="Address" class="form-label">Address:</label>
              <input
                type="text"
                class="form-control"
                id="Address"
                placeholder="Jl.Sepanjang Jalan Kenangan"
              />
              <br />
              <small id="wAddress">Wrong Address</small>
            </div>
            <div class="row my-1">
              <label for="email" class="form-label">Email:</label>
              <input
                type="text"
                class="form-control"
                id="email"
                placeholder="Masukkan email anda"
              />
              <br />
              <small id="wEmail">Wrong Email</small>
            </div>
            <div class="row my-1">
              <label for="password" class="form-label">Password:</label>
              <input
                type="password"
                class="form-control"
                id="password"
                placeholder="Masukkan password anda"
              />
              <br />
              <small id="wPassword">Wrong Password</small>
            </div>
            <div class="row my-1">
              <label for="Telephone" class="form-label">Telephone:</label>
              <input
                type="number"
                class="form-control"
                id="Telephone"
                placeholder="Masukkan nomor telepon anda"
              />
              <br />
              <small id="wTelephone">Wrong Telephone</small>
            </div>
            <div class="row my-1">
              <p>Select your course:</p>
              <select
                class="form-select"
                aria-label="Default select example"
                id="selector"
              >
                <option selected>Select</option>
                <option value="BTECH">BTECH</option>
                <option value="BBA">BBA</option>
                <option value="BCA">BCA</option>
                <option value="GFG">GEEKFORGEEKS</option>
              </select>
              <br />
              <small id="wSelector">Wrong Selector</small>
            </div>
            <div class="row my-1">
              <label for="zipCode" class="form-label" id="zip">Zip code:</label>
              <input
                type="number"
                class="form-control"
                id="zipCode"
                placeholder="Masukkan kode pos anda"
              />
              <br />
              <small id="wZipCode">Wrong zip code</small>
            </div>
            <div class="row mt-4">
              <div class="col">
                <button
                  type="submit"
                  value="Submit"
                  class="btn btn-success btn-lg me-3 py-2 px-3"
                  id="submit"
                >
                  Submit
                </button>
                <button id="reset" class="btn btn-danger btn-lg py-2 px-3">
                  Reset
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
      integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
      crossorigin="anonymous"
    ></script>
    <script>
	const name = document.getElementById("Name").value.trim();
const address = document.getElementById("Address").value.trim();
const email = document.getElementById("email").value.trim();
const password = document.getElementById("password").value.trim();
const Telephone = document.getElementById("Telephone").value.trim();
const selector = document.getElementById("selector").value.trim();
const zipCode = document.getElementById("zipCode").value.trim();
const isContainNum = /[0-9]/;
const isNotNum = /[^0-9]/;
const isEmail = /[@]/;

function vName() {
  if (name === "" || isContainNum.test(name) === true) {
    return true;
  }
  return false;
}

function vAddress() {
  if (address === "") {
    return true;
  }
  return false;
}

function vEmail() {
  if (email === "" || isEmail.test(email) === false) {
    return true;
  }
  return false;
}

function vSelector() {
  if (selector === "Select") {
    return true;
  }
  return false;
}

function vTelephone() {
  if (
    Telephone == "" ||
    isNotNum.test(Telephone) === true ||
    Telephone.length < 7
  ) {
    return true;
  }
  return false;
}

function vPassword() {
  if (password == "" || password.length < 8 || password.length > 16) {
    return true;
  }
  return false;
}

function vZipCode() {
  if (zipCode == "" || zipCode.length != 6 || isNotNum.test(zipCode) === true) {
    return true;
  }
  return false;
}

function validate() {
  if (vName() === true) {
    $("#Name").css("border-color", "red");
    $("#wName").css("visibility", "visible");
    return false;
  }
  // if (vName() === false) {
  //   $("#Name").css("border-color", "green");
  // }
  else if (vAddress() === true) {
    $("#Address").css("border-color", "red");
    $("#wAddress").css("visibility", "visible");
    return false;
  }
  // if (vAddress() === false) {
  //   $("#Address").css("border-color", "green");
  // }
  else if (vSelector() === true) {
    $("#wSelector").css("visibility", "visible");
    return false;
  } else if (vEmail() === true) {
    $("#email").css("border-color", "red");
    $("#wEmail").css("visibility", "visible");
    return false;
  }
  // if (vEmail() === false) {
  //   $("#email").css("border-color", "green");
  // }
  else if (vPassword() === true) {
    $("#password").css("border-color", "red");
    $("#wPassword").css("visibility", "visible");
    return false;
  }
  // if (vPassword() === false) {
  //   $("#password").css("border-color", "green");
  // }
  else if (vTelephone() === true) {
    $("#Telephone").css("border-color", "red");
    $("#wTelephone").css("visibility", "visible");
    return false;
  }
  // if (vTelephone() === false) {
  //   $("#Telephone").css("border-color", "green");
  // }
  else if (vZipCode() === true) {
    $("#zipCode").css("border-color", "red");
    $("#wZipCode").css("visibility", "visible");
    return false;
  }
  // if (vZipCode() === false) {
  //   $("#zipCode").css("border-color", "green");
  // }
  else {
    return true;
  }
}
$("#reset").click(function () {
  location.reload();
});
// $("#submit").click(function () {
//   if (name === "" || isContainNum.test(name) === true) {
//     $("#Name").css("border-color", "red");
//     $("#Name").after("<p style='color: red' class='alert'> Wrong name</p>");
//   } else {
//     $("#Name").css("border-color", "green");
//   }
//   if (address === "") {
//     $("#Address").css("border-color", "red");
//     $("#Address").after(
//       "<p style='color: red' class='alert'> Wrong address</p>"
//     );
//   }
//   if (email === "" || isEmail.test(email) === false) {
//     $("#email").css("border-color", "red");
//     $("#email").after("<p style='color: red' class='alert'> Wrong email</p>");
//   }
//   if (selector === "Select") {
//     $("#zip").before(
//       "<p style='color: red' class='alert'> Wrong selection</p>"
//     );
//   }
//   if (
//     Telephone == "" ||
//     isNotNum.test(Telephone) === true ||
//     Telephone.length < 7
//   ) {
//     $("#Telephone").css("border-color", "red");
//     $("#Telephone").after(
//       "<p style='color: red' class='alert'> Wrong number</p>"
//     );
//   }
//   if (password == "" || password.length < 8 || password.length > 16) {
//     $("#password").css("border-color", "red");
//     $("#password").after(
//       "<p style='color: red' class='alert'> Wrong password</p>"
//     );
//   }
//   if (zipCode == "" || zipCode.length != 6 || isNotNum.test(zipCode) === true) {
//     $("#zipCode").css("border-color", "red");
//     $("#zipCode").after(
//       "<p style='color: red' class='alert'> Wrong zipCode</p>"
//     );
//   }
//   if (
//     zipCode != "" &&
//     zipCode.length == 6 &&
//     isNotNum.test(zipCode) === false &&
//     password != "" &&
//     password.length >= 8 &&
//     password.length <= 16 &&
//     Telephone != "" &&
//     isNotNum.test(Telephone) === false &&
//     Telephone.length >= 7 &&
//     selector != "Select" &&
//     email != "" &&
//     isEmail.test(email) === true &&
//     address != "" &&
//     name != "" &&
//     isContainNum.test(name) === false
//   ) {
//     alert("Registration success");
//   }
// });

   </script>
  </body>
</html>
