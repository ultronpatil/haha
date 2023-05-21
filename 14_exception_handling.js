function divide(a, b) {
    try {
      return a / b;
    } catch (err) {
      console.log("Error dividing", a, b, err);
      return undefined;
    }
  }
  
  var result = divide(10, 0);
  
  console.log(result);
  