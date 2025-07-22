import { useEffect, useState } from "react";
import { Routes, Route } from "react-router-dom";
import variableGlobal from "./assets/VariableGlobal";
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




export default function App() {
  const urlaccueilContenus = `${variableGlobal.UrlBackEnd}/api/contenu/Accueil`;
  const urlContenus = `${variableGlobal.UrlBackEnd}/api/contenu/Toutepage`;
  const urlTarifs = `${variableGlobal.UrlBackEnd}/api/tarif`;
console.log({
  urlaccueil: urlaccueilContenus,
  urlall: urlContenus,
  urltarif: urlTarifs,
});
 
    const {
    data: dataAccueilContenus,
    loading: loadingAccueilContenus,
    error: errorAccueilContenus,
  } = useFetchData(urlaccueilContenus);
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

  const [accueilContenus, setAccueilContenus] = useState([]);
  const [contenus, setContenus] = useState([]);
  const [tarifs, setTarifs] = useState([]);

  console.log({
  contenuaccueil: accueilContenus,
  contenuall: contenus,
  contenutarif: tarifs,
});
    useEffect(() => {
    if (dataAccueilContenus?.length > 0) {
      setAccueilContenus(dataAccueilContenus);
    } 
  }, [dataAccueilContenus]);

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

  if (loadingAccueilContenus||loadingContenus || loadingTarifs) return <div className="loader">
  </div>;
  if (errorAccueilContenus||errorContenus || errorTarifs)
    return <p>Erreur : {errorAccueilContenus||errorContenus || errorTarifs}</p>;
  if (accueilContenus.length === 0 ||contenus.length === 0 || tarifs.length === 0)
    return <p>Données manquantes.</p>;
  console.log("API :", accueilContenus);
  return (
    <Routes>
      <Route path="/" element={<Accueil contenus={accueilContenus} />} />
      <Route path="/Accueil" element={<Accueil contenus={accueilContenus} />} />
      <Route path="/Qui_sommes_nous" element={<Qui contenus={contenus} />} />
      <Route path="/Prestations" element={<Prestations contenus={contenus} />} />
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
