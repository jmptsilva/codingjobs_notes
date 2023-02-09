import { GenderChange } from "../components/GenderChange";

export default function Home() {
  return (
    <>
      <GenderChange gender="male" />
      <GenderChange gender="female" />
      <GenderChange gender="alien" />
    </>
  );
}
