import { Routes,Route } from "react-router-dom"
import Accueil from "./pages/Accueil"
import Qui from "./pages/Qui"
import Prestations from "./pages/Prestations"
import Tarifs from "./pages/Tarifs"
import Contact from "./pages/Contact"
import Error from "./pages/Error"
import { useEffect, useState } from "react"

export default function App() {
const [contenu,SetContenu]=useState([]);


 useEffect(() => {
     fetch('/api/contenu/texte accueil présentation')
       .then(res => res.json())
       .then(data => {
         SetContenu(data);
       });
   }, []);
 
  return (
    <div>
      <main>
      <Routes>
          <Route path="/" element={<Accueil />}>Accueil</Route>
          <Route path="/Accueil" element={<Accueil />}>'Accueil'</Route>
          <Route path="/Qui_sommes_nous" element={<Qui />}>Qui_sommes_nous</Route>
          <Route path="/Prestations" element={<Prestations />}>Prestations</Route>
          <Route path="/Tarifs" element={<Tarifs />}>Tarifs</Route>
          <Route path="/Contact" element={<Contact />}>Contact</Route>
          <Route path="*" element={<Error />} />          
      </Routes>
      </main>
    </div>
  )
}