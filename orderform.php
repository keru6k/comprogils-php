<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STI College Novaliches - Order Form</title>
    <link rel="stylesheet" href="stylesorderform.css">
</head>
<body>
    <header> 
        <div class="image">
        <img src="stilogo.png" onclick="window.location.href = 'index.php'">
      </div>
        <section class="container">
            <header>Order Form</header>
            <form action="javascript:void(0);" class="form">
              <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" required />
              </div>
      
              <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter email address" id="emailAddr" required />
              </div>
      
              <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                  <div class="gender">
                    <input type="radio" id="check-male" name="gender" checked />
                    <label for="check-male">Male</label>
                  </div>
                  <div class="gender">
                    <input type="radio" id="check-female" name="gender" />
                    <label for="check-female">Female</label>
                  </div>
                  <div class="gender">
                    <input type="radio" id="check-other" name="gender" />
                    <label for="check-other">Prefer not to say</label>
                  </div>
                </div>
              </div>

              <div class="column">
                <div class="input-box">
                  <label for="creditCardNumber">Credit Card Number</label>
                  <input type="text" id="creditCardNumber" placeholder="0000-0000-0000-0000" required />
                </div>
                <div id="validationResult"></div>
                <div class="input-box">
                  <label>Expiration Date</label>
                  <input type="date" placeholder="Enter expiration date" required />
                </div>
              </div>
              
              <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address" required />
                <input type="text" placeholder="Enter street address line 2" required />
                <div class="column">
                  <div class="select-box">
                    <select>
                      <option hidden>Uniform Size</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                    <select>
                      <option hidden>Uniform Size</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                  </div>
                  <input type="text" placeholder="city" required />
                </div>
                <div class="column">
                  <input type="text" id="cvvcheck" placeholder="CVV" required />
                  <input type="number" placeholder="postal code" required />
                </div>
              </div>
              <button onclick="window.location.href='index.html'" disabled id="placeOrderButton">Place Order</button>
            </form>
          </section>
        <footer>
            <div class="footer">
                <p>&copy; 2023 Group 4 IT202, All rights reserved.</p>
            </div>
        </footer>

        <script>
          const creditCardInput = document.getElementById("creditCardNumber");
          const validationResult = document.getElementById("validationResult");
          const validateCVV = document.getElementById("cvvcheck");
          const validateEmail = document.getElementById("emailAddr");

          validateEmail.addEventListener("input", function () {
            const getEmail = validateEmail.value;
            const emailPattern = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;

            if (emailPattern.test(getEmail)) {
              validateEmail.style.color = "black";
              placeOrderButton.removeAttribute("disabled")
            }
            else {
              validateEmail.style.color = "red";
              placeOrderButton.setAttribute("disabled", "true");
            }


          });

          validateCVV.addEventListener("input", function () {
            const cvvNum = validateCVV.value;
            const cvvpattern = /^\d{3,4}$/;

            if (cvvpattern.test(cvvNum)) {
              validateCVV.style.color = "black";
              placeOrderButton.removeAttribute("disabled")
            }
            else {
              validateCVV.style.color = "red";
              placeOrderButton.setAttribute("disabled", "true");
            }

          });
    
          creditCardInput.addEventListener("input", function () {
            const cardNumber = creditCardInput.value;
            const pattern = /^[4-6]\d{15}$/;
    
            if (pattern.test(cardNumber)) {
              creditCardInput.style.color = "black"; 
              placeOrderButton.removeAttribute("disabled")
            } 
            else {
              creditCardInput.style.color = "red"; 
              placeOrderButton.setAttribute("disabled", "true");
            }
          });
        </script>
</body>
</html>
