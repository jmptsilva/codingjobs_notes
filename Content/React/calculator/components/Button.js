export function Button(props) {
  return (
    <>
      <div className="button">{props.text}</div>
      <style jsx>{`
        .button {
          align-items: center;
          background-color: ${props.backgroundColor};
          color: ${props.color};
          display: flex;
          font-size: 60px;
          grid-area: ${props.gridArea}
          justify-content: center;
        }
      `}</style>
    </>
  );
}
