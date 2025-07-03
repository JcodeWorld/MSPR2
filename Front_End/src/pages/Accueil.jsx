import useFetchData from "../api/useFetchData";
import Caroussel from "../components/Caroussel";
import PresentationAccueil from "../components/PresentationAccueil";
import Slider from "../components/Slider";
import variables from "../assets/VariableGlobal";
import "../styles/style_accueil.css";

export default function Accueil() {
const url = `${variables.UrlBackEnd}/api/contenu/page?url=Accueil`;
const { data: contenus, loading, error } = useFetchData(url);
  if (loading) return <p>Chargement…</p>;
  if (error) return <p>Erreur : {error}</p>;
  if (!contenus || contenus.length === 0) return <p>Aucun contenu trouvé.</p>;
  return (
    <div>
      <Slider contenus={contenus} />
      <PresentationAccueil contenus={contenus} />
      <Caroussel contenus={contenus} />
    </div>
  )
}