const creditCardInput = document.getElementById("creditCardNumber");
const validationResult = document.getElementById("validationResult");

creditCardInput.addEventListener("input", function () {
  const cardNumber = creditCardInput.value;
  const pattern = /^[4-6]\d{15}$/; // Regex pattern for Visa, MasterCard, and Discover cards

  if (pattern.test(cardNumber)) {
    validationResult.textContent = "Valid credit card number.";
  } else {
    validationResult.textContent = "Invalid credit card number.";
  }
});