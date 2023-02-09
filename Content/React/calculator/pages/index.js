import { Calculator } from "../components/Calculator";

export default function Home() {
  return (
    <>
      <Calculator />
      <style jsx global>{`
        * {
          margin: 0px;
        }
      `}</style>
    </>
  );
}
