import { useState, useEffect } from "react";
import Caroussel from "../components/Caroussel";
import PresentationAccueil from "../components/PresentationAccueil";
import Slider from "../components/Slider";
import "../styles/style_accueil.css";

export default function Accueil({ contenus }) {
  const [accueilContenu, setAccueilContenu] = useState([]);

  useEffect(() => {
    if (contenus && contenus.length > 0) {
      const filtre = contenus.filter(x => x.urlPage === "Accueil");
      setAccueilContenu(filtre);
    }
  }, [contenus]);

  return (
    <div>
      <Slider contenus={accueilContenu} />
      <PresentationAccueil contenus={accueilContenu} />
      <Caroussel contenus={accueilContenu} />
    </div>
  );
}