export function MovieCard(props) {
  return (
    <>
      <div className="card">
        <img src={props.posterUrl} className="poster"></img>
        <h2>{props.title}</h2>
        <p className="text">{props.duration}</p>
        <p className="text">{props.genre}</p>
      </div>
      <style jsx>{`
        * {
          margin: 0px;
        }
        .card {
          width: 175px;
          padding: 10px;
          font-family: arial;
          border-radius: 5px;
          color: white;
          display: flex;
          flex-direction: column;
          gap: 10px;
        }
        .poster {
          object-fit: cover;
        }
      `}</style>
    </>
  );
}
