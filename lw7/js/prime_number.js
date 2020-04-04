function isPrimeNumber(number) {
  if (Number.isInteger(number)) {
    let isPrime = true;
    if (number < 2) {
      if (number < 0) isPrime = false;
      else {
        console.log('Результат:', number, 'не является ни простым, ни составным');
        return;
      }
    } else {
      let sqrtNum = Math.sqrt(number);
      for (let index = 2; index < sqrtNum; index++) {
        if (number % index === 0) {
          isPrime = false;
          break
        }
      }
    }
    if (isPrime) {
      console.log('Результат:', number, 'is prime number');
    } else {
      console.log('Результат:', number, 'is not prime number');
    }
  } else if (Array.isArray(number)) {
    for (let index = 0; index < number.length; index++) {
      isPrimeNumber(number[index]);
    }
  } else {
    console.log('Результат: входные данные: ', number, 'имеют неверный тип');
  }
}