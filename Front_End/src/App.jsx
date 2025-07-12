import { useEffect, useState } from "react";
import { Routes, Route } from "react-router-dom";
import variables from "./assets/VariableGlobal";
import useFetchData from "./api/useFetchData";
import Accueil from "./pages/Accueil";
import Qui from "./pages/Qui";
import Prestations from "./pages/Prestations";
import Tarifs from "./pages/Tarifs";
import Contact from "./pages/Contact";
import Error from "./pages/Error";
import CGU from "./pages/CGU";
import CGV from "./pages/CGV";
import Mention from "./pages/Mention";
import Copyright from "./pages/Copyright";
import "mdb-react-ui-kit/dist/css/mdb.min.css";


export default function App() {
  const urlContenus = `${variables.UrlBackEnd}/api/contenu/Toutepage`;
  const urlTarifs = `${variables.UrlBackEnd}/api/tarif`;

  const {
    data: dataContenus,
    loading: loadingContenus,
    error: errorContenus,
  } = useFetchData(urlContenus);
  const {
    data: dataTarifs,
    loading: loadingTarifs,
    error: errorTarifs,
  } = useFetchData(urlTarifs);

  const [contenus, setContenus] = useState([]);
  const [tarifs, setTarifs] = useState([]);

  useEffect(() => {
    if (dataContenus?.length > 0) {
      setContenus(dataContenus);
    }
  }, [dataContenus]);

  useEffect(() => {
    if (dataTarifs?.length > 0) {
      setTarifs(dataTarifs);
    }
  }, [dataTarifs]);

  if (loadingContenus || loadingTarifs) return <p>Chargement…</p>;
  if (errorContenus || errorTarifs)
    return <p>Erreur : {errorContenus || errorTarifs}</p>;
  if (contenus.length === 0 || tarifs.length === 0)
    return <p>Données manquantes.</p>;
  return (
    <Routes>
      <Route path="/" element={<Accueil contenus={contenus} />} />
      <Route path="/Accueil" element={<Accueil contenus={contenus} />} />
      <Route path="/Qui_sommes_nous" element={<Qui contenus={contenus} />} />
      <Route
        path="/Prestations"
        element={<Prestations contenus={contenus} />}
      />
      <Route path="/Tarifs" element={<Tarifs tarifs={tarifs} />} />
      <Route path="/Contact" element={<Contact contenus={contenus} />} />
      <Route path="/CGU" element={<CGU />} />
      <Route path="/CGV" element={<CGV />} />
      <Route path="/Mention" element={<Mention />} />
      <Route path="/Copyright" element={<Copyright />} />
      <Route path="*" element={<Error />} />
    </Routes>
  );
}
