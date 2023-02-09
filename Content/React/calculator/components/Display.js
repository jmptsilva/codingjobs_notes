export function Display(props) {
  return (
    <>
      <div className="screen">0</div>
      <style jsx>{`
        .screen {
          background-color: gray;
          color: white;
          display: flex;
          justify-content: flex-end;
          align-items: center;
          grid-area: display;
          padding: 5px;
        }
      `}</style>
    </>
  );
}
