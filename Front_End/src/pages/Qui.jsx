import ExtractionImage from "../utils/ExtractionImage";
import ExtractionTexte from "../utils/ExtractionTexte";
import "../styles/style_qui_sommes_nous.css";
import PropTypes from "prop-types";

export default function Qui({contenus}) {
 
  //Traitement data API
const QuiNomProfil1 = ExtractionTexte(contenus, "Qui_ Nom _profil_1");
const QuiNomProfil2 = ExtractionTexte(contenus, "Qui_ Nom _profil_2");
const QuiTexteProfil1 = ExtractionTexte(contenus, "Qui_Contenu_profil_1");
const QuiTexteProfil2 = ExtractionTexte(contenus, "Qui_Contenu_profil_2");
const PhotoProfil1 = ExtractionImage(contenus, "Qui_Contenu_profil_1", 1);
const QuiPhotoProfil1 = PhotoProfil1.length > 0 ? PhotoProfil1[0].image : "";
const PhotoProfil2 = ExtractionImage(contenus, "Qui_Contenu_profil_2", 1);
const QuiPhotoProfil2 = PhotoProfil2.length > 0 ? PhotoProfil2[0].image : "";

    //Contenu composant 
  return (
            <div className="global_presentation paragraphe_desktop">
                <div className="container_dirigeant1">
                    <div className="container_texte my-auto">
                        <h1 className="titre2_desktop mauve_text fs-3 text-center mb-4">{QuiNomProfil1}</h1>
                        <p>{QuiTexteProfil1}</p>
                    </div>
                    <div className="container_photo">
                        <img src={QuiPhotoProfil1} alt={`Portrait co-dirigeant de Canopées ${QuiNomProfil1}`}/>
                    </div>
                </div>
                <div className="container_dirigeant2">
                    <div className="container_photo">
                        <img src={QuiPhotoProfil2}  alt={`Portrait co-dirigeant de Canopées ${QuiNomProfil2}`}/>
                    </div>
                    <div className="container_texte my-auto">
                        <h2 className="titre2_desktop mauve_text fs-3 text-center mb-4">{QuiNomProfil2}</h2>
                        <p>{QuiTexteProfil2}</p>
                    </div>
                </div>
            </div>);
            }
            Qui.propTypes = {
              contenus: PropTypes.array.isRequired,
            };
