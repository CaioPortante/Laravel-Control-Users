function sendNotification(line, text) {

  const alerts = {
    success: {
      icon: `<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>`,
      color: "green-500"
    }
  };

  let component = line;

  component.className = `relative items-end bg-${alerts.success.color} text-white text-sm font-bold px-4 py-3 rounded-md opacity-0 transform transition-all duration-500 mb-1`;
  component.innerHTML = `<td colspan="5">${alerts.success.icon}<p>${text}</p></td>`;

  setTimeout(() => {
    component.classList.remove("opacity-0");
    component.classList.add("opacity-1");
  }, 1);

  setTimeout(() => {
    component.classList.remove("opacity-1");
    component.classList.add("opacity-0");
    component.style.margin = 0;
    component.style.padding = 0;
  }, 5000);

  setTimeout(() => {
    component.remove();
  }, 5700);

}

function checkPhone(input) {

  const initialValue = input.value
  const initialValueInArray = initialValue.split("")
  const numbers = ["0","1","2","3","4","5","6","7","8","9"]
  let result = ""
  let treatedValue = []
  let limit = 15

  if(initialValueInArray.length < 15){
    limit = initialValueInArray.length
  }
  
  for (let index = 0; index < limit; index++) {

    const letter = initialValueInArray[index];

    if(numbers.includes(letter)){
      treatedValue.push(letter)
    }
    
  }

  for (let index = 0; index < treatedValue.length; index++) {
    const letter = treatedValue[index];
    
    if (index == 0) {
      result += "("
    }

    if (index == 2) {
      result += ") "
    }

    if(treatedValue.length == 11){
      if (index == 7) {
        result += "-"
      }
    } else{
      if (index == 6) {
        result += "-"
      }
    }

    result += letter

  }

  return result

}