function generatePassword() {
    const length = 10; // Change the desired password length
    const charsetOptions = {
      numbers: "0123456789",
      symbols: "!@#$%^&*()_+-=[]{}|;:'\"<>,.?/",
      characters: "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
    };

    let selectedCharset = "";
    const checkboxElements = document.getElementsByName("charsetOption");
    for (const checkbox of checkboxElements) {
      if (checkbox.checked) {
        selectedCharset += charsetOptions[checkbox.value];
      }
    }

    let password = "";
    for (let i = 0; i < length; i++) {
      const randomIndex = Math.floor(Math.random() * selectedCharset.length);
      password += selectedCharset[randomIndex];
    }
    document.getElementById("password").value = password;
  }

  function clearPassword() {
    document.getElementById("password").value = "";
  }