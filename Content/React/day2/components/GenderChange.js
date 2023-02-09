import { useState } from "react";

export function GenderChange(props) {
  const [gender, setGender] = useState(props.gender);

  return (
    <>
      <div
        className="circle"
        onClick={() => {
          if (gender === "male") {
            setGender("female");
          } else if (gender === "female") {
            setGender("male");
          } else {
            setGender("male");
          }
        }}
      ></div>
      <style jsx>{`
        .circle {
          border-radius: 50%;
          background-color: ${gender === "male"
            ? "blue"
            : gender === "female"
            ? "rebeccapurple"
            : "gray"};
          height: 100px;
          margin-top: 20px;
          width: 100px;
        }
      `}</style>
    </>
  );
}
