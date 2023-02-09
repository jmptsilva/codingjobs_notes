/* 
    Exercise 1 (Weather API)

    - create a form: an input field to get a city name from the user
    - create a button
    - after submitting the city, call the weather API on the URL (in classroom - http://api.weatherapi.com/v1/current.json?key=837feb5bc6e244ebb4f110244220407&q=);

    - Display the temperature in the page;
    - Display the condition text, use a ternary to make the text yellow it it's sunny or gray for all the rest;
    - display the icon they provide in an image tag;
*/
/* 
const input = document.querySelector("input");
const btn = document.querySelector("button");
let cityName
 */
/* 
btn.addEventListener("click", () => {
  cityName = input.value
  console.log(cityName);
  fetch(`http://api.weatherapi.com/v1/current.json?key=837feb5bc6e244ebb4f110244220407&q=${cityName}`).then((response) => {
    return response.json();
  })
  .then((weatherData) => {
    console.log(weatherData);
    const displayTemp = document.querySelector(".temp");
    const displayCond = document.querySelector(".condition");
    const displayIcon = document.querySelector("img");
    displayTemp.textContent = `${weatherData.current.temp_c}° C`;
    displayCond.textContent = `${weatherData.current.condition.text}`;
    weatherData.current.condition.text === "Sunny" ? displayCond.style.color = "yellow" : displayCond.style.color = "gray"; // or, with less code: displayCond.style.color = weatherData.current.condition.text === "Sunny" ? "yellow" : "gray";
    displayIcon.setAttribute("src", `${weatherData.current.condition.icon}`); // or displayIcon.src = `${weatherData.current.condition.icon}`
  })
}) */

/* 
    Exercise 2

    Create a form HTML element:
    - create a select HTML element with some city options (a list of cities);
    - add a submit button;
    
    - After submitting the form (listen to the submit event), call the weather API (do not forget to replace the {city} by the user selection)

    - display the temperature.
*/

/* const formEl = document.querySelector("form");
const selectEl = document.querySelector(".select");
const temperature = document.querySelector(".temperature");
const icon = document.querySelector(".icon");

formEl.addEventListener("submit", (event) => {
  event.preventDefault();
  console.log(selectEl.value);
  fetch(
    `http://api.weatherapi.com/v1/current.json?key=837feb5bc6e244ebb4f110244220407&q=${selectEl.value}`
  )
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log(data);
      temperature.textContent = `${data.current.temp_c}° C`;
      if (data.current.temp_c > 30) {
        temperature.style.color = "red";
      } else if (data.current.temp_c < 5) {
        temperature.style.color = "blue";
      } else {
        temperature.style.color = "green";
      }
      icon.setAttribute("src", `${data.current.condition.icon}`);
    });
}); */

/* 
    Exercise 3

    Weather API link: https://api.weatherapi.com/v1/forecast.json?key=837feb5bc6e244ebb4f110244220407&days=10&q=paris

    - when the page loads, do a fecth to call the API;
    - find the forecast for today and display the temperature;
    - add two buttons on the page: next and previous;
    - listen for clicks on both;
    - when we press next, we should see the next day; when we press previous, the previous day;

    Hint: you may want to create a variable to store the "page" number you are currently viewing;

    Bonus:
    - disable the buttons when you don't have another day after/before;
*/
const minTemEl = document.querySelector(".mintemperature");
const maxTemEl = document.querySelector(".maxtemperature");
const tempEl = document.querySelector(".avgtemp");
const prevBtn = document.querySelector(".prevBtn");
const nextBtn = document.querySelector(".nextBtn");

let currentForecast = 0;

/* fetch(
  "https://api.weatherapi.com/v1/forecast.json?key=837feb5bc6e244ebb4f110244220407&days=10&q=paris"
)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    console.log(data);
    minTemEl.textContent = `Min. Temperature: ${data.forecast.forecastday[index].day.mintemp_c}`;
    maxTemEl.textContent = `Max. Temperature: ${data.forecast.forecastday[index].day.maxtemp_c}`;
    prevBtn.addEventListener("click", () => {
      minTemEl.textContent = `Min. Temperature: ${data.forecast.forecastday[index -= 1].day.mintemp_c}`;
      maxTemEl.textContent = `Max. Temperature: ${data.forecast.forecastday[index -= 1].day.maxtemp_c}`;
    });
    nextBtn.addEventListener("click", () => {
      minTemEl.textContent = `Min. Temperature: ${data.forecast.forecastday[index += 1].day.mintemp_c}`;
      maxTemEl.textContent = `Max. Temperature: ${data.forecast.forecastday[index += 1].day.maxtemp_c}`;
      // if (index === index.length)
    });
  }); */ // first try!

// we can declare a function outside the fetch (best practice)! but we need set the parameter so it can access the forecast data later:

const refreshTemp = function (forecast) {
  tempEl.textContent = forecast.day.avgtemp_c + " C";
}; // now we just need to call it in the right place with refreshTemp(forecasts[currentForecast])!

fetch(
  "https://api.weatherapi.com/v1/forecast.json?key=837feb5bc6e244ebb4f110244220407&days=10&q=paris"
)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    const forecasts = data.forecast.forecastday;
    console.log(forecasts);
    tempEl.textContent = forecasts[currentForecast].day.avgtemp_c + " C"; // we can only add the buttons after the fetch is done; furthermore, to have access to the data, we need to insert the listen inside this scope;
    prevBtn.addEventListener("click", () => {
      if (currentForecast > 0) {
        currentForecast--;
        if (currentForecast === 0) {
          prevBtn.setAttribute("disabled", true);
        }
        if (currentForecast < forecasts.length - 1) {
          nextBtn.removeAttribute("disabled");
        }
        tempEl.textContent = forecasts[currentForecast].day.avgtemp_c + " C";
      }
    });
    nextBtn.addEventListener("click", () => {
      if (currentForecast < forecasts.length - 1) {
        currentForecast++;
        tempEl.textContent = forecasts[currentForecast].day.avgtemp_c + " C";
        if (currentForecast > 0) {
          prevBtn.removeAttribute("disabled");
        }
        if (currentForecast === forecasts.length - 1) {
          nextBtn.setAttribute("disabled", true);
        }
      }
    });
  });
