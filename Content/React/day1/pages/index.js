// The code written in this page is purely React (function components!). Components are always written with capital letter; there can only be one default export, or it will generate an error;

/* export default function Home() {
  return (
    <div>
      <h1>Hello guys!</h1>
    </div>
  );
} */

/* // Styling in React */

// We can use style as an attribute of an element:

export function Articles() {
  return (
    <div
      style={{
        backgroundColor: "grey",
      }}
    >
      <h2>First entry</h2>
    </div>
  );
}

// We use a style tag and a js string written inside. Then we use regular CSS syntax;

export function Notes() {
  return (
    <>
      <div className="container">
        <h2>First entry</h2>
      </div>
      <style jsx>{`
        .container {
          background-color: gray;
        }
      `}</style>
    </>
  );
}

// <> </> denominates a fragment; with this approach, we don't need to give a reference or a parent node to wrap the elements;

// Exercise - movie card
import { MovieCard } from "../components/MovieCard";

export default function Home() {
  return (
    <>
      <div className="container">
        <MovieCard
          title="1917"
          posterUrl="https://i.ebayimg.com/images/g/B~EAAOSw6Wld9iAJ/s-l500.jpg"
          duration="190 min"
          genre="Action"
        />
        <MovieCard
          title="1917"
          posterUrl="https://i.ebayimg.com/images/g/B~EAAOSw6Wld9iAJ/s-l500.jpg"
          duration="190 min"
          genre="Action"
        />
        <style>{`
        .container {
          display: flex;
          gap: 25px;
        }
        `}</style>
      </div>
      <style jsx global>
        {`
          body {
            background-color: black;
          }
        `}
      </style>
    </>
  );
}

// if we want to configure an element that is common across all the pages we can use the "global" attribute after "jsx";

// we can call the function with {MovieCard()} or <MovieCard/>!
