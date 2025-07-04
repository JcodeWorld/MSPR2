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
import { useEffect, useState } from "react";

export default function App() {
  const url = `${variables.UrlBackEnd}/api/contenu/Toutepage`;
  const { data, loading, error } = useFetchData(url);
  const [contenus, setContenus] = useState([]);
  useEffect(() => {
    if (data && data.length > 0) {
      setContenus(data);
    }
  }, [data]);
  if (loading) return <p>Chargement…</p>;
  if (error) return <p>Erreur : {error}</p>;
  if (!data || data.length === 0) return <p>Aucun contenu trouvé.</p>;
  return (
    <div>
      <main>
        <Routes>
          <Route path="/" element={<Accueil contenus={contenus} />} />
          <Route path="/Accueil" element={<Accueil contenus={contenus} />} />
          <Route
            path="/Qui_sommes_nous"
            element={<Qui contenus={contenus} />}
          />
          <Route
            path="/Prestations"
            element={<Prestations contenus={contenus} />}
          />
          <Route path="/Tarifs" element={<Tarifs contenus={contenus} />} />
          <Route path="/Contact" element={<Contact contenus={contenus} />} />
          <Route path="/CGU" element={<CGU />} />
          <Route path="/CGV" element={<CGV />} />
          <Route path="/Mention" element={<Mention />} />
          <Route path="/Copyright" element={<Copyright />} />
          <Route path="*" element={<Error />} />
        </Routes>
      </main>
    </div>
  );
}
