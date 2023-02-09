import { usestate } from "react";
import { Button } from "./Button";
import { Display } from "./Display";

export function Calculator(props) {
  const buttons = [{ isOrange: false, text: "0", gridArea: "zero"},
  { isOrange: false, text: "1", gridArea: "one"},
  { isOrange: false, text: "2", gridArea: "two"},
  { isOrange: false, text: "3", gridArea: "three"},
  { isOrange: false, text: "4", gridArea: "four"},
  { isOrange: false, text: "5", gridArea: "five"},
  { isOrange: false, text: "6", gridArea: "six"},
  { isOrange: false, text: "7", gridArea: "seven"},
  { isOrange: false, text: "8", gridArea: "eight"},
  { isOrange: false, text: "9", gridArea: "nine"},
  { isOrange: true, text: "+", gridArea: "plus"},
  { isOrange: true, text: "-", gridArea: "minus"},
  { isOrange: true, text: "x", gridArea: "multiplication"},
  { isOrange: true, text: ":", gridArea: "division"},
  { isOrange: true, text: ":", gridArea: "ac"},
  { isOrange: true, text: ":", gridArea: ""},
  { isOrange: true, text: ":", gridArea: "division"},
];
  return (
    <>
      <div className="calculator-grid">
        <Display />
        {buttons.map((button) => {
          return <Button
          backgroundColor={button.theme === (isOrange) ? "orange" : "#e0e0e0" }

          />
        })}
      </div>
      <style jsx>{`
        .calculator-grid {
          color: white;
          display: grid;
          gap: 4px;
          grid-template-rows: repeat(6, 1fr);
          grid-template-columns: repeat(4, 1fr);
          grid-template-areas:
            "display display display display"
            "ac opposite modulo division"
            "seven eight nine multiplication"
            "four five six minus"
            "one two three plus"
            "zero zero point equals";
          height: 100vh;
        }

        .result {
          grid-area: result;
        }
        .ac {
          grid-area: ac;
        }
        .opposite {
          grid-area: opposite;
        }
        .modulo {
          grid-area: modulo;
        }
        .division {
          grid-area: division;
        }
        .seven {
          grid-area: seven;
        }
        .eight {
          grid-area: eight;
        }
        .nine {
          grid-area: nine;
        }
        .multiplication {
          grid-area: multiplication;
        }
        .four {
          grid-area: four;
        }
        .five {
          grid-area: five;
        }
        .six {
          grid-area: six;
        }
        .minus {
          grid-area: minus;
        }
        .one {
          grid-area: one;
        }
        .two {
          grid-area: two;
        }
        .three {
          grid-area: three;
        }
        .plus {
          grid-area: plus;
        }
        .zero {
          grid-area: zero;
        }
        .point {
          grid-area: point;
        }
        .equals {
          grid-area: equals;
        }

        .bgc-gray {
          background-color: gray;
        }
        .bgc-lgray {
          background-color: lightgray;
        }
        .bgc-orange {
          background-color: orange;
        }
      `}</style>
    </>
  );
}
